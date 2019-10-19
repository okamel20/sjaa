<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = [
       'app_name_en', 'app_name_ar', 'app_logo', 'email', 'goal_ar', 'goal_en', 'vision_ar', 'vision_en', 'message_ar', 'message_en', 'publish_ar', 'publish_en', 'magazine_ar', 'magazine_en', 'insta_link', 'twiter', 'facebook', 'gogle', 'phone_one', 'managing_editor_ar', 'managing_editor_en', 'bos_editor_ar', 'bos_editor_en', 'address_en', 'address_ar', 'box_num','editorial_office_ar','editorial_office_en','address2_ar','address2_en','editorial_office2_ar','editorial_office2_en'
    ];
}
