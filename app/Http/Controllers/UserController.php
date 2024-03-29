<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('tb_user.index', compact('users'));
    }

    public function show(string $id)
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tb_user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        User::create($user);
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('tb_user.update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            // 'password' => 'required',
            'role' => 'required',
        ]);

        // dd($user);
        // dd('masuk');
        $data = $user;
        $data->name = $request['name'];
        $data->username = $request['username'];
        $data->email = $request['email'];
        $data->no_telp = $request['no_telp'];
        if ($request->has('password') && $request['password'] != '')
            $data->password = $request->has('password') && $request['password'] != '';
        $data->role = $request['role'];
        $data->save();
        // $user->update($data);
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/user');
    }
}
