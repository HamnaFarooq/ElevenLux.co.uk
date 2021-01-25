<?php

namespace App\Http\Controllers;

use App\User;
use App\Vacancy;
use Mail;
use Illuminate\Http\Request;
use Validator;
use PDF;

class UserController extends Controller
{
    public function welcome()
    {
        $user = User::Where('id', 1)->first();
        $user->visits = $user->visits + 1;
        $user->save();
        return view('welcome');
    }

    public function vacancies()
    {
        $vacancies = Vacancy::get();
        return view('vacancies', compact('vacancies'));
    }

    public function services()
    {
        return view('services');
    }

    public function candidates()
    {
        return view('candidates');
    }

    public function contact_us(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'subject' => 'required|max:255',
            'message' => 'required|max:255',
        ])->validate();

        // get request data and send it to support@elevenlux.co.uk
        $to_name = "ElevenLux";
        $to_email = "F2016065099@umt.edu.pk";
        $name = $request->name;
        $subject = $request->subject;
        $msg = $request->message;
        $email = $request->email;
        $data = array('to' => $to_name, 'name' => $name, 'msg' => $msg, 'email' => $email, 'subject' => $subject);
        // dd($data);
        Mail::send('emails.contact', $data, function ($message) use ($to_name, $to_email, $subject) {
            $message->to($to_email, $to_name)->subject($subject);
            $message->from('F2016065099@umt.edu.pk', 'ElevenLux');
        });
        return redirect()->back();
    }

    public function send_cv(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'email' => 'required|max:255',
            'number' => 'required|max:255',
        ])->validate();

        $cv = $request->cv;

        // get request data and send it to support@elevenlux.co.uk
        $to_name = "ElevenLux";
        $to_email = "F2016065099@umt.edu.pk";
        $name = $request->name;
        $position = $request->position;
        $number = $request->number;
        $email = $request->email;
        $data = array('to' => $to_name, 'name' => $name, 'email' => $email, 'position' => $position, 'number' => $number);
        // dd($data);
        Mail::send('emails.send_cv', $data, function ($message) use ($to_name, $to_email, $cv) {
            $message->to($to_email, $to_name)->subject('CV recieved');
            $message->from('F2016065099@umt.edu.pk', 'ElevenLux');
            $message->attach($cv, array(
                'as' => 'CV.pdf', 
                'mime' => 'application/pdf')
            );
        });
        return redirect()->back();
    }
}
