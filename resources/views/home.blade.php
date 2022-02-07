{{-- @dd($movies); --}}

<ul>
    @foreach ($movies as $movie)
        <li>{{$movie['title']}}</li>
    @endforeach
</ul>