<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('admin.pages.users.index', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.users.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'telephone' => $request->tel,
            'email' => $request->mail,
            'password' => bcrypt($request->pass),
            'status' => $request->status,
        ]);

        return   redirect(route('admin.users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.pages.users.edit')->with('user' , $user);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        User::find($id)->update([
            'name' => $request->name,
            'telephone' => $request->tel,
            'email' => $request->mail,
            'password' => bcrypt($request->pass),
            'status' => $request->status,
        ]);

        return   redirect(route('admin.users'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if($user)  $user->delete();

        return   redirect(route('admin.users'));
    }
}
