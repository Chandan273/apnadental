<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(10);
        return view('admin.all_services', compact('services'));
    }

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

    public function edit($id)
    {
        $service = Service::find($id);

        if (!$service) {
            return redirect()->back()->with('error', 'Service is not found.');
        }

        return view('admin.edit_service', compact('service'));
    }

    public function destroy($id)
    {
        $service = Service::find($id);

        if (!$service) {
            return redirect()->back()->with('error', 'Service not found.');
        }

        $service->delete();

        return redirect()->back()->with('success', 'Service deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);

        if (!$service) {
            return redirect()->back()->with('error', 'Service not found.');
        }

        $validatedData = $request->validate([
            'servicename' => 'required|max:255',
            'description' => 'required|string',
        ], [
            'servicename.required' => 'Service name is required.',
            'servicename.max' => 'Service name should not exceed 255 characters.',
            //'description.required' => 'Description is required.',
        ]);

        $service->service_name = $validatedData['servicename'];
        $service->description = $validatedData['description'];
        $service->save();

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }
}
