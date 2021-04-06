<div>
    @include('tui.partials.nav')
 @include('layouts.partials.leadGeneratorForm-css')
 {{-- https://play.tailwindcss.com/PhR9ZbNet2?layout=horizontal   --}}
 <div class="">

    <section id="try-for-free" class="section-blue sep-bottom pad">
      <div class="container-fluid">
      <div class="section-label ">Yuqori darajadagi to'liq kurslar </div>
      <div class="row">
      <div class="col-md-5">
      
    <div class="divide-y divide-gray-200">
              <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                <p>Quyidagi stack bo'yicha noldan pro darajasigacha o'z bilimlaringizni oshirishingiz mumkin</p>
                <ul class="list-disc space-y-2">
               
                  <li class="flex items-start">
                    <span class="h-6 flex items-center sm:h-7">
                      <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                      </svg>
                    </span>
                     <p class="ml-2">Javascript</p>
                  </li>
                  <li class="flex items-start">
                    <span class="h-6 flex items-center sm:h-7">
                      <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                      </svg>
                    </span>
                   
                    <p class="ml-2">PHP</p>
                    
    
    
                  </li>
                    <li class="flex items-start">
                    <span class="h-6 flex items-center sm:h-7">
                      <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                      </svg>
                    </span>
                   
                    
                    <p class="ml-2">Laravel</p>
                   
    
    
                  </li>
                    <li class="flex items-start">
                    <span class="h-6 flex items-center sm:h-7">
                      <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                      </svg>
                    </span>
                   
                    
                    <p class="ml-2">Mysql</p>
    
    
                  </li>
                </ul>
                <p>
                  Har bir  kurs boshlang'ich , o'rta va yuqori darajalardadir.
                  Qo'shimcha stacklar yuqoridagi kurslardan so'ng qo'shilib boriladi.
    
    
                </p>
    
              </div>
              <div class=" sm:hidden pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                
               
              </div>
            </div>
      </div>
      <div class="col-md-6 ml-auto">
      <div id="registration-form-wrapper"><div id="register-form-wrapper">
          <form   id="register-form" autocomplete="off"  
           class="form-light" method="post" accept-charset="utf-8">
           <div style="display:none;">
            
            <input type="hidden" name="_method" 
            value="POST">
            
            
            <input type="hidden" name=" " 
           
             id="Token1101536071" autocomplete="off"></div>    
              <div class="message-holder"></div>
          <div class="row h2-description">
              <div class="col-md-6">
                  <div class=" form-group required required">
                    <input name="" id="register-firstname" 
                    required="required" class="form-control form-control" placeholder="Ismingiz*" maxlength="50" type="text">
                  </div>      
                  </div>
              <div class="col-md-6">
                  <div class=" form-group required required">
                    <input name=" "
                     id="register-lastname" required="required" class="form-control form-control" placeholder="Familiyangiz*" 
                     maxlength="50" type="text">
                    
                    </div>   
                         </div>
          </div>
          <div class=" form-group required required">
            <input name="" id="register-email" 
            required="required" class="form-control form-control" placeholder="Email*" autocomplete="off" maxlength="100" 
            type="email"></div><div class=" form-group required">
              
              <input name="" id="register-pass" 
              required="required" class="form-control form-control" placeholder="Parol*"   value="" 
              type="password">
              
               
            
            </div><div 
              class=" form-group required"><div class="input-group">
              <div class="input-group-prepend">
                  <div class="dropdown input-group-text" id="callingCodePrepend" role="menu">
                    <div class="dropdown-toggle" 
                    >
                      <i class="flag flag-UZ"></i>
                    </div>
                    <ul class="dropdown-menu scrollable-dropdown" role="menu" >
                       
                              
                    </ul>
                  </div>
              </div>
              <input name="" id="register-phone" required="required" 
              class="form-control" placeholder="Telefon raqamingiz*" value="" 
               maxlength="40" type="text"></div></div>
              
              <input type="hidden" name="" id="countryCode" value="998">
      
              
          
           <div class="form-group">
              
              
              <div class="submit float-left">
                <input id="register-register-form" class="btn btn-orange" type="submit" value="Royxatdan o'tish">
              
              
              </div> 
              
                 </div>
          
      </div>
      </div>
      </div>
      </div>
      </section>
    
    
    </div>

</div>
