<?php

namespace App\Http\Controllers\admin;

use App\Models\Marriage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Details;
use Illuminate\Support\Facades\Redirect;

class MarriageController extends Controller
{
    //
    public function index(){        
        return view('dashboard');
    }

    public function fromadd($id){
        $alldata = Details::where('marriage_id',$id)->first();     
        $marriagedata = Marriage::where('id',$id)->first();  
        if($alldata->is_Lock){
            return view('dashboard');

        }else{
            return view('themes.publicForm', compact('alldata', 'marriagedata'));   
        }
            
    }

    public function frontendview($slug){ 
        $alldata = Details::where('slug',$slug)->first();         
        $marriage = Marriage::where('id',$alldata->marriage_id)->first();  
       
        if($alldata->theme == "theme1"){    
            return view('themes.theme1.frontend', compact('alldata', 'marriage'));    
        }
        if($alldata->theme == "theme2"){    
            return view('themes.theme2.frontend', compact('alldata', 'marriage'));    
        }
        if($alldata->theme == "theme3"){    
            return view('themes.theme3.frontend', compact('alldata', 'marriage'));    
        }
        // return view('themes.theme1.frontend', compact('alldata', 'marriage'));    
    }

    
    public function store(Request $request){
        // dd($request->name);
        $name = $request->name;        
        $marriage_date = $request->marriage_date;
        $data=array(
            'name'=>$name,
            "marriage_date"=>$marriage_date           
        );
        $blank_array = array();
        $marriage =  Marriage::create($data);
        $details_data = array(
            'marriage_id' =>$marriage->id,
            'slug' =>$marriage->id,
            'slider_images' => json_encode($blank_array),
            'events' =>  json_encode($blank_array),
            'image_gallery'=> json_encode($blank_array)  
        );              
        // dd($details_data);
        Details::Create($details_data);        
        return Redirect::back()->withErrors(['msg' => 'Data added']);       
    }

    public function delete($id){
        Marriage::where('id', $id)->delete();
        Details::where('marriage_id', $id)->delete();
        return Redirect::back()->withErrors(['msg' => 'Data deleted']);       
        
    }

    public function storedetails(Request $request, $id){
       
        $olddata = Details::where('id',$id)->first();          
        
        $data=array();
        if($request->is_Lock){
            $is_Lock = $request->is_Lock === 'true'? true: false;
            $data['is_Lock'] = $is_Lock;
        }
        if($request->slug){
            $data['slug'] = $request->slug;
        }
        if($request->groom_name){
            $data['groom_name'] = $request->groom_name;
        }
        if($request->bride_name){
            $data['bride_name'] = $request->bride_name;
        } 
        if($request->groom_father_name){
            $data['groom_father_name'] = $request->groom_father_name;
        }
        if($request->groom_mother_name){
            $data['groom_mother_name'] = $request->groom_mother_name;
        } 
        if($request->bride_father_name){
            $data['bride_father_name'] = $request->bride_father_name;
        }
        if($request->bride_mother_name){
            $data['bride_mother_name'] = $request->bride_mother_name;
        } 
        if($request->home_location){
            $data['home_location'] = $request->home_location;
        }
        if($request->Jan_details){
            $data['Jan_details'] = json_encode($request->Jan_details);
        } 
        if($request->event_data){       
            $data['events'] = json_encode($request->event_data);
        } 
        if($request->mobile_number){
            $data['mobile_number'] = $request->mobile_number;
        } 
        if($request->other_details){       
            $data['other_details'] = json_encode($request->other_details);
        }  
        if($request->theme){       
            $data['theme'] = $request->theme;
        }   


        if($request->marriage_date){       
            $marriagedata['marriage_date'] = $request->marriage_date;
            $marriage_id = $request->marriage_id;
      
            Marriage::where('id',$marriage_id)->update($marriagedata);


        }   
    
        if($request->groom_image){       
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp'
            ]);       
            $groom_image = time().'.'.$request->groom_image->extension(); 

            $request->groom_image->move(public_path("/assets/images/$id"), $groom_image);

            $data['groom_image'] = $groom_image;
        } 
        if($request->bride_image){       
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp'
            ]);       
            $bride_image = time().'.'.$request->bride_image->extension(); 

            $request->bride_image->move(public_path("/assets/images/$id"), $bride_image);

            $data['bride_image'] = $bride_image;
        }

        if($request->slider_images){   
            $images = $request->slider_images;
            $allimages = json_decode($olddata->slider_images);
            foreach($images as $key => $image) {
                $request->validate([
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp'
                ]);      

                $image_path = $key.time().'.'.$image->extension(); 
    
                $image->move(public_path("/assets/images/$id/slider"), $image_path);
                array_push($allimages, $image_path);
            }

            $data['slider_images'] = json_encode($allimages);
        }        


        if($request->image_gallery){   
            $images = $request->image_gallery;
            $allimages = json_decode($olddata->image_gallery);
            foreach($images as $key => $image) {
                $request->validate([
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp'
                ]);      

                $image_path = $key.time().'.'.$image->extension(); 
    
                $image->move(public_path("/assets/images/$id/imggallary"), $image_path);
                array_push($allimages, $image_path);
            }

            $data['image_gallery'] = json_encode($allimages);
        }  

        if($request->whyCall == "AJAX_EDIT_SLIDERS"){
            if($request->ajax_slider_images){
                $data['slider_images'] = $request->ajax_slider_images;
                Details::where('id',$id)->update($data);
                return response()->json("DONE", 200);
            }
        }
        if($request->whyCall == "AJAX_EDIT_GALLERY"){
            if($request->ajax_image_gallery){               
                $data['image_gallery'] = $request->ajax_image_gallery;
                Details::where('id',$id)->update($data);
                return response()->json("DONE", 200);
            }
        } 
        if($request->whyCall == "AJAX_THEME"){
            if($request->AJAX_THEME){               
                $data['theme'] = $request->theme;
                Details::where('id',$id)->update($data);
                return response()->json("DONE", 200);
            }
        }
        
        
        
        
      
        Details::where('id',$id)->update($data);
        return Redirect::back()->withErrors(['msg' => 'Data added']);      
    }

    public function view(){

        $marriage = Marriage::all();        
        return view('listuser', compact('marriage'));       
    }

    // public function update(Request $request, $id){              
    //     $Marriage = Marriage::find($id);   
       
    //     $Marriage->marriage_date = $request;
    //     $Marriage->save(); 
    //     return view('edituser', compact('marriage'));      
    // }

    public function edit($id){      

        $alldata = Details::where('marriage_id',$id)->first(); 
        $marriagedata = Marriage::where('id',$id)->first();        
        return view('edituser', compact('alldata','marriagedata'));
    }
    public function storedetails_guest(Request $request, $id){

        $olddata = Details::where('id',$id)->first();             
       
        if($olddata->is_Lock){
           
        return Redirect::back()->withErrors(['msg' => 'no accecss']);      

        }else{
            $this->storedetails($request, $id);
        return Redirect::back()->withErrors(['msg' => 'Data added']);      

        }
    }

    public function slugchecker(Request $request){
        if (Details::where('slug', '=', $request->slug)->exists()) {
            return response()->json("THERE", 200);
            
        }else{
            return response()->json("NOT_THERE", 200);
         }
    }




}
