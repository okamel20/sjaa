<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Mail;
// use DB;
class SendSubEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:sub';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send emails where sub';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $emails = \App\Emails::where('active',0)->whereDate('sendtime', '=', Carbon::today()->toDateString())->get();
        foreach ($emails as $key => $value) {
             // Send the email to user
            $subData = [];
            $subData['sub'] = \App\Services_user::find($value['sub_id']);
            $subData['user'] = \App\Client::find($value['user_id']);
            $subData['template'] = \App\Template::find(1);

            Mail::send('admin.emails.subNew', ['title' => 'مهم : رسالة تجديد أشتراك \ رؤي الأعلام','data' => $subData], function ($mail) use ($subData) {
                $mail->to($subData['user']->email)
                    ->from('info@mv.sa', 'رؤي الأعلام')
                    ->subject('رسالة تجديد أشتراك');
            });

            $admins = \App\Admin::all();
            foreach ($admins as $key2 => $admin) {
                Mail::send('admin.emails.subAdmin', ['title' => 'تنبية قرب أنتهاء أشتراك العميل '.$subData['user']->fullname,'data' => $subData], function ($mail) use ($subData,$admin) {
                    $mail->to($admin->email)
                        ->from('info@mv.sa', 'سكربت اداره العملاء')
                        ->subject('قرب أنتهاء أشتراك');
                });

                $notfi = new \App\Notfi;
                $notfi->title = 'أوشك أشتراك العميل <a href="'.url('customers/admin/subService?id='.$subData['sub']->service_id).'&code='.$subData['sub']->id.'">'.$subData['user']->fullname.'</a> للخدمة المقدمه : '.\App\Service::find($subData['sub']->service_id)['name'].' على الأنتهاء';
                $notfi->view = 0;
                $notfi->user_id = $admin->id;
                $notfi->service_id = $subData['sub']->service_id;
                $notfi->sub_id = $subData['sub']->id;
                $notfi->save();
            }
            
            $value->delete();
        }
        if (count($emails)) {
            $this->info('sent successfully!');
        }else{
            $this->info('no Task');
        }
        
        
    }
}
