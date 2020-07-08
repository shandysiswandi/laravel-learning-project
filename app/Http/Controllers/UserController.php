<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Stacktrace\File as FacadeFile;
use Illuminate\Http\Request;
use Image;
use League\Flysystem\File;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show(Request $request, $id)
    {
        $data = [];
        foreach (scandir(public_path('img')) as $filename) {
            if ($filename == '.' || $filename == '..' || $filename == 'default.jpg') {
                continue;
            } else {
                array_push($data, $filename);
            }
        }

        return view('detail')->with('data', $data);
    }

    public function store(Request $request)
    {
        if (!$request->hasFile('file')) return redirect()->back()->with('message', 'Gagal');

        if (!file_exists(public_path('img'))) {
            mkdir(public_path('img'), 0777);
        }

        $imageName = strtotime(now()) . '-' . $request->file->getClientOriginalName() . '.jpg';
        $img = Image::make($request->file)->resize(1000, 1000);
        $img->save(public_path("img/$imageName"));

        return redirect()->back()->with('message', 'Berhasil');
    }
}
