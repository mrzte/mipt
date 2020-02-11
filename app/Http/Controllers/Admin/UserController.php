<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\provinsi;
use Gate;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        if(Gate::denies('admin')){
          return redirect(route('home'));
        }
        $user = User::all();
        return view('admin.user.level')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function edit(User $user)
    {

        if(Gate::denies('admin')){
          $role = Role::all();
          $provinsi = provinsi::all();
          return view('admin.user.edit-user')->with([
            'user' => $user,
            'role' => $role,
            'provinsi' => $provinsi

          ]);
        }

        $role = Role::all();
        $provinsi = provinsi::all();
        return view('admin.user.edit')->with([
          'user' => $user,
          'role' => $role,
          'provinsi' => $provinsi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nama_univ = $request->nama_univ;
        $user->no_hp = $request->no_hp;
        $user->kota = $request->kota;
        if($user->save()){
          $request->session()->flash('success', 'Data Berhasil Di Perbarui');
        }else{
          $request->session()->flash('erorr', 'Data Gagal Di Perbarui');
        }


        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();

        return redirect()->route('admin.user.index');
    }
}
