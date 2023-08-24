<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;

class ScheduleTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schedule-task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Hey I'm just  a task scheduler";

    /**
     * Execute the console command.
     */
    public function handle()
    {
        info("hello");
        $emails = ['shruti.hackeryt@gmail.com','codewithaisha@gmail.com','nkspi.cafe@gmail.com'];
        $msg = `
            <h1>Dear user,</h1>
            <p style="color: 'green'">This is to inform you that you successfully learn scheduling task</p>
        `;
        Mail::send('home',[], function ($message) use ($emails, $msg) {
            $message->to($emails)
            ->subject('Congratulations !!')
            ->setBody($msg, 'text/html');
        });
    }
}
