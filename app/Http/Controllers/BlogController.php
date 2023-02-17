<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    // show all blogs
    public function index(Request $request) {
        // dd(request()->tag);
        return view('blogs.index', [
            'blogs' => Blog::latest()->filter(request(['tag', 'search']))->get(),
        ]);
    }
    // show single blog
    public function show(Blog $blog) {
        return view('blogs.show', [
            'blog' => $blog
        ]);
    }

    // show create form
    public function create(Blog $blog) {
        return view('blogs.create');
    }
}
