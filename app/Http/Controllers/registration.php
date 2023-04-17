<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Admin;
use App\Models\Coordinator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class registration extends Controller
{
    public function signup()
    {
        $department=Coordinator::get();
        $data=compact('department');
        return view('signup')->with($data);
    }
    public function valid(Request $request)
    {
        $data = $request->all();

        //  print_r($data);

        $request->validate(
            [
                'Enrollment' => 'required|numeric|min_digits:12|max_digits:12',
                'Name' => 'required|regex:/^[\pL\s\-]+$/u',
                'email' => 'required|email',
                'Contactnumber' => 'required|numeric|min_digits:10|max_digits:10',
                'password' => 'required|min:8|max:20|confirmed',
                'password_confirmation' => 'required',
                'Department' => 'required|not_in:Choose department',
                'Semester' => 'required|not_in:Choose semester',
                'Gender'=>'required|in:Male,Female,Other',
                'Course'=>'required|in:BE,ME',
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
        $student->semester=$data['Semester'];
        $student->Course=$data['Course'];
        $student->Gender=$data['Gender'];
        $student->photo='photo.png';
        $student->status='Pending';
        $student->point='0';
        $student->save();
        $mail_data=[
            'recipient'=>$data['email'],
            'fromEmail'=>"mihirpatel1426@gmail.com",
            'fromName'=>'VGEC',
            'subject'=>'Registration Request',
            'body'=>'Your Registration Request has been recieved.
            Please Wait for Approval.'
        ];
        Mail::send('email',$mail_data,function($message) use ($mail_data){
            $message->to($mail_data['recipient'])->from($mail_data['fromEmail'],$mail_data['fromName'])->subject($mail_data['subject']);
        } );
        return redirect('/login');
        }
        else
        {
            if($error==1)
            {
            echo "<script>
            alert('You have already registered');
            window.location.href='/signup';
           </script>";
            
            // return redirect('/signup')->with('error', 'Invalid Credentials ');
            }
            if($error==2)
            {
            echo "<script>
                alert('Your request is pending'); 
                window.location.href='/signup';
            </script>";
             
            } 
            echo $error;
             
                
        }
        
    }

    public function login()
    {
        return view('login');
    }
    public function next()
    {
        if(session()->has('role'))
        {
            if(session('role')=='Admin')
            {
                return redirect('admin/admindashboard');
            }
            else if(session('role')=='Student')
            {
                return redirect('student/profile');
            }
            else
            {
                return redirect('co-ordinator/dashboard');
            }
        }
        else
        {
            return redirect('/login');
        }
    }
    public function auth(Request $request)
    {
        $student = Student::get()->toArray();
        $flag = 0;
        if ($request->choice == 'Student') {
            for ($i = 0; $i < Student::count(); $i++) {
                if ((($request->Enrollment == $student[$i]['enrollment'])||($request->Enrollment ==
                $student[$i]['email'])) && (Hash::check($request->Password,$student[$i]['password']))) {
                    $flag = 1;
                    $check = $student[$i]['status'];
                    $request->session()->put('id',$student[$i]['student_id']);
                    $request->session()->put('enrollment',$student[$i]['enrollment']);
                    $request->session()->put('role',$request->choice );
                }

                //  print_r($student[$i]);
                //  echo "<br>";
            }
            if ($flag == 1) 
            {
                if($check == "Approved")
                    return redirect('/next');
                else{
                   echo "<script>
                       alert('Your request has not been approved yet');
                       window.location.href = '/login';
                   </script>";
                }
            }
            else 
            {
                return back()->with('error', 'Invalid Credentials ');
            }
        }
        else if($request->choice == 'Admin')
        {
            $admin=Admin::get()->toArray();
            // echo "<pre>"; 
            // print_r($admin);
            if ((($request->Enrollment ==
            $admin[0]['email'])) && (Hash::check($request->Password,$admin[0]['password'])))
            {
                $flag=1;
                $request->session()->put('role',$request->choice );
                // return redirect('/admindashboard');
            }
            if ($flag == 1)
            {
            return redirect('/next');
            }
            else
            {
            return back()->with('error', 'Invalid Credentials ');
            }
        }
        else
        {
            $coordinator=Coordinator::get()->toArray();
            print_r($coordinator);
            
            for ($i = 0; $i < Coordinator::count(); $i++) { 
                if ((($request->Enrollment == $coordinator[$i]['email'])) && (Hash::check($request->Password,$coordinator[$i]['password']))) {
                $flag = 1;
                $request->session()->put('id',$coordinator[$i]['co-ordinator_id']);
                $request->session()->put('name',$coordinator[$i]['name']);
                $request->session()->put('role',$request->choice );
                $request->session()->put('department',$coordinator[$i]['department']);
                }

                // print_r($student[$i]);
                // echo "<br>";
                }
            if ($flag == 1)
            {
            return redirect('/next');
            }
            else
            {
            return back()->with('error', 'Invalid Credentials ');
            }
        }

        //  echo "    <pre>";
        //  print_r($student);

    }
    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
    public function forgetpassword()
    {
        // session()->flush();
        return view('ForgetPassword');
    }
         
}
