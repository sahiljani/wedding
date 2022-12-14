<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;
    protected $fillable = ['marriage_id','id','groom_name','bride_name','groom_father_name','groom_mother_name','bride_father_name','bride_mother_name','home_location','Jan_details','events','mobile_number','other_details','theme','groom_image','bride_image',
    'slider_images','image_gallery','is_Lock','slug'];
    
}
