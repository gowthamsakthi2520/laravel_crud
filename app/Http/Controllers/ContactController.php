<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conduct;
use Session;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // landing page calling in function
    public function create()
    {

        return view('contact');
    }

    // Data Store calling in function
    public function Store(Request $request)
    {

        $validate = $request->validate([
            'Username' => 'required',
            'Password' => 'required',
            'Email' => 'required',
            'Number' => 'required|digits:10',
            'file' => 'required'
        ]);

        //Move Uploaded File to public folder
        $destinationPath = 'uploads';
        $myimage = time() . '_' . $request->file->getClientOriginalName();
        $validate['file_path'] = $request->file->move(public_path($destinationPath), $myimage);
        $path=$validate['name'] = 'uploads/' . $myimage;
        $Conduct_model = Conduct::create($validate);
        
        Session::flash('success', 'Form submitted successfully');
       

        // mail send in section
        //send data as array to contactEmailJob

        $contact_data['Username'] = $request->Username;
        $contact_data['Password'] = $request->Password;
        $contact_data['Email'] = $request->Email;
        $contact_data['Number'] = $request->Number;
        $contact_data['file'] = $path;

        Mail::to('gowthamsakthi2520@gmail.com')->send(new ContactMail($contact_data));
        return redirect()->route('contact_form');
        Session::flash('success', 'Form submitted successfully');

    }
    // list in datas 
    public function list()
    {
        $Users = Conduct::all();
        return view('/Contact_list', compact('Users'));
    }

    // edit section

    public function edit($id)
    {
        $User = Conduct::find($id);
        return view('/Conduct_edit', compact('User'));
    }
    // post method in update

    public function update(Request $request, $id)
    {


        $validate = $request->validate([
            'Username' => 'required',
            'Password' => 'required',
            'Email' => 'required',
            'Number' => 'required|digits:10'
        ]);

        $Conduct = Conduct::find($id);
        if ($request->hasFile('file')) {

            $destinationPath = 'uploads';
            $myimage = time() . '_' . $request->file->getClientOriginalName();
            $validate['file_path'] = $request->file->move(public_path($destinationPath), $myimage);
            $validate['name'] = 'uploads/' . $myimage;
        }
        if ($Conduct->update($validate)) {
            // unlink(public_path('uploads/'.$myimage)); 
            \File::delete(public_path('upload/public_img.png'));
        } else {
            dd('File not found');
        }

        return redirect()->route('Conduct')->with('Update', 'Updated Successfully');
    }

    // delete section

    public function delete($id)
    {
        $Conduct = Conduct::find($id);
        $Conduct->delete();
        return redirect()->route('Conduct')->with('Success', 'Deleted Successfully');
    }


}