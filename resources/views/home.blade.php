@extends('layuout.main_layout')

@section('content')

    <div class="text-center">
        <h1>Movies</h1>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <span>   {{ $movie -> title }} - </span>  
                 <span>   {{ $movie -> original_title }} - </span> 
                 <span>   {{ $movie -> vote }} - </span>
                 <span>   {{ $movie -> nationality }}  </span>

                   
                    
                 
                </li>
            @endforeach
        </ul>
    </div>

@endsection