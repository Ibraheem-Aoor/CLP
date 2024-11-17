<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\Admin\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct(protected PostService $post_service)
    {

    }


    public function index()
    {
        return view('admin.posts.index');
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $this->post_service->store($request);
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        return $this->post_service->update($id, $request);
    }

    public function delete($id)
    {
        return $this->post_service->delete($id);
    }
}
