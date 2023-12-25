<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Doctor;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Location;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index()
    {
        $agent = new Agent();

        //$services = Service::all();
        $sliders = Slider::all();
        $brands = Brand::all();
        $doctors = Doctor::where('type', 'Doctor')->take(6)->get();
        $clinics = Doctor::where('type', 'Clinics')->take(6)->get();
        $blogs = Blog::with('category')->get();
        $services = Service::with('doctors')->get();

        $random_doctors = Doctor::where('type', 'Doctor')->inRandomOrder()->take(6)->get();
        $random_clinics = Doctor::where('type', 'Clinics')->inRandomOrder()->take(6)->get();;

        $servicesData = Service::all();

        foreach ($servicesData as $service) {
            $count = Doctor::where('type', 'Doctor')
                ->where('service_id', $service->id)
                ->count();
        
            $service['total_count'] = $count;
        }

        if ($agent->isMobile()) {
            return view('apnadental_mobile.index', compact('random_doctors','random_clinics', 'servicesData'));
        } else {
            return view('apnadental.index', compact('brands', 'services', 'doctors', 'clinics', 'sliders', 'blogs'));
        }
    }

    public function autocomplete(Request $request)
    {
        $query = $request->get('query');

        $results = Doctor::select("id", "service_id", "company_name", "secondary_category", "type", "city")
            ->where('company_name', 'LIKE', '%' . $query . '%')
            ->get();

        $suggestions = $results->map(function ($result) {
            return [
                'doctor_id' => $result->id,
                'service_id' => $result->service_id,
                'company_name' => $result->company_name,
                'secondary_category' => $result->secondary_category,
                'type' => $result->type,
                'city' => $result->city,
            ];
        });

        return response()->json($suggestions);
    }   

    public function searchDoctors(Request $request)
    {
        $locationId = $request->input('location_id');
        $doctors = Doctor::where('location_id', $locationId)->get();

        return response()->json(['doctors' => $doctors]);
    }

    public function findDoctor(Request $request)
    {
        $agent = new Agent();

        $type = $request->input('type');
        $serviceId = $request->input('service_id');

        $doctor = Doctor::find($serviceId);

        if ($agent->isMobile()) {
            return view('apnadental_mobile.doctor_details', ['doctor' => $doctor]);
        } else {
            return view('apnadental.doctor_details', ['doctor' => $doctor]);
        }
    }

    public function searchLocation(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $radius = 50; // Radius in kilometers

        // Calculate haversine distance and filter locations within the radius
        $locations = Location::select('id', 'latitude', 'longitude', 'locality', 'service_id')
            ->selectRaw("(6371 * acos(cos(radians($latitude)) 
                * cos(radians(latitude)) * cos(radians(longitude) 
                - radians($longitude)) + sin(radians($latitude)) 
                * sin(radians(latitude)))) AS distance")
            ->having('distance', '<', $radius)
            ->orderBy('distance', 'asc')
            ->get();

        // Collect unique service IDs from the filtered locations
        $serviceIds = $locations->pluck('service_id')->unique();

        // Retrieve services associated with the filtered locations
        $services = Service::whereIn('id', $serviceIds)->get();

        return response()->json(['services' => $services]);
    }
}
