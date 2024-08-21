<?php


namespace App\Repositories;


use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactMessagesRepository
{

    public function store(Request $request)
    {

       $response =  Contact::create([
           'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'message' => $request->get('message')
        ]);


       return $response;
    }

    public function getAll()
    {

        $contacts = Contact::where('mark_as_read',false)->get();
        return $contacts;
    }


    public function markContactasRead($id){

        $response =  Contact::where('id',$id)->update([
            'mark_as_read' => true
        ]);

        return $response;
    }

}
