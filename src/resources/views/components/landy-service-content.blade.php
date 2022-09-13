 <div class="bg-white" id="Services">
     <div class="container lg:mx-auto max-w-[1280px] w-full pb-20 pt-10">
         <div class="flex justify-center mt-7 lg:mt-15 mb-5">
             <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                 <span class="font-semibold text-sm lg:text-base text-blue-700" x-text="service.title.data"></span>
             </div>
         </div>
         <div class="flex justify-center mb-5">
             <span class="text-3xl lg:text-4xl font-bold text-center" x-text="service.subtitle.data"></span>
         </div>
         <div class="flex justify-center mb-10 mx-5 lg:mx-96">
             <span class="text-center text-sm lg:text-base text-gray-500 " x-text="service.description.data"></span>
         </div>

         <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
             <template x-for="data in listservice">
             <div
                 class="bg-white  rounded-lg  transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-100 hover:shadow-md  duration-300 border border-slate-200 p-8">

                 <div class="flex ">
                     <div class="rounded-full  p-5 border-2 border-blue-700">
                         <img src="/storage/photos/1/capsule.png" :src="data.logo.data" alt="" class="w-6 object-cover">
                     </div>
                 </div>
                 <div>
                     <p class="font-semibold text-base lg:text-[20px] mb-2 lg:mb-5"  x-text="data.title.data"></p>
                     <p class="text-sm lg:text-base" x-text="data.description.data"></p>
                 </div>
             </div>

            </template>

         </div>
     </div>
 </div>
