<?php

namespace App\Http\Controllers;
//use App\File;

class UploadController extends Controller
{
	//  'name','size','file','path','full_file','mime_type','file_type','type_id'
    
    public static function upload($data = [])
    {
    	if (in_array('newName', $data)) 
    	{
    		$newName = $data['newName'] === null?time():$data['newName'];
    	}
    	
    	if (request()->hasFile($data['request']) && $data['upload_type'] == 'single') 
    	{
    		if (in_array('delete_file', $data) && !empty($data['delete_file'])) {
                Storage::delete($data['delete_file']);
            }
    		return request()->file($data['request'])->store($data['path']);
    	}
    }
}
