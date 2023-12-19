<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use App\Models\DentalPage;
use Illuminate\Http\Request;
use App\Models\DentalService;
use App\Http\Controllers\Controller;

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
        $dentalPages = DentalPage::paginate(10);

        return view('admin.all_dental_service_pages', compact('dentalPages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createPage()
    {
        $doctors = Doctor::where('type', 'Doctor')->get();
        $clinics = Doctor::where('type', 'Clinics')->get();
        $dentalServices = DentalService::all();

        return view('admin.add_dental_service_page', compact('doctors','clinics','dentalServices'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePage(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'dental_service_id' => 'required',
            'heading_one' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $dentalPage = new DentalPage();
        $dentalPage->page_title = $request->input('page_title');
        $dentalPage->dental_service_id = $request->input('dental_service_id');
        $dentalPage->heading_one = $request->input('heading_one');
        $dentalPage->description = $request->input('description');
        $dentalPage->heading_two = $request->input('heading_two');
        $dentalPage->description_two = $request->input('description_two');
        $dentalPage->heading_three = $request->input('heading_three');
        $dentalPage->description_three = $request->input('description_three');
        $dentalPage->heading_four = $request->input('heading_four');
        $dentalPage->description_four = $request->input('description_four');
        $dentalPage->heading_five = $request->input('heading_five');
        $dentalPage->description_five = $request->input('description_five');
        $dentalPage->doctors = json_encode($request->input('doctors'));
        $dentalPage->clinics = json_encode($request->input('clinics'));
        $dentalPage->faq_heading_one = $request->input('faq_heading_one');
        $dentalPage->faq_des_one = $request->input('faq_des_one');
        $dentalPage->faq_heading_two = $request->input('faq_heading_two');
        $dentalPage->faq_des_two = $request->input('faq_des_two');
        $dentalPage->faq_heading_three = $request->input('faq_heading_three');
        $dentalPage->faq_des_three = $request->input('faq_des_three');
        $dentalPage->faq_heading_four = $request->input('faq_heading_four');
        $dentalPage->faq_des_four = $request->input('faq_des_four');
        $dentalPage->faq_heading_five = $request->input('faq_heading_five');
        $dentalPage->faq_des_five = $request->input('faq_des_five');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/dental-pages'), $imageName);
            $dentalPage->image = 'uploads/dental-pages/' . $imageName;
        }

        $dentalPage->save();

        return redirect()->back()->with('success', 'Dental Service Page Published Successfully!');
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
        $dentalPage = DentalPage::find($id);
        $doctors = Doctor::where('type', 'Doctor')->get();
        $clinics = Doctor::where('type', 'Clinics')->get();
        $dentalServices = DentalService::all();

        if (!$dentalPage) {
            return redirect()->back()->with('error', 'This Dental Service Page not found.');
        }

        return view('admin.edit_dental_service_page', compact('dentalPage', 'doctors', 'clinics', 'dentalServices'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePage(Request $request, string $id)
    {
        $dentalPage = DentalPage::find($id);

        if (!$dentalPage) {
            return redirect()->back()->with('error', 'This Dental Service Page not found.');
        }

        $request->validate([
            'page_title' => 'required|string|max:255',
            'dental_service_id' => 'required',
            'heading_one' => 'required|string|max:255',
            'description' => 'required'
        ]);

        $dentalPage->page_title = $request->input('page_title');
        $dentalPage->dental_service_id = $request->input('dental_service_id');
        $dentalPage->heading_one = $request->input('heading_one');
        $dentalPage->description = $request->input('description');
        $dentalPage->heading_two = $request->input('heading_two');
        $dentalPage->description_two = $request->input('description_two');
        $dentalPage->heading_three = $request->input('heading_three');
        $dentalPage->description_three = $request->input('description_three');
        $dentalPage->heading_four = $request->input('heading_four');
        $dentalPage->description_four = $request->input('description_four');
        $dentalPage->heading_five = $request->input('heading_five');
        $dentalPage->description_five = $request->input('description_five');
        $dentalPage->doctors = json_encode($request->input('doctors'));
        $dentalPage->clinics = json_encode($request->input('clinics'));
        $dentalPage->faq_heading_one = $request->input('faq_heading_one');
        $dentalPage->faq_des_one = $request->input('faq_des_one');
        $dentalPage->faq_heading_two = $request->input('faq_heading_two');
        $dentalPage->faq_des_two = $request->input('faq_des_two');
        $dentalPage->faq_heading_three = $request->input('faq_heading_three');
        $dentalPage->faq_des_three = $request->input('faq_des_three');
        $dentalPage->faq_heading_four = $request->input('faq_heading_four');
        $dentalPage->faq_des_four = $request->input('faq_des_four');
        $dentalPage->faq_heading_five = $request->input('faq_heading_five');
        $dentalPage->faq_des_five = $request->input('faq_des_five');

        if ($request->hasFile('image')) {
            if (!empty($dentalPage->image)) {
                $imagePath = public_path($dentalPage->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete the old image file if it exists
                }
            }

            // Upload and update the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/dental-pages'), $imageName);
            $dentalPage->image = 'uploads/dental-pages/' . $imageName;
        }

        $dentalPage->save();

        return redirect()->route('dentalsPage.index')->with('success', 'Dental Service Page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyPage(string $id)
    {
        $dentalPage = DentalPage::find($id);

        if (!$dentalPage) {
            return redirect()->back()->with('error', 'This Dental Service Page not found.');
        }

        // Delete the brand image file if it exists
        if (!empty($dentalPage->image)) {
            $imagePath = public_path($dentalPage->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $dentalPage->delete();

        return redirect()->back()->with('success', 'Dental Service Page and its image deleted successfully.');
    }

    public function showDoctorPage($id)
    {
        $doctorsData = Doctor::where('type', 'Doctor')->get();
        $clinicsData = Doctor::where('type', 'Clinics')->get();
        $serviceData = DentalPage::find($id);
    
        $selectedDoctorsIds = json_decode($serviceData->doctors, true);
        $selectedClinicsIds = json_decode($serviceData->clinics, true);
    
        // Filter doctors based on selected doctors' IDs
        $doctors = $doctorsData->whereIn('id', $selectedDoctorsIds);
        $clinics = $clinicsData->whereIn('id', $selectedClinicsIds);
    
        return view('apnadental.service', compact('serviceData', 'doctors', 'clinics'));
    }
}
