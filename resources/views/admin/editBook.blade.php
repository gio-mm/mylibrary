@extends('admin.master')
@section('content')

<a href="{{Storage::url($book['pdf_link'])}} " target="_blank" 
class="w-100  " style="background-color:rgba(87, 96, 97, 0.575) ">
    <button class="btn m-auto text-center d-block ">
      <p>view pdf</p>
    </button>
</a>
<form action="{{url('admin/book/'.$book->id)}}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf

    <div class="input-group mb-3 col-8 mx-auto">
        <span class="input-group-text" id="basic-addon1">name</span>
        <input type="text" name="name"class="form-control" placeholder="Name" value="{{$book->name}}" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3 col-8 mx-auto">
        <span class="input-group-text" id="basic-addon1">author</span>
        <input type="text" name="author"class="form-control" placeholder="Author" value="{{$book->author}}" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3 col-8 mx-auto">
        <div class="" style="height:250px; width:100%;
        background-image: url({{Storage::url($book['image'])}});
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        ">
            {{-- <img src="{{Storage::url($book['image'])}}" alt=""> --}}
            
        </div>
       
            <span class="input-group-text">change img</span>
            <input name="image" class="form-control form-control-lg" value="{{$book->image}}" id="formFileLg" type="file">
    

    </div>
   
    <div class="input-group justify-content-between">
        
       
        
        <div class="input-group mb-3 col-8  mx-auto">
      
            <span class="input-group-text">change pdf</span>
            <input name="file" class="form-control form-control-lg"   type="file">
    </div>

    </div>
    <div class="input-group mb-3 col-8 mx-auto">
        <span class="input-group-text" id="basic-addon1">description</span>
        <textarea name="descr"class="form-control"  id="" cols="30" rows="10">
            {{$book->descr}}
        </textarea>
        {{-- <input type="text" name="author"class="form-control" placeholder="Author" value="{{$book->descr}}" aria-label="Username" aria-describedby="basic-addon1"> --}}
    </div>
    <div class="d-flex justify-content-between my-4">

    </div>
   

    @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('file')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="input-group mb-3">
        <button type="submit" class="btn col-6 btn-primary mx-auto ">update</button>
    </div>
</form>
@endsection