<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Service;
use App\Models\Location;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        // $latitude = $request->input('latitude');
        // $longitude = $request->input('longitude');
        // $service_id = $request->input('service_id');
        // $radius = 50; // Radius in kilometer

        // // Retrieve locations based on the service_id and distance
        // $locations = Location::select('id', 'latitude', 'longitude', 'locality', 'service_id')
        //     ->selectRaw("(6371 * acos(cos(radians($latitude)) 
        //         * cos(radians(latitude)) * cos(radians(longitude) 
        //         - radians($longitude)) + sin(radians($latitude)) 
        //         * sin(radians(latitude)))) AS distance")
        //     ->where('service_id', $service_id)
        //     ->having('distance', '<', $radius)
        //     ->orderBy('distance', 'asc')
        //     ->get();
    
        // // Get an array of location IDs from the retrieved locations
        // $locationIds = $locations->pluck('id')->toArray();
    
        // // Retrieve doctors based on location_id
        // $doctors = Doctor::select('doctors.*')
        //     ->whereIn('location_id', $locationIds)
        //     ->get();
    
        // // You can now work with the $doctors collection to display the data in your view
        // return view('apnadental.doctors', ['doctors' => $doctors, 'service_name' => $request->input('service_name')]);

        $agent = new Agent();

        $services = Service::all();

        foreach ($services as $service) {
            $count = Doctor::where('type', 'Doctor')
                ->where('service_id', $service->id)
                ->count();
        
            $service['total_count'] = $count;
        }

        if ($agent->isMobile()) {
            return view('apnadental_mobile.doctors', compact('services'));
        } else {
            return view('apnadental.doctor');
        }
    }

    public function doctorList(Request $request)
    {
        $agent = new Agent();
        $resultsType = $request->query('results_type');
        $secondaryCategory = $request->query('category');

        $perPage = 10;

        if ($resultsType && $secondaryCategory == "" && $secondaryCategory == null) {
            if ($agent->isMobile()) {
                $doctorsQuery = Doctor::whereHas('service', function ($query) use ($resultsType) {
                    $query->where('service_name', $resultsType);
                });
            }else{
                $doctorsQuery = Doctor::whereHas('service', function ($query) use ($resultsType) {
                    $query->where('service_name', $resultsType)->where('type', 'Doctor');
                });
            }
        }else if($resultsType && $secondaryCategory) {
            $doctorsQuery = Doctor::whereHas('service', function ($query) use ($resultsType) {
                $query->where('service_name', $resultsType)->where('secondary_category', isset($secondaryCategory));
            });
        } else {
            // If no results_type is provided, fetch all doctors
            $doctorsQuery = Doctor::query();
        }

        // Paginate the results
        $doctors = $doctorsQuery->paginate($perPage);

        if ($agent->isMobile()) {
            return view('apnadental_mobile.all-doctors', compact('doctors', 'resultsType'));
        } else {
            return view('apnadental.doctor', compact('doctors', 'resultsType'));
        }
    }

    public function doctorsNav(Request $request)
    {
        $resultsType = $request->query('results_type');

        if ($resultsType) {
            $doctors = Doctor::select('id','company_name')
                ->whereHas('service', function ($query) use ($resultsType) {
                    $query->where('service_name', $resultsType);
                })
                ->get();

            return $doctors;
        }
    }

    public function doctorsTreatments(Request $request)
    {
        $type = $request->query('type');
        $secondary_category = $request->query('secondary_category');

        if ($type && $secondary_category) {
            $doctors = Doctor::select('id','company_name','secondary_category','image','rating','rating_count','phone','education','experience','location','locality','city','state','zip_code','map_url','fee','work_timings')->where('type', $type)
                ->where('secondary_category', $secondary_category)
                ->get();

            return $doctors;
        }
    }

    public function clinicList(Request $request)
    {
        $agent = new Agent();
        // Get the results_type parameter from the URL
        $resultsType = $request->query('results_type');

        // Set the number of doctors to display per page
        $perPage = 10; // You can adjust this as needed

        if ($resultsType) {
            // Use the `whereHas` method to filter doctors by service_name
            if ($agent->isMobile()) {
                $doctorsQuery = Doctor::whereHas('service', function ($query) use ($resultsType) {
                    $query->where('service_name', $resultsType);
                });
            }else{
                $doctorsQuery = Doctor::whereHas('service', function ($query) use ($resultsType) {
                    $query->where('service_name', $resultsType)->where('type', 'clinics');
                });
            }
        } else {
            // If no results_type is provided, fetch all clinics
            $doctorsQuery = Doctor::query()->where('type', 'clinics');
        }

        // Paginate the results
        $clinics = $doctorsQuery->paginate($perPage);

        if ($agent->isMobile()) {
            return view('apnadental_mobile.all-clinics', compact('clinics', 'resultsType'));
        } else {
            return view('apnadental.doctor', compact('clinics', 'resultsType'));
        }
    }

    public function clinics(Request $request)
    {
        $agent = new Agent();

        $services = Service::all();

        foreach ($services as $service) {
            $count = Doctor::where('type', 'Clinics')
                ->where('service_id', $service->id)
                ->count();
        
            $service['total_count'] = $count;
        }

        if ($agent->isMobile()) {
            return view('apnadental_mobile.clinics', compact('services'));
        }
    }

    public function searchDoctors(Request $request)
    {
        $locationId = $request->input('location_id');
        $doctors = Doctor::where('location_id', $locationId)->get();
        return response()->json($doctors);
    }

    public function showDoctorDetails($id)
    {
        $agent = new Agent();

        $doctor = Doctor::find($id);

        if ($agent->isMobile()) {
            return view('apnadental_mobile.doctor_details', ['doctor' => $doctor]);
        }else{
            return view('apnadental.doctor_details', ['doctor' => $doctor]);
        }
    }
}