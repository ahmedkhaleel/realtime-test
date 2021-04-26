<?php

namespace App\Http\Controllers;

use App\Models\like;
use App\Models\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('JWT');
    }
    public function likeIt(Reply $reply){
        $reply->like()->create([
//            'user_id' => auth()->id(),
        'user_id'=>'10'

        ]);

    }
    public function unLikeIt(Reply $reply){
        $reply->like()->where('user_id',10)->first()->delete();
    }
}
