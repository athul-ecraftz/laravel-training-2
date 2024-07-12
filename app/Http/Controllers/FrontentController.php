<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontentController extends Controller
{
    public function index()
    {

        $users = User::latest()->get();  // select * from users
        // $users = User::find(4);  // select * from users where id=2
        // $users = User::where('status','=',1)->get();  // select * from users where id
        // $users = User::active()->get();
        return view('HomePage', compact('users'));
    }
    public function about()
    {

        return view('about');
    }
    public function contact()
    {

        return view('contact');
    }
    public function create()
    {

        return view('createUser');
    }
    public function saveUser(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $address = $request->address;
        $dob = $request->dob;
        $status = $request->status;

        $user = User::create([
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'address' => $address,
            'date_of_birth' => $dob,
            'status' => $status,
        ]);

        // return "Inserted";
        return  redirect()->route('home')->with('message', 'User Created Successfully');

        // $user = new User;

        // $user->name = $name;
        // $user->phone = $phone;
        // $user->email = $email;
        // $user->address = $address;
        // $user->date_of_birth = $dob;
        // $user->status = $status;
        // $user->save();
    }
    public function edit($i)
    {
        $userId = decrypt($i);
        $user = User::find($userId);
        return view('editUser', compact('user'));
    }
    public function updateUser(Request $request)
    {
        // return $request->all();
        $userId = decrypt($request->userid);
        $user = User::find($userId)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'date_of_birth' => $request->dob,
            'status' => $request->status

        ]);

        return  redirect()->route('home')->with('message', 'User Edited Successfully');
    }
    public function deleteUser($i)
    {
        $userId = decrypt($i);
        $user = User::find($userId)->delete();
        return  redirect()->route('home')->with('message', 'User Deleted Successfully');
    }
    public function newroute()
    {
        return "new route";
    }
}
