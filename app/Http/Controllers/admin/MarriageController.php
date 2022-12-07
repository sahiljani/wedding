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
        $data=array();
        if($request->groom_name){
            $data['groom_name'] = $request->groom_name;
        }
        if($request->bride_name){
            $data['bride_name'] = $request->bride_name;
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
