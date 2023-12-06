<div>
        <label for="title-input">Title</label>
        <input id="title-input" type="text" name="title" value="{{old('title')}}">
        @error('title')
        <p>{{$message}}</p>
    @enderror
    </div>
    <div>
    <label for="content-input">Content</label>
        <textarea id="content-input" name="content">{{old('content')}}</textarea>
        @error('content')
        <p>{{$message}}</p>
        @enderror
    </div>