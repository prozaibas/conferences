@extends('layouts.app')

@section('title', 'Conference Edit Form')

@section('content')
    <form action="{{route('conferences.update', ['conference' => $conference->id])}}" method="post">
        @csrf
        @method('put')
        @include('conferences.partials.form')
        <div><input type="submit" value="Update"></div>
    </form>
    @endsection