@php
   $fruits = ["one" => "mango", "two" => "apple", "three" => "kiwi"];
@endphp

@include('post', [ 'fName' => $fruits])
<h1>hey</h1>



