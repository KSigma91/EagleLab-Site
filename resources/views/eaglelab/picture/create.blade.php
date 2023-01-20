@extends('eaglelab.layouts.app')

@section('content')
    <div class="container mt-5 w-25">
        <div>
            <a href="{{ route('pictures.index') }}">Torna indietro</a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('pictures.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Titolo</strong>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Inserisci titolo">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Immagine</strong>
                        <input type="file" name="image" class="form-control" id="image">
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
