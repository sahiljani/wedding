<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="main">
<?php
    $mindate = date("Y-m-d");
    $mintime = date("h:i");
    $min = $mindate."T".$mintime;
    $maxdate = date("Y-m-d", strtotime("+10 Days"));
    $maxtime = date("h:i");
    $max = $maxdate."T".$maxtime;
 ?>     
       
       <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg md:h-[320px]">
                <div class="p-6 text-gray-900 flex justify-center font-bold text-2xl">
                    {{ __("Theme Options") }}
                </div>

            <div class="flex">
                
                    <div class="md:flex block rounded-xl">
                        
                        <div class="themeoption md:flex md:justify-center m-5">
                           
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" 
                                enctype="multipart/form-data"
                                class="md:flex md:justify-center container px-8 py-8 sm:px-8 gap-[14px] rounded-xl">
                                @csrf    
                                   
                                <div class="sharelink my-2 md:w-[40%]">
                                    <input type="text" value="{{ route('frontend.fromadd',["id" => $alldata->id]) }}" 
                                    class="md:w-full mx-2 h-10 px-3 text-base text-gray-700 
                                   placeholder-gray-600 border rounded-lg  focus:border-black focus:ring-0" />
                                </div>
                                
                                <div class="slugcontainer my-2 md:w-[35%]">
                                    <input type="text" name="slug" value="{{ $alldata->id }}" 
                                    class="relative md:w-full mx-2 h-10 px-3 mb-2 text-base text-gray-700  
                                    placeholder-gray-600 border rounded-lg  focus:border-black focus:ring-0" 
                                    placeholder="Enter Slug" value=""/>

                                    <div class="loader_slug my-2">
                                        <div class="flex justify-center items-center">
                                            <div class="spinner-border inline-block w-8 h-8 border-4 rounded-full" role="status">
                                            <span class="visually-hidden">
                                                <img src='{{  URL::asset("/assets/images/check.png") }}'/>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="slugbutton" class="checkslugcontainer">
                                        <button type="submit" 
                                        class="w-full px-5 mx-2 my-2 text-indigo-100 transition-colors duration-150
                                         bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800 p-[8px]">SUBMIT</button>                
                                    </div>                             
                                </div>

                                <div class="theme_select flex justify-center my-2 md:w-[35%]">                              
                                    <select class="mx-2 h-10 w-full form-select theme appearance-none block           
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding bg-no-repeat
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="theme">                                   
                                            <option value="theme1" {{ $alldata->theme == "theme1" ? "selected": " " }}  >Theme1</option>
                                            <option value="theme2" {{ $alldata->theme == "theme2" ? "selected": "" }} >Theme2</option> 
                                            <option value="theme3" {{ $alldata->theme == "theme2" ? "selected": "" }} >Theme3</option>                                         
                                                                
                                    </select>
                                    <a href="{{ route('frontend.view', ['slug' => $alldata->slug ]) }}" 
                                        class="p-[8px] h-10 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800" target="_blank">Preview</a> 
                                </div> 
                        
                            </form>  
                           </div>

                    
                    </div>                    
                    </div>

            </div>  
            
            
    </div>
      
      
         
        
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 flex justify-center font-bold text-2xl">
                        {{ __("GROOM AND BRIDE") }}
                    </div>
    
                <div class="flex">
                    <div class="md:flex block">
                        <div class="md:flex block bg-[#e5e7eb] m-10 md:m-15 ">
                            
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
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="groom_name" placeholder="Name"                                 
                                value="{{ isset($alldata->groom_name) ? $alldata->groom_name: "" }}" />
    
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="file" name="groom_image" />

                                <p>Groom Family Member Name </p>
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="groom_father_name" placeholder="groom_father_name" value="{{ $alldata->groom_father_name }}" />

                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="groom_mother_name" placeholder="groom_mother_name" value="{{ $alldata->groom_mother_name }}" />
    
                                <button type="submit" class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">UPDATE</button>  
    
                            </form>
    
                        
                        </div>
                        <div class="md:flex block bg-[#e5e7eb] m-10 md:m-15 ">
                           
                               <div class="flex flex-col">
                               <img
                                 class="w-full h-full"
                                 src='{{  URL::asset("/assets/images/$alldata->id/$alldata->bride_image") }}'
                                 alt=""
                                  />
                              </div>
                           
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <p>BRIDE </p>
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="bride_name" placeholder="Name" value="{{ $alldata->bride_name }}" />
    
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="file" name="bride_image"/>

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

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                    <div class="p-6 text-gray-900 flex justify-center font-bold text-2xl">
                        {{ __("Select Marriage Date") }}
                    </div>

                    <div class="md:flex md:justify-center md:w-full">
                    <div class="flex">
                        <div class="flex bg-[#e5e7eb] m-5 md:w-[550px] rounded-xl  w-full">                         
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <p>Marriage Date</p>
                                <input type="hidden" value="{{ $alldata->marriage_id }}" name="marriage_id" />
                                <input min="<?php echo date("Y-m-d"); ?>" class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="date" name="marriage_date" placeholder="marriage_date" 
                                value="{{ $marriagedata->marriage_date }}" />                                                          
                                
                                <div class="flex justify-center">
                                    <button type="submit" class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800 w-[50%]">Update</button>
                                 </div>
                                  

                            </form>                            
                        </div>  
                        
                        
                        
                       
                       
                    </div> 
                   
                    <div class="flex">
                        <div class="flex bg-[#e5e7eb] m-5 md:w-[550px] rounded-xl  w-full">                         
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <p>Preview Option</p>                               
                                
                                <div class="flex items-center mb-4">
                                    <input id="default-radio-1" type="radio" value="true" name="is_Lock" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" {{ $alldata->is_Lock ? "checked" : "" }}>
                                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Locked
                                    </label>
                                </div> 
                                
                                <div class="flex items-center mb-4">
                                    <input id="default-radio-1" type="radio" value="false" name="is_Lock" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" {{ $alldata->is_Lock ? " " : "checked" }}>
                                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">unlocked</label>
                                </div>

                                
                                <div class="flex justify-center">
                                    <button type="submit" class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800 w-[50%]">Update</button>
                                 </div>
                                  

                            </form>                            
                        </div>  
                       
                        
                        
                       
                       
                    </div> 
                </div>   
            </div> 
        </div>
    
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 flex justify-center font-bold text-2xl">
                        {{ __("SLIDER IMAGES") }}
                    </div>
                    <div class="gallery_container md:flex gap-10 ">
                        <div class="preview_form md:w-[30%] w-full">
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col   px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="file" name="slider_images[]"  multiple />
                                <button class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800 ">ADD</button>
                            </form>
                        </div>
    
    
                        <div class="preview_container p-[10px] justify-center md:flex w-full md:w-[70%] flex-wrap h-[400px] overflow-x-scroll pb-16">
                            @if (gettype(json_decode($alldata->slider_images))=="array")
                            @foreach (json_decode($alldata->slider_images) as $key => $image)
                            <div class="img_container w-[35%]">                                
                                <p data-array='{{ $alldata->slider_images }}' class="relative" onclick="deletepic(event, {{ $key }})" class="cursor-pointer">  X </p> 
                                <img src='{{  URL::asset("assets/images/$alldata->id/slider/$image") }}'>                            
                            </div>   
                            @endforeach  
                            @endif                       
                        </div>
    
                    </div>
                </div>
            </div>
        </div>


        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 flex justify-center font-bold text-2xl">
                        {{ __("Images Gallery") }}
                    </div>
                    <div class="gallery_container md:flex gap-10 ">
                        <div class="preview_form md:w-[30%]">
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="file" name="image_gallery[]"  multiple />
                                <button class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800 ">ADD</button>
                            </form>
                        </div>
    
    
                        <div class="preview_container flex justify-center md:w-[70%] flex-wrap h-[400px] overflow-x-scroll pb-16 gap-[14px]">
                           @if (gettype(json_decode($alldata->image_gallery))=="array")
                            @foreach (json_decode($alldata->image_gallery) as $key => $image)
                            <div class="img_container w-[35%]">                                
                                <p data-array='{{ $alldata->image_gallery }}' class="relative" 
                                onclick="deletegallerypic(event, {{ $key }})" class="cursor-pointer">  X </p> 
                                <img src='{{  URL::asset("/assets/images/$alldata->id/imggallary/$image") }}'>                            
                            </div>   
                            @endforeach      
                           @endif
                                              
                        </div>
    
                    </div>
                </div>
            </div>
        </div>

    
        <div class="py-4">
            <div class="md:flex max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg md:w-[50%] md:p-10">
                    <div class="p-6 text-gray-900 flex justify-center font-bold text-2xl">
                        {{ __("EVENTS") }}
                    </div>
                  <div class="addeventbtn flex justify-center md:justify-end">                
                    <button type="button" name="add" id="dynamic-ar" class="flex items-center h-10 px-5 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
                        <img src='{{  URL::asset("/assets/images/plus.png") }}' class="w-[16px] h-[16px]"/>
                        <span class="px-2">Add New Event</span></button>
                  </div> 
                 <div class="flex justify-center">  
                    <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="md:w-[750px] flex container flex-col flex-wrap px-8 py-8 sm:px-8 gap-[14px]">
                        @csrf
                        
                        <div class="event_container">
                            <?php $count_events = 0; ?>
                            @foreach (json_decode( $alldata->events) as $key => $items)
                            <div class="flex justify-center flex-col md:flex-row p-3">                            
                                <input type="text" name="event_data[{{ $key }}][0]" value="{{ $items[0] }}" class="mx-2 h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline"/>
                                <input type="datetime-local" min="<?php echo $min?>"
                                 name="event_data[{{ $key }}][1]" value="{{ $items[1] }}"  class="mx-2 h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline"/>                    
                                <button type="button" onclick="removedata(event)" id="remove" 
                                class="mx-2 h-10 px-5 transition-colors duration-150 bg-red-500 rounded-lg focus:shadow-outline hover:bg-red-600 text-white">remove</button>
                         <?php $count_events++; ?>
                            </div>  
                            @endforeach
                        </div>                     
    
                       <div class="flex justify-center">
                        <button class="h-10 px-5  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800 w-[50%] ">ADD</button> 
                       </div>
                                
    
                    </form>              
                 </div>                     
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg md:w-[50%] md:p-10">
                    <div class="p-6 text-gray-900 flex justify-center font-bold text-2xl">
                        {{ __("Location Details") }}
                    </div>
                    <div class="flex justify-center w-full">
                        <div class="flex">
                            <div class="flex bg-[#e5e7eb] m-5 rounded-xl">                         
                                <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="md:w-[500px] w-[300px]  container flex-col px-8 py-8 sm:px-8 flex gap-[14px]">
                                    @csrf
                                    <p>Home Location</p>
                                    <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="home_location" placeholder="Home Location" 
                                    value="{{ $alldata->home_location }}" />
    
                                    <p>Mobile Number</p>
                                    <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="mobile_number" placeholder="Mobile Number" value="{{ $alldata->mobile_number }}" />
    
                                    <p>Jan Location</p>
                                    <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="Jan_details[0]" placeholder="Location"  
                                    value="{{ isset(json_decode($alldata->Jan_details)[0]) ? json_decode($alldata->Jan_details)[0]:"" }}" />
    
                                    <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="Jan_details[1]" placeholder="Map Link" value="{{ isset(json_decode($alldata->Jan_details)[1]) ? json_decode($alldata->Jan_details)[1]:"" }}" />
    
                                    <input class="w-full h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="date" min="<?php echo date("Y-m-d"); ?>" name="Jan_details[2]" placeholder="Time" value="{{ isset(json_decode($alldata->Jan_details)[2]) ? json_decode($alldata->Jan_details)[2]:"" }}" />
    
                                    <button type="submit" class="h-10 px-5 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800 w-[50%]">UPDATE</button>  
    
                                </form>                            
                            </div>                        
                            
                           
                           
                        </div> 
                    </div> 
                                    
                </div>
            </div>
        </div>        


        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                    <div class="p-6 text-gray-900 flex justify-center font-bold text-2xl">
                        {{ __("Other Details") }}
                    </div>

                <div class="flex justify-center">
                    <div class="flex">                       
                        <div class="flex bg-[#e5e7eb] m-10 md:w-[750px] rounded-xl w-full">                         
                            <form method="POST" action="{{ route('storedetails.view', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
                                @csrf
                                <p>Other Details</p>
                                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                placeholder="Write your Other details here..." name="other_details" placeholder="Other Details" 
                                >{!!  json_decode($alldata->other_details) !!}</textarea>

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



var i ={{  $count_events }};
btn.addEventListener('click', function(){
    ++i;
    var div = document.createElement('div');
    div.setAttribute('class', 'flex justify-center p-2 mr-5');
    var input = document.createElement('input');
    input.setAttribute('type', 'text');
    input.setAttribute('name', 'event_data[' + i + '][0]');
    input.setAttribute('class', 'mx-2 h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline');
    input.setAttribute('placeholder', 'Enter Event Name');
    // input.setAttribute('class', 'form-control');
 
    var input2 = document.createElement('input');
    input2.setAttribute('type', 'datetime-local');
    input2.setAttribute('min', `{{ $min }}`);
   
    input2.setAttribute('name', 'event_data[' + i + '][1]');
    input2.setAttribute('class', 'mx-2 h-10 px-3 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline');
    input2.setAttribute('placeholder', 'Enter Event Date');
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

function arrayRemovegallery(arr, value) { 
    
    return arr.filter(function(ele){ 
        return ele != value; 
    });
}

function deletegallerypic(e, id){
    console.log(id);
    const array = JSON.parse(e.target.getAttribute("data-array"));
    console.log(array);
    const splicearr = array.splice(id, 1); 
    const finalarr = arrayRemovegallery(array, splicearr);
    console.log(finalarr);
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
                    ajax_image_gallery : JSON.stringify(finalarr),
                    whyCall: 'AJAX_EDIT_GALLERY'
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

const selectedtheme = document.querySelector('select[name="theme"]');
selectedtheme.addEventListener('change', selectedthemechecker);
function selectedthemechecker(e){  
    const value = e.target.value;
    console.log(value);
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
                    theme : value,
                    whyCall: 'AJAX_THEME'
                })
            })
            .then((data) => {
                if(data.status==200){
                    // location.reload();
                }
            })
            .catch(function(error) {
                console.log(error);
            });
  
}





const loader_slug = document.querySelector('.loader_slug');

loader_slug.style.display ="none";
// none submit

const slugsubmit = document.querySelector('.checkslugcontainer');
slugsubmit.style.display ="none";


const slug = document.querySelector('input[name="slug"]')

slug.addEventListener('input', slugchecker);

function slugchecker(e){
loader_slug.style.display ="block";

    const prevval = e.target.value;
    const value = prevval.replace(/ /g,"-");
    e.target.value = value;
    
    let url = '{{ route("slugchecker") }}';
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
                    slug : value
                })
            })
            .then(function (a) {
            return a.json(); // call the json method on the response to get JSON
            })
            .then(function (json) {
            console.log(json);
                    loader_slug.style.display ="none";
                if(json=="NOT_THERE"){
                    if(value.length > 1){
                    slug.classList.remove('focus:border-rose-600');
                    slug.classList.remove('border-rose-600');
                    slug.classList.add('focus:border-green-600');
                    slug.classList.add('border-green-600');
                    slugsubmit.style.display ="block";
                  }else{

                    slugsubmit.style.display ="none";
                    slug.classList.remove('focus:border-green-600');
                    slug.classList.remove('border-green-600');
                    slug.classList.add('focus:border-rose-600');
                    slug.classList.add('border-rose-600');
                  }
                }
                else{                    
                    slugsubmit.style.display ="none";
                    slug.classList.remove('focus:border-green-600');
                    slug.classList.remove('border-green-600');
                    slug.classList.add('focus:border-rose-600');
                    slug.classList.add('border-rose-600');                    
                }
              })
           
            .catch(function(error) {
                console.log(error);
            });

  
}


   </script>

</x-app-layout>
