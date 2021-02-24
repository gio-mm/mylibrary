<div class="min-h-screen w-full  relative">
    <div class="w-full h-16 " style="background-color:#292828 "></div>
    <div class="relative mt-16">

        <h1 class="text-center text-2xl text-yellow-300 mb-16">My Books</h1>
        <div class=" grid grid-cols-1 sm:grid-cols-2   md:grid-cols-4 gap-20 m-4">
            @foreach ($myBooks as $item)
            <div class="col-span-1 h-72 shadow-2xl rounded-lg overflow-hidden   relative">
                    <div class="title z-10 relative w-full h-full flex flex-col justify-between  ">
                        <div class="ml-auto h-10">
                            <div  class="m-2">
                        
                            @livewire('card.favorite', ['cardId' => $item['id']])
                        </div>
                        
                    </div>
                    <div class="h-10">
                        <h2 class=" text-4xl text-center  text-yellow-100">
                            {{$item['name']}}
                        </h2>
                    </div>
                    <div class="h-10">
                        <h2 class='text-3xl text-center text-yellow-200' >
                            {{$item['author']}}
                        </h2>
                    </div>
                    <div class="flex h-10">
                        <button class="w-1/2 bg-black text-yellow-100 bg-opacity-50 hover:bg-opacity-80"><p>view</p> </button>
                        <button class="w-1/2 bg-black text-yellow-100 bg-opacity-50  hover:bg-opacity-80">save</button>
                    </div>
                    
                </div>  
                <div class="background  h-full w-full  absolute top-0 bg-cover bg-center " style='background-image: url({{Storage::url($item['image'])}})'>
                    <div class="h-full w-full bg-black bg-opacity-70">
                        
                    </div>
                    
                </div>
            </div> 
        
            @endforeach
        </div>
    </div>
</div>
