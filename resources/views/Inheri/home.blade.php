@extends('Inheri/layout')
@section('contant')
    <h2>Home.</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum magni, ipsam animi dolores, asperiores minima nemo laudantium consequuntur inventore esse aliquid odio omnis laboriosam quos, incidunt mollitia dicta corporis ipsum.</p>
@endsection()
@section('title')
 Home--title
@endsection()
@push('name')
    <b>In @@stack @@push we can insert multiple time values:</b>
    <i>First Insert:</i>
    <hr>
@endpush
@push('name')
<b><small>This is seconnd Push:</small></b>
@endpush()