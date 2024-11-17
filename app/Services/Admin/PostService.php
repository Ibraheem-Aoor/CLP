<?php

namespace App\Services\Admin;

use App\Repositories\Admin\PostRepository;
use Illuminate\Http\Request;

class PostService
{
    public function __construct(protected PostRepository $post_repository)
    {

    }

    public function store(Request $request)
    {
        return $this->post_repository->store($request);
    }

    public function update(int $id, Request $request)
    {
        return $this->post_repository->update($id , $request);
    }

    public function delete(int $id): bool
    {
        return $this->post_repository->delete($id);
    }
}
