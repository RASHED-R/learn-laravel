<h1>hello</h1>

{{'hello tamplate 1'}}

{!!'<h1> tamplate 2</h1>'!!}

{{'hello tamplate 1'}}

{{-- {!!"<script> alert('hellow')</script>"!!} --}}
<br>
<br>
@php
    $users = ['avro','rashed','razzak','ali','bissash'];

@endphp
<ul>
    @foreach ($users as $user)

    @if ($loop->even)
    <li style="color: red">{{$loop->iteration}}-{{$user}}</li>
    @elseif ($loop->odd)
    <li style="color: blue; font-weight:700">{{$loop->iteration}}-{{$user}}</li>
   
    @endif
       
    @endforeach
</ul>