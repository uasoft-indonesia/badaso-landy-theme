 <div class="bg-white">
     <div class="container lg:mx-auto max-w-[1280px] w-full pt-12 pb-12 lg:pt-[100px] lg:pb-[100px] px-4">
         <div class="flex flex-col max-w-[820px] w-full items-center justify-center mx-auto space-y-5 mb-7">
             <div class="flex">
                 <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                     <span class="font-semibold text-sm lg:text-base text-blue-700" x-text="review.title.data"></span>
                 </div>
             </div>
             <div class="flex">
                 <span class="text-3xl lg:text-4xl font-bold text-center" x-text="review.subtitle.data"></span>
             </div>
             <div class="flex">
                 <span class="text-center text-sm lg:text-base text-gray-500" x-text="review.description.data">
                 </span>
             </div>
         </div>

         <div class="carousel carousel-center  p-4 space-x-4  rounded-box w-full">
             <template x-for="list in review.list.data">
                 <div class="carousel-item bg-slate-50 lg:w-1/2 md:w-1/2 sm:w-full rounded-md">
                     <div class="card">
                         <div class="ml-8">
                             <svg class="shape1" width="62" height="31" viewBox="0 0 62 31" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M-1.10459e-06 -3.51286e-06C-1.46049e-06 4.07097 0.801837 8.10209 2.35973 11.8632C3.91763 15.6243 6.20107 19.0417 9.07969 21.9203C11.9583 24.7989 15.3757 27.0824 19.1368 28.6403C22.8979 30.1982 26.929 31 31 31C35.071 31 39.1021 30.1982 42.8632 28.6403C46.6243 27.0824 50.0417 24.7989 52.9203 21.9203C55.7989 19.0417 58.0824 15.6243 59.6403 11.8632C61.1982 8.10209 62 4.07098 62 -8.02757e-07L31 -8.02758e-07L-1.10459e-06 -3.51286e-06Z"
                                     fill="#FF8686"></path>
                             </svg>
                         </div>
                         <div class="card-body">
                             <span x-html="list.content.data" class="text-ellipsis overflow-hidden w-30">
                             </span>

                             <div class="flex flex-row ">
                                 <div class="avatar">
                                     <div class="w-16 rounded-full">
                                         <img src="https://placeimg.com/192/192/people" :src="list.avatar.data"
                                             class="object-cover" />
                                     </div>
                                 </div>

                                 <div class="self-center px-4">
                                     <p class="font-bold" x-text="list.name.data"></p>
                                     <span x-html="list.position.data"></span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </template>
         </div>
     </div>
 </div>
