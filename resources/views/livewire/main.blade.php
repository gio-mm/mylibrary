<link rel="stylesheet" href="{{asset('css/main.css')}} ">
<div  style="background-color: #f4eeb1" class="" >
<div class=" bg-hero-pattern   h-screen w-full  header bg-fixed  ">
  <div class="bg-black w-full h-full bg-opacity-70 flex justify-center ">

   @livewire('search-bar')    
  </div> 
</div>
<div class="most-pop w-full flex justify-center my-10">
  <h1 class="tracking-wide text-5xl">MOST POPULAR</h1>
</div>

@livewire('most-popular')    

<div class="most-pop w-full flex justify-center my-10">
  <h1 class="tracking-wide text-5xl">Newest</h1>
</div>
@livewire('newest',['favoriteBookIdList'=>$favoriteBookIdList])    
</div>

