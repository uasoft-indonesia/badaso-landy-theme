 <div class="menu p-4 overflow-y-auto w-80 bg-base-100 text-base-content pl-8">

     <div class="mt-5 lg:mt-10 mb-5">
         <a href=""><img src="https://badaso-docs.uatech.co.id/img/full-logo-badaso.png" :src="sidebar.logo.data"
                 class="w-32" alt=""></a>
     </div>
     <div class="hidden lg:grid">
         <div class="mb-5">
             <span x-text="sidebar.description.data" class="text-sm lg:text-base text-gray-500 text-left">Lorem ipsum
                 dolor
                 sit amet adipisicing elit. Sapiente fuga nisi rerum iusto intro.</span>
         </div>
         <div>
             <p class="mb-4"><span class="font-bold pb-2" x-text="sidebar.links.label">Quick Links</span></p>
         </div>
         <div class="flex flex-col text-base text-gray-500 text-left">
             <template x-for="datalist in sidebar.links.data">
                 <a href="" class="mb-4"><span x-text="datalist.data.text">About Us</span></a>
             </template>
         </div>
     </div>

     <div class="flex flex-col text-base lg:hidden mb-5">
         <template x-for="data in listnavbar">
             <a href="" class="mb-4"><span x-text="data.label"
                     class="text-gray-500 text-left hover:text-blue-700"></span></a>
         </template>
     </div>

     <div>
         <p class="mb-4"><span class="font-bold pb-2">Follow Us On</span></p>
     </div>
     <div class="flex flex-row space-x-4">
         <div class="flex">
         <a href="" :href="socialmedia.fb.data.link.data"><img src="/storage/photos/landy-theme/fb.png" :src="socialmedia.fb.data.logo.data" alt="" class="w-8 h-8"></a>
     </div>
      <div class="flex">
         <a href="" :href="socialmedia.twitter.data.link.data"><img src="/storage/photos/landy-theme/social_twitter.png" :src="socialmedia.twitter.data.logo.data" alt="" class="w-8 h-8"></a>
     </div>
      <div class="flex">
        <a href="" :href="socialmedia.linkedln.data.link.data"><img src="/storage/photos/landy-theme/linked.png" :src="socialmedia.linkedln.data.logo.data" alt="" class="w-8 h-8"></a>
     </div>
     </div>


 </div>
