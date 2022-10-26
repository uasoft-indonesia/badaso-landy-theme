  <div class="bg-blue-700">
      <div class="container lg:mx-auto max-w-[1280px] w-full px-4 pt-10 lg:pt-20 pb-10 lg:pb-20">
          <div class="flex flex-col max-w-[820px] w-full items-center justify-center mx-auto space-y-5 mb-7">
              <div class="flex">
                  <span class="text-3xl lg:text-4xl font-bold text-center text-white lg:leading-[56px]"
                      x-text="infocontent.title.data"></span>
              </div>
              <div class="flex">
                  <span class="text-center text-white text-sm lg:text-base " x-text="infocontent.description.data"></span>
              </div>
              <div class="flex">
                  <a :href="'{{ env('APP_URL') }}' + '/' + '{{ env('LANDY_THEME_PREFIX') }}' + '#' + 'Contact'">
                      <button
                          class="btn btn-outline bg-blue-700  text-white tracking-[.08em] font-bold hover:bg-white rounded-md hover:border-none hover:text-blue-700 px-8">Get
                          Started</button>
                  </a>

              </div>
          </div>
      </div>
  </div>
