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
            'posts' => Post::publish()->latest()->paginate($this->perpage),
            'categories' => Category::all(),
            'tags' => Tag::all()
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
        $categoryRoot = $category->root();
        return view('homepage.posts-category', [
            'posts' => $posts,
            'category' => $category,
            'categoryRoot' => $categoryRoot
        ]);
    }

    public function showPostsByTag($slug)
    {
        $posts = Post::publish()->whereHas('tags', function ($query) use ($slug) {
            return $query->where('slug', $slug);
        })->paginate($this->perpage);

        $tag = Tag::where('slug', $slug)->first();
        $tags = Tag::search($tag->title)->get();
        return view('homepage.post-tags', [
            'posts' => $posts,
            'tag' => $tag,
            'tags' => $tags
        ]);
    }

    public function showPostDetail($slug)
    {
        $post = Post::publish()->with(['categories', 'tags'])->where('slug', $slug)->first();
        if (!$post) {
            return redirect()->route('homepage.home');
        }

        return view('homepage.post-detail', [
            'post' => $post
        ]);
    }
}
