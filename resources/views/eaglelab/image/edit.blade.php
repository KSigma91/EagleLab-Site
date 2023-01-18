@extends('layouts.app')

@section('content')
    <h2 class="text-center">Modifica immagine</a></h2>
    <br>
    <form action="{{ route('image.update', $image_info->id) }}" method="post" name="update_image">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Titolo</strong>
                    <input type="text" name="title" placeholder="Inserisci titolo" value="{{ $image_info->title }}">
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Descrizione</strong>
                    <textarea name="description" placeholder="Inserisci descrizione" cols="4" rows="4">{{ $image_info->desc }}</textarea>
                    <span class="text-danger">{{ $errors->first('desc') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Immagine</strong>
                    @if ($image_info->image)
                        <img src="{{ url('public/image'.$image_info->image) }}">
                    @endif
                    <input type="text" name="image" value="{{ $image_info->image }}" class="form-control">
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Modifica</button>
            </div>
        </div>
    </form>
@endsection
