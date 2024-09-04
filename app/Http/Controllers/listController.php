<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user_list;
use Illuminate\Http\Request;

class listController extends Controller
{
    public function index(){
     return view("UserLists.index");
    }


    public function create(){
        return view("UserLists.create");
    }
    public function store(Request $request){
        $data = $request->validate([
            'FirstName'=> 'required',
            'LastName'=> 'required',
            'MiddleName'=> 'required',
            'Designation'=> 'required',
            'Email'=> 'required|email',
            'UserType' => 'required|in:Dean,Head',
        ]);
    
        dd($data); // Check if validation passes and data is correct
    
        $newuser_list = user_list::create($data);
        return redirect(route('UserLists.index'));

    }
}