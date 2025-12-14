<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(){
        $contacts=Contact::with('category');
        $categories=Category::all();
        return view('contact',compact('contacts','categories'));
    }

    public function confirm(ContactRequest $request){
        $contact=$request->only(['first_name','last_name','gender','email','tel-1','tel-2','tel-3','address','building','detail','category_id']);
        return view('confirm',compact('contact'));
    }

    public function store(Request $request){
        // $contact=$request->only(['category_id','first_name','last_name','gender','email','tel-1','tel-2','tel-3','address','building','detail']);
        // Contact::create($contact);
        return view('/thanks');
    }

    public function admin(){
        // $contacts=Contact::all();
        $categories=Category::Paginate(7);
        $contacts=Contact::Paginate(7);
        return view('admin',compact('contacts','categories'));
    }
}