 <div class="menu p-4 overflow-y-auto w-80 bg-base-100 text-base-content pl-8">

     <div class="mt-5 lg:mt-10 mb-5">
         <a href=""><img src="https://badaso-docs.uatech.co.id/img/full-logo-badaso.png" :src="sidebar.logo.data"
                 class="w-32 object-cover" alt=""></a>
     </div>
     <div class="hidden lg:grid">
         <div class="mb-5">
             <span x-text="sidebar.description.data" class="text-sm lg:text-base text-gray-500 text-left"></span>
         </div>
         <div>
             <p class="mb-4"><span class="font-bold pb-2" x-text="sidebar.title.data"></span></p>
         </div>
         <div class="flex flex-col text-base text-gray-500 text-left">
             <template x-for="datalist in sidebar.links.data">
                 <a href="" class="mb-4" :href="'{{ env('APP_URL') }}' + '/' + '{{ env('LANDY_THEME_PREFIX') }}' + '#' + datalist.label.data.text"><span
                         x-text="datalist.title.data" class="hover:text-blue-700"></span></a>
             </template>
         </div>
     </div>

     <div class="flex flex-col text-base lg:hidden mb-5">
         <ul class="menu menu-vertical p-0 font-medium text-gray-500 text-left  text-base">
             <template x-for="menu in listnavbar">
                 <li><a class="hover:text-blue-700" x-text="menu.title.data.text"
                         :href="'{{ env('APP_URL') }}' + '/' + '{{ env('LANDY_THEME_PREFIX') }}' + '#' + menu.title.data.text">Home</a>
                 </li>
             </template>

         </ul>
     </div>

     <div>
         <p class="mb-4"><span class="font-bold pb-2" x-text="sidebar.titlemedia.data"></span></p>
     </div>
     <div class="flex flex-row space-x-4">
         <template x-for="datamedia in sidebar.socialmedia.data">
             <div class="flex">
                 <a href="" :href="datamedia.url.data.url"><img src="/storage/photos/landy-theme/fb.png"
                         :src="datamedia.logo.data" alt="" class="w-8 h-8"></a>
             </div>
         </template>

     </div>


 </div>
