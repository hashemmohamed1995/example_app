<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index() {
      $users = User::with(['userInformation']) // custom columns from userInformation table
    ->paginate(20);

        return response()->json($users);

    }
    // public function create(){
    //     return view ("users.create");

    // }
     public function store(UserRequest $request){

$user =User::create([
    'name'=>$request->name,
    'email'=>$request->email,
]);
        return response()->json($user);
    }

    //   public function edit(User $user){
    //     return view ("users.edit",compact("user") );

    // }
       public function update(Request $request,User $user){
        // dd($request->all());
$user->update([
    'name'=>$request->name,
    'email'=>$request->email,
]);
        return response()->json($user);
    }
          public function destroy(Request $request,User $user){
        // dd($request->all());
        $user->delete();
        return response()->json('user deleted');
    }
}
