<?php

namespace App\Http\Controllers\Api;

use App\Models\Pengalaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $Experience = Pengalaman::latest()->paginate(5);

        //return collection of posts as a resource
        //return new PostResource(true, 'List Data Posts', $Experience);
        return (view('experience.index', compact('Experience')));
    }
}
