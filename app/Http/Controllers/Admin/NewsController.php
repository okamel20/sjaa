<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\NewsDataTable;
use Illuminate\Http\Request;
use App\News;
use Storage;
use Carbon;

class NewsController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\News';
        $this->folder = 'news';
        $this->indexTitle = trans('admin.news');
        $this->createTitle = trans('admin.addNews');
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات  خبر';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(NewsDataTable $data)
    {
        
        return indexControllers($this->folder,trans('admin.news'),$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,trans('admin.addNews'));
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'author_id'                 =>'required',
          'month_name_ar'             =>'sometimes|nullable',
          'month_name_en'             =>'sometimes|nullable',
          'year'                      =>'sometimes|nullable',
          'page_num'                  =>'required',
          'title_ar'                  =>'required',
          'title_en'                  =>'required',
          'content_ar'                =>'required',
          'content_en'                =>'required',
          'img'                       =>'required',
          'active'                    =>'required',
          
          ],[
          'author_id.required'        =>trans('admin.author_id_required'),
          'month_name_ar.required'    =>trans('admin.month_name_ar_required'),
          'month_name_en.required'    =>trans('admin.month_name_en_required'),
          'year.required'             =>trans('admin.year_required'),
          'title_ar.required'         =>trans('admin.title_ar_required'),
          'title_en.required'         =>trans('admin.title_en_required'),
          'content_ar.required'       =>trans('admin.content_ar_required'),
          'content_en.required'       =>trans('admin.content_en_required'),
          'img.required'              =>trans('admin.img_required'),
          'active.required'           =>trans('admin.active_required'),
        ]);

        if (request()->hasFile('img')) {
            $data['img'] = request()->file('img')->store($this->folder);
        }

        $listMonthAr = ['يناير' , 'فبراير' , 'مارس' , ' أبريل' ,' مايو' , 'يونيو' , ' يوليو' ,' أغسطس' , 'سبتمبر' , ' اكتوبر' ,'  نوفمبر' , ' ديسمبر' ];
        $listMonthEn = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',];

        $data['year'] = Carbon\Carbon::now()->year;
        $month = Carbon\Carbon::now()->month - 1;
        $data['month_name_ar'] = $listMonthAr[$month] ;
        $data['month_name_en'] = $listMonthEn[$month];

        storeControllers($this->model,$data,trans('admin.added'));
        return redirect(adminUrl($this->folder));
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات  خبر');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'author_id'                 =>'required',
          'month_name_ar'             =>'sometimes|nullable',
          'month_name_en'             =>'sometimes|nullable',
          'year'                      =>'sometimes|nullable',
          'page_num'                  =>'required',
          'title_ar'                  =>'required',
          'title_en'                  =>'required',
          'content_ar'                =>'required',
          'content_en'                =>'required',
          'active'                    =>'required',
          'img'                       =>'sometimes|nullable|image|mimes:jpg,jpeg,png,gif,bmp',
          
          ],[
          'author_id.required'        =>trans('admin.author_id_required'),
          'month_name_ar.required'    =>trans('admin.month_name_ar_required'),
          'month_name_en.required'    =>trans('admin.month_name_en_required'),
          'year.required'             =>trans('admin.year_required'),
          'title_ar.required'         =>trans('admin.title_ar_required'),
          'title_en.required'         =>trans('admin.title_en_required'),
          'content_ar.required'       =>trans('admin.content_ar_required'),
          'content_en.required'       =>trans('admin.content_en_required'),
          'img.required'              =>trans('admin.img_required'),
          'active.required'           =>trans('admin.active_required'),
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
      activeAllControllers(request(),'\App\News',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
