<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function submit(Request $request){
    	$name = $request->name;
    	$email = $request->email;
    	$mobile = $request->mobile;
    	$message = $request->message;
    	$contactform = new Contact([
    		'name'=>$name,
    		'email'=>$email,
    		'mobile'=>$mobile,
    		'message'=>$message
    	]);
    	$contactform->save();
    	return back()->with("message","Details Submited Successfully! We will get back tou soon");
    }
}
