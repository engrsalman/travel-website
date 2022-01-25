<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;

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
        'firstname'    => ['required', 'string'],
        'lname'        => ['required', 'string'],
        'telephone'    => ['required', 'string'],
        'phone'        => ['required', 'number'],
        'email'        => ['required', 'email'],
        'address'      => ['required', 'string'],
        'city'         => ['required', 'string'],
        'state'        => ['required', 'string'],
        'zip_code'     => ['required', 'string'],
        'country'      => ['required', 'string'],
        'comment'      => ['required', 'string'],
        'consent'      => [''],
    ]);

        $first_name    = $request->firstname; 
        $last_name     = $request->lname; 
        $telephone     = $request->telephone; 
        $phone         = $request->phone; 
        $email         = $request->email; 
        $address       = $request->address; 
        $city          = $request->city; 
        $state         = $request->state; 
        $zip_code      = $request->zip_code; 
        $country       = $request->country; 
        $comment       = $request->comment; 
        $consent       = $request->consent; 

       $create   = Contact::create([

            'first_name'  => $first_name,
            'last_name'   => $last_name,
            'telephone'   => $telephone,
            'phone'       => $phone,
            'email'       => $email,
            'address'     => $address,
            'city'        => $city,
            'state'       => $state,
            'zip_code'    => $zip_code,
            'country'     => $country,
            'comment'     => $comment,
            'consent'     => $consent,
        ]);

        if($create){
            return response()
            ->json(["msg"=>true,"message"=>"Message Send Succesfully"]);
            

        }else{
            return response()
            ->json(["msg"=>false,"message"=>"Something went wrong.!"]);
        }
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
