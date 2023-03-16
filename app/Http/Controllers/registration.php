<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registration extends Controller
{
    public function signup()
    {
        return view('signup');
    }
    public function valid(Request $request)
    {
        $data = $request->all();

        //  print_r($data);

        $request->validate(
            [
                'Enrollment' => 'required|numeric|min_digits:12|max_digits:12',
                'Name' => 'required|alpha',
                'email' => 'required|email',
                'Contactnumber' => 'required|numeric|min_digits:10|max_digits:10',
                'password' => 'required|min:8|max:20|confirmed',
                'password_confirmation' => 'required',
                'Department' => 'required|not_in:Choose department',
            ]
        );
        $data1 = compact('data');
        return $this->register($data)->with($data1);
    }
    public function register($data)
    {
        // print_r($data);
        $flag1=0;
        $student1 = Student::get()->toArray();
        // print_r($student1);
        for ($j = 0; $j < Student::count(); $j++) {
            // print_r($student1[$j]);
            // echo "<br>";
            if ($data['Enrollment'] == $student1[$j]['enrollment']) {
                $flag1=1;
                if ($student1[$j]['status'] == 'Approved') {
                    
                    $error=1;
                }
                 else {
                    $error=2;    
                }
            }
        }
        if($flag1==0)
        {
        $student = new Student;
        $student->enrollment = $data['Enrollment'];
        $student->name = $data['Name'];
        $student->email = $data['email'];
        $student->contact_num = $data['Contactnumber'];
        $student->password = Hash::make($data['password']);
        $student->department = $data['Department'];
        $student->status='Pending';
        $student->save();
        return view('login');
        }
        else
        {
            if($error==1)
            {
            echo "<script>";
            echo "alert('You have already registered')";
            echo "</script>";
            }
            if($error==2)
            {
            echo "<script>";
            echo "alert('Your request is pending')";
            echo "</script>";  
            }  
            return view('signup');     
        }
        
    }

    public function login()
    {
        return view('login');
    }
    public function next(Request $request)
    {
        $student = Student::get()->toArray();
        $flag = 0;
        if ($request->choice == 'Student') {
            for ($i = 0; $i < Student::count(); $i++) {
                if ((($request->Enrollment == $student[$i]['enrollment'])||($request->Enrollment ==
                $student[$i]['email'])) && (Hash::check($request->Password,$student[$i]['password']))) {
                    $flag = 1;
                }

                //  print_r($student[$i]);
                //  echo "<br>";
            }
            if ($flag == 1) {
                return view('next');
            } else {
                return back()->with('error', 'Invalid Credentials ');
                
                //  return view('login');
            }
        }

        //  echo "    <pre>";
        //  print_r($student);

    }
    public function Admin()
    {
        return view('superadmin');
    }
    
}
