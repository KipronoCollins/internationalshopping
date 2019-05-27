<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
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
        //will be used by the admin to display all the availabe users
        return "index()";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //this will be used by the admin to create the user accounts
        return "create()";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //used by admin to store the newly created user account
        return "store()";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //will not be used
        return "show()";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //will be used by both the admin and user to display the form to edit the user data
        //should return the user data along with the form

        
        if($id == Auth::user()->id)
        {
        $user_data = User::where('id',$id)->first();
        $name = User::where('id',$id)->value('name');
        $phonenumber = User::where('id',$id)->value('phonenumber');
        $email = User::where('id',$id)->value('email');
        $avatar = User::where('id',$id)->value('avatar');
        
        return view('user/profile')->withName($name)->withPhonenumber($phonenumber)->withEmail($email)->withAvatar($avatar);
        }
        else
        {
            return abort(403, 'Unauthorized action.');
        }
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
        //will also be used to update the user data by both the admin and user

        $file = $request->file('file');
       

        $check = User::where('id',$id)->value('avatar');

        if($file == null)
        {
            $user= User::findOrFail($id);
            $user->name = $request->name;
            $user->phonenumber = $request->phonenumber;
            $user->save();
            if($user->save())
        {
            

            return redirect()->to('mydetails/'.$id.'/edit'); 
        }
        else
        {
            return "Not saved";
        }
        }

        if($check != null)
        {
            Storage::disk('public')->delete($check);
        }
        $extension = $file->getClientOriginalExtension();
        // $filename = $file->getFilename();

        // dd($extension);

        $filename = Auth::user()->id.'.'.$extension;
        
        Storage::disk('public')->put(Auth::user()->id.'.'.$extension,  File::get($file));
        
        $user= User::findOrFail($id);

        $user->name = $request->name;
        $user->phonenumber = $request->phonenumber;
        $user->avatar = $filename;

        $user->save();

        if($user->save())
        {
            return back()->withFilename($filename);
        }
        else
        {
            return "Not saved";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //used to delete a particular users account
        return "destroy()";
    }
}
