@extends ('layouts.app')

@section('content')
    @if(session('status'))
    <div style="background-color: green; color: lime;">{{session('status')}}</div>
    @endif
<h1>{{$conference['title']}} </h1>
<p>{{$conference['content']}}</p>
@endsection
<div>
<form action="{{route('conferences.index')}}">
        @csrf
        @method('post')
        <button type="submit">Back to main</button>
</form>
</div>