<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\EditionDataTable;
use Illuminate\Http\Request;
use App\Edition;
use Storage;
use Carbon;

class EditionsController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Edition';
        $this->folder = 'editions';
        $this->indexTitle = 'الطبعات';
        $this->createTitle = 'أضافة   طبعة';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات   طبعة';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(EditionDataTable $data)
    {
        
        return indexControllers($this->folder,'الطبعات',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'أضافة   طبعة');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'pdf_file'                  =>'required',
          'date'                      =>'sometimes|nullable',
          'active'                    =>'required',
          'the_number_ar'             => 'required',
          'the_number_en'             => 'required',
          
          ],[
          'pdf_file.required'         =>trans('admin.pdf_file_required'),
          'active.required'           =>trans('admin.active_required'),
        ]);

        if (request()->hasFile('pdf_file')) {
            $data['pdf_file'] = request()->file('pdf_file')->store($this->folder);
        }


        storeControllers($this->model,$data,trans('admin.added'));
        return redirect(adminUrl($this->folder));
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات   طبعة');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'pdf_file'                  =>'sometimes|nullable',
          'date'                      =>'sometimes|nullable',
          'active'                    =>'required',
          'the_number_ar'             => 'required',
          'the_number_en'             => 'required',
          
          ],[
          'pdf_file.required'         =>trans('admin.pdf_file_required'),
          'active.required'           =>trans('admin.active_required'),
        ]);

        

        if (request()->hasFile('pdf_file')) {
            $data['pdf_file'] = updateImg($this->model,$id,'pdf_file',$this->folder);
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
      activeAllControllers(request(),'\App\Edition',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
