<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $data['users'] = User::orderBy('created_at', 'desc')->get();
        return view('users.list', $data);
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json(['user' => $user], 200);
    }

    public function show($idUser)
    {
        $user = User::find($idUser);
        return response()->json(['user' => $user], 200);
    }

    public function edit($idUser)
    {
        $user = User::find($idUser);
        return response()->json(['users' => $user], 200);
    }

    public function destroy($idUser)
    {
        $removeUser = User::find($idUser)->delete();
        return response()->json(['data' => $removeUser], 200);
    }

    // public function update(Request $request, $idUser)
    // {
    //     $data = $request->all();
    //     $user = User::find($idUser);
    //     if ($user->update($data)) {
    //         return response()->json(['user' => $user], 200);
    //     }
    // }
}
