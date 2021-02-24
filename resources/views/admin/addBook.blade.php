@extends('admin/master')

@section('content')
<img src="{{asset('images/eY1GYvlW76oq3s2nueQ21GXlDsgVbswccgdQEUw0.png')}}" alt="" srcset="">
<form action="{{url('admin/book')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="input-group mb-3 col-8 mx-auto">
        <span class="input-group-text" id="basic-addon1">name</span>
        <input type="text" name="name"class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3 col-8 mx-auto">
        <span class="input-group-text" id="basic-addon1">author</span>
        <input type="text" name="author"class="form-control" placeholder="Author" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group justify-content-between">
        <div class="input-group mb-3 col-8  mx-auto">
                <span class="input-group-text">img</span>
                <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">
        </div>
        <div class="input-group mb-3 col-8  mx-auto">
            <span class="input-group-text">pdf</span>
            <input name="file" class="form-control form-control-lg" id="formFileLg" type="file">
    </div>

    </div>
    <div class="d-flex justify-content-between my-4">
        {{-- @foreach ($images as $item)
    
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radio" value="{{$item->img}}" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    <img src="{{Storage::url($item->img)}}" alt="" style='height:30px' srcset="">
                </label>
            </div>
            
    
     
        @endforeach --}}
    </div>
   

    @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('file')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="input-group mb-3">
        <button type="submit" class="btn col-6 btn-primary mx-auto ">Upload</button>
    </div>
</form>


@endsection