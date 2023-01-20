<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pictures'] = Picture::orderBy('id', 'desc')->paginate(10);
        return view('eaglelab.picture.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eaglelab.picture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|file|image|mimes:jpeg,jpg,png|max:2056'
        ]);

        $data = $request->all();
        //dd($request->all());
        if (key_exists('image', $data)) {
            $img_path = Storage::put('gallery', $data['image']);
            //dd($img_path);
            $data['image'] = $img_path;
        }

        $picture = Picture::create($data);
        return redirect()->route('pictures.index', $picture);
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
        $where = array('id' => $id);
        $data['picture_info'] = Picture::where($where)->first();
        return view('eaglelab.picture.edit', $data);
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
        // $request->validate([
        //     'title' => 'required|string|max:255',
        // ]);
        // $update = ['title' => $request->title];
        // if ($files = $request->file('image')) {
        //     $destinationPath = 'public/images'; // percorso di caricamento immagine
        //     $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        //     $files->move($destinationPath, $profileImage);
        //     $update['image'] = "$profileImage";
        // }
        // $update['title'] = $request->get('title');
        // Picture::where('id', $id)->update($update);
        // return Redirect::to('pictures')
        //     ->with('success', 'Immagine aggiornata con successo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Picture::where('id', $id)->delete();
        return Redirect::to('pictures')
            ->with('success', 'Immagine eliminata con successo');
    }
}
