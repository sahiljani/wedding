<x-guest-layout> 
<div class="main">

    <?php
        $mindate = date("Y-m-d");
        $mintime = date("h:i");
        $min = $mindate."T".$mintime;
        $maxdate = date("Y-m-d", strtotime("+10 Days"));
        $maxtime = date("h:i");
        $max = $maxdate."T".$maxtime;
     ?>     
           
          <div class="themeoption">
            <form method="POST" action="{{ route('storedetails.view.guest', ['id' => $alldata->id]) }}" enctype="multipart/form-data" 
                class="flex justify-end container px-8 py-8 sm:px-8 gap-[14px]">
                @csrf            
                <select class="form-select appearance-none
                    block w-[40%] md:w-[20%]               
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
                        <option  value="theme1" {{ $alldata->theme == "theme1" ? "selected": " " }}  >Theme1</option>
                        <option value="theme2" {{ $alldata->theme == "theme2" ? "selected": "" }} >Theme2</option> 
                        <option value="theme3" {{ $alldata->theme == "theme2" ? "selected": "" }} >Theme3</option>                                         
                                            
                </select>
                <button type="submit" class="px-5 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Preview</button>  
        
            </form>  
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
        
                                <form method="POST" action="{{ route('storedetails.view.guest', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
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
                               
                                <form method="POST" action="{{ route('storedetails.view.guest', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
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
                                <form method="POST" action="{{ route('storedetails.view.guest', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col px-8 py-8 sm:px-8 flex gap-[14px]">
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
                                <form method="POST" action="{{ route('storedetails.view.guest', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col   px-8 py-8 sm:px-8 flex gap-[14px]">
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
                                <form method="POST" action="{{ route('storedetails.view.guest', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col px-8 py-8 sm:px-8 flex gap-[14px]">
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
                        <form method="POST" action="{{ route('storedetails.view.guest', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="md:w-[750px] flex container flex-col flex-wrap px-8 py-8 sm:px-8 gap-[14px]">
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
                                    <form method="POST" action="{{ route('storedetails.view.guest', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="md:w-[500px] w-[300px]  container flex-col px-8 py-8 sm:px-8 flex gap-[14px]">
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
                                <form method="POST" action="{{ route('storedetails.view.guest', ['id' => $alldata->id]) }}" enctype="multipart/form-data" class="container flex-col  px-8 py-8 sm:px-8 flex gap-[14px]">
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
</x-guest-layout>