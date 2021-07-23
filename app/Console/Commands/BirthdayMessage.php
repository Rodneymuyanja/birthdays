<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\friends;
use Mail;

class BirthdayMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'birthday:message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Message to the birthday baby';

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
     * check database everyday and see if theres 
     * a birthday, if there's one send attached message 
     * else return no birthdays today
     * @return int
     */
    public function handle() {
        //check for date
        $dets = Array();
        $name = Array();
        $date = Array();
        $dateToday = date('Y-m-d');
        $date = friends::select('birthday')->where('birthday', $dateToday)->get()->toArray();

        if(!empty($date)) {
            $name = friends::select('name','message','email')->where('birthday', $dateToday)->get()->toArray();

            foreach($name as $n) {
                $email = $n['email'];
                $nem = $n['name'];
                $mes = $n['message'];
                array_push($dets, $n);
                Mail::raw($mes, function($message) use($email, $nem){
                    $message->to($email, $nem)->subject('Happy Birthday');
                    $message->from('muyanjarodney266@gmail.com', 'Birthday Website');
                });
                $this->info('sent message to '.$n['name']);
            }

            $this->info('sent messages to the babies');
        }else{
            echo("No birthdays today...");
        }
       // return 0;
    }
}
