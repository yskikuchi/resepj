<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Director;
use Illuminate\Support\Facades\Hash;

class DirectorController extends Controller
{
    public function store(Request $request)
    {

        $director = Director::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return view('admin.dashboard');
    }
}
