<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateAvatarRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AvatarController extends Controller
{
    public  function  update(updateAvatarRequest $request)
    {

        $path = $request->file('avatar')->store('public/avatars');
        auth()->user()->update(["avatar" => $path]);
        return Redirect::route('profile.edit')->with('status', 'Avatar Updated !');
    }
}
