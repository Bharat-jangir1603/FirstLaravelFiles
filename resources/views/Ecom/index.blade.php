@php
  $data['login'] = 'by';
  $data['file'] = 'by';
  $data['signup'] = 'by';
@endphp
@extends('Ecom.layout', $data)
@section('contant')
<div class="img_cont">
  <H1>L-Drive:</H1>
  <p>L-Drive mean <b>Laravel drive</b>, this is my First Laravel proect.Here user can Login and than uplode files with secure. User can 
uplode lase than 10mb file.</p>
  <a href="signup"><button class="btn btn-secondary">signup</button></a>
  <a href="login"><button class="btn btn-warning">Login</button></a>
  {{-- <p>Here user can Login and than uplode files with secure.</p> --}}

</div>
@endsection