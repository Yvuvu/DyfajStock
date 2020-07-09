<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  string  $role
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();
        $role=Role::all();
        return view('users', compact('user', 'role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showProfile()
    {
        $user=User::find(1);
        return view('showProfile',compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show',['user' => User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edit',compact('user'));
    }

    public function editProfile()
    {
        $user = User::find(1);
        return view('editProfile',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        
        $user = User::findOrFail($id);
  
        $user->update(['name' => $request['name'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),
        'role_id' => $request['role_id']]);
  
        return redirect('users')
                        ->with('ok', __ ("L'utilisateur a bien été modifié"));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',

        ]);
        
        $user = User::find(1);
  
        $user->update(['name' => $request['name'],
        'email' => $request['email'],
        'password' => Hash::make($request['password'])]);
  
        return redirect('users')
                        ->with('ok', __ ("L'utilisateur a bien été modifié"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $this->users->destroyUser($user);
 
        // return redirect('user')->with('ok', trans('back/users.destroyed'));
        $user = User::findOrFail($id);
        $user->delete(); 

        return redirect('users')

                        ->with('success','Utilisateur supprimé avec succès!');
    }
}
