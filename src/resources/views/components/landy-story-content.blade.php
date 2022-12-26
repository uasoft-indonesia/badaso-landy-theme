 <div class="bg-slate-50" id="About">
     <div class="container lg:mx-auto max-w-[1280px] w-full grid-cols-1 divide-y px-4">

         <div class="grid lg:grid-cols-12 pt-20 lg:pt-28 pr-4 pb-20">
             <div class="col-span-6 z-20">
                 <div class="lg:max-w-[576px] lg:h-[562px] mb-16 lg:mb-0">
                     <a href=""><img
                             src="https://demo.ayroui.com/templates/business-template/assets/images/about/about-img1.jpg"
                             :src="story.image" class=" w-full object-cover" alt="Shoes" /></a>
                 </div>

             </div>
             <div class="col-span-6  self-center">

                 <div class="mb-5">
                     <span class="text-lg font-semibold" x-text="story.heading"></span>
                 </div>
                 <div class="">
                     <span class="text-3xl lg:text-4xl font-semibold" x-text="story.description"></span>
                 </div>

                 <div class="tabs tabs-boxed pt-5 pb-5 gap-4 px-4 mt-10 mb-10">
                     <div class="grid lg:grid-cols-3 gap-4 w-full lg:w-3/4">
                         <button class="btn btn-outline border-none bg-white hover:bg-blue-700"
                             x-on:click="tab_content1()"><span x-text="story.titletab[0].title.data"></span></button>
                         <button class="btn btn-outline border-none bg-white hover:bg-blue-700"
                             x-on:click="tab_content2()"><span x-text="story.titletab[1].title.data"></span></button>
                         <button class="btn btn-outline border-none bg-white hover:bg-blue-700"
                             x-on:click="tab_content3()"><span x-text="story.titletab[2].title.data"></span></button>
                     </div>

                 </div>

                 <div id="contenttab1">
                     <div class="flex flex-col space-y-3">
                         <template x-for="item in story.contenttab1">
                             <div class="flex text-sm lg:text-base text-gray-500 font-normal"
                                 x-text="item.textcontent.data">
                             </div>
                         </template>
                     </div>
                 </div>
                 <div id="contenttab2">
                      <div class="flex flex-col space-y-3">
                         <template x-for="item in story.contenttab2">
                             <div class="flex text-sm lg:text-base text-gray-500 font-normal"
                                 x-text="item.textcontent.data">
                             </div>
                         </template>
                     </div>
                 </div>
                 <div id="contenttab3">
                      <div class="flex flex-col space-y-3">
                         <template x-for="item in story.contenttab3">
                             <div class="flex text-sm lg:text-base text-gray-500 font-normal"
                                 x-text="item.textcontent.data">
                             </div>
                         </template>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
