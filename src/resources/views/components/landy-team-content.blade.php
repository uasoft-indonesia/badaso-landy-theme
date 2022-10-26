<div class="bg-white" id="Team">
    <div class="container lg:mx-auto max-w-[1280px] w-full  pt-12 pb-12 lg:pt-[100px] lg:pb-[100px] px-4">
        <div class="flex flex-col max-w-[820px] w-full items-center justify-center mx-auto space-y-5 mb-7">

            <div class="flex">
                <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                    <span class="font-semibold text-sm lg:text-base text-blue-700" x-text="team.title.data"></span>
                </div>
            </div>
            <div class="flex">
                <span class="text-3xl lg:text-4xl font-bold text-center" x-text="team.subtitle.data"></span>
            </div>
            <div class="flex">
                <span class="text-center text-sm lg:text-base text-gray-500" x-text="team.description.data">
                </span>
            </div>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6  pb-28">
            <template x-for="list in team.list.data">
                <div class="flex col-span-1">
                    <div class="card card-compact shadow-xl rounded-lg">
                        <div>
                            <figure><img
                                    src="https://demo.ayroui.com/templates/business-template/assets/images/team/team-1.jpg"
                                    alt="" class="h-[350px] w-[416px] object-cover" :src="list.avatar.data" />
                            </figure>
                        </div>
                        <div class="card-body ">
                            <h2 class="card-title text-base mx-auto font-bold text-black" x-text="list.name.data">
                            </h2>
                            <p class="text-blue-700 text-base mx-auto " x-text="list.position.data"></p>
                        </div>
                    </div>

                </div>
            </template>

        </div>

    </div>
</div>
