<?php
namespace App\Repositories\Admin;

use App\Models\Post;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PostRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new Post());
    }

    public function store(Request $request): Model
    {
        return $this->model->create([
            'blog_category_id' => $request->blog_category_id,
            'en' => [
                'title' => $request->title,
                'content' => $request->contnet,
            ],
        ]);
    }

    public function update(int $id, Request $request): Model
    {
        $post = $this->model->findOrFail($id);
        $post->update([
            'blog_category_id' => $request->blog_category_id,
            'en' => [
                'title' => $request->title,
                'content' => $request->contnet,
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
