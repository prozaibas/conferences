<div>
    <h4>{{$conference['title']}} </h4>
    <p>{{$conference['content']}}</p>
    <a href="{{route('conferences.edit', ['conference' => $conference['id']])}}"><button type="button">Edit</button></a>
    <form action="{{route('conferences.destroy', ['conference' => $conference['id']])}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
    <br>
</div>