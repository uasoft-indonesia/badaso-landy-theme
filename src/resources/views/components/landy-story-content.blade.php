 <div class="bg-slate-50" id="About">
     <div class="container lg:mx-auto max-w-[1280px] w-full grid-cols-1 divide-y px-4">

         <div class="grid lg:grid-cols-12 pt-20 lg:pt-28 pr-4 pb-20">
             <div class="col-span-6 z-20">
                 <div class="lg:max-w-[576px] lg:h-[562px] mb-16 lg:mb-0">
                     <a href=""><img
                             src="https://demo.ayroui.com/templates/business-template/assets/images/about/about-img1.jpg"
                             :src="story.image.data" class=" w-full object-cover" alt="Shoes" /></a>
                 </div>

             </div>
             <div class="col-span-6  self-center">

                 <div class="mb-5">
                     <span class="text-lg font-semibold" x-text="story.title.data"></span>
                 </div>
                 <div class="">
                     <span class="text-3xl lg:text-4xl font-semibold" x-text="story.description.data"></span>
                 </div>

                 <div class="tabs tabs-boxed pt-5 pb-5 gap-4 px-4 mt-10 mb-10">
                     <div class="grid lg:grid-cols-3 gap-4 w-full lg:w-3/4">
                         <button class="btn btn-outline border-none bg-white hover:bg-blue-700"
                             x-on:click="tab_profile()"><span x-text="titletabs[0].title.data">Who We Are</span></button>
                         <button class="btn btn-outline border-none bg-white hover:bg-blue-700"
                             x-on:click="tab_dashboard()"><span x-text="titletabs[1].title.data">Our Vision</span></button>
                         <button class="btn btn-outline border-none bg-white hover:bg-blue-700"
                             x-on:click="tab_about()"><span x-text="titletabs[2].title.data">Our History</span></button>
                     </div>

                 </div>

                 <div id="profile">
                     <div class="">
                         <span class="text-sm lg:text-base text-gray-500 font-normal" x-text="abouttabs[0].title.data">
                         </span>
                     </div>
                     <div class="mt-2">
                         <span class="text-sm lg:text-base font-normal text-gray-500"
                             x-text="abouttabs[0].description.data">
                         </span>
                     </div>
                 </div>
                 <div id="dashboard">
                     <div class="">
                         <span class="text-base text-gray-500 font-normal transition ease-in-out delay-150"
                             x-text="abouttabs[1].title.data">
                         </span>
                     </div>
                     <div class="mt-2">
                         <span class="text-sm lg:text-base font-normal text-gray-500"
                             x-text="abouttabs[1].description.data">
                         </span>
                     </div>
                 </div>
                 <div id="history">
                     <div class="">
                         <span class="text-base text-gray-500 font-normal" x-text="abouttabs[2].title.data">
                         </span>
                     </div>
                     <div class="mt-2">
                         <span class="text-sm lg:text-base font-normal text-gray-500"
                             x-text="abouttabs[2].description.data">
                         </span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
