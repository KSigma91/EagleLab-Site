@extends('eaglelab.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    @foreach ($images as $image)
                        <ul>
                            <li>
                                {{ $image->title }}
                                {{ date('Y-m-d', strtotime($image->created_at)) }}
                            </li>
                            <li>
                                {{ $image->image }}
                            </li>
                            <li>
                                {{ $image->desc }}
                            </li>
                            <li>
                                <a href="{{ route('image.edit', $image->id) }}" method="post">Modifica</a>
                            </li>
                        </ul>
                        <form action="{{ route('image.destroy', $image->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    @endforeach
                    {!! $images->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
