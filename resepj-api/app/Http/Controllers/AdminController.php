<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Shop;


class AdminController extends Controller
{
    public function index()
    {
        $managers = Admin::with('shop:id,name')
        ->where('role',2)
        ->get();
        $shops = Shop::all('id','name');
        return view('admin.dashboard', compact('managers', 'shops'));
    }

    public function store(Request $request)
    {
        $manager = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'shop_id' => $request->shop,
        ]);
        return redirect()->route('admin.dashboard');
    }
}
