@extends ('layouts.app')

@section('content')
    @if(session('status'))
    <div style="background-color: green; color: lime;">{{session('status')}}</div>
    @endif
<h1>{{$article['title']}} </h1>
<p>{{$article['content']}}</p>
@endsection
<div>
<form action="{{route('articles.index')}}" method="post">
        @csrf
        @method('post')
        <button type="submit">Back to main</button>
</form>
</div>