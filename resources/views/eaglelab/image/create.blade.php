@extends('eaglelab.layouts.app')

@section('content')
    <div class="container mt-5 w-25">
        <form action="{{ route('image.index') }}" method="post" name="add_image" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Titolo</strong>
                        <input type="text" name="title" class="form-control" placeholder="Inserisci titolo">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Descrizione</strong>
                        <div>
                            <textarea name="description" placeholder="Inserisci descrizione" cols="30" rows="4" class="text-danger"></textarea>
                            <span class="text-danger">{{ $errors->first('desc') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Immagine</strong>
                        <input type="file" name="image" class="form-control">
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </div>
            </div>
        </form>
    </div>
@endsection
