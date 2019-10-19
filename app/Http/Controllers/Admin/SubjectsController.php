<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\SubjectsDataTable;
use Illuminate\Http\Request;
use App\Contacts_subject;
use Storage;
use Carbon;

class SubjectsController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Contacts_subject';
        $this->folder = 'subjects';
        $this->indexTitle = 'مواضيع الرسائل';
        $this->createTitle = 'أضافة  موضوع';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات  موضوع';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(SubjectsDataTable $data)
    {
        
        return indexControllers($this->folder,'مواضيع الرسائل',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'أضافة  موضوع');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'title_ar'                  =>'required',
          'title_en'                  =>'required',
          'active'                    =>'required',
          
          ],[
          'title_ar.required'         =>trans('admin.title_ar_required'),
          'title_en.required'         =>trans('admin.title_en_required'),
          'active.required'           =>trans('admin.active_required'),
        ]);

        storeControllers($this->model,$data,trans('admin.added'));
        return redirect(adminUrl($this->folder));
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات  موضوع');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'title_ar'                  =>'required',
          'title_en'                  =>'required',
          'active'                    =>'required',
          
          ],[
          'title_ar.required'         =>trans('admin.title_ar_required'),
          'title_en.required'         =>trans('admin.title_en_required'),
          'active.required'           =>trans('admin.active_required'),
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
      activeAllControllers(request(),'\App\Contacts_subject',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
