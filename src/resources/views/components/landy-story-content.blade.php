 <div class="bg-slate-50">
     <div class="container lg:mx-auto max-w-[1280px] w-full grid-cols-1 divide-y px-4">

         <div class="grid lg:grid-cols-12 pt-20 lg:pt-28 pr-4 pb-20">
             <div class="col-span-6  z-20">
                <div class="lg:max-w-[576px] lg:h-[562px] mb-16 lg:mb-0">
                     <a href=""><img
                         src="https://demo.ayroui.com/templates/business-template/assets/images/about/about-img1.jpg" :src="story.image.data"
                         class=" w-full object-cover" alt="Shoes" /></a>
                </div>

             </div>
             <div class="col-span-6  self-center">
                 <div class="mb-5">
                     <span class="text-lg font-semibold" x-text="story.title.data"></span>
                 </div>
                 <div class="">
                     <span class="text-3xl lg:text-4xl font-semibold" x-text="story.description.data"></span>

                 </div>

                 <div class="tabs tabs-boxed pt-5 pb-5 gap-4 px-4 mt-10 mb-10" id="myTab"
                     data-tabs-toggle="#myTabContent" role="tablist">
                     <div class="grid lg:grid-cols-3 gap-4 w-full lg:w-3/4">
                         <button class="btn btn-outline border-none bg-white hover:bg-blue-700" type="button" id="profile-tab"
                             data-tabs-target="#profile" role="tab" aria-controls="profile"
                             aria-selected="false">Who We Are</button>
                         <button class="btn btn-outline border-none bg-white hover:bg-blue-700" type="button" id="dashboard-tab"
                             data-tabs-target="#dashboard" role="tab" aria-controls="dashboard"
                             aria-selected="false">Our Vision</button>
                         <button class="btn btn-outline border-none bg-white hover:bg-blue-700">Our History</button>
                     </div>

                 </div>

                 <div class="" id="myTabContent">
                     <div id="profile" role="tabpanel" aria-labelledby="profile-tab">
                         <div class="">
                             <span class="text-sm lg:text-base text-gray-500 font-normal ">
                                 It is a long established fact that a reader will be distracted by the readable content
                                 of a
                                 page
                                 when looking at its layout. The point of using Lorem Ipsum is that it has a
                                 more-or-less
                                 normal
                                 distribution of letters, look like readable English.
                             </span>
                         </div>
                         <div class="mt-2">
                             <span class="text-sm lg:text-base font-normal text-gray-500 ">
                                 There are many variations of passages of Lorem Ipsum available, but the majority have
                                 in
                                 some
                                 form, by injected humour.
                             </span>
                         </div>
                     </div>
                     <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
                         aria-labelledby="dashboard-tab">
                         <div class="">
                             <span class="text-base text-gray-500 font-normal ">
                                 It is a long established fact that a reader will be distracted by the readable content
                                 of a
                                 page
                                 when looking at its layout. The point of using Lorem Ipsum is that it has a
                                 more-or-less
                                 normal
                                 distribution of letters, look like readable English.
                             </span>
                         </div>
                     </div>

                 </div>



             </div>
         </div>



     </div>
 </div>
