<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\PagesDataTable;
use Illuminate\Http\Request;
use App\Page;
use Storage;
use Carbon;

class PagesController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Page';
        $this->folder = 'pages';
        $this->indexTitle = 'الصفحات';
        $this->createTitle = 'أضافة   صفحة';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات   صفحة';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(PagesDataTable $data)
    {
      return indexControllers($this->folder,'الصفحات',$data);
    }

   
    public function create()
    {
      return createControllers($this->folder,'أضافة   صفحة');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'title_ar'                  =>'required',
          'title_en'                  =>'required',
          'text_start_ar'             =>'sometimes|nullable',
          'text_start_en'             =>'sometimes|nullable',
          'end_text_ar'               =>'sometimes|nullable',
          'end_text_en'               =>'sometimes|nullable',
          ],[
          'active.required'           =>trans('admin.active_required'),
        ]);

        if (request('text_start_ar')) {
          $data['text_start_ar'] = request('text_start_ar');
        }

        if (request('text_start_en')) {
          $data['text_start_en'] = request('text_start_en');
        }

        if (request('end_text_ar')) {
          $data['end_text_ar'] = request('end_text_ar');
        }

        if (request('end_text_en')) {
          $data['end_text_en'] = request('end_text_en');
        }

        storeControllers($this->model,$data,trans('admin.added'));
        return redirect(adminUrl($this->folder));
    }

    
    

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات   صفحة');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'title_ar'                  =>'required',
          'title_en'                  =>'required',
          'text_start_ar'             =>'sometimes|nullable',
          'text_start_en'             =>'sometimes|nullable',
          'end_text_ar'               =>'sometimes|nullable',
          'end_text_en'               =>'sometimes|nullable',
          ],[
          'active.required'           =>trans('admin.active_required'),
        ]);

        if (request('text_start_ar')) {
          $data['text_start_ar'] = request('text_start_ar');
        }

        if (request('text_start_en')) {
          $data['text_start_en'] = request('text_start_en');
        }

        if (request('end_text_ar')) {
          $data['end_text_ar'] = request('end_text_ar');
        }

        if (request('end_text_en')) {
          $data['end_text_en'] = request('end_text_en');
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
      activeAllControllers(request(),'\App\Page',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
