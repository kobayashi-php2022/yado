@if ($errors->count())
    <ul class="alert">
        @foreach ($errors->all() as $error)
            <li style="color: red">{{ $error }}</li>
        @endforeach
    </ul> 
@endif