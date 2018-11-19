@extends('blog3::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('blog3.name') !!}
    </p>
@stop
