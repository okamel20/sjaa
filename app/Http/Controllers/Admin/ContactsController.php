<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\ContactsDataTable;
use Illuminate\Http\Request;
use App\Contact;
use Storage;
use Carbon;

class ContactsController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Contact';
        $this->folder = 'contacts';
        $this->indexTitle = 'رسائل اتصل بنا';
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(ContactsDataTable $data)
    {
        
        return indexControllers($this->folder,'رسائل اتصل بنا',$data);
    }

    public function show($id)
    {
        $data = $this->model::find($id);
        $title = 'عرض الرسالة';
        if ($data) {
            return view('admin.contacts.show',compact('data','title'));
        }else{
            return back();
        }
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

}
