<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuotationRequest;
use App\User;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use App\Chat;
use App\Review;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:superadmin'); //specify the guard to be used
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guard('superadmin')->check()) {
                $tablerequests = QuotationRequest::where("status", "Not Seen")->get();
                $number = array();
                $requestid = array();
                $createdat = array();
                $useremails = array();
                $chats =  Chat::where('status', 'Unread')->where('receiver', 'Admin')->count();
                $reviewss = Review::where('status', 'Not Seen')->count();
                $displayreviews = Review::where('status', 'Not Seen')->get();
                foreach ($tablerequests as $key) {
                    if (in_array($key->quotationrequestid, $requestid)) { } else {
                            array_push($requestid, $key->quotationrequestid);
                            array_push($createdat, substr($key->created_at, 0, -9));
                            $email = User::where('id', $key->user_id)->value('email');
                            array_push($useremails, $email);
                        }
                }



                $buttonnumber = sizeof($requestid);



                return view('superadmin.dashboard')->withButtonnumber($buttonnumber)->withRequestid($requestid)->withCreatedat($createdat)->withUseremails($useremails)->withChats($chats)->withReviewss($reviewss)->withDisplayreviews($displayreviews);
            } else {
                return redirect('login');
            }
    }

    public function displayaccounts()
    {
        if (Auth::guard('superadmin')->check()) {
                $users = User::all();

                $display = 'none';

                return view('superadmin/manageuseraccounts')->withUsers($users)->withDisplay($display);
            } else {
                return redirect('login');
            }
    }

    public function displayedituser($id)
    {
        if (Auth::guard('superadmin')->check()) {
                $email = trim(User::where('id', $id)->value('email'));
                return view('superadmin/edituser')->withEmail($email)->withId($id);
            } else {
                return redirect('login');
            }
    }

    public function edituser(Request $request)
    {
        if (Auth::guard('superadmin')->check()) {
                $dd = $this->validate(request(), [
                    'email' => 'required|email',
                    'password' => 'required|confirmed',
                ]);

                $password = Hash::make($request->password);

                $check = User::where('id', $request->id)->update(['email' => $request->email, 'password' => $password]);

                if ($check) {
                        return redirect()->route('displayaccounts');
                    } else {
                        return redirect()->back();
                    }
            } else {
                return redirect('login');
            }
    }

    public function newuser(Request $request)
    {
        if (Auth::guard('superadmin')->check()) {
                $dd = $this->validate(request(), [
                    'email' => 'required|email',
                    'name' => 'required|min:2',
                    'password' => 'required|confirmed',
                ]);


                $password = Hash::make($request->password);
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = $password;
                $check = $user->save();

                if ($check) {
                        return redirect()->back();
                    } else {
                        return redirect()->back()->withMessage("ERROR!!");
                    }
                return $request->all();
            } else {
                return redirect('login');
            }
    }

    public function displayadmins()
    {
        if (Auth::guard('superadmin')->check()) {
                $admins = Admin::all();

                return view('superadmin/manageadminaccounts')->withAdmins($admins);
            } else {
                return redirect('login');
            }
    }

    public function displayeditadmin($id)
    {
        if (Auth::guard('superadmin')->check()) {
                $username = trim(Admin::where('id', $id)->value('username'));
                return view('superadmin/editadmin')->withUsername($username)->withId($id);
            } else {
                return redirect('login');
            }
    }

    public function editadmin(Request $request)
    {
        if (Auth::guard('superadmin')->check()) {
                $dd = $this->validate(request(), [
                    'username' => 'required',
                    'password' => 'required|confirmed',
                ]);


                $password = Hash::make($request->password);

                $check = Admin::where('id', $request->id)->update(['username' => $request->username, 'password' => $password]);

                if ($check) {
                        return redirect()->route('displayadmins');
                    } else {
                        return redirect()->back();
                    }
            } else {
                return redirect('login');
            }
    }

    public function newadmin(Request $request)
    {
        if (Auth::guard('superadmin')->check()) {
                $dd = $this->validate(request(), [
                    'username' => 'required',
                    'password' => 'required|confirmed',
                ]);


                $password = Hash::make($request->password);
                $user = new Admin;
                $user->username = $request->username;
                $user->password = $password;
                $check = $user->save();

                if ($check) {
                        return redirect()->back();
                    } else {
                        return redirect()->back()->withMessage("ERROR!!");
                    }
            } else {
                return redirect('login');
            }
    }
}
