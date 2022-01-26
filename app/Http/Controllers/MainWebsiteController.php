<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Contact;


class MainWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreData(Request $request)
    {
     $this->validate($request, [
        'firstname'    => ['required'],
        'lname'        => ['required'],
        'telephone'    => ['required'],
        'phone'        => ['required'],
        'email'        => ['required'],
        'address'      => ['required'],
        'city'         => ['required'],
        'state'        => ['required'],
        'zip_code'     => ['required'],
        'country'      => ['required'],
        'comment'      => ['required'],
        'consent'      => [''],
    ]);

     // this code is for sending email to the new registeration person..............
        $data['first_name'] = $request->firstname;
        $to_user =  env('ADMIN_EMAIL','mailtorafiullah@gmail.com');
        $from = env('MAIL_USERNAME','salmanlara78@gmail.com');
        $name = "Travel Website";

        Mail::send('emails.verify_mail',['data'=>$data],function ($message) use($from,$name,$to_user) {
            $message->from($from, $name);
            $message->subject('Thanks for Contacting Us');
            $message->to($to_user);
        }); 
/*
       $create   = Contact::create([
            'first_name'  => $request->firstname,
            'last_name'   => $request->lname,
            'telephone'   => $request->telephone,
            'phone'       => $request->phone,
            'email'       => $request->email,
            'address'     => $request->address,
            'city'        => $request->city,
            'state'       => $request->state,
            'zip_code'    => $request->zip_code,
            'country'     => $request->country,
            'comment'     => $request->comment,
            'consent'     => $request->consent,
        ]);*/

       /* if($create){*/
            return response()->json(["msg"=>true,"message"=>"Message Send Succesfully"]);  
     /*   }else{*/
       /*     return response()->json(["msg"=>false,"message"=>"Something went wrong.!"]);
        }
*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
