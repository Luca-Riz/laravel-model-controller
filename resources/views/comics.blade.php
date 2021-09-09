@foreach( $fumetti as $comic )

    <p>{{$comic->title}}</p>
    <p>{{$comic->description}}</p>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <p>{{$comic->price}}</p>
    <p>{{$comic->series}}</p>
    <p>{{$comic->sale_data}}</p>
    <p>{{$comic->type}}</p>



    {{-- @dd($comic) --}}



@endforeach 