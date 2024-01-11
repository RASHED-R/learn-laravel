@php
    $fruits = []
@endphp

@include('layout.header', ['names'=>$fruits]) {{--pass value and key inside header, if the value is more then one we need to use an array--}}

<h1>Main Body</h1>
@include('layout.footer')