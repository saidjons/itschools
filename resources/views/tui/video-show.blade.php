@extends('layouts.tail')

@section('content')
{{-- https://play.tailwindcss.com/VdB3X2gJfJ --}}

<div class="flex flex-col  m-5 p-5 ">
  <div class="text-center font-medium p-5 text-2xl">
    <h2>Creating a new Symfony 5 Project</h2>
  </div>
 <!-- start embed -->
<div class="relative" style="padding-top: 56.25%">
  <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube-nocookie.com/embed/FMrtSHAAPhM" frameborder="0" …></iframe>
</div>
<!-- end embed  -->

<!-- START TABS -->

<div class="divide-x-2 divide-gray-800 ">

</div>
  <div class="bg-white">
    <nav class="flex   flex-row">
        <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 border-b-2 font-medium border-blue-500">
           <svg width='23' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
</svg>
        </button>
        <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
           <svg width='23' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
</svg>

        </button><button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
           <svg width='23' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
        </button>
        
        <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
           <svg width='23' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
</svg>
        </button>

      
      
        <!-- component -->

        <!-- start series container  -->
<div class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none ">
    <div class="flex   justify-center">
        <div class="relative ">

          <!-- button container start  -->
            <div class="flex flex-row cursor-pointer truncate p-2 px-4  rounded">
                <div></div>
                <div class="flex flex-row-reverse ml-2 w-full">
                    <div slot="icon" class="relative">
                     <button class="bg-green-200 px-3 py-1 rounded-sm hover:bg-white hover:text-green-600
                      outline-none ring-0 
                     "> Series  </button>
                    </div>
                </div>
            </div>
          <!-- button container start  -->

            <!-- below is the toggle div  .hidden  -->
            <div class=" hidden   absolute w-full  rounded-b border-t-0 z-10">
                <div class="shadow-xl w-64">
                    <div class="p-2 flex bg-white hover:bg-gray-100 cursor-pointer border-b border-gray-100" style="">
                        <div class="flex-auto text-sm w-32">
                            
                            <div class="truncate">Product 1 description</div>
                            <div class="text-gray-400">Qt: 2</div>
                        </div>
                        <div class="flex flex-col w-18 font-medium items-end">
                            <div class="w-4 h-4 mb-6 hover:bg-red-200 rounded-full cursor-pointer text-red-700">
                                 <button>
                                       <svg class=" " width='23' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
</svg>
                              </button>
                            </div>
                            </div>
                    </div>
                    <!-- item end -->
                    <!-- item start  -->
                    <div class="p-2 flex bg-white hover:bg-gray-100 cursor-pointer border-b border-gray-100" style="">
                        <div class="flex-auto text-sm w-32">
                            <div class="truncate">Product 2 long description</div>
                            <div class="text-gray-400">Qt: 2</div>
                        </div>
                        <div class="flex flex-col w-18 font-medium items-end">
                            <div class="w-4 h-4 mb-6 hover:bg-red-200 rounded-full cursor-pointer text-red-700">
                              <button>
                                       <svg class=" " width='23' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
</svg>
                              </button>
                            </div>
                             </div>
                    </div>
                    <!-- item start  -->
                    
                   
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- end series conteiner -->
    </nav>
</div>

<!-- END TABS -->

<div class="p-5 m-5 ">

  <p class=" hidden  text-gray-900 font-sans  font-normal">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit tempore possimus ad vel et dolorem molestias, fuga dolor veritatis aliquid, quae repudiandae explicabo? Error cum sequi omnis vel quia sed sunt nesciunt temporibus ipsa similique, autem nisi enim, maiores dolore voluptas excepturi. Nesciunt suscipit itaque iste deserunt, doloremque qui tempora ex sint nam odit, est provident voluptatem! Rem pariatur reiciendis officiis, dolor quae veritatis laborum quia, dignissimos vel ipsa similique non molestias eveniet suscipit voluptatum sint distinctio quidem tempore autem, molestiae perferendis quos ipsum sit voluptate? Accusantium fuga error a quis esse quod ut ratione, doloribus, nihil impedit eligendi inventore?
  </p>

</div>

</div>
    
@endsection