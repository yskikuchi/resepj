<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Shop;

class AdminShopController extends Controller
{
    public function index(Request $request)
    {
        $shop = Shop::where('id',$request->shop_id)->first();
        return view('admin.shop', compact('shop'));
    }
    public function update(Request $request)
    {
        $item = Shop::where('id', $request->id)->update($request->except('_token'));
        return redirect()->route('admin.dashboard');
    }
}
