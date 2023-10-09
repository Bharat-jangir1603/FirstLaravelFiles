@php
  $data['login'] = 'by';
  $data['signup'] = 'by';
@endphp
@extends('Ecom.layout', $data)
@section('contant')
<div class="fileee">
    <form action="uplode" method="post" enctype="multipart/form-data">
        @csrf
        <h2 style="margin-top: 110px;">Uplode File:</h2>
        <p>Choose a file:</p>
    <label title="Uplode file" class="plus  @error('file') invalid @enderror" for="file">
        <div style="text-align: center;"><i> &#43 </i><p>Uplode new file</p></div>
       
    </label>
    <span style="color: red;">
        @error('file')
            {{ $message }}
        @enderror
      </span>
    <div class="F_Name" style="margin-top: 20px;">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">File describsion:</label>
            <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" placeholder="File describsion (lase than 20 characters)">
            <span style="color: red;">
              @error('desc')
                  {{ $message }}
              @enderror
            </span>
          </div>
        <button type="submit" class="btn btn-primary">Uplade</button>
    </div>
    <input type="file" value="{{old('file')}}" name="file" id="file" hidden>
    </form>
    <div class="files">
        <p class="Uploded_f">Uploded files here</p><hr>
        @if (count($files) > 0)
        <div class="filee" id="filee">
            @for($i = 0; $i < count($files); $i++)
                <div class="file">
                    <div class="img_b">
                        <img src="images/{{$files[$i]->file}}" alt="">
                    </div>
                    <div class="desc">
                        <b class="F_Name">{{$files[$i]->file}}</b>
                        <p class="F_Desc">{{$files[$i]->desc}}</p>
                        <a href="images\{{$files[$i]->file}}" target="_blank"><button>Open</button></a>
                    </div>
                </div>
        
            @endfor
        </div>
        @else
            <p>Not any file uploded if you want to see here Something then uplode a file.</p>
        @endif
    </div>
</div>
@endsection