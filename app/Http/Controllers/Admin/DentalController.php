<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DentalService;

class DentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dentalServices = DentalService::paginate(10);
        return view('admin.all_dental_services', compact('dentalServices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_dental_service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $dentalService = new DentalService();
        $dentalService->service_name = $request->input('service_name');
        $dentalService->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/dental-service'), $imageName);
            $dentalService->image = 'uploads/dental-service/' . $imageName;
        }

        $dentalService->save();

        return redirect()->back()->with('success', 'Dental Service added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.add_dental');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dentalService = DentalService::find($id);

        if (!$dentalService) {
            return redirect()->back()->with('error', 'This Dental Service not found.');
        }

        return view('admin.edit_dental_service', compact('dentalService'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dentalService = DentalService::find($id);

        if (!$dentalService) {
            return redirect()->back()->with('error', 'This Dental Service not found.');
        }

        $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'required'
        ]);

        $dentalService->service_name = $request->input('service_name');
        $dentalService->description = $request->input('description');

        if ($request->hasFile('image')) {
            if (!empty($dentalService->image)) {
                $imagePath = public_path($dentalService->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete the old image file if it exists
                }
            }

            // Upload and update the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/dental-service'), $imageName);
            $dentalService->image = 'uploads/dental-service/' . $imageName;
        }

        $dentalService->save();

        return redirect()->route('dentals.index')->with('success', 'Dental Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dentalService = DentalService::find($id);

        if (!$dentalService) {
            return redirect()->back()->with('error', 'Dental Service not found.');
        }

        // Delete the brand image file if it exists
        if (!empty($dentalService->image)) {
            $imagePath = public_path($dentalService->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $dentalService->delete();

        return redirect()->back()->with('success', 'Dental Service and it`s image deleted successfully.');
    }

    /**
     * Display a listing of the resource.
     */
    public function indexPage()
    {
        $dentalServices = DentalService::paginate(10);
        return view('admin.all_dental_services', compact('dentalServices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createPage()
    {
        return view('admin.add_dental_service_page');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePage(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $dentalService = new DentalService();
        $dentalService->service_name = $request->input('service_name');
        $dentalService->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/dental-service'), $imageName);
            $dentalService->image = 'uploads/dental-service/' . $imageName;
        }

        $dentalService->save();

        return redirect()->back()->with('success', 'Dental Service added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function showPage(string $id)
    {
        return view('admin.add_dental');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editPage(string $id)
    {
        $dentalService = DentalService::find($id);

        if (!$dentalService) {
            return redirect()->back()->with('error', 'This Dental Service not found.');
        }

        return view('admin.edit_dental_service', compact('dentalService'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePage(Request $request, string $id)
    {
        $dentalService = DentalService::find($id);

        if (!$dentalService) {
            return redirect()->back()->with('error', 'This Dental Service not found.');
        }

        $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'required'
        ]);

        $dentalService->service_name = $request->input('service_name');
        $dentalService->description = $request->input('description');

        if ($request->hasFile('image')) {
            if (!empty($dentalService->image)) {
                $imagePath = public_path($dentalService->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete the old image file if it exists
                }
            }

            // Upload and update the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/dental-service'), $imageName);
            $dentalService->image = 'uploads/dental-service/' . $imageName;
        }

        $dentalService->save();

        return redirect()->route('dentals.index')->with('success', 'Dental Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyPage(string $id)
    {
        $dentalService = DentalService::find($id);

        if (!$dentalService) {
            return redirect()->back()->with('error', 'Dental Service not found.');
        }

        // Delete the brand image file if it exists
        if (!empty($dentalService->image)) {
            $imagePath = public_path($dentalService->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $dentalService->delete();

        return redirect()->back()->with('success', 'Dental Service and its image deleted successfully.');
    }
}
