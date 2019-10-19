<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\SlidersDataTable;
use Illuminate\Http\Request;
use App\Slider;
use Storage;

class SlidersController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Slider';
        $this->folder = 'sliders';
        $this->indexTitle = 'عرض الشرائح';
        $this->createTitle = 'أضافة شريحة';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات شريحة';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(SlidersDataTable $data)
    {
        
        return indexControllers($this->folder,'عرض الشرائح',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'أضافة شريحة');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'title_ar'                =>'required',
          'title_en'                =>'required',
          'content_ar'              =>'required',
          'content_en'              =>'required',
          'active'                  =>'required',
          'img'                     =>'required|image|mimes:jpg,jpeg,png,gif,bmp',
          ],[
          'title_ar.required'       =>trans('admin.title_ar_required'),
          'title_en.required'       =>trans('admin.title_en_required'),
          'content_ar.required'     =>trans('admin.content_ar_required'),
          'content_en.required'     =>trans('admin.content_en_required'),
          'active.required'         =>trans('admin.active_same'),
          'img.required'            =>trans('admin.img_required'),
        ]);

        if (request()->hasFile('img')) {
            $data['img'] = request()->file('img')->store('sliders');
        }

        storeControllers($this->model,$data,trans('admin.added'));
        return redirect(adminUrl($this->folder));
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات شريحة');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'title_ar'                =>'required',
          'title_en'                =>'required',
          'content_ar'              =>'required',
          'content_en'              =>'required',
          'active'                  =>'required',
          'img'                     =>'sometimes|nullable|image|mimes:jpg,jpeg,png,gif,bmp',
          ],[
          'title_ar.required'       =>trans('admin.title_ar_required'),
          'title_en.required'       =>trans('admin.title_en_required'),
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
      activeAllControllers(request(),'\App\Slider',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
