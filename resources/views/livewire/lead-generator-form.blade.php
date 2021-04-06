<div>
    @include('tui.partials.nav')
    @include('layouts.partials.leadGeneratorForm-css')
    {{-- https://play.tailwindcss.com/PhR9ZbNet2?layout=horizontal --}}
    <div class="">

        <section id="try-for-free" class="section-blue sep-bottom pad">
            <div class="container-fluid">
                <div class="section-label ">Yuqori darajadagi to'liq kurslar </div>
                <div class="row">
                    <div class="col-md-5">

                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <p>Quyidagi stack bo'yicha noldan pro darajasigacha o'z bilimlaringizni oshirishingiz
                                    mumkin</p>
                                <ul class="list-disc space-y-2">

                                    <li class="flex items-start">
                                        <span class="h-6 flex items-center sm:h-7">
                                            <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <p class="ml-2">Javascript</p>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="h-6 flex items-center sm:h-7">
                                            <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>

                                        <p class="ml-2">PHP</p>



                                    </li>
                                    <li class="flex items-start">
                                        <span class="h-6 flex items-center sm:h-7">
                                            <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>


                                        <p class="ml-2">Laravel</p>



                                    </li>
                                    <li class="flex items-start">
                                        <span class="h-6 flex items-center sm:h-7">
                                            <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>


                                        <p class="ml-2">Mysql</p>


                                    </li>
                                </ul>
                                <p>
                                    Har bir kurs boshlang'ich , o'rta va yuqori darajalardadir.
                                    Qo'shimcha stacklar yuqoridagi kurslardan so'ng qo'shilib boriladi.


                                </p>

                            </div>
                            <div class=" sm:hidden pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <div id="registration-form-wrapper">
                            <div >
                            @if (session()->has('success'))
                         
                              <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
                                <div slot="avatar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                </div>
                                <div class="text-xl font-normal  max-w-full flex-initial">
                                    {{ session('success') }} </div>
                                <div class="flex flex-auto flex-row-reverse">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-green-400 rounded-full w-5 h-5 ml-2">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                          @endif
                          @if (session()->has('message'))
                          
                         
                          <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-red-700 bg-red-100 border border-red-300 ">
                            <div slot="avatar">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon w-5 h-5 mx-2">
                                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                </svg>
                            </div>
                            <div class="text-xl font-normal  max-w-full flex-initial">
                                {{ session('message') }}
                                
                            </div>
                            <div class="flex flex-auto flex-row-reverse">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-red-400 rounded-full w-5 h-5 ml-2">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>

                      @endif

                      @if ($errors)
                      @foreach ($errors->all() as $message) 
                      
                      <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-red-700 bg-red-100 border border-red-300 ">
                          <div slot="avatar">
                              <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon w-5 h-5 mx-2">
                                  <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                  <line x1="12" y1="8" x2="12" y2="12"></line>
                                  <line x1="12" y1="16" x2="12.01" y2="16"></line>
                              </svg>
                          </div>
                          <div class="text-xl font-normal  max-w-full flex-initial">
                              {{  $message }}</div>
                          <div class="flex flex-auto flex-row-reverse">
                              <div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-red-400 rounded-full w-5 h-5 ml-2">
                                      <line x1="18" y1="6" x2="6" y2="18"></line>
                                      <line x1="6" y1="6" x2="18" y2="18"></line>
                                  </svg>
                              </div>
                          </div>
                      </div>



                       @endforeach
                    @endif


                                <form  autocomplete="off" class="form-light"  wire:submit.prevent="submit"
                                    accept-charset="utf-8">

                                    <div class="message-holder text-black text-red font-normal ">
                                 

                                    </div>
                                    <div class="row h2-description">
                                        {{--ism  --}}
                                      <div class="col-md-6">
                                            <div class=" form-group required required">
                                                <input wire:model='fname'  required="required"
                                                    class="form-control form-control" placeholder="Ismingiz*"
                                                    maxlength="50" type="text">
                                            </div>
                                        </div>
                                        {{-- familiya --}}
                                        <div class="col-md-6">
                                            <div class=" form-group required required">
                                                <input wire:model='lname' required="required"
                                                    class="form-control form-control" placeholder="Familiyangiz*"
                                                    maxlength="50" type="text">

                                            </div>
                                        </div>
                                    </div> 
                                    {{-- yoshingiz --}}
                                    <div class=" form-group required required">
                                      <input wire:model='age' required="required"
                                          class="form-control form-control" placeholder="Yoshingiz*" autocomplete="off"
                                          maxlength="100" type="number">

                                          
                                  </div>
                                    {{-- email --}}
                                    <div class=" form-group required required">
                                        <input wire:model='email'   
                                            class="form-control form-control" placeholder="Email*" autocomplete="off"
                                            maxlength="100" type="email">
                                    </div>
                                  {{-- telefon --}}
                                    <div class=" form-group required">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="dropdown input-group-text" id="callingCodePrepend"
                                                    role="menu">
                                                    <div class="dropdown-toggle">
                                                        <i class="flag flag-UZ"></i>
                                                    </div>
                                                    <ul class="dropdown-menu scrollable-dropdown" role="menu">


                                                    </ul>
                                                </div>
                                            </div>
                                            <input wire:model='phone'  required="required" class="form-control"
                                                placeholder="Telefon raqamingiz*" value="" maxlength="40" type="text">
                                        </div>
                                    </div>

                                    <input type="hidden" name="" id="countryCode" value="998">



                                    <div class="form-group">


                                        <div class="submit float-left">
                                            <input " class="btn btn-orange" type="submit"
                                                value="Royxatdan o'tish">


                                        </div>

                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>


    </div>

</div>
