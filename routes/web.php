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


Route::get('admin/admindashboard', [admin::class, 'admindashboard'])->name('admin.dashboard');
Route::get('admin/coordinatorlist', [admin::class, 'coordinatorlist'])->name('coordinator.list');
Route::post('admin/coordinatorlist', [admin::class, 'coordinatorauth']);
Route::get('admin/createcoordinator', [admin::class, 'createcoordinator'])->name('create.coordinator');
Route::get('admin/editcoordinator/{id}', [admin::class, 'editcoordinator'])->name('edit.coordinator');
Route::post('admin/updatecoordinator/{id}', [admin::class, 'updatecoordinator'])->name('update.coordinator');
Route::get('admin/slidebar', [admin::class, 'slidebar'])->name('admin.slidebar');
Route::get('admin/studentview', [admin::class, 'studentview'])->name('student.view');
Route::get('admin/adminleader', [admin::class, 'adminleader'])->name('student.leader');
Route::get('admin/deletecoordinator/{id}', [admin::class, 'deletecoordinator'])->name('delete.coordinator');
Route::get('admin/deletestudent/{id}', [admin::class, 'deletestudent'])->name('delete.student');
Route::get('admin/studentview/studentdetail/{id}', [admin::class, 'studentdetail'])->name('student.detail');
Route::get('co-ordinator/dashboard', [coordinators::class, 'coordinatordashboard'])->name('coordinator.dashboard');
Route::get('co-ordinator/profile', [coordinators::class, 'coordinatorprofile'])->name('coordinator.profile');
Route::get('co-ordinator/studentview/{semester?}', [coordinators::class, 'studentview'])->name('studentc.view');
// Route::get('co-ordinator/studentsemester', [coordinators::class, 'studentsemesterview'])->name('studentcsemester.view');
Route::get('co-ordinator/studentrequest', [coordinators::class, 'studentrequest'])->name('coordinator.srequest');
Route::get('co-ordinator/projectrequest', [coordinators::class, 'projectrequest'])->name('coordinator.prequest');
Route::get('co-ordinator/certificaterequest', [coordinators::class, 'certificaterequest'])->name('coordinator.crequest');
Route::get('co-ordinator/studentapproval/{id}', [coordinators::class, 'studentapprove'])->name('student.approve');
Route::get('co-ordinator/certificateapproval/{id}', [coordinators::class, 'certificateapprove'])->name('approve.ccertificate');
Route::get('co-ordinator/projectapproval/{id}', [coordinators::class, 'projectapprove'])->name('approve.cproject');
Route::get('co-ordinator/studentdelete/{id}', [coordinators::class, 'studentdelete'])->name('delete.cstudent');
Route::get('co-ordinator/certificatedelete/{id}', [coordinators::class, 'certificatedelete'])->name('delete.ccertificate');
Route::get('co-ordinator/projectdelete/{id}', [coordinators::class, 'projectdelete'])->name('delete.cproject');
Route::get('student/profile', [students::class, 'studentprofile'])->name('student.profile');
Route::get('student/certificateupload', [students::class, 'certificateupload'])->name('student.certificateupload');
Route::post('student/uploadcertificate', [students::class, 'certiupload'])->name('student.certiupload');
Route::get('student/projectupload', [students::class, 'studentprojectupload'])->name('student.projectupload');
Route::post('student/uploadproject', [students::class, 'projectupload'])->name('project.upload');
Route::get('student/leaderboard', [students::class, 'studentleaderboard'])->name('student.leaderboard');
Route::post('student/uploadimage', [students::class, 'saveimage'])->name('save.studentimage');
Route::get('student/deleteimage', [students::class, 'deleteimage'])->name('delete.studentimage');
Route::get('student/changepassword', [students::class, 'changepassword'])->name('change.studentpassword');
Route::post('student/changepassword', [students::class, 'savepassword'])->name('save.studentpassword');
Route::get('student/friendrequest/{id}', [students::class, 'friendrequest'])->name('friend.request');

Route::get('student/sendfriendreq', [students::class, 'friendreq'])->name('send.friendreq');
Route::get('student/friendreq', [students::class, 'acceptfriend'])->name('accept.friendreq');
Route::get('co-ordinator/viewpdf/{filename}', [coordinators::class, 'viewpdf'])->name('view.pdf');

Route::get('student/uploadimage',[students::class,'studentupload'])->name('student.uploadimage');
Route::get('student/skill',[students::class,'studentskill'])->name('student.skill');
Route::get('student/resume',[students::class,'createpdf'])->name('create.resume');
Route::get('student/downloadresume',[students::class,'downloadpdf'])->name('download.pdf');
