@extends('layouts.index')

@section('content')

    <posts_index-component
        :posts="{{ $posts }}"
    ></posts_index-component>

@endsection