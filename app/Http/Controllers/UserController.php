<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("partials.userIndex", ["user" => Auth::user(), "users" => User::all()->where("type", "=", "user")]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("partials.userCreate", ["user" => Auth::user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $request->validate([
                "name" => "required",
                "email" => "required",
                "userType" => "required",
                "password" => "required",
                "password_confirmation" => "required",
            ]);

            if ($request->password != $request->password_confirmation) {
                return back()->withErrors(["password" => "Password Does Not Match"]);
            }


            $user = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password,
                "type" => $request->userType,
            ]);

            return redirect()->route("/dashboard");
        } catch (\Illuminate\Database\UniqueConstraintViolationException $th) {
            return back()->withErrors(["email" => "Email Already Exist"]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }
}
