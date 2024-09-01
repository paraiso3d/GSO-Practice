<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_list;

class UserlistController extends Controller
{
    public function index(){
        $userlists = user_list::all();
        return view('users.index', ['userlist' => $userlists]);
    }

    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
      $data = $request->validate([
        'FirstName'=> 'required',
        'MiddleName'=> 'required|string',
        'LastName'=> 'required|string',
        'Designation'=> 'required|string',
        'Email'=> 'required|email',
        'UserType' => 'required|in:dean,head',
      ]);

      $newuser_list = user_list::create($data);

      return redirect(route('users.index')); 
    }

    public function edit (user_list $user){
        return view('users.edit', ['user'=> $user]);

    }

    public function update(user_list $user,Request $request){
        $data = $request->validate([
            'FirstName'=> 'required',
            'MiddleName'=> 'required|string',
            'LastName'=> 'required|string',
            'Designation'=> 'required|string',
            'Email'=> 'required|email',
            'UserType' => 'required|in:dean,head',
          ]);

          $user->update($data);

          return redirect(route('users.index'))->with('success', "User Successfully Updated");


    }

    public function delete(user_list $user){
        $user->delete();

        return redirect(route('users.index'))->with('success', "User  Successfully Deleted");

    }

}
