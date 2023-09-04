<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'servicename' => 'required|max:255',
            'description' => 'required|string',
        ], [
            'servicename.required' => 'Service name is required.',
            'servicename.max' => 'Service name should not exceed 255 characters.',
            //'description.required' => 'Description is required.',
        ]);

        $service = Service::create([
            'service_name' => $validatedData['servicename'],
            'description' => $validatedData['description'],
        ]);

        // You can also associate locations and doctors here if needed

        return redirect()->back()->with('success', 'Service created successfully.');
    }
}
