<?php

namespace App\Http\Controllers;
use App\Models\Coordinator;
use App\Models\Certificate;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class coordinators extends Controller
{
    public function coordinatordashboard()
    {
    if (Session::get('role')=='Co-ordinator') {
        $student=Student::where('department',Session::get('department'))->count();
  
   // $count['department']=Coordinator::count();
    $enrol['certificate']=Certificate::get('enrollment');
    $enrol['project']=Project::get('enrollment');
    $count['student']=Student::where('status','Approved')->where('department',Session::get('department'))->count();
    $count['project']=Student::wherein('enrollment',$enrol['project'])->where('department',Session::get('department'))->count();
    $count['certificate']=Student::wherein('enrollment',$enrol['certificate'])->where('department',Session::get('department'))->count();
    
    $data1=compact('count');
    
   // if (Session::get('role')=='Co-ordinator') {
        return view('Co_ordinator.Coordinatordashboard')->with($data1);
    
    }
    else
    return redirect('/login');

    }
    public function studentview(Request $req,$semester=null)
    {
        
        if (Session::get('role')=='Co-ordinator') {
            if($semester==null)
            {
            $search = $req['search'] ?? "";
            if($search != ""){
                $student = Student::where('department',Session::get('department'))->where('name','LIKE',"%$search%")->orwhere('enrollment','LIKE',"$search%")->get();
            }
            else{
                $student=Student::where('department',Session::get('department'))->get();
            }
        }
        else
        {
            $search = $req['search'] ?? "";
            if($search != ""){
                $student = Student::where('semester',$semester)->where('department',Session::get('department'))->where('name','LIKE',"%$search%")->orwhere('enrollment','LIKE',"$search%")->get();
            }
            else{
                $student=Student::where('department',Session::get('department'))->where('semester',$semester)->get();
            }
        }
        if(!$semester)
        {
            $semester="All";
        }
        $i=1;
        $data=compact('student','i','search','semester');
        
    return view('Co_ordinator.studentview')->with($data);
    }
    else
    return redirect('/login');

    }
    public function certificaterequest()
    {
        if (Session::get('role')=='Co-ordinator') {
            // $enrollment=Student::where('department',session('department'))->get('enrollment')->toArray();
            $enrollment=Student::get('enrollment')->toArray();
            $certificate=Certificate::wherein('enrollment',$enrollment)->where('coordinator',Session::get('name'))->where('status','Pending')->get()->toArray();
            $i=1;
            
                $data=compact('certificate','i');
            
            return view('Co_ordinator.CertificateReQ')->with($data);
            }
            else
            return redirect('/login');
    }
    public function coordinatorprofile()
    {
    if (Session::get('role')=='Co-ordinator') {
        $student=Student::where('department',Session::get('department'))->where('status','Approved')->get();
        $coordinator=Coordinator::where('co-ordinator_id',Session::get('id'))->get();
        // echo Session::get('department');
        // echo $student;
        // echo $coordinator;
        $count=$student->count();
        $data=compact('coordinator','count');
    return view('Co_ordinator.Profile')->with($data);
    }
    else
    return redirect('/login');

    }
    public function deletestudent($id)
    {
    if (Session::get('role')=='Co-ordinator') {
    $student=Student::find($id);
    if(is_null($student))
    {
    return redirect('co-ordinator/studentview');
    }
    else
    {
    $student->delete();
    return redirect('co-ordinator/studentview');
    }

    }
    else
    {
    return redirect('/login');
    }
    }
    public function studentrequest()
    {
    if (Session::get('role')=='Co-ordinator') {
        $student=Student::where('department',Session::get('department'))->where('status','Pending')->get()->toArray();
        $i=1;
        $data=compact('student','i');
    return view('Co_ordinator.stdRequest')->with($data);
    }
    else
    return redirect('/login');

    }
    public function projectrequest()
    {
    if (Session::get('role')=='Co-ordinator') {
        $enrollment=Student::where('department',session('department'))->get('enrollment')->toArray();
        $project=Project::wherein('enrollment',$enrollment)->where('status','Pending')->get()->toArray();
        $i=1;
        $data=compact('project','i');

       
    return view('Co_ordinator.ProjectReq')->with($data);
    }
    else
    return redirect('/login');

    }
    
    public function studentapprove($id)
    {
    if (Session::get('role')=='Co-ordinator') 
    {
        $student=Student::find($id);
        if(is_null($student))
        {
        return redirect('co-ordinator/studentrequest');
        }
        $student->status='Approved';
        $student->save();
        $mail_data=[
            'recipient'=>$student['email'],
            'fromEmail'=>"mihirpatel1426@gmail.com",
            'fromName'=>'VGEC',
            'subject'=>'Request Approval',
            'body'=>'Your Registration Request has been Approved.
            Now you can Login.'
        ];
        Mail::send('email',$mail_data,function($message) use ($mail_data){
            $message->to($mail_data['recipient'])->from($mail_data['fromEmail'],$mail_data['fromName'])->subject($mail_data['subject']);
        } );
        return redirect('co-ordinator/studentrequest');
    }
    else
    return redirect('/login');

    }
    public function certificateapprove($id)
    {
    if (Session::get('role')=='Co-ordinator'||Session::get('role')=='Admin') 
    {
        $certificate=Certificate::find($id);
        if(is_null($certificate))
        {
            return redirect('co-ordinator/certificaterequest');
        }
        $certificate->status='Approved';
        $certificate->save();
        // echo $point1;
        // die();
        $studentid=Student::where('enrollment',$certificate['enrollment'])->get('student_id');
        $point1=Certificate::where('enrollment',$certificate['enrollment'])->where('status','Approved')->sum('point');
        echo $studentid;
        // die();
        foreach($studentid as $s)
        {$student=Student::find($s['student_id']);
        }
        
            $student->point=$point1;
            $student->save();
        $mail_data=[
            'recipient'=>$student['email'],
            'fromEmail'=>"mihirpatel1426@gmail.com",
            'fromName'=>'VGEC',
            'subject'=>'Certificate Approval',
            'body'=>'Your Certificate Request has been Approved.'
        ];
        Mail::send('email',$mail_data,function($message) use ($mail_data){
            $message->to($mail_data['recipient'])->from($mail_data['fromEmail'],$mail_data['fromName'])->subject($mail_data['subject']);
        } );
        return redirect('co-ordinator/certificaterequest');
    }
    else
    return redirect('/login');

    }
    public function projectapprove($id)
    {
    if (Session::get('role')=='Co-ordinator') 
    {
        $project=Project::find($id);
        if(is_null($project))
        {
        return redirect('co-ordinator/projectrequest');
        }
        $project->status='Approved';
        $project->save();
        // $mail_data=[
        //     'recipient'=>$project['email'],
        //     'fromEmail'=>"mihirpatel1426@gmail.com",
        //     'fromName'=>'VGEC',
        //     'subject'=>'Request Approval',
        //     'body'=>'Your Registration Request has been Approved.
        //     Now you can Login.'
        // ];
        // Mail::send('email',$mail_data,function($message) use ($mail_data){
        //     $message->to($mail_data['recipient'])->from($mail_data['fromEmail'],$mail_data['fromName'])->subject($mail_data['subject']);
        // } );
        return redirect('co-ordinator/projectrequest');
    }
    else
    return redirect('/login');

    }
    public function studentdelete($id)
    {
    if (Session::get('role')=='Co-ordinator')
    {
     $student=Student::find($id);
     if(is_null($student))
     {
     return redirect('co-ordinator/studentview');
     }
     $student->delete();
     return redirect('co-ordinator/studentview');
    }
    else
    return redirect('/login');

    }
    public function certificatedelete($id)
    {
    if (Session::get('role')=='Co-ordinator')
    {
     $certificate=Certificate::find($id);
     if(is_null($certificate))
     {
     return redirect('co-ordinator/certificaterequest');
     }
     $certificate->delete();
     return redirect('co-ordinator/certificaterequest');
    }
    else
    return redirect('/login');

    }
    public function projectdelete($id)
    {
    if (Session::get('role')=='Co-ordinator')
    {
     $project=Project::find($id);
     if(is_null($project))
     {
     return redirect('co-ordinator/projectrequest');
     }
     $project->delete();
     return redirect('co-ordinator/projectrequest');
    }
    else
    return redirect('/login');

    }
    
    // public function studentsemesterview($id)
    // {   
    //     if (Session::get('role')=='Co-ordinator') {
    //         $student=Student::where
    //         }
    //         return redirect('/login');

    // }
    public function view()
    {
    return view('Co_ordinator.Coordinatordashboard');
    }
    public function viewpdf($filename)
    {
        if (Session::get('role')=='Co-ordinator'||Session::get('role')=='Admin')
    {
        $name=$filename;
        $data=compact('name');
        return view('viewpdf')->with($data);
    }
    else
    return redirect('/login');        
    }
}
