<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\AuthorsDataTable;
use Illuminate\Http\Request;
use App\Author;
use Storage;

class AuthorsController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Author';
        $this->folder = 'authors';
        $this->indexTitle = 'كتاب الأخبار';
        $this->createTitle = 'أضافة كاتب';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات كاتب';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(AuthorsDataTable $data)
    {
        
        return indexControllers($this->folder,'كتاب الأخبار',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'أضافة كاتب');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'name_ar'                    =>'required',
          'name_en'                    =>'required',
          'active'                     =>'required',
          
          ],[
          'name_ar.required'           =>trans('admin.name_ar_required'),
          'name_en.required'           =>trans('admin.name_en_required'),
          'active.required'            =>trans('admin.active_required'),
        ]);

        storeControllers($this->model,$data,trans('admin.added'));
        return redirect(adminUrl($this->folder));
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات كاتب');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'name_ar'                    =>'required',
          'name_en'                    =>'required',
          'active'                     =>'required',
          
          ],[
          'name_ar.required'           =>trans('admin.name_ar_required'),
          'name_en.required'           =>trans('admin.name_en_required'),
          'active.required'            =>trans('admin.active_required'),
        ]);

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
      activeAllControllers(request(),'\App\Author',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
