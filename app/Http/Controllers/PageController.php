<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('indexx');
    }

    public function uploadFile(Request $request){

        // Validation
        $request->validate([
              'file' => 'required|mimes:png,jpg,jpeg,pdf,.doc,.docx|max:2048'
        ]);

        if($request->file('file')) {
              $file = $request->file('file');
              $filename = time().'_'.$file->getClientOriginalName();

              // File upload location
              $location = 'uploads';

              // Upload file
              $file->move($location,$filename);

              Session::flash('message','Upload Successfully.');
              Session::flash('alert-class', 'alert-success');
        }else{
              Session::flash('message','File not uploaded.');
              Session::flash('alert-class', 'alert-danger');
        }
        return redirect('/');
   }
}
