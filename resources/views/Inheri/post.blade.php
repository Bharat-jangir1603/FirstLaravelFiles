@extends('Inheri.layout')
@section('contant')
<h2>Post.blade.php</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam totam minima accusantium non explicabo qui pariatur facilis ut sapiente asperiores earum voluptas, alias vero consequatur ad magni numquam, tempore illum.</p>
@endsection()
@section('title')
Post-Title
@endsection()
@section('hi')
@parent
<b><i>This is Hi</i></b>
@endsection