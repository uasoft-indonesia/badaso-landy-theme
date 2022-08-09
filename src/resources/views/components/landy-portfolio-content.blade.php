  <div class="bg-white">
      <div class="container lg:mx-auto max-w-[1280px] w-full px-4">
          <div class="flex justify-center mt-7 lg:mt-15 mb-5">
              <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                  <span class="font-semibold text-sm lg:text-base text-blue-700" x-text="portfolio.title.data">Our Portfolio</span>
              </div>
          </div>
          <div class="flex justify-center mb-5">
              <span class="text-3xl lg:text-4xl font-bold text-center" x-text="portfolio.subtitle.data">Our Recent Works</span>
          </div>
          <div class="flex justify-center mb-10 mx-5 lg:mx-96">
              <span class="text-center text-sm lg:text-base text-gray-500" x-text="portfolio.description.data">
              </span>
          </div>
          <div class="flex md:justify-center mb-5">
              {{-- <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                  <div class="">
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                              class="font-semibold text-base text-blue-700 ">All Work</span></button>
                  </div>
                  <div>
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                              class="font-semibold text-base text-blue-700 ">Branding</span></button>
                  </div>
                  <div>
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                              class="font-semibold text-base text-blue-700 ">Marketing</span></button>
                  </div>
                  <div>
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                              class="font-semibold text-base text-blue-700 ">Planning</span></button>
                  </div>
                  <div>
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                              class="font-semibold text-base text-blue-700 ">Research</span></button>
                  </div>
              </div> --}}
              <div class="flex flex-wrap gap-4">
                  <div class="">
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                              class="font-semibold text-base text-blue-700">All Work</span></button>
                  </div>
                  <div class="">
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                              class="font-semibold text-base text-blue-700 ">Branding</span></button>
                  </div>
                  <div class="">
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                              class="font-semibold text-base text-blue-700 ">Marketing</span></button>
                  </div>
                  <div class="">
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                              class="font-semibold text-base text-blue-700 ">Planning</span></button>
                  </div>
                  <div class="">
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                              class="font-semibold text-base text-blue-700 ">Research</span></button>
                  </div>
                  </div>

          </div>

          <div class="grid  md:grid-cols-2  grid-cols-1 lg:grid-cols-12 gap-4 mb-10">
            <template x-for="list in listportfolio">
              <div class="lg:col-span-4">
                  <div class="flex flex-col">
                      <div class="lg:max-w-[416px] h-[313px] mb-5">
                          <figure><img
                                  src="https://demo.ayroui.com/templates/business-template/assets/images/portfolio/pf1.jpg"
                                  class="w-full h-[313px] rounded-xl" :src="list.data.image.data" alt="Shoes" /></figure>
                      </div>
                      <div>
                          <span class="font-bold text-[20px] lg:text-[24px] cursor-pointer" x-text="list.data.title.data">Graphics Design</span>
                      </div>
                      <div class="mt-2 lg:mt-3"> <span class="text-sm lg:text-base" x-text="list.data.description.data">Short description for the ones who
                              look for something new.
                              Awesome!</span>
                      </div>

                  </div>
              </div>
              </template>

          </div>
      </div>
  </div>
