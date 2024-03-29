<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Profile;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\NoteController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\FileRepoController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BankAcountController;
use App\Http\Controllers\Admin\MemberTaskController;
use App\Http\Controllers\Admin\BeneficiaryController;
use App\Http\Controllers\Admin\CampaignsController;
use App\Http\Controllers\Admin\CommercialLinesController;
use App\Http\Controllers\Admin\OpportunityController;
use App\Http\Controllers\Admin\ContributionController;
use App\Http\Controllers\Admin\OpportunityCategoryController;
use App\Http\Controllers\Admin\OpportunitySubCategoryController;
use App\Http\Controllers\Admin\PDFCOntroller;
use App\Http\Controllers\Admin\PersonalLinesController;
use App\Http\Controllers\Admin\SmsController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CommercialLinesEntryController;
use App\Http\Controllers\PersonalLinesEntryController;
use App\Http\Controllers\User\UserHome;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('generate-pdf/{id}/{type}', [PDFCOntroller::class, 'generatePDF'])->name("admin.pdfgen");
Route::get('onboarding/personal', [PersonalLinesEntryController::class, 'index'])->name("onboarding.personal.index");
Route::post('onboarding/personal', [PersonalLinesEntryController::class, 'onboard'])->name("onboarding.personal.create");

Route::get('onboarding/commercial', [CommercialLinesEntryController::class, 'index'])->name("onboarding.commercial.index");
Route::post('onboarding/commercial', [CommercialLinesEntryController::class, 'onboard'])->name("onboarding.commercial.create");

//user  routes
Route::prefix('user')->middleware(['auth'])->name('user.')->group(function(){
    Route::get('profile',Profile::class)->name('profile');
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('community',[PageController::class,'community'])->name('community.index');
    Route::get('user-home',[UserHome::class,'index'])->name('user-home.index');

    // self  help  member  routes
    Route::get('members/index/{id}',[MemberController::class,'selfIndex'])->name('members.index');
    Route::get('members/create',[MemberController::class,'selfCreate'])->name('members.create');
    Route::post('members/store',[MemberController::class,'selfStore'])->name('members.store');
    Route::get('members/update',[MemberController::class,'selfCreate'])->name('members.update');
});


//admin routes
Route::prefix('admin')->middleware(['auth','auth.isAdmin'])->name('admin.')->group(function(){
    Route::resource('users',UserController::class);
    Route::resource('roles',RoleController::class);
    Route::resource('statuses',StatusController::class);
    Route::resource('member-tasks',MemberTaskController::class);
    Route::resource('members',MemberController::class);
    Route::resource('contributions',ContributionController::class);
    Route::resource('notes',NoteController::class);
    Route::resource('documents',DocumentController::class);
    Route::resource('sms',SmsController::class);
    Route::resource('beneficiaries',BeneficiaryController::class);
    Route::resource('bank-accounts',BankAcountController::class);
    Route::resource('payments',PaymentController::class);
    Route::resource('file-repos',FileRepoController::class);
    Route::resource('opportunity-categories',OpportunityCategoryController::class);
    Route::resource('opportunity-sub-categories',OpportunitySubCategoryController::class);
    Route::resource('opportunities',OpportunityController::class);
    Route::resource('campaigns',CampaignsController::class);
    Route::resource('personal-leads',PersonalLinesController::class);
    Route::resource('commercial-leads',CommercialLinesController::class);
 


    Route::get('settings',[PageController::class,'settings'])->name('settings.index');

    Route::get('contributions/add/{id}',[ContributionController::class,'createPayment'])->name('contributions.add');
    Route::get('notes/add/{id}',[NoteController::class,'createNote'])->name('notes.add');
    Route::get('documents/add/{id}',[DocumentController::class,'createDocument'])->name('documents.add');
    Route::get('sms/send/{id}',[SmsController::class,'sendSMS'])->name('sms.send');
    Route::get('beneficiaries/add/{id}',[BeneficiaryController::class,'createBeneficariary'])->name('beneficiaries.add');
    Route::get('bank-accounts/add/{id}',[BankAcountController::class,'createBankAccount'])->name('bank-accounts.add');
    // the  id  here  is  the  beneficiary  id  and  not  member id
    Route::get('payments/add/{id}',[PaymentController::class,'createPayment'])->name('payments.add');



});

Route::get('getMemberData',[DashboardController::class,'getmemberData']);
Route::get('getMemberDataCategory',[DashboardController::class,'getMemberCategory']);
Route::get('getMemberDatabyProvince',[DashboardController::class,'getMemberbyProvince']);
Route::get('getSubCategoriesByCategoryID/{id}',[OpportunityController::class,'getSubCategoriesByCategoryID']);
Route::get('user/getMembersByMonthThisYear',[ApiController::class,'getMembersByMonthThisYear']);
Route::get('user/totalContributionsThisYear',[ApiController::class,'totalContributionsThisYear']);






