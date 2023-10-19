<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Location;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $service_id = $request->input('service_id');
        $radius = 50; // Radius in kilometers
    
        //echo "<pre>"; print_r($request->all()); echo "</pre>";

        // Retrieve locations based on the service_id and distance
        $locations = Location::select('id', 'latitude', 'longitude', 'locality', 'service_id')
            ->selectRaw("(6371 * acos(cos(radians($latitude)) 
                * cos(radians(latitude)) * cos(radians(longitude) 
                - radians($longitude)) + sin(radians($latitude)) 
                * sin(radians(latitude)))) AS distance")
            ->where('service_id', $service_id)
            ->having('distance', '<', $radius)
            ->orderBy('distance', 'asc')
            ->get();
    
        // Get an array of location IDs from the retrieved locations
        $locationIds = $locations->pluck('id')->toArray();
    
        // Retrieve doctors based on location_id
        $doctors = Doctor::select('doctors.*')
            ->whereIn('location_id', $locationIds)
            ->get();
    
        // You can now work with the $doctors collection to display the data in your view
        return view('apnadental.doctors', ['doctors' => $doctors, 'service_name' => $request->input('service_name')]);
    }

    public function doctorList(Request $request)
    {
        // Get the results_type parameter from the URL
        $resultsType = $request->query('results_type');

        // Set the number of doctors to display per page
        $perPage = 10; // You can adjust this as needed

        if ($resultsType) {
            // Use the `whereHas` method to filter doctors by service_name
            $doctorsQuery = Doctor::whereHas('service', function ($query) use ($resultsType) {
                $query->where('service_name', $resultsType);
            });
        } else {
            // If no results_type is provided, fetch all doctors
            $doctorsQuery = Doctor::query();
        }

        // Paginate the results
        $doctors = $doctorsQuery->paginate($perPage);

        // Pass the doctors data to the view
        return view('apnadental.doctor', compact('doctors', 'resultsType'));
    }

    public function searchDoctors(Request $request)
    {
        $locationId = $request->input('location_id');
        $doctors = Doctor::where('location_id', $locationId)->get();
        return response()->json($doctors);
    }

    public function showDoctorDetails($id)
    {
        $doctor = Doctor::find($id);
        return view('apnadental.doctor_details', ['doctor' => $doctor]);
    }
}