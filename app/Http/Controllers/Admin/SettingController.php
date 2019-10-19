<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use Storage;
class SettingController extends Controller
{
    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Setting';
        $this->folder = 'setting';
        $this->indexTitle = trans('admin.setting');
        $this->updateTitle = trans('admin.save');
    }

    public function index()
    {
        $data = getSetting();
        return indexSetting($this->folder,trans('admin.setting'),$data);
    }

   
    public function update($id)
    {
        $data = request()->except(['_token','_method']);
        if (request()->hasFile('app_logo')) {
            $data['app_logo'] = updateImg($this->model,$id,'app_logo',$this->folder);
        }
        updateSetting($this->model,$id,trans('admin.save'),$data);
        return back();
    }

    public function sochialLinks()
    {
        $data = getSetting();
        return indexSettingSochail($this->folder,'روابط التواصل الأجتماعى',$data);
    }

   
    public function sochialLinksUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting($this->model,$id,trans('admin.save'),$data);
        return back();
    }

    public function visionIndex()
    {
        $data = getSetting();
        return indexSettingPages($this->folder,'رؤيتنا',$data,'vision');
    }

   
    public function visionUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting($this->model,$id,trans('admin.save'),$data);
        return back();
    }

    public function goalIndex()
    {
        $data = getSetting();
        return indexSettingPages($this->folder,'الهدف',$data,'goal');
    }

   
    public function goalUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting($this->model,$id,trans('admin.save'),$data);
        return back();
    }

    public function messageIndex()
    {
        $data = getSetting();
        return indexSettingPages($this->folder,'الرسالة',$data,'message');
    }

   
    public function messageUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting($this->model,$id,trans('admin.save'),$data);
        return back();
    }

    public function publishIndex()
    {
        $data = getSetting();
        return indexSettingPages($this->folder,'نطاق النشر',$data,'publish');
    }

   
    public function publishUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting($this->model,$id,trans('admin.save'),$data);
        return back();
    }

    public function magazineIndex()
    {
        $data = getSetting();
        return indexSettingPages($this->folder,'عن المجلة',$data,'magazine');
    }

   
    public function magazineUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting($this->model,$id,trans('admin.save'),$data);
        return back();
    }

   
}
