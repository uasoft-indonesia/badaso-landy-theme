 <div class="bg-slate-50">
     <div class="container lg:mx-auto max-w-[1280px] w-full">
         <div class="flex justify-center pt-15 lg:pt-28 mb-5">
             <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                 <span class="font-semibold text-sm lg:text-base text-blue-700" x-text="client.title.data"></span>
             </div>
         </div>
         <div class="flex justify-center mb-5">
             <span class="text-3xl lg:text-4xl font-bold text-center" x-text="client.subtitle.data"></span>
         </div>
         <div class="flex justify-center mb-10 lg:mx-96">
             <span class="text-center text-sm lg:text-base text-gray-500" x-text="client.description.data">
             </span>
         </div>
         <div class="hidden lg:flex justify-center  pb-20">
             <div class="flex flex-col gap-4">

                 <div class="flex flex-col lg:flex-row gap-4 items-center">
                     <template x-for="listclient in listclient">
                         <div class="border-slate-200 bg-white rounded-lg px-8 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-100 hover:shadow-md">
                              <div class="flex items-center justify-center p-4">
                             <img src="https://demo.ayroui.com/templates/business-template/assets/images/client-logo/graygrids.svg"
                                 :src="listclient.logo.data" class="object-cover" alt="">
                              </div>
                                 <div class="flex items-center justify-center p-2">
                                    <span class="text-center text-sm lg:text-base text-gray-500" x-text="listclient.title.data"></span>
                                 </div>
                         </div>
                     </template>

                 </div>
                 <div class="flex flex-col lg:flex-row gap-4 lg:ml-8 items-center">
                     <template x-for="datalist in client.clientlist2.data">
                         <div class="border-slate-200 bg-white rounded-lg  px-4 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-100 hover:shadow-md">
                            <div class="flex items-center justify-center p-4">
                                  <img src="https://demo.ayroui.com/templates/business-template/assets/images/client-logo/lineicons.svg" class="object-cover"
                                 :src="datalist.logo.data" alt="">
                            </div>

                                   <div class="flex items-center justify-center p-2">
                                    <span class="text-center text-sm lg:text-base text-gray-500" x-text="datalist.title.data"></span>
                                 </div>
                         </div>
                     </template>

                 </div>
             </div>
         </div>

         <div class="carousel carousel-center w-full p-4 pb-10 space-x-4 lg:hidden">
             <template x-for="listclient in listclient">
                 <div class="carousel-item">
                         <div class="border-slate-200 bg-white rounded-lg items-center">
                            <div class="flex items-center justify-center p-4">
                             <img src="https://demo.ayroui.com/templates/business-template/assets/images/client-logo/graygrids.svg" class="object-cover"
                                 :src="listclient.logo.data" alt="">
                            </div>
                                 <div class="flex items-center justify-center p-2">
                                    <span class="text-center text-sm lg:text-base text-gray-500" x-text="listclient.title.data"></span>
                                 </div>
                         </div>
                 </div>
             </template>
                <template x-for="datalist in client.clientlist2.data">
                 <div class="carousel-item">
                         <div class="border-slate-200 bg-white rounded-lg items-center">
                              <div class="flex items-center justify-center p-4">
                             <img src="https://demo.ayroui.com/templates/business-template/assets/images/client-logo/graygrids.svg" class="object-cover"
                                 :src="datalist.logo.data" alt="">
                              </div>
                                  <div class="flex items-center justify-center p-2">
                                    <span class="text-center text-sm lg:text-base text-gray-500" x-text="datalist.title.data"></span>
                                 </div>
                         </div>
                 </div>
             </template>



         </div>



     </div>

 </div>
