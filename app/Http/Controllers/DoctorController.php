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