<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="main">
       
        
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
                                src='{{  URL::asset("/assets/images/$alldata->id/$alldata->groom_image") }}'
                                alt=""
                              />
    
    
                            </div>
    
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <p>GROOM</p>
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="groom_name" placeholder="Name" value="{{ $alldata->groom_name }}" />
    
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="file" name="groom_image" />
    
                                <button type="submit" class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">UPDATE</button>  
    
                            </form>
    
                        
                        </div>
                        <div class="flex bg-[#e5e7eb] m-20 ">
                             <div class="flex">
    
    
    
                        <div class="flex flex-col">
                            <img
                            class="w-full h-full "
                            src='{{  URL::asset("/assets/images/$alldata->id/$alldata->bride_image") }}'
                            alt=""
                          />
    
    
                        </div>
                    </div>
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <p>BRIDE </p>
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="bride_name" placeholder="Name" value="{{ $alldata->bride_name }}" />
    
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="file" name="bride_image"/>
    
                                <button type="submit" class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">UPDATE</button>   
    
                            </form>
                        </div>
    
                    </div>
    
                </div> 

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                    <div class="p-6 text-gray-900">
                        {{ __("Groom and Bride Family Details") }}
                    </div>
    
                <div class="flex justify-center">
                    <div class="flex">
                        <div class="flex bg-[#e5e7eb] m-10 md:w-[450px] w-full">                         
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <p>Groom Family Member Name </p>
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="groom_father_name" placeholder="groom_father_name" value="{{ $alldata->groom_father_name }}" />

                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="groom_mother_name" placeholder="groom_mother_name" value="{{ $alldata->groom_mother_name }}" />

    
                                <button type="submit" class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">UPDATE</button>  
    
                            </form>   
                        </div>

                        <div class="flex bg-[#e5e7eb] m-10 md:w-[450px] w-full">                             
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <p>Bride Family Member Name</p>
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="bride_father_name" placeholder="bride_father_name" value="{{ $alldata->bride_father_name }}" />

                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="bride_mother_name" placeholder="bride_mother_name" value="{{ $alldata->bride_mother_name }}" />

    
                                <button type="submit" class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">UPDATE</button> 
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
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col   px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="file" name="slider_images[]"  multiple />
                                <button class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">ADD</button>
                            </form>
                        </div>
    
    
                        <div class="preview_container flex w-[70%] flex-wrap h-[400px] overflow-x-scroll pb-16">
                            @foreach (json_decode($alldata->slider_images) as $key => $image)
                            <div class="img_container w-[35%]">
                                
                                <p  data-array='{{ $alldata->slider_images }}' class="relative" onclick="deletepic(event, {{ $key }})">  X </p> 
                                <img src='{{  URL::asset("/assets/images/$alldata->id/$image") }}'>                            
                            </div>   
                            @endforeach                         
                        </div>
    
                    </div>
                </div>
            </div>
        </div>

    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("EVENTS") }}
                    </div>
                <div class="addeventbtn mx-7">                
                   <button type="button" name="add" id="dynamic-ar" class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Add New Event</button>
                </div>   
                   <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
                    @csrf

                    @foreach (json_decode( $alldata->events) as $key => $items)
                    <div class="event_container">
                        <input type="text" name="event_data[{{ $key }}][0]" value="{{ $items[0] }}" class="h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline"/>
                        <input type="datetime-local" name="event_data[{{ $key }}][1]" value="{{ $items[1] }}"  class="h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline"/>                    
                        <button type="button" onclick="removedata(event)" id="remove" class="h-10 px-5 transition-colors duration-150 bg-red-500 rounded-lg focus:shadow-outline hover:bg-red-600 text-white">remove</button>

                        </div>
                  
                @endforeach

                   
                    <button class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">ADD</button>
      

                </form>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                    <div class="p-6 text-gray-900">
                        {{ __("Location Details") }}
                    </div>

                <div class="flex justify-center">
                    <div class="flex">
                        <div class="flex bg-[#e5e7eb] m-10 md:w-[450px] w-full">                         
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <p>Home Location</p>
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="home_location" placeholder="Home Location" value="{{ $alldata->home_location }}" />
                                <button type="submit" class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">UPDATE</button>  

                            </form>                            
                        </div> 
                        
                        <div class="flex bg-[#e5e7eb] m-10 md:w-[450px] w-full">                         
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <p>Jan Location</p>
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="Jan_details[0]" placeholder="Location" value="{{ json_decode($alldata->Jan_details)[0] }}" />
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="Jan_details[1]" placeholder="Map Link" value="{{ json_decode($alldata->Jan_details)[1] }}" />
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="date" name="Jan_details[2]" placeholder="Time" value="{{ json_decode($alldata->Jan_details)[2] }}" />
                                <button type="submit" class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">UPDATE</button>  

                            </form>                            
                        </div> 
                    </div> 
                </div>   
            </div> 
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                    <div class="p-6 text-gray-900">
                        {{ __("Other Details") }}
                    </div>

                <div class="flex justify-center">
                    <div class="flex">                       
                        <div class="flex bg-[#e5e7eb] m-10 md:w-[450px] w-full">                         
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <p>Other Details</p>
                                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                placeholder="Write your Other details here..." name="other_details" placeholder="Other Details" 
                                >{!!  json_decode($alldata->other_details) !!}</textarea>

                                <button type="submit" class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">UPDATE</button> 

                            </form>                            
                        </div> 

                        <div class="flex bg-[#e5e7eb] m-10 md:w-[450px] w-full">                         
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <p>Mobile Number</p>
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="mobile_number" placeholder="Mobile Number" value="{{ $alldata->mobile_number }}" />
                                <button type="submit" class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">UPDATE</button> 

                            </form>                            
                        </div> 
                    </div> 
                </div>   
            </div> 
        </div>
       
</div>
<script src="https://cdn.tiny.cloud/1/d2mxsf4zpnaf3icqga6zi0sgdcb1ibigpa3wof1jjo0nuk1d/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    
    
    tinymce.init({
        selector: '#message',
        plugins: 'lists table visualblocks',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
   
    
function removedata(e){   
    e.target.parentNode.remove();
    e.preventDefault();
}



var btn = document.getElementById('dynamic-ar');
var table = document.querySelector('.event_container');
var remove = document.querySelector('#remove');



var i = 0;
btn.addEventListener('click', function(){
    ++i;
    var div = document.createElement('div');
   
    var input = document.createElement('input');
    input.setAttribute('type', 'text');
    input.setAttribute('name', 'event_data[' + i + '][0]');
    input.setAttribute('class', 'h-10 mr-1 my-1 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline');
    input.setAttribute('placeholder', 'Enter subject');
    // input.setAttribute('class', 'form-control');
 
    var input2 = document.createElement('input');
    input2.setAttribute('type', 'datetime-local');
    input2.setAttribute('name', 'event_data[' + i + '][1]');
    input2.setAttribute('class', 'h-10 mr-1 my-1 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline');
    input2.setAttribute('placeholder', 'Enter subject');
    // input.setAttribute('class', 'form-control');

    
    var btn = document.createElement('button');
    btn.setAttribute('type', 'button');
    btn.setAttribute('class', 'btn btn-outline-danger mx-1 my-1 py-2 px-5 transition-colors duration-150 bg-red-500 rounded-lg focus:shadow-outline hover:bg-red-600 text-white remove-input-field');    
    btn.textContent = 'Delete';
    div.appendChild(input);
    div.appendChild(input2);
    div.appendChild(btn);
    table.appendChild(div);
    btn.addEventListener('click', function(){
        div.remove();
    })
});

function arrayRemove(arr, value) { 
    
    return arr.filter(function(ele){ 
        return ele != value; 
    });
}

function deletepic(e, id){
    console.log(id);
    const array = JSON.parse(e.target.getAttribute("data-array"));
    console.log(array);
    const splicearr = array.splice(id, 1); 
    const finalarr = arrayRemove(array, splicearr);
    let url = '{{ route('storedetails.view', ['id' => $alldata->id]) }}';
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  
        fetch(url, {
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                    },
                method: 'post',
                credentials: "same-origin",
                body: JSON.stringify({
                    ajax_slider_images : JSON.stringify(finalarr),
                    whyCall: 'AJAX_EDIT_SLIDERS'
                })
            })
            .then((data) => {
                if(data.status==200){
                    location.reload();

                }
            })
            .catch(function(error) {
                console.log(error);
            });
  
    
}

   </script>

</x-app-layout>
