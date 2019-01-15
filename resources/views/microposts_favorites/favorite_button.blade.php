
    @if (Auth::user()->is_favoring($micropost->id))
        {!! Form::open(['route' => ['favorites.unfavor', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-sm mr-1"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favor', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-sm mr-1"]) !!}
        {!! Form::close() !!}
    @endif
