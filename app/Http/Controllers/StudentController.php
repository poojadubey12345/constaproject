<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function index(){
      $students = Students::latest()->paginate(10);
      return view('index',compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function saveStudents(Request $request){
      $request->validate([
            'student_name' => 'required',
            'roll_no' => 'required|unique:students',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'student_profile/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Students::create($input);
     
        return redirect()->route('/')
                        ->with('success','Students created successfully.');
    }

    public function getstudents(){
        
        $students = Students::selectRaw('sum(sub1_score+sub2_score+sub3_score+sub4_score+sub5_score) AS total_score , roll_no, student_name,image,student_class')->groupBy('roll_no')->orderby('total_score','DESC')->get();
       
        return view('getstudents',compact('students'));
           
    }
}
