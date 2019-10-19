<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\SaidaboutsDataTable;
use Illuminate\Http\Request;
use App\Said_about;
use Storage;

class SaidaboutsController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Said_about';
        $this->folder = 'saidabouts';
        $this->indexTitle = 'قالوا عنا';
        $this->createTitle = 'أضافة  فى قالوا عنا';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات  فى قالوا عنا';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(SaidaboutsDataTable $data)
    {
        
        return indexControllers($this->folder,'قالوا عنا',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'أضافة  فى قالوا عنا');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'name_ar'                 =>'required',
          'name_en'                 =>'required',
          'content_ar'              =>'required',
          'content_en'              =>'required',
          'active'                  =>'required',
          'img'                     =>'required|image|mimes:jpg,jpeg,png,gif,bmp',
          ],[
          'name_ar.required'        =>trans('admin.name_ar_required'),
          'name_en.required'        =>trans('admin.name_en_required'),
          'content_ar.required'     =>trans('admin.content_ar_required'),
          'content_en.required'     =>trans('admin.content_en_required'),
          'active.required'         =>trans('admin.active_same'),
          'img.required'            =>trans('admin.img_required'),
        ]);

        if (request()->hasFile('img')) {
            $data['img'] = request()->file('img')->store('saidabouts');
        }

        storeControllers($this->model,$data,trans('admin.added'));
        return redirect(adminUrl($this->folder));
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات  فى قالوا عنا');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'name_ar'                 =>'required',
          'name_en'                 =>'required',
          'content_ar'              =>'required',
          'content_en'              =>'required',
          'active'                  =>'required',
          'img'                     =>'sometimes|nullable|image|mimes:jpg,jpeg,png,gif,bmp',
          ],[
          'name_ar.required'        =>trans('admin.name_ar_required'),
          'name_en.required'        =>trans('admin.name_en_required'),
          'content_ar.required'     =>trans('admin.content_ar_required'),
          'content_en.required'     =>trans('admin.content_en_required'),
          'active.required'         =>trans('admin.active_same'),
          'img.required'            =>trans('admin.img_required'),
        ]);

        if (request()->hasFile('img')) {
            $data['img'] = updateImg($this->model,$id,'img',$this->folder);
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
      activeAllControllers(request(),'\App\Said_about',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
