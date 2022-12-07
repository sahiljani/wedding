<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("GROOM AND BRIDE") }}
                </div>

            <div class="flex">
                <div class="flex">
                    <div class="flex bg-[#e5e7eb] m-20 ">
                        <div class="flex flex-col">
                            <img
                            class="w-full h-full "
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                            alt=""
                          />


                        </div>

                        <form class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
                            <p>GROOM </p>
                            <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Name" value="DARSHAN" />

                            <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="file" placeholder="Name"/>

                            <button class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">UPDATE</button>


                        </form>
                    </div>
                    <div class="flex bg-[#e5e7eb] m-20 ">
                         <div class="flex">



                    <div class="flex flex-col">
                        <img
                        class="w-full h-full "
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                        alt=""
                      />


                    </div>
                </div>
                        <form class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">

                            <p>BRIDE </p>
                            <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Name" value="RIDDHI" />

                            <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="file" placeholder="Name"/>

                            <button class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">UPDATE</button>


                        </form>
                    </div>

                </div>

            </div>



            </div>
    </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("SLIDER IMAGES") }}
                </div>
                <div class="gallery_container flex gap-10 ">
                    <div class="preview_form w-[30%]">
                        <form class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">


                            <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="file" placeholder="Name"/>

                            <button class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">ADD</button>


                        </form>
                    </div>


                    <div class="preview_container flex w-[70%] flex-wrap h-[400px] overflow-x-scroll pb-16">
                        <div class="img_container w-[35%]"><p class="relative">  X </p> <img src="https://placekitten.com/1800/720"></div>
                        <div class="img_container w-[35%]"><p class="relative">  X </p> <img src="https://placekitten.com/1800/720"></div>
                        <div class="img_container w-[35%]"><p class="relative">  X </p> <img src="https://placekitten.com/1800/720"></div>
                        <div class="img_container w-[35%]"><p class="relative">  X </p> <img src="https://placekitten.com/1800/720"></div>
                        <div class="img_container w-[35%]"><p class="relative">  X </p> <img src="https://placekitten.com/1800/720"></div>
                        <div class="img_container w-[35%]"><p class="relative">  X </p> <img src="https://placekitten.com/1800/720"></div>
                        <div class="img_container w-[35%]"><p class="relative">  X </p> <img src="https://placekitten.com/1800/720"></div>
                        <div class="img_container w-[35%]"><p class="relative">  X </p> <img src="https://placekitten.com/1800/720"></div>
                        <div class="img_container w-[35%]"><p class="relative">  X </p> <img src="https://placekitten.com/1800/720"></div>
                        <div class="img_container w-[35%]"><p class="relative">  X </p> <img src="https://placekitten.com/1800/720"></div>
                        <div class="img_container w-[35%]"><p class="relative">  X </p> <img src="https://placekitten.com/1800/720"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("BASIC INFO") }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
