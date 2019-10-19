<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\PagecontentsDataTable;
use Illuminate\Http\Request;
use App\Page_content;
use Storage;
use Carbon;

class PagecontentsController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->title_page = \App\Page::find(request('page_id'));
        $this->model = 'App\Page_content';
        $this->folder = 'pagecontents';
        $this->indexTitle = 'محتوى صفحة '.$this->title_page['title_ar'];
        $this->createTitle = 'أضافة  محتوى';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات   مجتوى';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(PagecontentsDataTable $data)
    {
      return indexControllers($this->folder,'محتوى صفحة '.$this->title_page['title_ar'] ,$data);
    }

   
    public function create()
    {
      return createControllers($this->folder,'أضافة  محتوى  لـ' .$this->title_page['title_ar']);
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'page_id'                   =>'sometimes|nullable',
          'title_ar'                  =>'required',
          'title_en'                  =>'required',
          'content_ar'                =>'required',
          'content_en'                =>'required',
          'active'                    =>'required',
          ],[
          'active.required'           =>trans('admin.active_required'),
        ]);

        $data['page_id'] = request('page_id');

        storeControllers($this->model,$data,trans('admin.added'));
        return redirect(adminUrl($this->folder.'?page_id='.request('page_id')));
    }

    
    

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات   محتوى  لـ' .$this->title_page['title_ar'] );

    }

    
    public function update($id)
    {
        $page = $this->model::find($id)['page_id'];
        $data = $this->validate(request(),[
          'title_ar'                  =>'required',
          'title_en'                  =>'required',
          'content_ar'                =>'required',
          'content_en'                =>'required',
          'active'                    =>'required',
          ],[
          'active.required'           =>trans('admin.active_required'),
        ]);


        updateControllers($this->model,$id,$data,trans('admin.edited'));
        return redirect(adminUrl($this->folder.'?page_id='.$page));

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
      activeAllControllers(request(),'\App\Page_content',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
