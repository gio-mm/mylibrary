
<div class="self-center w-3/5 m-auto flex justify-center  flex-col">
    <form action=" " class='w-full  flex'>
        <input 
        type="text" placeholder="search"
        class="w-full tracking-widest text-center bg-transparent border-0 border-b text-yellow-50 text-2xl border-yellow-300 focus-within:border-0 
        focus:border-yellow-300 focus:outline-none focus:ring-0 "
        name='search'
        wire:model="query"
        wire:keydown.escape="reset"
        wire:keydown.tab='reset'
        >
    </form>
    {{-- >
    <h1 class='text-white'>{{$query}}</h1> --}}
    <div class="  w-3/5  absolute top-3/5 mt-8 self-center">
     
        @if($query)
            <div class="fixed  top-0 right-0 left-0 bottom-0 " wire:click='reset'></div>

            @if ($books )
        
            <div class="bg-gradient-to-b from-black grid grid-cols-1 sm:grid-cols-2 w-full   md:grid-cols-4 gap-2 mt-3 absolute z-20">
                @foreach ($books as $book)
                {{-- <h1 class="text-white">{{$book['name']}} </h1> --}}
                <div class="col-span-1 h-44 shadow-2xl rounded-lg overflow-hidden  m-3 relative">

                    <img src="{{Storage::url($book['image'])}}" alt="" srcset="" class="absolute z-0  ">
                    <div class="title z-10 relative w-full h-full flex flex-col justify-between bg-black bg-opacity-70 ">
                        <div class="ml-auto h-10">
                            <div class="m-2">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                            style="
                                height: 30px;
                                fill: transparent;
                                stroke: rgb(223, 194, 194);
                                stroke-width: 10;
                            "" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" viewBox="0 0 512 512">
                                <path  d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"/>
                            </svg>
                            </div>
                        
                        </div> 
                        <div class="h-10">
                            <h2 class=" text-lg text-center  text-yellow-100">
                                {{$book['name']}}
                            </h2>
                        </div>
                        <div class="h-10">
                            <h2 class='text-base text-center text-yellow-200' >
                                {{$book['author']}}
                            </h2>
                        </div>
                        <div class="flex h-10">
                            <button class="w-1/2 bg-black text-yellow-100 bg-opacity-50 hover:bg-opacity-80"><p>view</p> </button>
                            <button class="w-1/2 bg-black text-yellow-100 bg-opacity-50  hover:bg-opacity-80">save</button>
                        </div>
                        
                    </div>  
                      
                    
                    
                </div>
                @endforeach
            </div> 
            @else
                <h1 class="self-center bg-gradient-to-b from-black text-yellow-300 text-center absolute w-full mt-3 h-32">No Results</h1>
            @endif
        @else

        @endif

    </div>
</div>
{{-- {{ route('routeName', ['id'=>1]) }} --}}
