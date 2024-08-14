   <div class="bg-blue-700 sticky top-0 w-full z-10">
       <div class="container lg:mx-auto max-w-[1280px] w-full">
           <div class="navbar">
               <div class="flex flex-row h-20 justify-between  w-full">
                   <div class="flex-none justify-start">
                       <div class="max-w-[150px] lg:w-[184px]" x-data="loadDataContent()" x-init="loadDataConfiguration()">
                           <a href="https://badaso-docs.uatech.co.id/"><img :src="navbarlogo"
                                   class="w-full h-[39px] object-cover" alt=""></a>
                       </div>

                   </div>
                   <div class="hidden lg:flex flex-1 pl-16 ">
                       <ul class="menu menu-horizontal p-0 font-medium text-slate-300 text-base">
                           <template x-for="menu in listnavbar">
                               <li><a class="hover:text-white" x-text="menu.title.data.text"
                                       :href="'{{ env('APP_URL') }}' + '/' + '{{ env('LANDY_THEME_PREFIX') }}' + '#' + menu
                                           .title.data.text">Home</a>
                               </li>
                           </template>

                       </ul>
                   </div>

                   <div class="flex-none justify-end">

                       <label for="my-drawer-navbar" aria-label="open sidebar"
                           class="btn btn-circle bg-blue-700 border-slate-300 hover:bg-blue-800 hover:border-slate-300">
                           <svg class="w-5 h-5" width="16" height="16" fill="#FFFFFF" viewBox="0 0 16 16">
                               <path fill-rule="evenodd"
                                   d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                           </svg>
                       </label>

                   </div>
               </div>
           </div>

       </div>
   </div>
