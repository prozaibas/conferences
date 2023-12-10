<div>
        <label for="title-input">Title</label>
        <input id="title-input" type="text" name="title" value="{{old('title', optional($conference ?? null)->content)}}">
        @error('title')
        <p>{{$message}}</p>
    @enderror
    </div>
    <div>
    <label for="description-input">Description</label>
        <textarea id="description-input" name="description">{{old('description', optional($conference ?? null)->content)}}</textarea>
        @error('description')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="time-input">Time</label>
        <input id="time-input" type="date" name="time" value="{{old('time', optional($conference ?? null)->content)}}">
        @error('time')
        <p>{{$message}}</p>
    @enderror
    </div>
    <div>
        <label for="adress-input">Adress</label>
        <input id="adress-input" type="text" name="adress" value="{{old('adress', optional($conference ?? null)->content)}}">
        @error('adress')
        <p>{{$message}}</p>
    @enderror
    </div>
    <div>
        <label for="members-input">Number of participants</label>
        <input id="members-input" type="number" name="members" value="{{old('members', optional($conference ?? null)->content)}}">
        @error('members')
        <p>{{$message}}</p>
    @enderror
    </div>