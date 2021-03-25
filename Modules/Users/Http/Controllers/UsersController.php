<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Users\Entities\Users;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('users::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('users::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'username'   => 'required|min:3',
            'email' => 'required|email',
            'password'   => 'required|min:5',
            'password_confirmation' => 'min:6|required_with:password|same:password'
        ]);
        $user = User::where('email', '=',  $request->email)->first();
        if ($user != null) return back()->with('error', 'This email has been used');

        $users= User::create([
            'name' => $request->username,
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password)
        ]);
        Auth::guard('web')->login($users);
        return redirect()->route('home');
    }


    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('users::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('users::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request)
    {

        $request->validate([
            'email'   => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user_data=[
            'email' => $request->email,
            'password' => $request->password
        ];

        if(auth()->guard('web')->attempt($user_data,false)) return redirect()->route('home');
        else return back()->with('error', 'Wrong Login Details');
        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        auth()->guard()->logout();
        $request->session()->flush();
        return redirect()->route('home');
    }
}
