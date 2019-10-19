<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\AdminDataTable;
use Illuminate\Http\Request;
use App\Admin;
use Storage;
class AdminsController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Admin';
        $this->folder = 'admins';
        $this->indexTitle = trans('admin.adminControllerIndex');
        $this->createTitle = trans('admin.addAdmin');
        $this->storeTitle = trans('admin.added');
        $this->editTitle = trans('admin.editAdmin');
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(AdminDataTable $data)
    {
        
        return indexControllers($this->folder,trans('admin.adminControllerIndex'),$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,trans('admin.addAdmin'));
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'name'                    =>'required',
          'email'                   =>'required|email|unique:admins,email',
          'password'                =>'required',
          'group_id'                =>'required',
          'repassword'              =>'required|same:password',
          'img'                     =>'required|image|mimes:jpg,jpeg,png,gif,bmp',
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
        if (request()->hasFile('img')) {
            $data['img'] = request()->file('img')->store('admins');
        }

        storeControllers($this->model,$data,trans('admin.added'));
        return redirect(adminUrl($this->folder));
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,trans('admin.editAdmin'));

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'name'                    =>'required',
          'email'                   =>'required|email|unique:admins,email,'.$id,
          'group_id'                =>'required',
          'img'                     =>'sometimes|nullable|image|mimes:jpg,jpeg,png,gif,bmp',
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
        
        if (request()->hasFile('img')) {
            $data['img'] = updateImg($this->model,$id,'img',$this->folder);
        }
        
       
        updateControllers($this->model,$id,$data,trans('admin.edited'));
        return redirect(adminUrl($this->folder));

    }

    
    public function destroy($id)
    {
        $count = Admin::all();
        if (count($count) <= 1) {
            return response($id, 404);
        }

        return deleteControllers($this->model,$id);
    }

    public function deleteAll()
    {
        $countItem = Admin::whereIn('id',request('item'))->count();
        $countAdmins = Admin::count();
        $data = $countItem . '/' . $countAdmins;
        
        if ($countAdmins == $countItem) {
            session()->flash('error', trans('admin.noDeleted'));
            return redirect(adminUrl('admins'));
        }
        

        deleteAllControllers(request(),$this->model,trans('admin.deleted'));
        return redirect(adminUrl($this->folder));

    }

    public function activeAll()
    {
      activeAllControllers(request(),'\App\Admin',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
