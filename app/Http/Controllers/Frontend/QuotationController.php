<?php

namespace App\Http\Controllers\Frontend;

use App\quotation;
// use Mail; 
use Illuminate\Support\Facades\Mail;

use App\Mail\QuoteFormMail;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function index(){
        return view ('Frontend.contact_quote');
    }
    
    public function save(Request $request)
    {
        $this-> validate($request,
        [
            'title' => 'required',
            'name' => 'required',
            'company' => 'required',
            'phone'=> 'required',
            'email' => 'required|email',
            'description' => 'required',
            'file.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);

        // $contact = new quotation;

        // $contact->title = $request->title;
        // $contact->name = $request->name;
        // $contact->company = $request->company;
        // $contact->phone = $request->phone;
        // $contact->email = $request->email;
        // $contact->description = $request->description;
        // $contact->file = $request->file;

        // Quotation::create([
        //     'title' => $request->get('title'),
        //     'name' => $request->get('name'),
        //     'company' => $request->get('company'),
        //     'phone' => $request->get('phone'),
        //     'email' => $request->get('email'),
        //     'description' => $request->get('description'),
        //     'file' => $request->get('file')
        // ]);

        // $contact = [
        //     'title' => $request->get('title'),
        //     'name' => $request->get('name'),
        //     'company' => $request->get('company'),
        //     'phone' => $request->get('phone'),
        //     'email' => $request->get('email'),
        //     'description' => $request->get('description'),
        //     'file' => $request->get('file')->store('contact','public')
        // ];

        $contact = [
            'title' => $request->title,
            'name' => $request->name,
            'company' => $request->company,
            'phone' => $request->phone,
            'email' => $request->email,
            'description' => $request->description,
            'file' => $request->file('file')
                        ->store('uploads')
        ];

         Quotation::create($request->all());
        //   dd($contact);
        //   dd($request->all());
        //   dd($request->all());

        
        //  return ($request->all() );
        // $contact->save();

        Mail::to('adhe.yuhuu175@gmail.com')->send(new QuoteFormMail($contact));
        
        // return redirect()->back()->with('status', ' Your Mail has been received');
        return redirect('/confirm')->with('status', ' Your Mail has been received') ;




        // return back()->with('sudah masuk gan');

        //  return back()->with('sudah masuk gan');
    }
}
