   <div class="bg-blue-700 sticky top-0 z-30">
       <div class="container lg:mx-auto max-w-[1280px] w-full">
           <div class="navbar">
               <div class="flex flex-row h-20 justify-between  w-full">
                   <div class="flex-none justify-start">
                       <div class="w-[184px]">
                           <img src="https://demo.ayroui.com/templates/business-template/assets/images/white-logo.svg"
                               class="w-full h-[39px]" alt="">
                       </div>

                   </div>
                   <div class="hidden lg:flex flex-1 pl-16 ">
                       <ul class="menu menu-horizontal p-0 font-medium text-slate-300 text-base">
                           <template x-for="data in listnavbar">
                               <li><a class="hover:text-white" x-text="data.label">Home</a></li>
                           </template>

                       </ul>
                   </div>

                   <div class=" flex-none justify-end">

                       <label for="my-drawer-4"
                           class="drawer-button btn btn-circle bg-blue-700 border-slate-300 hover:bg-blue-800 hover:border-slate-300">
                           <svg class="w-5 h-5" width="16" height="16" fill="#FFFFFF" viewBox="0 0 16 16">
                               <path fill-rule="evenodd"
                                   d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                           </svg></label>

                   </div>
                   {{-- <div class="flex justify-end lg:hidden">
                       <div class="dropdown">
                           <label tabindex="0" class="btn btn-square btn-ghost">
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                   class="inline-block w-6 h-5 stroke-current">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                       d="M4 6h16M4 12h16M4 18h16">
                                   </path>
                               </svg>
                           </label>
                           <div class="grid grid-cols-1">
                               <ul
                                   class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 list-disc">
                                   <li>
                                       Home
                                   </li>
                                   <li>About</li>

                               </ul>
                           </div>

                       </div>
                   </div> --}}


               </div>
           </div>

       </div>


   </div>
