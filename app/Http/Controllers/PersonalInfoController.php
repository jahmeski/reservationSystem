<?php

namespace App\Http\Controllers;

use App\PersonalInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PersonalInfoRequest;

class PersonalInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalInfo = PersonalInfo::where('user_id', Auth::user()->id)->first();
        if ($personalInfo) {
            return view('user.personal_info', compact('personalInfo'));
        }
        else {
            $personalInfo = new PersonalInfo();
            return view('user.personal_info', compact('personalInfo'));
        }
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
    public function store(PersonalInfoRequest $request)
    {
        $personalInfo = $request->all();

        Auth::user()->personalInfo()->create($personalInfo);
        return Redirect::back()->with('message','Personal Information Created!');
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
    public function update(PersonalInfoRequest $request, $id)
    {
        $personalInfo = PersonalInfo::findOrFail($id);
        $personalInfo->update($request->all());
        
        return Redirect::back()->with('message','Personal Information Updated!');
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
