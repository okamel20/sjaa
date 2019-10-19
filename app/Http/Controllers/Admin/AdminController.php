<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use DB;
use App\Mail\adminResetPassword;
use Carbon\Carbon;
use Mail;
use App;
class AdminController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
    }

    public function dashboard()
    {
        $title = trans('admin.Home');
        return view('admin.dashboard',compact('title'));
    }

    public function index()
    {   
        $title = trans('admin.Home');
        return getIndexDashboard($title);
        
    }
    public function login()
    {
    	return getLoginDashboard();
    }

    public function postLogin()
    {
    	$remember = request('remember') == 1 ? true: false;
    	if (admin()->attempt(['email'=> request('email'),'password'=>request('password')],$remember)) {
    		return redirect('admin');
    	}else{
    		session()->flash('error',trans('admin.noLogin'));
    		return redirect(adminUrl('login'));

    	}
    }

    public function logout()
    {
    	admin()->logout();
    	return redirect(adminUrl('login'));
    }

    public function addChat()
    {
        addChat(request());
        return view('admin.chatDiv');
    }

    public function getChat()
    {
        return view('admin.chatDiv');
    }

    public function forgot()
    {
    	return view('admin.forgot');
    }

    public function postForgot()
    {
    	$admin = Admin::where('email',request('email'))->first();
    	if ($admin) {
    		$token = app('auth.password.broker')->createToken($admin);
    		$data = DB::Table('password_resets')->insert([
	    			'email'=> $admin->email,
	    		    'token'=>$token,
	    		    'created_at'=>Carbon::now(),

    			]);
    		Mail::to($admin->email)->send(new adminResetPassword(['data'=> $admin,'token'=> $token]));
    		

    		session()->flash('save',trans('admin.sendMail'));
    		return back();
    		// return new adminResetPassword(['data'=> $admin,'token'=> $token]);
    	}else{
    		session()->flash('error',trans('admin.noAdmin'));
    		return back();
    	}
    }

    public function resetPassword ($token)
    {
    	$data = DB::Table('password_resets')->where('token',$token)->where('created_at','>',Carbon::now()->subHours(2))->first();
    	if ($data) {
    		return view('admin.changePassword',['data'=> $data]);
    	}else{
    		return redirect(adminUrl('forgot'));
    	}
    }

    public function postresetPassword($token)
    {
    	if (request('password') != request('repassword')) {
    		session()->flash('error',trans('admin.norePassword'));
    		return back();
    	}
    	$data = DB::Table('password_resets')->where('token',$token)->where('created_at','>',Carbon::now()->subHours(2))->first();
    	if ($data) {
    		$admin = Admin::where('email',$data->email)->update(['password'=> bcrypt(request('password'))]);
    		DB::Table('password_resets')->where('email',request('email'))->delete();
    		session()->flash('save',trans('admin.doneChange'));
    		
    		return redirect(adminUrl('login'));
    	}else{
    		return redirect(adminUrl('forgot'));
    	}
    }

    public function profile()
    {
        return editControllers('\App\Admin',admin()->user()->id,'admins',trans('admin.editAdmin'));
    }
}
