<?php

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

use App\Donor;
use App\Feedback;
use Illuminate\Http\Request;
use App\Donated_detail;
use App\Acceptor;
use App\User;
use Illuminate\Support\Facades\Input;


Route::post('/push','PushController@store');
Route::get('/push','PushController@push')->name('push');


Route::get('/search', 'searchController@add')->middleware('auth');
Route::get('/searchDonor', 'searchController@index')->middleware('auth');
Route::get ( '/',  function() {
    return view ( 'searchdetails' );
} )->middleware('auth');
Route::any ( '/searchdetails', function () {
    $q = Input::get ( 'q' );
    $user = Donor::join('blood_group', 'donors.bg_id', '=', 'blood_group.bg_id')
    ->join('users', 'donors.user_id', '=', 'users.id')
    ->where ( 'email', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'searchdetails' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'searchdetails' )->withMessage ( 'No Details found. Try to search again !' );
} )->middleware('auth');
Route::get ( '/',  function() {
    return view ( 'checkdate' );
} )->middleware('auth');
Route::any ( '/checkdate', function () {
    $q = Input::get ( 'q' );
    $user = Donor::join('donated_details', 'donors.donor_id', '=', 'donated_details.donor_id')
    ->where ( 'nic', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'checkdate' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'checkdate' )->withMessage ( 'No Details found. Try to search again !' );
} );
Route::get ( '/',  function() {
    return view ( 'welcome' );
} );


Route::get('/posts', 'PostsController@index')->name('posts.index')->middleware('auth');
Route::get('/emails', 'EmailController@index')->name('emails.mail')->middleware('auth');
Route::get('/posts/details/{donor_id}', 'PostsController@details')->name('posts.details')->middleware('auth');
Route::get('/posts/add', 'PostsController@add')->name('posts.add')->middleware('auth');
Route::post('/posts/insert', 'PostsController@insert')->name('posts.insert')->middleware('auth');
Route::get('/posts/edit/{donor_id}', 'PostsController@edit')->name('posts.edit')->middleware('auth');
Route::post('/posts/update/{donor_id}', 'PostsController@update')->name('posts.update')->middleware('auth');
Route::get('/posts/delete/{donor_id}', 'PostsController@delete')->name('posts.delete')->middleware('auth');
Route::get('/posts/search', 'PostsController@search')->name('posts.search')->middleware('auth');
Route::get('/mydetails', 'DonorController@index')->name('mydetails')->middleware('auth');
Route::get('/mydetails', 'DonorController@ageIndex')->name('mydetails')->middleware('auth');
Route::get('/checkdate', 'DonorController@dateIndex')->name('checkdate')->middleware('auth');
Route::get('/index', 'PDFController@index')->name('index')->middleware('auth');
Route::get('/index/pdf', 'PDFController@pdf')->name('index.pdf')->middleware('auth');
Route::get('/indexBloodDonationCampaign', 'PDFDonorController@index')->name('indexBloodDonationCampaign')->middleware('auth');
Route::get('/indexBloodDonationCampaign/pdf', 'PDFDonorController@pdf')->name('indexBloodDonationCampaign.pdf')->middleware('auth');
Route::get('/indexDonatedDetails', 'PDF_BC_Controller@index')->name('indexDonatedDetails')->middleware('auth');
Route::get('/indexDonatedDetails/pdf', 'PDF_BC_Controller@pdf')->name('indexDonatedDetails.pdf')->middleware('auth');

Route::get('/send_email', 'SendEmailController@index')->name('send_email')->middleware('auth');
Route::post('/send_email/send', 'SendEmailController@send')->name('send_email.send')->middleware('auth');
Route::get('/donor', 'PostsController@showDonor')->name('donor')->middleware('auth');
Route::get('/search', 'PostsController@showSearch')->name('search')->middleware('auth');
Route::get('/searchdetails', 'PostsController@showSearchdetails')->name('searchdetails')->middleware('auth');
Route::get('/sms', 'PostsController@showSms')->name('sms')->middleware('auth');

Route::get('/pdfs', 'PostsController@showPDF')->name('pdfs')->middleware('auth');
Route::get('/admin', 'PostsController@showAdmin')->name('admin')->middleware('auth');
Route::get('/acceptor', 'PostsController@showAcceptor')->name('acceptor')->middleware('auth');
Route::get('/doctor', 'PostsController@showDoctor')->name('doctor')->middleware('auth');
Route::get('/donorlogin', 'PostsController@showDonorlogin')->name('donorlogin')->middleware('auth');


Route::get('/donated_details', 'Donated_detailsController@index')->name('donated_details.index')->middleware('auth');
Route::get('/donated_details/details/{dd_id}', 'Donated_detailsController@details')->name('donated_details.details')->middleware('auth');
Route::get('/donated_details/add', 'Donated_detailsController@add')->name('donated_details.add')->middleware('auth');
Route::post('/donated_details/insert', 'Donated_detailsController@insert')->name('donated_details.insert')->middleware('auth');
Route::get('/donated_details/edit/{dd_id}', 'Donated_detailsController@edit')->name('donated_details.edit')->middleware('auth');
Route::post('/donated_details/update/{dd_id}', 'Donated_detailsController@update')->name('donated_details.update')->middleware('auth');
Route::get('/donated_details/delete/{dd_id}', 'Donated_detailsController@delete')->name('donated_details.delete')->middleware('auth');

Route::get('/feedbacks', 'FeedbackController@index')->name('feedbacks.index')->middleware('auth');
Route::get('/feedbacks/add', 'FeedbackController@add')->name('feedbacks.add')->middleware('auth');
Route::post('/feedbacks/insert', 'FeedbackController@insert')->name('feedbacks.insert')->middleware('auth');
Route::get('/feedbacks/delete/{dd_id}', 'FeedbackController@delete')->name('feedbacks.delete')->middleware('auth');
Route::get('/sms', 'SmsController@index')->name('sms')->middleware('auth');
Route::post('/sms/send', 'SmsController@send')->name('sms.send')->middleware('auth');

Route::get('/message', 'messageController@index')->name('message')->middleware('auth');






Route::get('/sendemail', 'SendEmailController@index')->middleware('auth');
Route::post('/sendemail/send', 'SendEmailController@send')->middleware('auth');

Auth::routes();



    Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/donor', 'Auth\LoginController@showDonorLoginForm');
    Route::get('/login/acceptor', 'Auth\LoginController@showAcceptorLoginForm');
    Route::get('/login/doctor', 'Auth\LoginController@showDoctorLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/donor', 'Auth\RegisterController@showDonorRegisterForm');
    Route::get('/register/acceptor', 'Auth\RegisterController@showAcceptorRegisterForm');
    Route::get('/register/doctor', 'Auth\RegisterController@showDoctorRegisterForm');
    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/donor', 'Auth\LoginController@donorLogin');
    Route::post('/login/acceptor', 'Auth\LoginController@acceptorLogin');
    Route::post('/login/doctor', 'Auth\LoginController@doctorLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/donor', 'Auth\RegisterController@createDonor');
    Route::post('/register/acceptor', 'Auth\RegisterController@createAcceptor');
    Route::post('/register/doctor', 'Auth\RegisterController@createDoctor');
    Route::view('/home', 'home')->middleware('auth');
    Route::view('/admin', 'admin')->middleware('auth');
    Route::view('/donor', 'donor')->middleware('auth');
    Route::view('/acceptor', 'acceptor')->middleware('auth');
    Route::view('/doctor', 'doctor')->middleware('auth');


Auth::routes();

Route::get('/chat', 'ChatsController@index')->name('chat')->middleware('auth');
Route::get('messages', 'ChatsController@fetchMessages')->middleware('auth');
Route::post('messages', 'ChatsController@sendMessage')->middleware('auth');
Auth::routes();



Route::get('/firstaid', 'PagesController@index')->name('firstaid.index')->middleware('auth');
Route::get('/firstaid/details/{fc_id}', 'PagesController@details')->name('firstaid.details')->middleware('auth');
Route::get('/firstaid/add', 'PagesController@add')->name('firstaid.add')->middleware('auth');
Route::post('/firstaid/insert', 'PagesController@insert')->name('firstaid.insert')->middleware('auth');
Route::get('/firstaid/edit/{fc_id}', 'PagesController@edit')->name('firstaid.edit')->middleware('auth');
Route::post('/firstaid/update/{fc_id}', 'PagesController@update')->name('firstaid.update')->middleware('auth');
Route::get('/firstaid/delete/{fc_id}', 'PagesController@delete')->name('firstaid.delete')->middleware('auth');

Route::get('/bloodcamp', 'BloodCampController@index')->name('bloodcamp.index')->middleware('auth');
Route::get('/bloodcamp/details/{bc_id}', 'BloodCampController@details')->name('bloodcamp.details')->middleware('auth');
Route::get('/bloodcamp/add', 'BloodCampController@add')->name('bloodcamp.add')->middleware('auth');
Route::post('/bloodcamp/insert', 'BloodCampController@insert')->name('bloodcamp.insert')->middleware('auth');
Route::get('/bloodcamp/edit/{bc_id}', 'BloodCampController@edit')->name('bloodcamp.edit')->middleware('auth');
Route::post('/bloodcamp/update/{bc_id}', 'BloodCampController@update')->name('bloodcamp.update')->middleware('auth');
Route::get('/bloodcamp/delete/{bc_id}', 'BloodCampController@delete')->name('bloodcamp.delete')->middleware('auth');

Route::get('/pages', 'AcceptorController@index')->name('pages.index')->middleware('auth');
Route::get('/pages/details/{acceptor_id}', 'AcceptorController@details')->name('pages.details')->middleware('auth');
Route::get('/pages/add', 'AcceptorController@add')->name('pages.add')->middleware('auth');
Route::post('/pages/insert', 'AcceptorController@insert')->name('pages.insert')->middleware('auth');
Route::get('/pages/edit/{acceptor_id}', 'AcceptorController@edit')->name('pages.edit')->middleware('auth');
Route::post('/pages/update/{acceptor_id}', 'AcceptorController@update')->name('pages.update')->middleware('auth');
Route::get('/pages/delete/{acceptor_id}', 'AcceptorController@delete')->name('pages.delete')->middleware('auth');


Route::get('/sendrequest', 'SendRequestController@index');
Route::post('/sendrequest/send', 'SendRequestController@send');

Route::get('/about', 'PostsController@showAbout')->name('about');

Route::get('/awareness', 'PostsController@showAwareness')->name('awareness');

Route::get('/acceptorDetails', 'AcceDetailsController@index')->name('acceptorDetails')->middleware('auth');
Route::get('/acceptorDetails', 'AcceDetailsController@ageIndex')->name('acceptorDetails')->middleware('auth');

Route::get('/sendblood', 'SendBloodController@index')->middleware('auth');
Route::post('/sendblood/send', 'SendBloodController@send')->middleware('auth');


Route::post('/announcement',   'AdminController@postAnnouncement')->name('announcement')->middleware('auth');
    
Route::post('/search/fetch', 'searchController@fetch')->name('search.fetch')->middleware('auth');
Route::post('/search/fetch2', 'searchController@fetch2')->name('search.fetch2')->middleware('auth');


Route::get('/post', 'PostController@index')->name('post.index')->middleware('auth');
Route::get('/post/details/{post_id}', 'PostCampController@details')->name('post.details')->middleware('auth');
Route::get('/post/add', 'PostController@add')->name('post.add')->middleware('auth');
Route::post('/post/insert', 'PostController@insert')->name('post.insert')->middleware('auth');
Route::post('/post/update/{post_id}', 'PostController@update')->name('post.update')->middleware('auth');
Route::get('/post/delete/{post_id}', 'PostController@delete')->name('post.delete')->middleware('auth');

Route::get('/show','PostController@show')->name('post.show');