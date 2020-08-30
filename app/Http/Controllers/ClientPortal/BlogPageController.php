<?php

namespace App\Http\Controllers\ClientPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogPageController extends Controller
{
    public function __construct()
    {
        
    }

    public function blogList()
    {
        return view('client-portal.blog-list');
    }

    public function readBlog($id)
    {
        return view('client-portal.blog-detail');
    }
}
