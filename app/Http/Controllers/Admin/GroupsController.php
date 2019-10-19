<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\GroupsDataTable;
use Illuminate\Http\Request;
use App\Order;
use Storage;
use Mail;
class GroupsController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Group';
        $this->folder = 'groups';
    }
    
    public function index(GroupsDataTable $data)
    {
      return indexControllers($this->folder,trans('admin.groupsControllerIndex'),$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,trans('admin.addGroup'));
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'group_name_ar'           =>'required',
          'group_name_en'           =>'required',
          'active'                  =>'required',
          ],[
          'group_name_ar.required'  =>trans('admin.group_name_ar_required'),
          'group_name_en.required'  =>trans('admin.group_name_en_required'),
          'active.required'         =>trans('admin.active_required'),
        ]);

        $add = $this->model::create($data);
        if (request('roles')) {
          foreach (request('roles') as $key => $value) {
            $addRoles = new \App\Groups_route;
            $addRoles->group_id = $add->id;
            $addRoles->route = $value;
            $addRoles->save();
          }
        }
        
        session()->flash('save',trans('admin.added'));
        return redirect(adminUrl($this->folder));
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,trans('admin.editGroup'));

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'group_name_ar'           =>'required',
          'group_name_en'           =>'required',
          'active'                  =>'required',
          ],[
          'group_name_ar.required'  =>trans('admin.group_name_ar_required'),
          'group_name_en.required'  =>trans('admin.group_name_en_required'),
          'active.required'         =>trans('admin.active_required'),
        ]);

        updateControllers($this->model,$id,$data,trans('admin.edited'));
        \App\Groups_route::where('group_id',$id)->delete();
        if (request('roles')) {
          foreach (request('roles') as $key => $value) {
            $addRoles = new \App\Groups_route;
            $addRoles->group_id = $id;
            $addRoles->route = $value;
            $addRoles->save();
          }
        }

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
      activeAllControllers(request(),'\App\Group',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }

    
}
