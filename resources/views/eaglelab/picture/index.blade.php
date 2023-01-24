@extends('eaglelab.layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('pictures.create') }}" class="btn btn-outline-dark mb-3 py-1 px-3 fs-3 align-text-top">+</a>
        <div class="row">
            <div class="col-12">
                <div>
                    @foreach ($pictures as $picture)
                        <ul class="list-unstyled">
                            <li>
                                {{ $picture->id }}
                            </li>
                            <li>
                                {{ $picture->title }}
                                {{ date('d-m-y', strtotime($picture->created_at)) }}
                            </li>
                            <li>
                                <img id="preview" src="{{ Session::get('image') }}" alt="">
                                {{ $picture->image }}
                            </li>
                        </ul>
                        <div class="d-flex gap-3">
                            <a class="btn btn-info" href="{{ route('pictures.edit', $picture->id) }}" method="post">Modifica</a>
                            <form action="{{ route('pictures.destroy', $picture->id) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    @endforeach
                    {!! $pictures->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
