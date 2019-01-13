<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::paginate(20);
        return $this->ok('Get users success', $users);
    }

    public function profile(Request $request)
    {
        $user = $request->user();
        if($user->can('SHOW_USER_PROFILE')){
            return $this->ok('Get profile success', $user);
        }else{
            return $this->unauthorized();
        }
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
        $input = $request->all();
        $user = User::find('id');
        if (!$user) {
            return $this->badRequest('User id ' . $id . ' not found');
        }

        $user->fill($input);
        $user->save();
        return $this->save('Update user success', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find('id');
        if (!$user) {
            return $this->badRequest('User id ' . $id . ' not found');
        }

        $user->delete();
        return $this->save('Update user success', $user);
    }
}
