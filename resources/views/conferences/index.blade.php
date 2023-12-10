@extends ('layouts.app')

@section('content')
    <h2>List of conferences</h2>
    @if(session('status'))
    <div style="background-color: green; color: lime;">{{session('status')}}</div>
    @endif
    <a href="{{route('conferences.create')}}" method="post" ><button type="button">Create conference</button></a>
    @each ('conferences.partials.list', $conferences, 'conference')
@endsection