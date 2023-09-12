<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::paginate(10);
        return view('admin.all_sliders', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_slider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'slider_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $slider = new Slider();
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');

        if ($request->hasFile('slider_image')) {
            $image = $request->file('slider_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/sliders'), $imageName);
            $slider->slider_image = 'uploads/sliders/' . $imageName;
        }

        $slider->save();

        if($slider){
            return redirect()->back()->with('success', 'Slider added successfully!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->back()->with('error', 'Slider not found.');
        }

        return view('admin.edit_slider', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->back()->with('error', 'Slider not found.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required'
        ]);

        $slider->title = $request->input('title');
        $slider->description = $request->input('description');

        // Handle image update if necessary
        if ($request->hasFile('slider_image')) {
            // Delete the old image file if it exists
            if (!empty($slider->slider_image)) {
                $imagePath = public_path($slider->slider_image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Upload and update the new image
            $image = $request->file('slider_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/sliders'), $imageName);
            $slider->slider_image = 'uploads/sliders/' . $imageName;
        }

        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->back()->with('error', 'Slider not found.');
        }

        // Delete the slider image file if it exists
        if (!empty($slider->slider_image)) {
            $imagePath = public_path($slider->slider_image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $slider->delete();

        return redirect()->back()->with('success', 'Slider and its image deleted successfully.');
    }
}
