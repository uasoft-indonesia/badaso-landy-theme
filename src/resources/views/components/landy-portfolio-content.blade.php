  <div class="bg-white" id="Portfolio">
      <div class="container lg:mx-auto max-w-[1280px] w-full pt-12 pb-12 lg:pt-[100px] lg:pb-[100px] px-4">
          <div class="flex flex-col max-w-[820px] w-full items-center justify-center mx-auto space-y-5 mb-7">
              <div class="flex">
                  <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                      <span class="font-semibold text-sm lg:text-base text-blue-700" x-html="portfolio.heading"></span>
                  </div>
              </div>
              <div class="flex">
                  <span class="text-3xl lg:text-4xl font-bold text-center" x-html="portfolio.subheading"></span>
              </div>
              <div class="flex">
                  <span class="text-center text-sm lg:text-base text-gray-500" x-text="portfolio.description">
                  </span>
              </div>
          </div>
          <div class="flex md:justify-center mb-5">

              <div class="flex flex-row flex-wrap gap-4">
                  <div class="flex">
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"
                          x-on:click="taball()"><span class="font-semibold text-base text-blue-700 uppercase"
                              x-text="portfolio.titletab[0].texttitle.data">All Work</span></button>
                  </div>

                  <div class="flex">
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"
                          x-on:click="tabcategory()"><span class="font-semibold text-base text-blue-700"
                              x-text="portfolio.titletab[1].texttitle.data">Branding</span></button>
                  </div>
                  <div class="flex">
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"
                          x-on:click="tab_marketing()"><span class="font-semibold text-base text-blue-700"
                              x-text="portfolio.titletab[2].texttitle.data">Marketing</span></button>
                  </div>
                  <div class="flex">
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"
                          x-on:click="tab_planning()"><span
                              class="font-semibold text-base text-blue-700">Planning</span></button>
                  </div>
                  <div class="flex">
                      <button
                          class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"
                          x-on:click="tab_research()"><span class="font-semibold text-base text-blue-700"
                              x-text="portfolio.titletab[4].texttitle.data">Research</span></button>
                  </div>

              </div>
          </div>
          <div id="all_tabs">
              <div class="grid  md:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">
                  <template x-for="listdata in portfolio.contenttab1">
                      <div class="col-span-1 mb-5">
                          <div class="flex flex-col">
                              <div class="lg:max-w-[416px] h-[313px] mb-5">
                                  <figure><img :src="listdata.imagecontent.data"
                                          class="w-full h-[313px] rounded-xl object-cover" alt="Shoes" />
                                  </figure>
                              </div>
                              <div>
                                  <span class="font-bold text-[20px] lg:text-[24px] cursor-pointer"
                                      x-text="listdata.headingcontent.data">Graphics Design</span>
                              </div>
                              <div class="mt-2 lg:mt-3"> <span class="text-sm lg:text-base"
                                      x-text="listdata.descriptioncontent.data"></span>
                              </div>

                          </div>
                      </div>

                  </template>

              </div>
          </div>
          <div id="branding_tabs">
              <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">
                  <template x-for="listdata in portfolio.contenttab2">
                      <div class="col-span-1 mb-5">
                          <div class="flex flex-col">
                              <div class="lg:max-w-[416px] h-[313px] mb-5">
                                  <figure><img :src="listdata.imagecontent.data"
                                          class="w-full h-[313px] rounded-xl object-cover" alt="Shoes" />
                                  </figure>
                              </div>
                              <div>
                                  <span class="font-bold text-[20px] lg:text-[24px] cursor-pointer"
                                      x-text="listdata.headingcontent.data"></span>
                              </div>
                              <div class="mt-2 lg:mt-3"> <span class="text-sm lg:text-base"
                                      x-text="listdata.descriptioncontent.data"></span>
                              </div>

                          </div>
                      </div>
                  </template>
              </div>
          </div>

          <div id="marketing">
              <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">
                  <template x-for="listdata in portfolio.contenttab3">
                      <div class="col-span-1 mb-5">
                          <div class="flex flex-col">
                              <div class="lg:max-w-[416px] h-[313px] mb-5">
                                  <figure><img :src="listdata.imagecontent.data"
                                          class="w-full h-[313px] rounded-xl object-cover" alt="Shoes" />
                                  </figure>
                              </div>
                              <div>
                                  <span class="font-bold text-[20px] lg:text-[24px] cursor-pointer"
                                      x-text="listdata.headingcontent.data"></span>
                              </div>
                              <div class="mt-2 lg:mt-3"> <span class="text-sm lg:text-base"
                                      x-text="listdata.descriptioncontent.data"></span>
                              </div>

                          </div>
                      </div>
                  </template>
              </div>
          </div>

          <div id="planning">
              <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">

                  <template x-for="listdata in portfolio.contenttab4">
                      <div class="col-span-1 mb-5">
                          <div class="flex flex-col">
                              <div class="lg:max-w-[416px] h-[313px] mb-5">
                                  <figure><img :src="listdata.imagecontent.data"
                                          class="w-full h-[313px] rounded-xl object-cover" alt="Shoes" />
                                  </figure>
                              </div>
                              <div>
                                  <span class="font-bold text-[20px] lg:text-[24px] cursor-pointer"
                                      x-text="listdata.headingcontent.data"></span>
                              </div>
                              <div class="mt-2 lg:mt-3"> <span class="text-sm lg:text-base"
                                      x-text="listdata.descriptioncontent.data"></span>
                              </div>

                          </div>
                      </div>
                  </template>

              </div>
          </div>
          <div id="research">
              <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">
                  <template x-for="listdata in portfolio.contenttab5">
                      <div class="col-span-1 mb-5">
                          <div class="flex flex-col">
                              <div class="lg:max-w-[416px] h-[313px] mb-5">
                                  <figure><img :src="listdata.imagecontent.data"
                                          class="w-full h-[313px] rounded-xl object-cover" alt="Shoes" />
                                  </figure>
                              </div>
                              <div>
                                  <span class="font-bold text-[20px] lg:text-[24px] cursor-pointer"
                                      x-text="listdata.headingcontent.data"></span>
                              </div>
                              <div class="mt-2 lg:mt-3"> <span class="text-sm lg:text-base"
                                      x-text="listdata.descriptioncontent.data"></span>
                              </div>

                          </div>
                      </div>
                  </template>
              </div>
          </div>


      </div>
  </div>
