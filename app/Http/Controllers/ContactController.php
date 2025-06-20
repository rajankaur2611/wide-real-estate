<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContactMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.frontend.contact');
    }
    public function save(Request $request)
    {
        $contact = new Contact();
        $contact->fullname = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('number');
        $contact->message = $request->input('message');
        $contact->property_type = $request->input('property_type');
        $contact->pid = $request->input('pid');
        $data = $request->all();
        $status = 200;
        if($contact->save()) {
            \Mail::to(env('ADMIN_MAIL'))->send(new SendContactMail($data));
        } else {
            $status = 400;
        }
        return response()->json([
            'status' => $status,
            'message' => 'done',
        ]);
    }
}
