<?php

namespace App\Http\Controllers;

use App\Models\Coordinator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Certificate;
use App\Models\Project;
use App\Models\Student;
use App\Models\Friend;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
// use Symfony\Component\HttpFoundation\Session\Session;
// use Illuminate\Console\View\Components\Alert;

class admin extends Controller
{
    public function admindashboard()
    {
        $count['department']=Coordinator::count();
        $count['certificate']=Certificate::count();
        $count['project']=Project::count();
        $count['student']=Student::where('status','Approved')->count();
        $data1=compact('count');
        
        if (Session::get('role')=='Admin') {
            return view('Admin/admindashboard')->with($data1);
        }
        else{
        return redirect('/login');
        }
    }
    public function studentdetail($id)
    {
        if (Session::get('role')=='Admin') {
            $student1=Student::find($id);
            if(is_null($student1))
            {
            return redirect('admin/studentdetail');
            }
            else
            {
                $student=Student::where('student_id',$id)->get()->toArray();
               
                    // $enrollment=Student::where('department',Session::has('department'))->get('enrollment')->toArray();
                    $enrollment=Student::where('student_id',$id)->get('enrollment')->toArray();
                    $certificate=Certificate::wherein('enrollment',$enrollment)->where('status','Approved')->get()->toArray();
                    $project=Project::wherein('enrollment',$enrollment)->where('status','Approved')->get()->toArray();
                    $i=1;
                    $count['certificate']=Certificate::wherein('enrollment',$enrollment)->where('status','Approved')->count();
                    $count['project']=Project::wherein('enrollment',$enrollment)->where('status','Approved')->count();
                    $count['friend']=Friend::wherein('friend_of_friend_id',$enrollment)->where('status','Approved')->count();
                    $point=Certificate::wherein('enrollment',$enrollment)->where('status','Approved')->sum('point');
                    
                    $data1=compact('student','certificate','i','project','count','point');
                    return view('Admin/studentdetail')->with($data1);
                    
           
            }

        }
        
        else
        return redirect('/login');
       
        
       
    }
    public function coordinatorlist()
    {
        if(Session::has('error'))
        {
            Alert::info('Done!','Co-ordinator created successfully');
            Session::forget('error');
        }
        
        if(Session::has('departmenterror'))
        {
            Alert::Warning('Alert!','Department Already exist!!');
            Session::forget('departmenterror');
        }
        
        
        $coordinator=Coordinator::get()->toArray();
        $i=1;
        
                $data2=compact('coordinator','i');
        
        if (Session::get('role')=='Admin') {
            return view('Admin/coordinatorlist')->with($data2);
        }
        return redirect('/login');
    }
    public function createcoordinator()
    {

        if (Session::get('role')=='Admin') {
            return view('Admin/createcoordinator');
        }
        return redirect('/login');
    }
    public function editcoordinator($id)
    {
        if (Session::get('role')=='Admin') {
            $coordinator=Coordinator::find($id);
            // print_r($coordinator);
            // die();
            if(is_null($coordinator))
            {
                return redirect('admin/coordinatorlist');
            }
            else
            {
                $data=compact('coordinator');
            return view('Admin/editcoordinator')->with($data);
            }
        }
        return redirect('/login');
    }
     public function deletecoordinator($id)
     {
         if (Session::get('role')=='Admin') {
            $coordinator=Coordinator::find($id);
            if(is_null($coordinator))
            {
                return redirect('admin/coordinatorlist');
            }
            else
            {
                $coordinator->delete();
                return redirect('admin/coordinatorlist');
            }
            
     }
     else
     {
        return redirect('/login');
     }
    }
    public function deletestudent($id)
    {
    if (Session::get('role')=='Admin') {
    $student=Student::find($id);
    if(is_null($student))
    {
    return redirect('admin/studentview');
    }
    else
    {
    $student->delete();
    return redirect('admin/studentview');
    }

    }
    else
    {
    return redirect('/login');
    }
    }
    public function studentview(Request $req)
    {
        if (Session::get('role')=='Admin') {
            $search = $req['search'] ?? "";
            if($search != ""){
                $student = Student::where('name','LIKE',"$search%")->orwhere('enrollment','LIKE',"$search%")->get();
            }
            else{
                $student=Student::get();
            }
            $i=1;
            $data=compact('student','i','search');
            return view('Admin/studentview')->with($data);
        }
        return redirect('/login');
    }
    public function adminleader( Request $req)
    {
        if (Session::get('role')=='Admin') {
            $search = $req['search'] ?? "";
            if($search != ""){
                $student1 = Student::where('name','LIKE',"$search%")->orwhere('enrollment','LIKE',"$search%")->orderby('point','DESC')->get();
            }
            else{
                $student1=Student::orderby('point','DESC')->get();
            }
            // $student1=Student::orderby('point','DESC')->get();
            $i=1;
            $data=compact('student1','i','search');
            return view('Admin/adminleader')->with($data);
        }
        return redirect('/login');
    }
    public function coordinatorauth(Request $req)
    {
        $count = 0;
        // print_r($req->toArray());
        $coordinator = Coordinator::get()->toArray();
        for ($i = 0; $i < Coordinator::count(); $i++) {
            if ($coordinator[$i]['department'] == $req->Department) {
                Session::put('departmenterror','1');
                $count=1;
            }
        }
        if ($count == 0) {
            if ($req->Password == $req->Cpassword) {
                $coordinator1 = new Coordinator;
                $coordinator1->department = $req['Department'];
                $coordinator1->name = $req['Co-ordinator'];
                $coordinator1->email = $req['Email'];
                $coordinator1->contact_number = $req['Contactnumber'];
                $coordinator1->password = Hash::make($req['Password']);
                $coordinator1->updated_by = 'Admin';
                $coordinator1->created_by = 'Admin';
                $coordinator1->save();
                Session::put('error','co-ordinator has been created.');
                
            }
        } 
        return redirect('admin/coordinatorlist');
    }
    public function updatecoordinator($id,Request $req)
    {
        if (Session::get('role')=='Admin') {
        $coordinator=Coordinator::find($id);
         $coordinator->department = $req['Department'];
         $coordinator->name = $req['Co-ordinator'];
         $coordinator->email = $req['Email'];
         $coordinator->contact_number = $req['Contactnumber'];
         $coordinator->updated_at=now();
         $coordinator->save();
         return redirect('admin/coordinatorlist');
        }
        else
        {
        return redirect('/login');
        }

    }
}
