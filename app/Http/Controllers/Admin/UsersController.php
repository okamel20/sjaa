<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\UsersDataTable;
use Illuminate\Http\Request;
use App\User;
use Storage;

class UsersController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\User';
        $this->folder = 'users';
        $this->indexTitle = 'الأعضاء';
        $this->createTitle = 'أضافة عضو';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات عضو';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(UsersDataTable $data)
    {
        
        return indexControllers($this->folder,'الأعضاء',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'أضافة عضو');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'name'                    =>'required',
          'email'                   =>'required|email|unique:users,email',
          'password'                =>'required',
          'active'                  =>'required',
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
        
        storeControllers($this->model,$data,trans('admin.added'));
        return redirect(adminUrl($this->folder));
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات عضو');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'name'                    =>'required',
          'email'                   =>'required|email|unique:users,email,'.$id,
          'active'                  =>'required',
          ],[
          'name.required'           =>trans('admin.name_required'),
          'email.required'          =>trans('admin.email_required'),
          'email.email'             =>trans('admin.email_email'),
          'email.unique'            =>trans('admin.email_unique'),
        ]);

        if (request()->has('password') && request('password') != '') {
            if (!request('repassword')) {
              session()->flash('save', trans('admin.repassword_required'));
              return back();
            }

            if (request('repassword') != request('password')) {
              session()->flash('save', trans('admin.repassword_same'));
              return back();
            }
            
            $data['password'] = bcrypt(request('password'));
        }
        
       
        updateControllers($this->model,$id,$data,trans('admin.edited'));
        return redirect(adminUrl($this->folder));

    }

    
    public function destroy($id)
    {
        return deleteControllers($this->model,$id);
    }

    public function deleteAll()
    {
        deleteAllControllers(request(),$this->model,trans('admin.deleted'));
        return redirect(adminUrl($this->folder));

    }

    public function activeAll()
    {
      activeAllControllers(request(),'\App\User',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
