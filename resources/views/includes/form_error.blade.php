@if(count($errors) > 0)

    <div class="alert alert-danger">
        <h4>The following error(s) occured:</h4>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif