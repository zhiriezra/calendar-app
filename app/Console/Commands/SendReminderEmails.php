<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Event;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReminderEmail;
use Carbon\Carbon;

class SendReminderEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminder e-mails';

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
        $i = 0;
        $event = Event::all();  

        foreach($event as $event)
        {

            if ($event->days_left == 7) {
                $email = [$event->email,'maibinu@gmail.com', 'zhiriezra@gmail.com'];
                Mail::to($email)->send(new ReminderEmail($event));
            }
            else{

            }
            $i++; 
        }
    }
}
