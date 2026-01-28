<?php

use App\Http\Controllers\CampusController;
use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mySessionController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ReseptionController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\InchargeController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\StudentsFeeController;
use App\Http\Controllers\StudentFineController;
use App\Http\Controllers\StaffPayController;
use App\Http\Controllers\SchoolExpenseController;
use App\Http\Controllers\ResultCardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\PromoteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ResourceBrowserController;


//==============Ajax Route===========================
// class to fee
Route::get('/get-class-fee/{id}', [AjaxController::class, 'getClassFee']);
// depart to session
Route::get('/get-sessions/{deptId}', [AjaxController::class, 'getSessions']);
// depart to classes
Route::get('/get-classes', [AjaxController::class, 'getClasses']);
// depart to class
Route::get('/get-class', [AjaxController::class, 'getClass']);
// Classes  to sections
Route::get('/get-sections/{classId}', [AjaxController::class, 'getSections']);




// =============== Admin Panel Route ================

Route::get('/',[adminController::class , 'admin'] )->name('home');
Route::view('superAdmin','superAdmin')->name('sAdmin');



//================= Add campus Routes ================
// ============= Campus Index

Route::get('campus/dashboard' , [CampusController::class , 'campusIndex'])->name('cIndex');

Route::get('addCampus',[CampusController::class , 'addCampus'])->name('addCampus');
Route::post('addNewCampus',[CampusController::class , 'addNewCampus'])->name('addNewCampus');

Route::get('campusList',[CampusController::class , 'campusList'])->name('campusList');

// ============= School Index ==================

Route::get('school/dashboard' , [SchoolController::class , 'schoolIndex'])->name('sindex');

// =============== Authentication ===================

Route::view('login','login')->name('login');
Route::post('/login', [AuthController::class , 'login'] )->name('login');

Route::view('register','register')->name('register');
Route::post('/register', [AuthController::class , 'register'] )->name('register');

Route::get('/logout', [AuthController::class , 'logout'] )->name('logout');

//  ============== Pages Routes =====================

//=========================== School Route ========================


// Add School Route ========================
Route::get('/addSchool',[SchoolController::class , 'addSchool'])->name('school');
Route::post('/addSchoolData',[SchoolController::class , 'school_data'])->name('school_data');


// School List Route ========================
Route::get('/allSchool',[SchoolController::class , 'allSchool'])->name('listSchool');

// Active page route =============================
Route::get('/activeSchool',[SchoolController::class , 'activeSchool'])->name('activeSchool');
Route::post('/addActiveSchool',[SchoolController::class , 'addActiveSchool'])->name('addActiveSchool');

//  Active page list route ==============
Route::get('/activeSchoolList',[SchoolController::class , 'activeSchoolList'])->name('activeSchoolList');

//========= Session Routes ==================

Route::get('/session',[mySessionController::class , 'Session'])->name('session');
Route::post('/addsession',[mySessionController::class , 'addSession'])->name('addsession');

// delete
Route::get('deleteSession/{id}',[mySessionController::class , 'delete']);
// Edit
Route::get('editSession/{id}',[mySessionController::class , 'edit']);
Route::post('editMySession/{id}',[mySessionController::class , 'editSession']);

//========= Class Route
Route::get('/class',[ClassController::class , 'Class'] )->name('class');
Route::post('/class',[ClassController::class , 'addClass'] )->name('addClass');

// delete
Route::get('deleteClass/{id}',[ClassController::class , 'delete']);
// Edit
Route::get('editClass/{id}',[ClassController::class , 'edit']);
Route::post('/editAddClass/{id}',[ClassController::class , 'editClass'] );

//========= Section Route
Route::get('/section',[SectionController::class , 'section'] )->name('section');
Route::post('/addSection',[SectionController::class , 'addSection'] )->name('addSection');

// delete
Route::get('deleteSection/{id}',[SectionController::class , 'delete']);

// Show form
Route::get('/ApplicationForm', [ReseptionController::class, 'ApplicationForm'])
    ->name('ApplicationForm');

// Store form data
Route::post('/ApplicationForm', [ReseptionController::class, 'store'])
    ->name('ApplicationForm.store');
Route::get('/list_ApplicationForm', [ReseptionController::class, 'list_ApplicationForm'])
    ->name('list_ApplicationForm');
Route::get('/application-form/{id}/edit', [ReseptionController::class, 'edit'])
    ->name('ApplicationForm.edit');

Route::post('/application-form/{id}/update', [ReseptionController::class, 'update'])
    ->name('ApplicationForm.update');

//========= Cards
// ==== Student Card By Class
Route::get('/StudentCardByClass',[CardController::class , 'StudentCardByClass'] )->name('StudentCardByClass');
// ==== Single Student Card
Route::get('/SingleStudentCard',[CardController::class , 'SingleStudentCard'] )->name('SingleStudentCard');
// ==== All Staff Card
Route::get('/AllStaffCard',[CardController::class , 'AllStaffCard'] )->name('AllStaffCard');
// ==== Single Staff Card
Route::get('/SingleStaffCard',[CardController::class , 'SingleStaffCard'] )->name('SingleStaffCard');


//========= Staff Route
Route::get('/staff',[StaffController::class , 'staff'] )->name('staff');
Route::post('/addStaff',[StaffController::class , 'addStaff'] )->name('addStaff');


//========= Add Subject Route
Route::get('/Subject',[SubjectController::class , 'Subject'] )->name('Subject');
Route::post('/addSubject',[SubjectController::class , 'addSubject'] )->name('addSubject');

Route::get('/allSubject',[SubjectController::class , 'allSubject'] )->name('allSubject');


//========= Add Incharge Route
Route::get('/Incharge',[InchargeController::class , 'Incharge'] )->name('Incharge');

//========= Add Fee Route
Route::get('/Fee',[FeeController::class , 'Fee'] )->name('Fee');
Route::post('/feeType',[FeeController::class , 'feeType'] )->name('feeType');

Route::get('/otherFee',[FeeController::class , 'otherFee'] )->name('otherFee');
Route::post('/addOtherFee',[FeeController::class , 'addOtherFee'] )->name('addOtherFee');


//========= Add Parents Route
Route::get('/Parents',[ParentsController::class , 'Parents'] )->name('Parents');
Route::post('/addParents',[ParentsController::class , 'addParents'] )->name('addParents');

//========= Add Teachers Route
Route::get('/Teachers',[TeachersController::class , 'Teachers'] )->name('Teachers');
Route::post('/addTeachers',[TeachersController::class , 'addTeachers'] )->name('addTeachers');


//========= Add Students Route
Route::get('/Students',[StudentsController::class , 'Students'] )->name('Students');
Route::post('/addStudents',[StudentsController::class , 'addStudents'] )->name('addStudents');
//========= Add Students Route
Route::get('/allStudents',[StudentsController::class , 'allStudents'] )->name('allStudents');
// ==== List By Class==
Route::get('/SelectClass',[StudentsController::class , 'SelectClass'] )->name('SelectClass');
// ==== List By Class==
Route::get('/SelectSession',[StudentsController::class , 'SelectSession'] )->name('SelectSession');

//========= Add Students Fee Route
Route::get('/StudentsFee',[StudentsFeeController::class , 'StudentsFee'] )->name('StudentsFee');
Route::post('/addStudentsFee',[StudentsFeeController::class , 'addStudentsFee'] )->name('addStudentsFee');
// ==== Student fee List
Route::get('/StudentsFeeList',[StudentsFeeController::class , 'StudentsFeeList'] )->name('StudentsFeeList');
// ==== Pending Student fee List by class
Route::get('/PendingFeeByClass',[StudentsFeeController::class , 'PendingFeeByClass'] )->name('PendingFeeByClass');
// ==== Pending Student fee List by Sibling
Route::get('/PendingFeeBySibling',[StudentsFeeController::class , 'PendingFeeBySibling'] )->name('PendingFeeBySibling');

//========= Add Students Fine Route
Route::get('/addFine',[StudentFineController::class , 'addFine'] )->name('addFine');
// ==== Student fine
Route::get('/StudentsFine',[StudentFineController::class , 'StudentsFine'] )->name('StudentsFine');
// ==== Student fine list by Class
Route::get('/FineListByClass',[StudentFineController::class , 'FineListByClass'] )->name('FineListByClass');
// ==== Student fine list by session
Route::get('/FineListBySession',[StudentFineController::class , 'FineListBySession'] )->name('FineListBySession');

//========= Staff Pay Route
Route::get('/AddStaffPay',[StaffPayController::class , 'AddStaffPay'] )->name('AddStaffPay');
// ===== Staff Pay List
Route::get('/StaffPayList',[StaffPayController::class , 'StaffPayList'] )->name('StaffPayList');
// ===== Single Staff List
Route::get('/SingleStaffList',[StaffPayController::class , 'SingleStaffList'] )->name('SingleStaffList');

//========= Add School Expense Route
Route::get('/AddSchoolExpense',[SchoolExpenseController::class , 'AddSchoolExpense'] )->name('AddSchoolExpense');
// ==== Expense List
Route::get('/ExpenseList',[SchoolExpenseController::class , 'ExpenseList'] )->name('ExpenseList');
// ==== Expense List By Date
Route::get('/ExpenseByDate',[SchoolExpenseController::class , 'ExpenseByDate'] )->name('ExpenseByDate');

//========= Result Card Route
Route::get('/AddTerm',[ResultCardController::class , 'AddTerm'] )->name('AddTerm');
// ====Add Result Card
Route::get('/AddResultCard',[ResultCardController::class , 'AddResultCard'] )->name('AddResultCard');
// ====Reasult By Single Subject
Route::get('/ReasultBySingleSubject',[ResultCardController::class , 'ReasultBySingleSubject'] )->name('ReasultBySingleSubject');
// ====Reasult By Single Term
Route::get('/ReasultBySingleTerm',[ResultCardController::class , 'ReasultBySingleTerm'] )->name('ReasultBySingleTerm');
// ====Reasult By All Term
Route::get('/ReasultByAllTerm',[ResultCardController::class , 'ReasultByAllTerm'] )->name('ReasultByAllTerm');
// ====Reasult By Section
Route::get('/ReasultBySection',[ResultCardController::class , 'ReasultBySection'] )->name('ReasultBySection');

//========= Attendance
Route::get('/BarcodeAttendance',[AttendanceController::class , 'BarcodeAttendance'] )->name('BarcodeAttendance');
//==== Teacher Attendance
Route::get('/TeacherAttendance',[AttendanceController::class , 'TeacherAttendance'] )->name('TeacherAttendance');
//==== Student Attendance
Route::get('/StudentAttendance',[AttendanceController::class , 'StudentAttendance'] )->name('StudentAttendance');
//==== Student Attendance
Route::get('/AttendanceListBySection',[AttendanceController::class , 'AttendanceListBySection'] )->name('AttendanceListBySection');

//================ Reports
Route::get('/TodayReport',[ReportsController::class , 'TodayReport'] )->name('TodayReport');
// ==== Report By Date
Route::get('/ReportByDate',[ReportsController::class , 'ReportByDate'] )->name('ReportByDate');

//================ Promote Student
Route::get('/PromoteStudent',[PromoteController::class , 'PromoteStudent'] )->name('PromoteStudent');





/*access routes*/

Route::get('/access', [ResourceBrowserController::class, 'index']);

// Route::get( 'notRegister' ,[SchoolController::class , 'notRegister'] )->name('notRegister');

// Route::get( 'notActivate' ,[SchoolController::class , 'notActivate'] )->name('notActivate');


