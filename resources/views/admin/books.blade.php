@extends('admin.master')

@section('content')

    <h2 class="my-32 text-center dash-row">all books</h2>

    <div class="row m-auto">
        @foreach($books as $item)
                <div class="col-md-3 offset-md-1 mb-4" style="height: 250px;width:100px;">
        <a href="{{'/admin/book/'.$item['id']}}">
                    <div class="h-100 w-100" 
                     style="background-image: url({{Storage::url($item['image'])}}); 
                     background-size: cover;background-repeat:no-repeat;background-position:center center;">
                        <div class="h-100 w-100 absolute z-10 d-flex  justify-content-around flex-column" style="opacity: 0.7; background:black;">
                            <h4 class=" text-center" style="color:rgb(245, 245, 192)" >{{$item['name']}}</h4>
                            <h5 class="text-center" style="color:rgb(230, 230, 163) ">{{$item['author']}}</h5>
                        </div>
                     </div>
                    </a>
                </div>
            
        @endforeach
    </div>

@endsection
