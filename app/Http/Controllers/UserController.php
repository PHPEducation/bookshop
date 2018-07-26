<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        $customers = array();

        $employees = array();

        foreach ($users as $user)
        {
            if($user->role == 0)
            {
                array_push($customers, $user);
            }
            else
            {
                array_push($employees, $user);
            }
        }

        return view('admin.user.show', compact('customers', 'employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $user = new User();

        $user->name = $data['name'];

        $user->username = $data['username'];

        $user->password = Hash::make($data['password']);

        $user->email = $data['email'];

        $user->phone = $data['phone'];

        $user->address = $data['address'];

        $user->birthday = $data['birthday'];

        $user->role = 2;

        $user->save();

        echo json_encode([
            'error' => 0,
        ]);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();

        return view('admin.user.edit', compact('user'));
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
        $data = $request->all();

        unset($data['_method']);
        
        unset($data['_token']);

        User::where('id', $id)->update($data);

        return json_encode([
            'error' => 0,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return json_encode([
            'error' => 0,
        ]);
    }
}
