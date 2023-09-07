@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        {{--per ogni category--}}

        <x-todo-category-list />

        
    </div>
</div>

@endsection