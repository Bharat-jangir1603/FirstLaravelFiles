@php
  $data['signup'] = 'by';
  $data['file'] = 'by';
@endphp
@extends('Ecom.layout', $data)
@section('contant')
    <div class="container" style="margin-top: 110px;">
      <h2>Login Form</h2>
        <form action="hello" method="post">
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="text" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
              <span style="color:red;">
                @error('email')
                    {{ $message }}
                @enderror
              </span>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="pass" class="form-control @error('pass') is-invalid @enderror" id="exampleInputPassword1">
              <span style="color: red;">
                @error('pass')
                    {{ $message }}
                @enderror
              </span>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Do you trust on me?</label>
            </div>
            <div style="color: red;">
              @error('check')
                  {{ $message }}
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection