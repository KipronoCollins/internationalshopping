<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\QuotationRequest;
use DB;
use Illuminate\Notifications\Notifiable;
use Notification;
use App\Notifications\Requestquote;

class trialController extends Controller
{
    //

    public function check()
    {
        if (Auth::check()) {
                echo "true";
            } else {
                echo "false";
            }
    }

    public function show()
    {
        return view('form');
    }

    public function submit(Request $request)
    {


        $quotqtionid = QuotationRequest::get()->pluck('quotationrequestid');

        function checkkeys($randomstring, $quotqtionid)
        {

            foreach ($quotqtionid as $value) {
                if ($value == $randomstring) {
                        $keyexists = true;
                        break;
                    } else {
                        $keyexists = false;
                    }
            }
        }

        function generatekey($quotqtionid)
        {
            $length = 5;
            $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
            $randomstring = substr(str_shuffle($str), 0, $length);

            $checkkey = checkkeys($randomstring, $quotqtionid);

            while ($checkkey == true) {
                    $randomstring = substr(str_shuffle($str), 0, $length);
                    $checkkey = checkkeys($randomstring);
                }

            return $randomstring;
        }

        $qrid = generatekey($quotqtionid);

        if (Session::get('form-data.data') != null) {
                $data = Session::get('form-data.data.productname');

                $i = 0;

                foreach ($data as $value) {
                        // // echo "HAHAHA". "<br>";
                        // // echo $i. "<br>";
                        //  echo Session::get('form-data.data.productname.'.$i);
                        //  echo $request->specs;
                        // $i++;

                        $user_email = Auth::user()->email;

                        $new = User::where('email', $user_email)->value('id');
                        $user = User::findorFail($new);

                        $user->Quotationrequest()->save(new QuotationRequest(['quotationrequestid' => $qrid, 'productname' => Session::get('form-data.data.productname.' . $i), 'productlink' => Session::get('form-data.data.productlink.' . $i), 'sizecoloroption' => Session::get('form-data.data.option.' . $i), 'quantity' => Session::get('form-data.data.quantity.' . $i), 'specificinstruction' => Session::get('form-data.data.specs'), 'status' => "not seen"]));

                        $i++;
                    }
                return redirect()->back()->with('message', 'Your Request Has Been Submitted Successfully');
            } else {
                echo "haiko";
            }
    }

    public function checkSessionData(Request $request)
    {
        $size = sizeof(Session::get('form-data.data'));
        // dd($size);
        $i = 0;
        dd($data = Session::get('form-data.data.specs'));
    }


    public function read()
    {
        $userdata = User::all();
        return view('users', compact('userdata'));
    }
}
