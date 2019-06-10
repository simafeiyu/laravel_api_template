<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\ChannelRequest;
use App\Http\Resources\Api\ChannelResource;
use App\Models\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    //返回频道列表
    public function index(){
        //10个用户为一页
        $channels = Channel::paginate(10);
        
        return ChannelResource::collection($channels);
    }
    //返回单一用户信息
    public function show(Channel $channel){
        // var_dump(new ChannelResource($channel));
        return $this->success(new ChannelResource($channel));
    }
}