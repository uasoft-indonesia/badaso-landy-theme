 <div class="bg-slate-50">
     <div class="container lg:mx-auto max-w-[1280px] w-full">
         <div class="flex justify-center pt-15 lg:pt-28 mb-5">
             <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                 <span class="font-semibold text-sm lg:text-base text-blue-700" x-text="client.title.data">Meet Our
                     Clients</span>
             </div>
         </div>
         <div class="flex justify-center mb-5">
             <span class="text-3xl lg:text-4xl font-bold text-center" x-text="client.subtitle.data">Our Awesome
                 Clients</span>
         </div>
         <div class="flex justify-center mb-10 lg:mx-96">
             <span class="text-center text-base lg:text-base text-gray-500" x-text="client.description.data">There are
                 many variations of passages of Lorem Ipsum available,but the
                 majority have suffered alteration in some form.
             </span>
         </div>
         <div class="hidden lg:flex justify-center  pb-20">
             <div class="flex flex-col gap-4">

                 <div class="flex flex-col lg:flex-row gap-4 items-center">
                     <template x-for="listclient in listclient">
                         <div class="border-slate-200 bg-white rounded-lg p-8 px-8">
                             <img src="https://demo.ayroui.com/templates/business-template/assets/images/client-logo/graygrids.svg"
                                 :src="listclient.data" alt="">
                         </div>
                     </template>

                 </div>
                 <div class="flex flex-col lg:flex-row gap-4 lg:ml-8 items-center">
                     <template x-for="datalist in client.listclient2.data">
                         <div class="border-slate-200 bg-white rounded-lg p-8 px-4">
                             <img src="https://demo.ayroui.com/templates/business-template/assets/images/client-logo/lineicons.svg"
                                 :src="datalist.data" alt="">
                         </div>
                     </template>

                 </div>
             </div>
         </div>

         <div class="carousel carousel-center w-full p-4 pb-10 space-x-4 lg:hidden">
             <template x-for="listclient in listclient">
                 <div class="carousel-item">
                         <div class="border-slate-200 bg-white rounded-lg p-8 items-center">
                             <img src="https://demo.ayroui.com/templates/business-template/assets/images/client-logo/graygrids.svg"
                                 :src="listclient.data" alt="">
                         </div>
                 </div>
             </template>
                <template x-for="datalist in client.listclient2.data">
                 <div class="carousel-item">
                         <div class="border-slate-200 bg-white rounded-lg p-8 items-center">
                             <img src="https://demo.ayroui.com/templates/business-template/assets/images/client-logo/graygrids.svg"
                                 :src="datalist.data" alt="">
                         </div>
                 </div>
             </template>



         </div>



     </div>

 </div>
