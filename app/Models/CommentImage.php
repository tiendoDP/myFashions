<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class CommentImage extends Model
{
    use HasFactory;

    protected $fillable = ['comment_id', 'image_path'];

    public function product()
    {
        return $this->belongsTo(Comment::class);
    }
}
