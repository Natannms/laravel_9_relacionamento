<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
/**
* Display a listing of the resource.
*
*/
public function index()
{
    $Users = User::paginate(5);
    return view('user.index')->with('Users', $Users);
}
/**
* Show the form for creating a new resource.
*
*/
public function create()
{
    return view('user.create');
}
/**
* Store a newly created resource in storage.
*
*/
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6',
    ]);

    $user = User::create($validated);
    return redirect()->route('user.index')->with('success', 'User created successfully');
}
/**
* Display the specified resource.
*
*/
public function show($id)
{
    $User = User::find($id);
    $result = [
        'id' => $User->id,
        'name' => $User->name,
        'email' => $User->email,
        'posts'=> $User->posts->toArray(),
    ];

    return view('user.show')->with('User',  $result);
}
/**
* Show the form for editing the specified resource.
*
*/
public function edit(User $user)
{
    //
}
/**
* Update the specified resource in storage.
*
*/
public function update(Request $request, User $user)
{
    //
}
/**
* Remove the specified resource from storage.
*
*/
public function destroy(User $user)
{
    //
}
}
