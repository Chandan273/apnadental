<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

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
        $agent = new Agent();

        $blogs = Blog::with('category')->paginate(5);

        if ($agent->isMobile()) {
            return view('apnadental_mobile.blog', compact('blogs'));
        }else{
            return view('apnadental.blog', compact('blogs'));
        }        
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

    public function wordPressAPI()
    {
            $response = Http::get("https://sabkadentist.com/wp-json/wp/v2/posts?per_page=20&page=16");

            if ($response->successful()) {
                $posts = $response->json();

                foreach ($posts as $post) {
                    $category_ids = $post['categories'];

                    foreach ($category_ids as $category_id) {
                        $category_response = Http::get("https://sabkadentist.com/wp-json/wp/v2/categories/{$category_id}");

                        if ($category_response->successful()) {
                            $category = $category_response->json();
                            $category_name = $category['name'];

                            // Check if the category already exists in the database
                            $existingCategory = BlogCategory::where('category_id', $category_id)->first();

                            if (!$existingCategory) {
                                // If the category doesn't exist, save it to the database
                                $newCategory = new BlogCategory();
                                $newCategory->name = $category_name;
                                $newCategory->category_id = $category_id;
                                $newCategory->save();
                                
                                echo "Category saved: Category ID: {$category_id}, Category Name: {$category_name}<br>";
                            } else {
                                echo "Category already exists: Category ID: {$category_id}, Category Name: {$category_name}<br>";
                            }
                        } else {
                            // Handle error cases for fetching category details
                            echo "Failed to fetch category details for Category ID: {$category_id}<br>";
                        }
                    }
                }
            } else {
                // Handle error cases for fetching posts
                return 'Failed to fetch posts from the WordPress API.';
            }

        // Optionally, you can return a success message or perform additional actions
        return 'Categories fetched and saved successfully.';
    }

    public function wordPressBlogAPI()
{
    $response = Http::get("https://sabkadentist.com/wp-json/wp/v2/posts?per_page=30&page=10");

    if ($response->successful()) {
        $posts = $response->json();

        foreach ($posts as $post) {
            $category_ids = $post['categories'];

            if (is_array($category_ids)) {
                foreach ($category_ids as $category_id) {
                    $blog = new Blog();

                    $existingCategory = BlogCategory::where('category_id', $category_id)->first();
                    $blog->blog_category_id = $existingCategory->id;
                    $blog->title = $post['title']['rendered'];
                    $blog->content = $post['content']['rendered'];
                    
                    // Fetching the featured image URL from the post
                    $featured_image_url = $post['_links']['wp:featuredmedia'][0]['href'];
                    $featured_image_response = Http::get($featured_image_url);

                    if ($featured_image_response->successful()) {
                        $image_data = $featured_image_response->json();
                        $image_url = $image_data['source_url'];

                        // Download the image and save it to the specified folder
                        $image_content = file_get_contents($image_url);
                        $image_path = public_path('uploads/blogs/') . time() . '_' . basename($image_url);
                        file_put_contents($image_path, $image_content);

                        // Save the image path to the database
                        $blog->blog_image = 'uploads/blogs/' . basename($image_path);
                    }

                    $blog->save();
                }
            } else {
                // Handle the case where $category_ids is not an array (optional)
                echo "No categories found for this post.<br>";
            }
        }
    } else {
        // Handle error cases for fetching posts
        return 'Failed to fetch posts from the WordPress API.';
    }

    // Optionally, you can return a success message or perform additional actions
    return 'Blog posts fetched and saved successfully.';
}

}
