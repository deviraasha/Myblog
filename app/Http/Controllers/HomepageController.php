<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;

class HomepageController extends Controller
{
    private $perpage = 10;
    public function home()
    {
        return view('homepage.home', [
            'posts' => Post::publish()->latest()->paginate($this->perpage)
        ]);
    }

    public function showCategories()
    {
        return view('homepage.categories', [
            'categories' => Category::onlyParent()->paginate($this->perpage)
        ]);
    }

    public function showTags()
    {
        return view('homepage.tags', [
            'tags' => Tag::paginate($this->perpage)
        ]);
    }

    public function searchPost(Request $request)
    {
        if (!$request->get('keyword')) {
            return redirect()->route('homepage.home');
        }
        return view('homepage.search-post', [
            'posts' => Post::publish()->search($request->keyword)->paginate($this->perpage)
                ->appends(['$request->keyword'])
        ]);
    }

    public function showPostsByCategory($slug)
    {
        $posts = Post::publish()->whereHas('categories', function ($query) use ($slug) {
            return $query->where('slug', $slug);
        })->paginate($this->perpage);

        $category = Category::where('slug', $slug)->first();
        return view('homepage.posts-category', [
            'posts' => $posts,
            'category' => $category
        ]);
    }
}
