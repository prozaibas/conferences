@extends ('layouts.app')

@section('title','Articles')

@section('content')
<h1>{{$article['title']}}</h1>
<p>{{$article['content']}}</p>
@endsection