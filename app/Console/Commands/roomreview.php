<?php

namespace App\Console\Commands;

use App\Mail\Roomconfirmation;
use App\Mail\Roomreview as MailRoomreview;
use App\Models\Room;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
class roomreview extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "review:mail";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "This command will send an email to the user day after he/she left's the hotel.";

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $leavedate = Room::where('checkout','<',today())->get();
        // dd($leavedate);

        if($leavedate){
            $mails = User::all();
        foreach($mails as $mail){
            Mail::to( $mail )->send( new MailRoomreview());
        }
            Mail::to( 'himarahotel@gmail.com' )->send( new MailRoomreview());
        }
        // return Command::SUCCESS;
        echo 'mail sent successfully';
    }
}
