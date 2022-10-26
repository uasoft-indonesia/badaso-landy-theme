 <div class="bg-slate-50">
     <div class="container lg:mx-auto max-w-[1280px] w-full px-4 pt-12 pb-12 lg:pt-[100px] lg:pb-[100px]">
         <div class="flex flex-col max-w-[820px] w-full items-center justify-center mx-auto space-y-5 mb-7">
             <div class="flex">
                 <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                     <span class="font-semibold text-sm lg:text-base text-blue-700" x-text="client.title.data"></span>
                 </div>
             </div>
             <div class="flex">
                 <span class="text-3xl lg:text-4xl font-bold text-center" x-text="client.subtitle.data"></span>
             </div>
             <div class="flex">
                 <span class="text-center text-sm lg:text-base text-gray-500" x-text="client.description.data">
                 </span>
             </div>
         </div>

         <div class="flex justify-center items-center w-full max-w-[820px] mx-auto">
             <div class="carousel carousel-center w-full space-x-4">
                 <div class="flex flex-row gap-4 items-center p-4">

                     <template x-for="listclient in listclient">
                         <div class="carousel-item">
                             <div
                                 class="border-slate-200 bg-white rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-100 hover:shadow-md">
                                 <div class="flex items-center justify-center p-4">
                                     <img :src="listclient.logo.data" class="object-cover" alt="">
                                 </div>
                                 <div class="flex items-center justify-center p-2">
                                     <span class="text-center text-sm lg:text-base text-gray-500"
                                         x-text="listclient.title.data"></span>
                                 </div>
                             </div>
                         </div>
                     </template>


                 </div>

             </div>
         </div>



     </div>

 </div>
