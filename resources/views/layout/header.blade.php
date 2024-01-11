<h1>This is Header</h1>

@forelse ($names as $key => $value)

<p>{{$key}}-{{$value}}</p>
    
@empty
    <p>data not found</p>
@endforelse