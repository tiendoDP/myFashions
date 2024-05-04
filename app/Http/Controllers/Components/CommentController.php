<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Save comment to database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'message' => 'required|string',
            'rating' => 'required|integer|between:1,5',
        ]);

        // Tạo bản ghi mới trong bảng Comments
        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->product_id = $request->product_id;
        $comment->content = $validatedData['message'];
        $comment->rating = $validatedData['rating'];
        $comment->save();

        $data['user_name'] = $comment->user->name;
        $data['created_at'] = $comment->created_at;
        $data['content'] = $comment->content;
        $data['rating'] = $comment->rating;

        // Trả về kết quả thành công
        return response()->json(['success' => true, 'message' => 'Comment saved successfully', 'data' => $data]);
    }
}
