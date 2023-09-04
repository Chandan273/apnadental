<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.add_brand');
    }

    public function allBrands()
    {
        $brands = Brand::all();
        return view('admin.all_brands', compact('brands'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required|string|max:255',
            'brand_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        $brand = new Brand();
        $brand->brand_name = $request->input('brand_name');

        if ($request->hasFile('brand_image')) {
            $image = $request->file('brand_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/brands'), $imageName);
            $brand->brand_image = 'uploads/brands/' . $imageName;
        }

        $brand->save();

        return redirect()->back()->with('success', 'Brand added successfully!');
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return redirect()->back()->with('error', 'Brand not found.');
        }

        // Delete the brand image file if it exists
        if (!empty($brand->brand_image)) {
            $imagePath = public_path($brand->brand_image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $brand->delete();

        return redirect()->back()->with('success', 'Brand and its image deleted successfully.');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return redirect()->back()->with('error', 'Brand not found.');
        }

        return view('admin.edit_brand', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return redirect()->back()->with('error', 'Brand not found.');
        }

        $request->validate([
            'brand_name' => 'required|string|max:255',
            // Add validation rules for other fields here
        ]);

        $brand->brand_name = $request->input('brand_name');
        // Update other fields as needed

        // Handle image update if necessary
        if ($request->hasFile('brand_image')) {
            // Delete the old image file if it exists
            if (!empty($brand->brand_image)) {
                $imagePath = public_path($brand->brand_image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Upload and update the new image
            $image = $request->file('brand_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/brands'), $imageName);
            $brand->brand_image = 'uploads/brands/' . $imageName;
        }

        $brand->save();

        return redirect()->route('brands.all')->with('success', 'Brand updated successfully.');
    }

}
