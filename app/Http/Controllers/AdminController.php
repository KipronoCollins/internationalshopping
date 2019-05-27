<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuotationRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Chat;
use App\Review;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');//specify the guard to be used
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::guard('admin')->check() || Auth::guard('superadmin')->check()) {
                $tablerequests = QuotationRequest::where("status", "Not Seen")->get();
                $number = array();
                $requestid = array();
                $createdat = array();
                $useremails = array();

                foreach ($tablerequests as $key) {
                    if (in_array($key->quotationrequestid, $requestid)) { } else {
                            array_push($requestid, $key->quotationrequestid);
                            array_push($createdat, substr($key->created_at, 0, -9));
                            $email = User::where('id', $key->user_id)->value('email');
                            array_push($useremails, $email);
                        }
                }

                $chats =  Chat::where('status', 'Unread')->where('receiver', 'Admin')->count();

                $reviewss = Review::where('status', 'Not Seen')->count();
                $displayreviews = Review::where('status', 'Not Seen')->get();

                $buttonnumber = sizeof($requestid);

                // dd(Auth::guard('admin')->check());

                if (Auth::guard('admin')->check()) {
                        return view('admin/dashboard')->withButtonnumber($buttonnumber)->withRequestid($requestid)->withCreatedat($createdat)->withUseremails($useremails)->withChats($chats)->withReviewss($reviewss)->withDisplayreviews($displayreviews);
                    } elseif (Auth::guard('superadmin')->check()) {
                        return redirect()->route('superadmin.dashboard');
                    }
            }
    }
}
