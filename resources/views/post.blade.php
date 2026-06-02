@extends('layouts.masterlayout')

@section('content')
<h2>Post Page </h2>
<p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
@endsection

@section('title')
Post
@endsection

@section('sidebar')
@parent
<p>This is appended to the master sidebar.</p>
@endsection