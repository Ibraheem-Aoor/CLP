<?php
namespace App\Repositories\Admin;

use App\Models\BlogCategory;
use App\Models\Post;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BlogCategoryRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new BlogCategory());
    }

    public function store(Request $request): Model
    {
        return $this->model->create([
            'en' => [
                'title' => $request->title,
                'description' => $request->description,
            ],
        ]);
    }

    public function update(int $id, Request $request): Model
    {
        $post = $this->model->findOrFail($id);
        $post->update([
            'en' => [
                'title' => $request->title,
                'description' => $request->description,
            ],
        ]);
        return $post;
    }

    public function delete(int $id): bool
    {
        $post = $this->model->findOrFail($id);
        return $post->delete();
    }
}
