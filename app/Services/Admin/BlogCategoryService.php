<?php

namespace App\Services\Admin;

use App\Repositories\Admin\BlogCategoryRepository;
use App\Repositories\Admin\PostRepository;
use Illuminate\Http\Request;

class BlogCategoryService
{
    public function __construct(protected BlogCategoryRepository $blog_category_repository)
    {
    }

    public function store(Request $request)
    {
        return $this->blog_category_repository->store($request);
    }

    public function update(int $id, Request $request)
    {
        return $this->blog_category_repository->update($id , $request);
    }

    public function delete(int $id): bool
    {
        return $this->blog_category_repository->delete($id);
    }
}
