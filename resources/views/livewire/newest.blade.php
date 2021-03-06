<div class="grid grid-cols-1 sm:grid-cols-2   md:grid-cols-4 gap-20 p-4">
    @foreach ($popular as $item)
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
                <a href="{{Storage::url($item['pdf_link'])}} " target="_blank" class="w-1/2 bg-black text-yellow-100 bg-opacity-50 hover:bg-opacity-80">
                    <button class="w-full h-full">
                      <p>view</p>
                    </button>
                </a>
                @livewire('download-pdf', ['link' => $item['pdf_link']])
            </div>
            
        </div>  
        <div class="background  h-full w-full  absolute top-0 bg-cover bg-center " style='background-image: url({{Storage::url($item['image'])}})'>
            <div class="h-full w-full bg-black bg-opacity-70">
                 
            </div>
            
        </div>
    </div> 
   
    @endforeach
</div>
