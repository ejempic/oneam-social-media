<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Traits\ApiResponser;

class CreateProfileController extends Controller
{
//    public function create(Request $request, User $user)
//        {
//        $this->authorize('create', $user->profile);
//
//        $attr = $request->validate([
//            'fname' => 'required|string',
//            'lname' => 'string',
//            'dob' => 'string',
//            'address' => 'string',
//            'number' => 'string',
//            'sex' => 'string',
//
//        ]);
//
//        $user = User::create([
//            'fname' => $attr['fname'],
//            'lname' => $attr['lname'],
//            'dob' => $attr['fname'],
//            'address' => $attr['lname'],
//            'number' => $attr['fname'],
//            'sex' => $attr['lname']
//        ]);
//
//            auth()->user()->profile->create($user);
//
//            return 'okay';
//    }
}
