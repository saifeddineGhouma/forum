<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply ;
use Illuminate\Http\Request;
//use Auth ;
class LikeController extends Controller
{
    public function likeIt(Reply $reply)
    {
        $reply->likes()->create([
            'user_id'=>  1 //Auth::id()
        ]);
        return 'liked';

    }
    public function unlikeIt(Reply $reply)
    {
        $reply->likes()->where('user_id',1)->first()->delete();
        
    }
}
