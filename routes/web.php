<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\coordinators;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registration;
use App\Http\Controllers\student;
use App\Http\Controllers\students;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/signup', [registration::class, 'signup']);
Route::get('/', function(){
    return redirect('/login');
});
Route::post('/register', [registration::class, 'valid'])->name('student.create');
Route::get('/login', [registration::class, 'login'])->name('student.login');
Route::post('/login', [registration::class, 'auth'])->name('student.auth');
Route::get('/next', [registration::class, 'next'])->name('student.next');
Route::get('/logout', [registration::class, 'logout'])->name('student.logout');
Route::get('/forgetpassword', [registration::class, 'forgetpassword'])->name('forget.password');
Route::get('/verify_student', [registration::class, 'verifys'])->name('verify.student');

Route::group(['prefix'=>'admin'],function(){


    Route::get('/admindashboard', [admin::class, 'admindashboard'])->name('admin.dashboard');
    Route::get('/coordinatorlist', [admin::class, 'coordinatorlist'])->name('coordinator.list');
    Route::post('/coordinatorlist', [admin::class, 'coordinatorauth']);
    Route::get('/createcoordinator', [admin::class, 'createcoordinator'])->name('create.coordinator');
    Route::get('/editcoordinator/{id}', [admin::class, 'editcoordinator'])->name('edit.coordinator');
    Route::post('/updatecoordinator/{id}', [admin::class, 'updatecoordinator'])->name('update.coordinator');
    Route::get('/slidebar', [admin::class, 'slidebar'])->name('admin.slidebar');
    Route::get('/studentview', [admin::class, 'studentview'])->name('student.view');
    Route::get('/adminleader', [admin::class, 'adminleader'])->name('student.leader');
    Route::get('/deletecoordinator/{id}', [admin::class, 'deletecoordinator'])->name('delete.coordinator');
    Route::get('/deletestudent/{id}', [admin::class, 'deletestudent'])->name('delete.student');
    Route::get('/studentview/studentdetail/{id}', [admin::class, 'studentdetail'])->name('student.detail');
});

Route::group(['prefix'=>'co-ordinator'],function(){
    Route::get('/dashboard', [coordinators::class, 'coordinatordashboard'])->name('coordinator.dashboard');
    Route::get('/profile', [coordinators::class, 'coordinatorprofile'])->name('coordinator.profile');
    Route::get('/studentview/{semester?}', [coordinators::class, 'studentview'])->name('studentc.view');
    // Route::get('/studentsemester', [coordinators::class, 'studentsemesterview'])->name('studentcsemester.view');
    Route::get('/studentrequest', [coordinators::class, 'studentrequest'])->name('coordinator.srequest');
    Route::get('/projectrequest', [coordinators::class, 'projectrequest'])->name('coordinator.prequest');
    Route::get('/certificaterequest', [coordinators::class, 'certificaterequest'])->name('coordinator.crequest');
    Route::get('/studentapproval/{id}', [coordinators::class, 'studentapprove'])->name('student.approve');
    Route::get('/certificateapproval/{id}', [coordinators::class, 'certificateapprove'])->name('approve.ccertificate');
    Route::get('/projectapproval/{id}', [coordinators::class, 'projectapprove'])->name('approve.cproject');
    Route::get('/studentdelete/{id}', [coordinators::class, 'studentdelete'])->name('delete.cstudent');
    Route::get('/certificatedelete/{id}', [coordinators::class, 'certificatedelete'])->name('delete.ccertificate');
    Route::get('/projectdelete/{id}', [coordinators::class, 'projectdelete'])->name('delete.cproject');
    Route::get('/viewpdf/{filename}', [coordinators::class, 'viewpdf'])->name('view.pdf');

});

Route::group(['prefix'=>'student'],function(){
   
Route::get('/profile', [students::class, 'studentprofile'])->name('student.profile');
Route::get('/certificateupload', [students::class, 'certificateupload'])->name('student.certificateupload');
Route::post('/uploadcertificate', [students::class, 'certiupload'])->name('student.certiupload');
Route::get('/projectupload', [students::class, 'studentprojectupload'])->name('student.projectupload');
Route::post('/uploadproject', [students::class, 'projectupload'])->name('project.upload');
Route::get('/leaderboard', [students::class, 'studentleaderboard'])->name('student.leaderboard');
Route::post('/uploadimage', [students::class, 'saveimage'])->name('save.studentimage');
Route::get('/deleteimage', [students::class, 'deleteimage'])->name('delete.studentimage');
Route::get('/changepassword', [students::class, 'changepassword'])->name('change.studentpassword');
Route::post('/changepassword', [students::class, 'savepassword'])->name('save.studentpassword');
Route::get('/friendrequest/{id}', [students::class, 'friendrequest'])->name('friend.request');

Route::get('/sendfriendreq', [students::class, 'friendreq'])->name('send.friendreq');
Route::get('/friendreq', [students::class, 'acceptfriend'])->name('accept.friendreq');

Route::get('/uploadimage',[students::class,'studentupload'])->name('student.uploadimage');
Route::get('/skill',[students::class,'studentskill'])->name('student.skill');
Route::get('/resume',[students::class,'createpdf'])->name('create.resume');
Route::get('/downloadresume',[students::class,'downloadpdf'])->name('download.pdf');
});


