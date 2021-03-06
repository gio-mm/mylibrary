@extends('admin/master')

@section('content')
        <div class="container">
            <div class="d-flex justify-content-between mb-8" style="height:40vh; margin-bottom:4rem ">

            <img src="{{Storage::url($book['image'])}}" alt="" class="h-100">
            <div class="info text-sm-right d-flex flex-column justify-content-between">
                <h3>name: {{$book['name']}} </h3>
                <h3>author: {{$book['author']}} </h3>
                <h4>created_at: {{$book['created_at']}} </h3>
                <h4>updated_at: {{$book['updated_at']}} </h3>
            </div>
        </div>

            <div class="text">
                <p>
                    {{$book['descr']}}
                </p>
            </div>
            <div class="buttons d-flex justify-content-between w-100">
                <a class="btn  bg-success " href="{{Storage::url($book['pdf_link'])}}" >
                    view pdf
                </a>
                <a class="btn  bg-warning " href="{{url('admin/book/'.$book['id'].'/edit')}}" >
                    edit
                </a>
                <a class="btn btn-danger delete" data-id={{$book->id}} data-title={{$book->name}} data-bs-toggle="modal" data-bs-target="#exampleModal"  >
                    delete
                </a>
            </div>
        {{-- modal --}}
            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-dark">
                    <div class="modal-header  border-0">
                      <h5 class="modal-title text-warning" id="exampleModalLabel">Warning</h5>
                      <button type="button" class="btn-close bg-dark border-0 text-success" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    </div>
                    <div class="modal-body border-0 text-light" id="modal-body" >
                      do you want delete ?
                    </div>
                    <div class="modal-footer border-0">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                      <form id="delform" class="delform"   method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger">yes</button>
                      </form>
                      
                    </div>
                  </div>
                </div>
              </div>
                
        </div>
        <script>


                document.querySelectorAll('.delete').addEventListener('click', event => {
              //handle click
              // console.log(document.getElementsByClassName('modal-body')[0]);
          
              let title=document.getElementById(event.target.dataset.id).textContent;
              document.getElementsByClassName('modal-body')[0].innerHTML =`Do you want delete post - ${title} ?`;
              // document.getElementsByClassName('delform')[0].setAttribute('action',`admin/posts/${event.target.dataset.id}`);
              document.getElementById('delform').setAttribute('action',`books/${event.target.dataset.id}`);
          

              
              // $('#delform').attr('action',`admin/posts/${event.target.dataset.id}`);
           
          
          
            })
        
          </script>
@endsection