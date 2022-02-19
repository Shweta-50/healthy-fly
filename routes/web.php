<?php

use App\Http\Controllers\Admin\AdminChangePasswordController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AppointmentListController;
use App\Http\Controllers\Admin\DoctorsListController;
use App\Http\Controllers\Admin\PatientsListController;
use App\Http\Controllers\Admin\ReviewsListController;
use App\Http\Controllers\Admin\SpecialitiesController;
use App\Http\Controllers\Admin\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Doctor\DoctAppointmentController;
use App\Http\Controllers\SechduleTimeController;
use App\Http\Controllers\Patient\AppointmentController;
use App\Http\Controllers\Doctor\DoctorChangePasswordController;
use App\Http\Controllers\Doctor\DoctorDashboardController;
use App\Http\Controllers\Doctor\DoctorInvoiceController;
use App\Http\Controllers\Doctor\DoctorInvoiceViewController;
use App\Http\Controllers\DoctorProfileController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Patient\PatientDashboardController;
use App\Http\Controllers\Patient\PatientProfileSettingController;
use App\Http\Controllers\Patient\ChangePasswordController;
use App\Http\Controllers\Patient\FeedbackController;
use App\Http\Controllers\Patient\PatientFeedbackController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Doctor\DoctorBlogController;
use App\Http\Controllers\Doctor\DoctorSideBlogController;
use App\Http\Controllers\Doctor\DoctorViewProfileController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Doctor\DoctorListController;
use App\Http\Controllers\Other\HospitalListController;

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Doctor\PrescriptionController;
use App\Http\Controllers\Other\HospitalsListController;
use App\Http\Controllers\Patient\PatientInvoiceController;
use App\Http\Controllers\Patient\PatientInvoiceViewController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Forgot Password
Route::get('forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forgot.password.get');
Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forgot.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('/doctor_list', [DoctorListController::class, 'index'])->name('doctor.doct_list');

Route::get('/', [HomeController::class, 'index'])->name('index');
// Route::get('/', [HomeController::class, 'index'])->name('index');
// Route::get('/patient/appointment/{id}', [HomeController::class, 'displayDoctor'])->name('displayDoctor');
Route::get('/contact', [ContactController::class, 'contactShow']);
Route::post('/contact', [ContactController::class, 'create']);
Route::get('/doctor/schedule_timing', [SechduleTimeController::class, 'sechduleTiming'])->name('schedule_timing');
Route::post('/doctor/schedule_timing', [SechduleTimeController::class, 'create'])->name('create');
Route::get('/doctor/ScheduleEditForm/edit/{id}', [SechduleTimeController::class, 'edit'])->name('edit');
Route::put('/doctor/ScheduleEditForm/edit/{id}', [SechduleTimeController::class, 'update'])->name('update');
Route::get('/doctor/ScheduleEditForm/destroy/{id}', [SechduleTimeController::class, 'destroy'])->name('destroy');
Route::get('/doctor/doctor_dashboard', [DoctorDashboardController::class, 'render'])->name('dashboard');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/doctor/doctor_blog', [DoctorBlogController::class, 'index'])->name('doctor.doctor_blog');
Route::get('/doctor/doctor_view_profile/{id}', [DoctorViewProfileController::class, 'show'])->name('doctor.doctor_view_profile');


Route::get('/doctor/doctor_list', [DoctorListController::class, 'index'])->name('doctor.doct_list');


// For patient
Route::middleware(['auth:sanctum', 'verified',])->group(function () {
    Route::get('/patient/appointment/{id}', [AppointmentController::class, 'appointment'])->name('appointment');
    Route::post('/patient/appointment/{id}', [AppointmentController::class, 'create'])->name('appointment');
    Route::get('/patient/PatientDashboard', [PatientDashboardController::class, 'render'])->name('patient.dashboard');
    Route::get('/patient-profile-dashboard', [PatientDashboardController::class, 'index'])->name('patient.patient-profile-dashboard');
    Route::get('/patient/change-password', [ChangePasswordController::class, 'index'])->name('patient.change-password');
    Route::put('/patient/change-password/edit/{id}', [ChangePasswordController::class, 'update'])->name('patient.password_update');
    Route::get('/patient-profile-setting', [PatientProfileSettingController::class, 'index']);
    Route::get('/edit/{id}', [PatientProfileSettingController::class, 'edit'])->name('edit');
    Route::put('/edit/{id}', [PatientProfileSettingController::class, 'update'])->name('update');
    Route::get('/patient/patient_feedback', [FeedbackController::class, 'index'])->name('patient.patient_feedback');
    Route::get('/patient/feedback_form/{id}', [PatientFeedbackController::class, 'index'])->name('patient.feedback_form');
    Route::post('/patient/feedback_form/{id}', [PatientFeedbackController::class, 'create'])->name('patient.feedback_form_create');
    Route::get('/patient/invoice/', [PatientInvoiceController::class, 'index'])->name('patient.invoice');
    Route::get('/patient/invoice_view/{id}', [PatientInvoiceViewController::class, 'show'])->name('patient.invoice_view');

    Route::get('/prescription_invoice/{id}', [PrescriptionController::class, 'show']);
});


// For doctor
Route::middleware(['auth:sanctum', 'verified', 'authdoctor'])->group(function () {
    Route::get('/doctor/DoctorDashboard', [DoctorDashboardController::class, 'render'])->name('doctor.dashboard');
    Route::get('/doctor/DoctorDashboard/destroy/{id}', [DoctorDashboardController::class, 'destroy'])->name('doctor.appointment_cancel');
    Route::get('/doctor/doctor_profile', [DoctorProfileController::class, 'index'])->name('doctor.doctor_profile');
    Route::get('/doctor/doctor_profile/edit/{id}', [DoctorProfileController::class, 'edit'])->name('doctor.edit');
    Route::put('/doctor/doctor_profile/edit/{id}', [DoctorProfileController::class, 'update'])->name('doctor.update');
    Route::get('/doctor/doctor_change_password', [DoctorChangePasswordController::class, 'index'])->name('doctor.doctor_change_password');
    Route::put('/doctor/doctor_change_password/edit/{id}', [DoctorChangePasswordController::class, 'update'])->name('doctor.password_update');
    Route::get('/doctor/doct_appointment', [DoctAppointmentController::class, 'index'])->name('doctor.appointment');
    Route::get('/doctor/doct_appointment/destroy/{id}', [DoctAppointmentController::class, 'destroy'])->name('doctor.appointment_completed');
    Route::get('/doctor/doctor_invoice', [DoctorInvoiceController::class, 'index'])->name('doctor.doctor_invoice');
    Route::get('/doctor/doct_invoice_view/{id}', [DoctorInvoiceViewController::class, 'show'])->name('doctor.doct_invoice_view');
    Route::get('/doctor/doctor_side_blog', [DoctorSideBlogController::class, 'index'])->name('doctor.doctor_side_blog');
    Route::post('/doctor/doctor_side_blog', [DoctorSideBlogController::class, 'create'])->name('doctor.doctor_blog');
    Route::get('/prescription/{id}', [PrescriptionController::class, 'index']);
    Route::post('/prescription/{id}', [PrescriptionController::class, 'create']);
});
// For admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/AdminDashboard', [AdminDashboardController::class, 'render'])->name('admin.dashboard');
    Route::get('/admin/admin_appointment_list', [AppointmentListController::class, 'index'])->name('admin.admin_appointment_list');
    Route::get('/admin/admin_doctors_list', [DoctorsListController::class, 'index'])->name('admin.admin_doctors_list');
    Route::get('/admin/admin_patients_list', [PatientsListController::class, 'index'])->name('admin.admin_patients_list');
    Route::get('/admin/admin_reviews_list', [ReviewsListController::class, 'index'])->name('admin.admin_reviews_list');
    Route::get('/admin/admin_reviews_list/{id}', [ReviewsListController::class, 'destroy'])->name('admin.admin_reviews_destroy');

    Route::get('/admin/admin_transaction', [TransactionController::class, 'index'])->name('admin.admin_transaction');
    Route::get('/admin/admin_transaction/{id}', [TransactionController::class, 'destroy'])->name('admin.admin_transaction_destroy');
    Route::get('/admin/admin_profile', [AdminProfileController::class, 'index'])->name('admin.admin_profile');
    Route::get('/admin/admin_profile/edit/{id}', [AdminProfileController::class, 'edit'])->name('admin.admin_profile_edit');
    Route::put('/admin/admin_profile/edit/{id}', [AdminProfileController::class, 'update'])->name('admin.admin_profile_update');

    Route::get('/admin/admin_change_password', [AdminChangePasswordController::class, 'index'])->name('admin.admin_change_password');
    Route::put('/admin/admin_change_password/edit/{id}', [AdminChangePasswordController::class, 'update'])->name('admin.admin_password_update');
});
//for payment
Route::get('/user', [MainController::class, 'index']);
Route::post('/user', [MainController::class, 'index']);
Route::get('/success', [MainController::class, 'success']);
Route::post('/pay', [MainController::class, 'pay']);
Route::post('/payment', [MainController::class, 'payment']);



// Other
Route::get('/other/hospital', [HospitalsListController::class, 'index'])->name('other.hospitalList');
// Route::post('/hospital-list', [HospitalListController::class, 'create']);
