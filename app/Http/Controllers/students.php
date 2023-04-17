<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Project;
use App\Models\Certificate;
use App\Models\Coordinator;
use App\Models\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Barryvdh\DomPDF\Facade\Pdf;

class students extends Controller
{
    public function studentprofile()
    {

        

        if (session('role')=='Student') {
            if(session('img'))
        {
            Alert::success('Done!','Profile Picture Set Successfully');
            session()->forget('img');
        }
        if(session('delimg'))
        {
            Alert::success('Done!','Profile Picture Removed');
            session()->forget('delimg');
        }
            $student=Student::where('student_id',session('id'))->get()->toArray();
            $student1=Student::where('student_id',session('id'))->get('enrollment')->toArray();
            $count['certificate']=Certificate::where('enrollment',$student1)->where('status','Approved')->count();
            $count['project']=Project::where('enrollment',$student1)->where('status','Approved')->count();
            $count['friend']=Friend::where('friend_of_friend_id',$student1)->where('status','Approved')->count();
            $point=Certificate::where('enrollment',session('enrollment'))->where('status','Approved')->sum('point');
            $data=compact('student','count','point');
            return view('Student.Studentprofile')->with($data);
            }
            else
            return redirect('/login');
    }
    public function certificateupload()
    {
        if (session('role')=='Student') {
            if(session('certiupload'))
            {
                Alert::success('Done!','Certificate Uploaded Succesfully.');
            session()->forget('certiupload');
            }
            $faculty=Coordinator::get('name')->toArray();
            // print_r($faculty);
            $data=compact('faculty');
            return view('Student.Certificateupload')->with($data);
            }
            else
            return redirect('/login');
    }
    public function studentprojectupload()
    {
        if (session('role')=='Student') {
            if(session('projectupload'))
            {
                Alert::success('Done!','Project has been uploaded. Wait for approval');
                session()->forget('projectupload');
            }
            return view('Student.project(internship)');
            }
            else
            return redirect('/login');
    }
    public function studentleaderboard()
    {
        if (session('role')=='Student') {
            if (session('role')=='Student') {
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
            return view('Student.leaderboard(main)')->with($data);
            }
            else
            return redirect('/login');
    }
}
    public function studentupload()
    {

        session()->put('img','profile picture set sucessfully.');

        if (session('role')=='Student') {
            return view('Student.Upload_photo');
            }
        else
            return redirect('/login');
    }
    public function certiupload(Request $req)
    {
        // $r=$req->toArray();
        // print_r($r);
        // die();
        $req->validate(
            [
                "file"=>"required|mimes:pdf"
            ]);
             $file=$req->file('file');
             if($req->level=="International")
             {
                $point='12';
             }
             else if($req->level=="National")
             {
                $point='08';
             }             
             else if($req->level=="State")
             {
                $point='06';
             }          
             else   
              {
                $point='04';
             }
            
            $filename=session('enrollment').time().".".$req->file('file')->getClientOriginalExtension();
            $file->move('/xampp/htdocs/hackvgec/public/StudentCertificate/',$filename);
            $certificate=new Certificate;
            $certificate->enrollment=session('enrollment');
            $certificate->certificate_name=$req->certiname;

            $certificate->event=$req->event;
            $certificate->level=$req->level;
            $certificate->type=$req->type;
            $certificate->path=$filename;
            $certificate->coordinator=$req->coordinator;
            $certificate->status="Pending";
            $certificate->point=$point;
            session()->put('certiupload','1');
            $certificate->save();
            
            
            return redirect('student/certificateupload');


    }
    public function projectupload(Request $req)
    {
    
            $project=new Project;
            $project->enrollment=session('enrollment');
            $project->project_name=$req->Projectname;
            $project->project_link=$req->Projectlink;
            $project->project_duration=$req->duration;
            $project->role=$req->Role;
            $project->description=$req->description;
            $project->company_name=$req->companyname;
            $project->status="Pending";
            $project->save();
            
            session()->put('projectupload','1');
            // echo "<script>
            //     alert('Project has been uploaded. Wait for approval');
            //     window.location.href = '/student/projectupload';
            //     </script>";
            return redirect('student/projectupload');


    }
    public function saveimage(Request $req)
    {

        $req->validate([
            'image'=> 'mimes:jpeg,jpg,png,gif|max:1024',
          ]);
          

        $student=Student::where('student_id',session('id'))->get('enrollment')->toArray();
        
        
        foreach($student as $e)
        {
        $enroll=$e['enrollment'];
        }
        $file=$req->file('image');
        $filename=$enroll.".".$req->file('image')->getClientOriginalExtension();
        // $req->file('image')->storeAs('StudentImages',$filename);
        
        // $path='/storage/'.$req->file('image')->storeAs('StudentImages',$filename);
        $file->move('/xampp/htdocs/hackvgec/public/StudentImage/',$filename);
        session()->put('img','Image added successfully');
        $std=Student::find(session('id'));
        $std->photo=$filename;
        $std->save();
       return redirect('student/profile');

    }
    public function deleteimage()
    {
        if (session('role')=='Student') {
            $std=Student::find(session('id'));
            $std->photo='photo.png';
            $std->save();
            session()->put('delimg','Deleted Succesfully');
            return redirect('student/profile');
            }
        else
            return redirect('/login');
    }
    public function changepassword(){
        if (session('role')=='Student') {
            return view('Student.ChangePassword');
        }
        else
            return redirect('/login');
    }
    public function savepassword(Request $req){
        if (session('role')=='Student') {

            $req->validate(
                [
                    'password' => 'required|min:8|max:20',
                    'password_confirmation' => 'required|same:password'
                ]);

            $student = Student::where('student_id',session('id'))->get()->toArray();
            foreach($student as $s){
                $password = $s['password'];
            }
            if( Hash::check($req->oldpassword,$password)){
                $std=Student::find(session('id'));
                $std->password = Hash::make($req->password);
                $std->save();
                echo "<script>
                alert('Password has been changed');
                window.location.href = '/student/profile';
                </script>";
            }
            else{
               
                echo "<script>
                alert('Enter valid Old Password.');
                window.location.href = '/student/changepassword';
                </script>";

            }
           
        }
        else
            return redirect('/login');
    }
    public function friendreq(Request $req)
    {
        if (session('role')=='Student') {
            $enroll=Friend::where('friend_of_friend_id',session('enrollment'))->get('friend_id')->toArray();
            $i=0;
            if($enroll==null)
            {
                $fenroll=null;
            }
            else
            {
            foreach($enroll as $e)
            {
                $fenroll[$i]=$e['friend_id'];
                $i++;
            }
        }
            $search = $req['search'] ?? "";
            if($search != ""){
                if($enroll!=null)
            {
                $friend=Student::where('enrollment','<>',session('enrollment'))->where('name','LIKE',"$search%")->orwhere('enrollment','LIKE',"$search%")->wherenotin('enrollment',$fenroll)->get();
            }
            else
            {
                $friend = Student::where('enrollment','<>',session('enrollment'))->where('name','LIKE',"$search%")->orwhere('enrollment','LIKE',"$search%")->get();
            }
               
            }
            else{
                if($enroll!=null)
            {
                $friend=Student::where('enrollment','<>',session('enrollment'))->wherenotin('enrollment',$fenroll)->get();
            }
            else
            {
                $friend=Student::where('enrollment','<>',session('enrollment'))->get();
            }
            }
            // $friend=Student::get()->toArray();
            $i=1;
            $data=compact('friend','i','search');
            return view('Student.friend')->with($data);
        }
        else
            return redirect('/login');
    
    }
    public function friendrequest($id){
        if (session('role')=='Student') {
            $friend = new Friend;
            $friend->friend_id = $id;
            $friend->friend_of_friend_id = session('enrollment');
            $friend->status = "Pending";
            $friend->save(); 

            return redirect('/student/sendfriendreq');

        }
    }
    public function studentskill()
    {
        if (session('role')=='Student') {
            return view('Student.skill');
        }
        else
            return redirect('/login');
    
    
    }
    public function acceptfriend()
    {
        if (session('role')=='Student') {
            $enroll=Friend::where('friend_id',session('enrollment'))->where('status','Pending')->get('friend_of_friend_id')->toArray();
            $i=0;
            if($enroll==null)
            {
                $fenroll=null;
            }
            else
            {
            foreach($enroll as $e)
            {
                $fenroll[$i]=$e['friend_of_friend_id'];
                $i++;
            }
        }
        if($enroll==null)
        {
            $friend=null;
        }
        else
        {
            $friend=Student::wherein('enrollment',$fenroll)->get();
        }
        
            $j=1;
            $data=compact('friend','j');
            return view('Student.friendrequest')->with($data);
        }
        else
            return redirect('/login');
    
    }
    public function createpdf()
    {
        if (session('role')=='Student') {
           $student=Student::where('enrollment',session('enrollment'))->get();
           $certificate=Certificate::where('enrollment',session('enrollment'))->get();
           $data=compact('student','certificate');
           return view('Student.Resume')->with($data);
          
        }
        else
            return redirect('/login');
    }
    public function downloadpdf()
    {
        if (session('role')=='Student') {
        //    $student=Student::where('enrollment',session('enrollment'))->get();
        //    $certificate=Certificate::where('enrollment',session('enrollment'))->get();
        //    $data=compact('student','certificate');
        // //    return view('Student.Resume')->with($data);
        // //    view()->share('Student.Resume',$data);
        // $pdf=PDF::loadview('Student.Resume',$data)->setpaper('a4','potrait')->setWarnings(false);
        // return $pdf->stream();
        }
        else
            return redirect('/login');
    }

}
