@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($all as $v)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <video width="320" height="240" controls>
                    <source src="movie.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <div class="caption">
                    <h3>{{$v->title}}</h3>
                    <p>{{$v->description}}</p>
                    {{--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>--}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{ $all->links() }}
@endsection
