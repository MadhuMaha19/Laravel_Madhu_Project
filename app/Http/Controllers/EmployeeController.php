<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class EmployeeController extends Controller
{
   
    public function store(Request $request){
        $employees = new Employee();
        $employees->id_format=$request->input('id_format')=='true'?1:0;
        $employees->organisation_name=$request->input('organisation_name');
        $employees->organisation_address=$request->input('organisation_address');
        $employees->user_name=$request->input('user_name');
        $employees->designation=$request->input('designation');
        if($request->hasfile('user_image')){
            $file=$request->file("user_image");
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/employee/',$filename);
            $employees->user_image =$filename;
    
    
        }
        else{
            return $request;
            $employees->user_image='';
        }
        
        
    
        
        $employees->address=$request->input('address');
        $employees->DOB=$request->input('DOB');
        $employees->blood_group=$request->input('blood_group');
        $employees->phone_number=$request->input('phone_number');
        $employees->email_id=$request->input('email_id');
        if($request->hasfile('bg_image')){
            $file=$request->file("bg_image");
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/employee/',$filename);
            $employees->bg_image =$filename;
    
    
        }
        else{
            return $request;
            $employees->bg_image='';
        }
        $employees->save();
        echo "FRONT PAGE ID";
        echo "</br>";
        echo "</br>";
        echo "</br>";
        echo $employees->organisation_name;
        echo "</br>";
        echo "</br>";
        echo $employees->organisation_address;
        echo "</br>";
        echo "</br>";
        echo $employees->user_name;
        echo "</br>";
        echo "</br>";
        echo $employees->designation;
        echo "</br>";
        echo "</br>";
        echo $employees->address;
        echo "</br>";
        echo "</br>";
        echo "</br>";
        echo "</br>";
        echo "</br>";
        
        echo "BACK PAGE ID";
        echo "</br>";
        echo "</br>";
        echo "</br>";
        echo $employees->DOB;
        echo "</br>";
        echo "</br>";
        echo $employees->blood_group;
        echo "</br>";
        echo "</br>";
        echo $employees->phone_number;
        echo "</br>";
        echo "</br>";
        echo $employees->email_id;
        echo "</br>";
        echo "</br>";

           
   
    }
}
