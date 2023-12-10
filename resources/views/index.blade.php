@extends ('layouts.app')

@section('title','HOME')

@section('content')
<h1> HOME </h1>
<a href="{{route('conferences.index')}}" method="post" ><button type="button">List of conferences</button></a>
@endsection