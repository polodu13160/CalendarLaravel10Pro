<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Http\Requests\Group\StoreRequest;
use App\Models\AssoGroupUser;
use App\Models\Group;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        dd($request);
        $post=$request->validated();
        if($post["group"]=="Non") {
            Group::create(['name' => $post["createGroup"]]);
        }

        foreach ($post["users_id"] as $userId){

            AssoGroupUser::create([
                'user_id'=>$post['users_id'],
                'group_id'=>Group::find('group_id',$post["createGroup"])
            ]);
        }










    }

}
