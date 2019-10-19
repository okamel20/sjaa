<?php
namespace App\Http\Controllers;
use Auth;
use Mail;
use Storage;
class HomeController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
    }

	public function indexHome()
    {
    	$title = trans('admin.Home');
        return view('homepage',compact('title'));
    }

    public function news()
    {
        $title = trans('admin.news');
        $news = \App\News::orderBy('id','desc')->where('active',1)->get();
        $numpage =  1;
        return view('news',compact('title','news','numpage'));
        
    }

    public function newscontents()
    {
        $news = \App\News::orderBy('id','desc')->where('active',1)->paginate(4);
        $numpage =  request('page') + 1;

        if (count($news)>0) {
            $content = [];

            foreach ($news as $key => $new) {
                $content[$key] = $new;
            }

            if (count($news)>0) {
               $new1 =  $content[0];
            }else{
                $new1 =  '';
            }

            if (count($news)>1) {
               $new2 =  $content[1];
            }else{
                $new2 =  '';
            }

            if (count($news)>2) {
               $new3 =  $content[2];
            }else{
                $new3 =  '';
            }

            if (count($news)>3) {
               $new4 =  $content[3];
            }else{
                $new4 =  '';
            }
        }else{
            return 0;
        }

        
        return view('newsContents',compact('news','numpage','new1','new2','new3','new4'));
    }

    public function newsId($id)
    {
        $news = \App\News::find($id);
        if ($news) {
            $title = $news['title_'.lang()];
            $outhers = \App\News::where('id','!=',$id)->where('active',1)->orderBy('id','desc')->limit(3)->get();
            return view('new',compact('title','news','outhers'));
        }else{
            return back();
        }
    }

    public function authorId($id)
    {
        $author = \App\Author::find($id);
        if ($author) {
            $title = $author['name_'.lang()];
            $news = \App\News::where('author_id',$id)->where('active',1)->orderBy('id','desc')->get();
            return view('author',compact('title','author','news'));
        }else{
            return back();
        }
    }

    

    public function page($id)
    {
    	$page = \App\Page::find($id);
    	if ($page) {
            $contents = \App\Page_content::where('page_id',$id)->where('active',1)->get();
    		$title = $page['title_'.lang()];
    		return view('page',compact('title','page','contents'));
    	}else{
    		return back();
    	}
    	
    }

    public function archive()
    {
        $title = trans('admin.archive');
        $archives = \App\Edition::where('active',0)->orderBy('created_at','asc')->get();
        return view('archive',compact('title','archives'));
    }

    public function editions()
    {
        $title = trans('admin.editions');
        $editions = \App\Edition::where('active',1)->orderBy('created_at','asc')->get();
        return view('editions',compact('title','editions'));
    }

    

    public function contact()
    {
        $title = trans('admin.contact');
        return view('contact',compact('title'));
    }

    public function postContact()
    {
        $add = new \App\Contact;
        $add->name = request('name');
        $add->contact_subject_id = request('contact_subject_id');
        $add->email = request('email');
        $add->phone = request('phone');
        $add->msg = request('msg');

        $add->save();
        session()->flash('save', trans('admin.sendmsgcontact'));
        return back();
    }

    public function postsubscribe()
    {

        $check = \App\Subscribe::where('email', request('email'))->first();
        if (!$check) {
            $add = new \App\Subscribe;
            $add->email = request('email');
            $add->save();
            session()->flash('save', trans('admin.sendmsgSubscribe'));
            return back();
        }else{
            session()->flash('save', trans('admin.sendmsgSubscribe'));
            return back();
        }
        
    }


    

    public function aboutTextAjax()
    {
        $content = request('content');
        $subject = request('subject');
        $data =  \App\Setting::select($content.'_'.lang().' as '.$content)->first();
        return view('abouthome',compact('data','content','subject'));
    }

    public function signup()
    {
        if (Auth::user()) {
            return back();
        }
        $title = trans('admin.signup');
        return view('signup',compact('title'));
    }

    public function postSignup()
    {
        $data = $this->validate(request(),[
          'name'                    =>'required',
          'email'                   =>'required|email|unique:users,email',
          'password'                =>'required',
          'repassword'              =>'required|same:password',
          ],[
          'name.required'           =>trans('admin.name_required'),
          'email.required'          =>trans('admin.email_required'),
          'email.email'             =>trans('admin.email_email'),
          'email.unique'            =>trans('admin.email_unique'),
          'password.required'       =>trans('admin.password_required'),
          'repassword.required'     =>trans('admin.repassword_required'),
          'repassword.same'         =>trans('admin.repassword_same'),
          'img.required'            =>trans('admin.img_required'),
          
        ]);

        $data['password'] = bcrypt(request('password'));
        storeControllers('\App\User',$data,trans('admin.hello'));
        if (Auth::guard('web')->attempt(['email'=> request('email'),'password'=>request('password'),'active'=>1])) {
            return redirect(url('/'));
        }else{
            session()->flash('error',trans('admin.noLogin'));
            return redirect(url('login'));

        }
    }

    public function login()
    {
        $title = trans('admin.signIn');
        return view('login',compact('title'));
    }

    public function postLogin()
    {
        // return request();
        $remember = request('remember') == 1 ? true: false;
        if (Auth::guard('web')->attempt(['email'=> request('email'),'password'=>request('password'),'active'=>1])) {
            session()->flash('save',trans('admin.hello'));
            return redirect(url('/'));
        }else{
            session()->flash('error',trans('admin.noLogin'));
            return redirect(url('/login'));

        }
    }

    public function SignOut()
    {
        auth()->guard('web')->logout();
        session()->flash('save','تم تسجيل الخروج');
        return redirect(url('/'));
    }


    

}
