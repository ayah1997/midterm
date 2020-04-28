<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
       // $contacts = Contact::orderBy('id')->get();

       $contacts = Contact::all();
        return view('contact.index',compact('contacts'));
    }
    public function create(){
       
         return view('contact.create');
     }
     public function store(Request $request){
        $request->validate([
        'username'=>'required',
        'useremail'=>'required',
        'userphone'=>'required',
        ]);
        $contact= new Contact();
        $contact->name=$request->username;
        $contact->email=$request->useremail;
        $contact->phone=$request->userphone;
        $contact->save();
        return redirect()->back();
    }
    public function edit(Contact $contact){
       // $contact = Contact::findOrFail($id);
        return view('contact.create',compact('contact'));
    }
    public function update(Request $request,Contact $contact){
        $request->validate([
            'username'=>'required',
            'useremail'=>'required',
            'userphone'=>'required',
            ]);
           // $contact= new Contact();
      //  $contact = Contact::findOrFail($id);

            $contact->name=$request->username;
            $contact->email=$request->useremail;
            $contact->phone=$request->userphone;
            $contact->save();
             return redirect('/contact');


    }
    public function destroy ($id){

        //  DB::table('contacts')->where('id','=',$id)->delete();
  
         $contact=Contact::find($id);
        $contact->delete($id);
          return redirect('/contact');
          
      }
}
