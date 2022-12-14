<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('store.user') }}" enctype="multipart/form-data" class="container mx-auto px-4 sm:px-8 flex gap-[14px]">
                      @csrf   
                        <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" name="name" type="text" placeholder="Name"/>

                        <input class="w-full h-10 px-3  text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" name="marriage_date" type="date"/>

                        <button class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">ADD</button>
                    </form>

                  <div class="container mx-auto px-4 sm:px-8">
                        <div class="py-8">
                          <div>
                            <h2 class="text-2xl font-semibold leading-tight">Clients</h2>
                          </div>
                          <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                            <div
                              class="inline-block min-w-full shadow-md rounded-lg overflow-hidden"
                            >
                              <table class="min-w-full leading-normal">
                                <thead>
                                  <tr>
                                    <th
                                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                                    >
                                      Clients
                                    </th>

                                    <th
                                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                                    >
                                      Issued / Due
                                    </th>                                    
                                    <th
                                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"
                                    ></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($marriage as $item)
                                  <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                      <div class="flex">
                                        <div class="flex-shrink-0 w-10 h-10">
                                          <img
                                            class="w-full h-full rounded-full"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                            alt=""
                                          />
                                        </div>
                                        <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $item->name }}
                                          </p>                                         
                                        </div>
                                      </div>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                      <p class="text-gray-900 whitespace-no-wrap">{{ $item->marriage_date }}</p>
                                      <p class="text-gray-600 whitespace-no-wrap">Due in 3 days</p>
                                    </td>
                                    
                                    <td
                                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right"
                                    >
                                      <a
                                      
                                        href="{{ route('user.edit', ['id' => $item->id]) }}"
                                        type="button"
                                        class="inline-block text-gray-500 hover:text-gray-700"
                                      >
                                       Edit
                                  </a>
                                    </td>

                                    <form method="POST" action="{{ route('delete.view', ['id' => $item->id]) }}" 
                                      enctype="multipart/form-data" class="container mx-auto px-4 sm:px-8 flex gap-[14px]">
                                      @csrf   
                                      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                      <button type="submit"
                                        class="inline-block text-gray-500 hover:text-gray-700"
                                      > Delete</button>
                                    </td>
                                    </form>
                                    
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div></div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
