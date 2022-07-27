<div class="hidden lg:flex sticky top-0 z-30 h-16 md:w-full justify-center bg-opacity-90 backdrop-blur transition-all duration-100 md:bg-base-200 text-base-content shadow-sm border-b-4 border-green-700" x-data="loadNavbar()" x-init="loadTopNavbar()">
        <nav class="navbar w-full">

            <div>
                <a class="tab text-black hover:text-green-500 cursor-pointer">TRENDING</a>
                <template x-for="category in categories" >
                 <a class="tab text-black hover:text-green-500 cursor-pointer" x-text="category.title" :href="'{{route('badaso.jaya-theme.category','')}}'+'/'+ category.slug"></a>

                </template>
            </div>
            <div class="flex-1 justify-end gap-1">

                <button class="btn btn-sm bg-black hover:bg-white hover:text-black rounded-md px-3 py-1"  for="my-modal-signup" x-on:click="openModal()" id="register_desktop">Sign Up</button>
                <button class="btn btn-outline btn-sm" id="login_desktop" x-on:click="checkAuth2()">LogIn</button>

            </div>

        </nav>

</div>


   {{-- subtitle news --}}
    <div class="bg-base-200 shadow-xl mb-4" x-data="loadNavbar()" x-init="loadTagNavbar()">
        <nav class="lg:navbar hidden lg:w-full justify-center">
             <a class="static text-red-600 text-sm font-bold">HOT TOPICS</a>
            <template x-for="tag in tags">
            <div class="flex">
                <a class="static font-medium text-sm text-black hover:text-green-500 pl-2">#<a x-text="tag.title" :href="'{{route('badaso.jaya-theme.category','')}}'+'/'+ tag.slug" class="static font-medium text-sm text-black hover:text-green-500"></a>
                </a>
            </div>
              </template>

        </nav>
    </div>





