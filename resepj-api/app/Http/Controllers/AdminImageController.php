<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Shop;
use Illuminate\Support\Facades\Storage;

class AdminImageController extends Controller
{
    public function index(Request $request)
    {
        $shop = Shop::where('id', $request->shop_id)->first();
        return view('admin.image', compact('shop'));
    }
    public function store(Request $request)
    {
        $path = Storage::putFile('public/images',$request->image);
        $storage_path = str_replace('public', 'storage', $path);
        $data = [
            'shop_id' => $request->shop_id,
            'type' => $request->type,
            'path' => $storage_path,
        ];
        Image::create($data);
        return redirect()->route('admin.dashboard');
    }
}
