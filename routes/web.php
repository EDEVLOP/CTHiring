<?php
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ApiKeyController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\ClientDesignationController;
use App\Http\Controllers\FunctionalAreaController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDesignationController;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => ['admin_auth']], function () {
    Route::get('/', function () {
        return view('dashboard');
    });

// clientbranch

    Route::get('/client_branch', [BranchController::class, 'clientbranch']);
    Route::post('/add_client_branch', [BranchController::class, 'addclientbranch']);

    Route::post('/edit_branch/{id}', [BranchController::class, 'client_branch_updatedit']);
    Route::get('/client_branch_delete/{id}', [BranchController::class, 'client_delete']);

// userbranch
    Route::get('/user_branch', [BranchController::class, 'userbranch']);
    Route::post('/add_branch', [BranchController::class, 'addbranch']);
    Route::post('/edit_user_branch/{id}', [BranchController::class, 'updatedit']);
    Route::get('/user_branch_delete/{id}', [BranchController::class, 'userdelete']);

//client Designation table
    //Route::get('/client_designation', [ClientDesignationController::class, 'ShowClientDesignation']);
    Route::post('/addclientdesignation', [ClientDesignationController::class, 'add_clientdesignation']);
    Route::get('/client_designation', [ClientDesignationController::class, 'fetch_clientdesignation']);
    Route::get('/edit_client_designation/{id}', [ClientDesignationController::class, 'edit_clientdesignation']);
    Route::get('/client_designation_delete/{id}', [ClientDesignationController::class, 'delete_clientdesignation']);

// qualification
    //Route::get('/qualification', [QualificationController::class, 'showqualification']);
    Route::post('/addqualification', [QualificationController::class, 'add_qualification']);
    Route::get('/qualification', [QualificationController::class, 'fetch_qualification']);
    Route::get('/editqualification/{id}', [QualificationController::class, 'edit_qualificaation']);
    Route::get('/qualificationdelete/{id}', [QualificationController::class, 'delete_qualification']);

// role
    Route::get('/role', [RoleController::class, 'role_branch']);
    Route::post('/role', [RoleController::class, 'add_rolebranch']);
    Route::get('/edit_role/{id}', [RoleController::class, 'edit_rolebranch']);
    Route::get('/role_delete/{id}', [RoleController::class, 'delete_rolebranch']);

// functional_area
    Route::get('functionalarea', [FunctionalAreaController::class, 'fetch_functionalarea']);
    Route::post('/addfunctional', [FunctionalAreaController::class, 'add_functional']);
    Route::put('/edit_functional/{id}', [FunctionalAreaController::class, 'edit_functional']);
    Route::get('/delete_functional/{id}', [FunctionalAreaController::class, 'delete_functional_area']);

//industry page
    Route::get('industry', [IndustryController::class, 'fetch_industry']);
    Route::post('/add_industryfunction', [IndustryController::class, 'add_industry_function']);
    Route::put('/edit_industry/{id}', [IndustryController::class, 'edit_industry_function']);
    Route::get('/delete_industry/{id}', [IndustryController::class, 'delete_industry_function']);

//user Designation table(uttam)
    Route::post('/adduserdesignation', [UserDesignationController::class, 'add_userdesignation']);
    Route::get('/user_designation', [UserDesignationController::class, 'fetch_userdesignation']);
    Route::get('/edit_user_designation/{id}', [UserDesignationController::class, 'edit_userdesignation']);
    Route::get('/user_designation_delete/{id}', [UserDesignationController::class, 'delete_userdesignation']);

// user
    // Route::get('/user', [UserController::class, 'usershow']);
    Route::post('/userinsert', [UserController::class, 'user_insert']);
    Route::get('/user', [UserController::class, 'userfetch']);
    Route::put('/edit_user/{id}', [UserController::class, 'edit_user']);
    Route::get('/user_delete/{id}', [UserController::class, 'delete_user']);

// client blade//
    //client
    Route::get('/client', [clientController::class, 'clientshow']);
    Route::get('/client_contactpage', [clientController::class, 'client_contactshow']);

    Route::post('/clientinsert', [clientController::class, 'client_insert']);

    Route::post('/clientinsert2', [clientController::class, 'client_insertpage2']);

    Route::get('/clientinsert_mail', [clientController::class, 'client_usermail']);

    Route::put('/edit_client/{id}', [clientController::class, 'client_update']);

// // test code for cliend
    // Route::get('/test_clientcontact', [clientController::class, 'test_c_cont']);
    // Route::post('/inset_testc_contact', [clientController::class, 'insert_test_clientcontact']);

//viewclient
    Route::get('/viewclient', [clientController::class, 'viewclientshow']);
    Route::get('/view_detail/{id}', [clientController::class, 'viewclientshow_details'])->name('viewclient_details');

    //Route::get('/viewclient_details/{id}', [clientController::class, 'viewclientshow_detailsss']);

    //approval client view
    Route::get('/approveclient', [clientController::class, 'view_approv_client']);

// dist and city for client
    Route::post('/fetchdist', [StateController::class, 'getdistrict']);
    Route::post('/fetchcity', [StateController::class, 'getcity']);

//dist and city for clientcontact for git hub testing
    Route::post('/fetchdist_contact', [StateController::class, 'getdistrict_clientcontact']);
    Route::post('/fetchcity_contact', [StateController::class, 'getcity_clientcontact']);

//position blade
    Route::get('/position', [PositionController::class, 'positionshow']);
//Route::post('/positioninsert', [PositionController::class, 'position_insert']);
    Route::get('/positionview', [PositionController::class, 'position_viewpage']);

//trupti code
    Route::post('/position_inserts', [PositionController::class, 'position_inserts']);
    //end

// clientname fetch in position blade
    Route::post('/fetchclientconct', [AjaxController::class, 'get_contactperson']);

// for my plan page design
    Route::get('/myplan', [AjaxController::class, 'myplandesign']);
    Route::get('/myplan2', [AjaxController::class, 'myplandesign2']);

//resume blade(uttam)
    Route::get('/resume', [ResumeController::class, 'showresume']);

//Api Key(uttam)
    Route::get('/apikeys', [ApiKeyController::class, 'api_key']);
    Route::put('/update_msg/{id}', [ApiKeyController::class, 'update_msg'])->name('msgupdate');

});

Route::get('/otp', [LoginController::class, 'otp']);
Route::post('/otp_verify', [LoginController::class, 'otp_verify']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'login_submit']);
// newcode for login
Route::get('/changepassword', [LoginController::class, 'change_password']);
Route::post('/addnewpassword', [LoginController::class, 'add_newpassword'])->name('newpassword');

// Route::get('/jobshow', [PositionController::class, 'jobcodeshow']);

Route::get('/logout', function () {
    session()->forget('otpinvalid');
    return redirect('/login');
});