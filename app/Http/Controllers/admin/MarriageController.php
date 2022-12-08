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

    public function store(Request $request){
        // dd($request->name);
        $name = $request->name;        
        $marriage_date = $request->marriage_date;
        $data=array(
            'name'=>$name,
            "marriage_date"=>$marriage_date           
        );
        $marriage =  Marriage::create($data);
        $details_data = array(
            'marriage_id' =>$marriage->id
        );              
        Details::Create($details_data);        
        return Redirect::back()->withErrors(['msg' => 'Data added']);       
    }

    public function storedetails(Request $request, $id){     


        $olddata = Details::where('id',$id)->first();      

        $data=array();
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
    
                $image->move(public_path("/assets/images/$id"), $image_path);
                array_push($allimages, $image_path);
            }

            $data['slider_images'] = json_encode($allimages);
        }    
        
        if($request->whyCall == "AJAX_EDIT_SLIDERS"){
            if($request->ajax_slider_images){
                $data['slider_images'] = $request->ajax_slider_images;
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

    public function edit($id){
        $alldata = Details::where('marriage_id',$id)->first();          
        return view('edituser', compact('alldata'));
    }
}
