<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Message;
use App\Thread;
use App\ThreadUser;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request){
        $user = User::where('api_token',$request->api_token)->with(['threads'=>function($query){
            $query->orderBy('updated_at');
        }])->first();
        return $user;
    }
    public function fetchThreadMessages(Request $request){
        if($request->thread_id!=null) {
            $user = User::where('api_token',$request->api_token)->first();
            $thread = Thread::where('id',$request->thread_id)->with(['messages' => function ($query) {
                $query->orderBy('created_at');
            }])->first();
            $user->threads()->updateExistingPivot($thread->id,['last_seen'=>Carbon::now()],false);
            return $thread;
        }

    }
    public function create(Request $request){

        $user = User::where('api_token',$request->api_token)->first();
        if($request->thread_id==null){

            //CREATE thread
            $thread = [
                'type'=>$request->type,
                'name'=>$request->name
            ];
                //if OTO chat in that case name is null in request
            if($request->name==null){
                $receiver= User::find($request->receivers_id[0]);
                $thread['name']=$receiver->name;
            }
            $thread = Thread::create($thread);

            //CREATE ThreadUser
            $receivers_id=$request->receivers_id;
            array_push($receivers_id,$user->id);
            $thread->manyUsers()->sync($receivers_id);

            //CREATE Messages
            $message = ['thread_id'=>$thread->id,'sender_id'=>$user->id,'text'=>$request->text];
            $message = Message::create($message);

            return $message;

        }
        else{
            //update thread so on fetch it comes along with sequence of attraction
            //..........pending..................

            $message = ['thread_id'=>$request->thread_id,'sender_id'=>$user->id,'text'=>$request->text];
            $message = Message::create($message);
            return $message;
        }
    }

}
