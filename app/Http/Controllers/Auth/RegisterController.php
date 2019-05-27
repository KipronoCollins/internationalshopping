<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\QuotationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Contact;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phonenumber' => 'required|string|max:10|min:10|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user_email = $data['email'];
        $create =  User::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'phonenumber' => $data['phonenumber'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if (Session::get('form-data.data') != null) {
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
                    

                    $new = User::where('email', $user_email)->value('id');
                    $user = User::findorFail($new);

                    $user->Quotationrequest()->save(new QuotationRequest(['quotationrequestid' => $qrid, 'productname' => Session::get('form-data.data.productname.' . $i), 'productlink' => Session::get('form-data.data.productlink.' . $i), 'sizecoloroption' => Session::get('form-data.data.option.' . $i), 'quantity' => Session::get('form-data.data.quantity.' . $i), 'specificinstruction' => Session::get('form-data.data.specs'), 'status' => "not seen"]));

                    $i++;
                }

                $contact = new Contact();
                $contact->request_id = $qrid;
                $contact->name =  Session::get('form-data.data.name');
                $contact->address = Session::get('form-data.data.address');
                $contact->phonenumber = Session::get('form-data.data.phonenumber');
                $contact->email = Session::get('form-data.data.email');
                $contact->save();
                // return redirect('/')->with('message', 'Your Request Has Been Submitted Successfully');
            } else {
                echo "haiko";
            }
        }

        return $create;
    }
}
