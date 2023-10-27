<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function blogCategory(){
        return view('admin.add_blogcategory');
    }

    public function viewCategories()
    {
        $categories = BlogCategory::paginate(10);
        return view('admin.all_blogcategory', compact('categories'));
    }

    public function storeCategory(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ], [
            'servicename.required' => 'Service name is required.',
        ]);

        $BlogCategory = BlogCategory::create([
            'name' => $validatedData['name'],
        ]);

        return redirect()->back()->with('success', 'Blog category created successfully.');
    }

    public function editCategory(BlogCategory $category)
    {
        return view('admin.edit_blogcategory', compact('category'));
    }

    // Update a category
    public function updateCategory(Request $request, BlogCategory $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ], [
            'name.required' => 'Category name is required.',
        ]);

        $category->update([
            'name' => $validatedData['name'],
        ]);

        return redirect()->back()->with('success', 'Blog category updated successfully.');
    }

    // Delete a category
    public function deleteCategory(BlogCategory $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'Blog category deleted successfully.');
    }

    public function Blog(){
        $categories = BlogCategory::all();
        return view('admin.add_blog', compact('categories'));
    }

    public function allBlogs()
    {
        $blogs = Blog::with('category')->paginate(10);
        return view('admin.all_blogs', compact('blogs'));
    }
    
    public function storeBlog(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'blog_category_id' => 'required',
            'content' => 'required',
            'blog_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = new Blog();
        $blog->blog_category_id = $request->input('blog_category_id');
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');

        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/blogs'), $imageName);
            $blog->blog_image = 'uploads/blogs/' . $imageName;
        }

        $blog->save();

        if($blog){
            return redirect()->back()->with('success', 'Blog added successfully!');
        }
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.');
        }

        // Delete the blog image file if it exists
        if (!empty($blog->blog_image)) {
            $imagePath = public_path($blog->blog_image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $blog->delete();

        return redirect()->back()->with('success', 'Blog and its image deleted successfully.');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        $categories = BlogCategory::all();

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.');
        }

        return view('admin.edit_blog', compact('blog','categories'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'blog_category_id' => 'required',
            'content' => 'required'
        ]);

        $blog->title = $request->input('title');
        $blog->blog_category_id = $request->input('blog_category_id');
        $blog->content = $request->input('content');

        // Handle image update if necessary
        if ($request->hasFile('blog_image')) {
            // Delete the old image file if it exists
            if (!empty($blog->blog_image)) {
                $imagePath = public_path($blog->blog_image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Upload and update the new image
            $image = $request->file('blog_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/blogs'), $imageName);
            $blog->blog_image = 'uploads/blogs/' . $imageName;
        }

        $blog->save();

        return redirect()->route('blogs.all')->with('success', 'Blog updated successfully.');
    }

    public function blogPage()
    {
        $blogs = Blog::with('category')->paginate(5);
        return view('apnadental.blog', compact('blogs'));
    }

    public function blogDetail($id)
    {
        $blog = Blog::find($id);
        $categories = BlogCategory::all();

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.');
        }

        return view('apnadental.blog_details', compact('blog','categories'));
    }
}
