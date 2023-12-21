<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(10);
        return view('admin.all_services', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $service = new Service();
        $service->service_name = $request->input('service_name');
        $service->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/doctor-service'), $imageName);
            $service->service_image = 'uploads/doctor-service/' . $imageName;
        }

        $service->save();

        return redirect()->back()->with('success', 'Service added successfully!');
    }

    public function edit($id)
    {
        $service = Service::find($id);

        if (!$service) {
            return redirect()->back()->with('error', 'Service is not found.');
        }

        return view('admin.edit_service', compact('service'));
    }

    public function update(Request $request, string $id)
    {
        $service = Service::find($id);

        if (!$service) {
            return redirect()->back()->with('error', 'This Service is not found.');
        }

        $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'required'
        ]);

        $service->service_name = $request->input('service_name');
        $service->description = $request->input('description');

        if ($request->hasFile('image')) {
            if (!empty($service->service_image)) {
                $imagePath = public_path($service->service_image);
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete the old image file if it exists
                }
            }

            // Upload and update the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/doctor-service'), $imageName);
            $service->service_image = 'uploads/doctor-service/' . $imageName;
        }

        $service->save();

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $service = Service::find($id);

        if (!$service) {
            return redirect()->back()->with('error', 'Service not found.');
        }

        // Delete the brand image file if it exists
        if (!empty($service->service_image)) {
            $imagePath = public_path($service->service_image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $service->delete();

        return redirect()->back()->with('success', 'Service and it`s image deleted successfully.');
    }
}