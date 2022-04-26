<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('/contact');
    }
    public function confirm(Request $request)
    {
        $inputs = $request->all();
        return view('/confirm', ['inputs' => $inputs]);
    }
    public function process(Request $request)
    {
        $action = $request->get('action', 'return');
        $input  = $request->except('action');

        if($action === 'submit') {
            Contact::create($input);
            $items = Contact::all();
            return view('/complete');
        } else {
            return redirect()->route('contact')->withInput($input);
        };
    }
    public function client()
    {
        return view('/client');
    }
    public function search(Request $request)
    {
        $fullname = $request->input('fullname');
        $gender = $request->input('gender');
        $created_at = $request->input('created_at');
        $email = $request->input('email');
        $query = Contact::query();

        if(!empty($fullname)) {
            $query->where('fullname', 'LIKE', '%'.$fullname.'%');
        }
        if(!empty($gender)) {
            $query->where('gender', $gender);
        }
        if(!empty($created_at)) {
            $query->whereBetween('created_at', [$from, $until]);
        }
        if(!empty($email)) {
            $query->where('email', 'LIKE', '%'.$email.'%');
        }
        $items = $query->get();
        $pages = Contact::Paginate(20);
        return view('/client', compact('items', 'fullname', 'gender', 'created_at', 'email', 'pages'));
    }
    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        $items = Contact::all();
        return view('/client', ['items' => $items]);
    }
}
