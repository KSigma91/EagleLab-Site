<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ImageController extends Controller
{
    public function index() {
        $data['images'] = Image::orderBy('id', 'desc')->paginate(10);
        return view('eaglelab.image.index', $data);
    }

    public function create() {
        return view('eaglelab.image.create');
    }

    // upload image
    public function store(Request $request) {
        $request->validate([
            'image' => 'required|string|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required',
            'desc' => 'required'
        ]);

        // if validate
        if ($files = $request->file('image')) {
            $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['image'] = "$profileImage";
        }

        $insert['title'] = $request->get('title');
        $insert['desc'] = $request->get('desc');
        Image::insert($request->all());
        return Redirect::to('images')
            ->with('success', 'Immagine caricata correttamente');
    }

    public function edit($id) {
        $where = array('id' => $id);
        $data['image_info'] = Image::where($where)->first();
        return view('image.edit', $data);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'title' => 'required',
            'desc' => 'required'
        ]);

        $update = ['title' => $request->title, 'desc' => $request->desc];
        if ($files = $request->file('image')) {
            $destinationPath = 'public/image';
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['image'] = "$profileImage";
        }

        $update['title'] = $request->get('title');
        $update['desc'] = $request->get('desc');
        Image::where('id', $id)->update($update);
        return Redirect::to('images')
            ->with('success', 'Immagine aggiornata con successo');
    }

    public function destroy($id) {
        Image::where('id', $id)->delete();
        return Redirect::to('products')->with('success', 'Immagine eliminata');
    }
}
