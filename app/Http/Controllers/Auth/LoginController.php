<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use Exception;
use App\User;
use App\QuotationRequest;
use Illuminate\Support\Facades\Hash;
use Notification;
use App\Notifications\Password;
use DateTime;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;
use App\Contact;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
        

        try {
            
        
            $googleUser = Socialite::driver('google')->user();
            $existUser = User::where('email',$googleUser->email)->first();
            

            if($existUser) {
                Auth::loginUsingId($existUser->id);
            }
            else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->google_id = $googleUser->id;
                
                $length = 6;
                $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
                $randomstring = substr(str_shuffle($str), 0, $length);
                $user->password = Hash::make($randomstring);
                $user->random = $randomstring;
                $user->email_verified_at = now();
                $email =  $googleUser->email;
                //save image

                $path = substr($googleUser->getAvatar(), 0, -6);
                
                $extension = pathinfo($path, PATHINFO_EXTENSION);
                
                $filename = $googleUser->id.'.'.$extension;
                

                $file = file_get_contents($path);

                
                $save = file_put_contents('../public/uploads//'.$filename, $file);
                $user->avatar = $filename;
                $user->save();
                Auth::loginUsingId($user->id);
                Notification::route('mail',$email)->notify(new Password($randomstring));


                if ($request->session()->get('form-data.data') != null) {
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
        
                    if ($request->session()->get('form-data.data') != null) {
                        $data = $request->session()->get('form-data.data.productname');
        
                        $i = 0;
        
                        foreach ($data as $value) {
                            $user_email = Auth::user()->email;
        
                            $new = User::where('email', $user_email)->value('id');
                            $user = User::findorFail($new);
        
                            $user->Quotationrequest()->save(new QuotationRequest(['quotationrequestid' => $qrid, 'productname' => $request->session()->get('form-data.data.productname.' . $i), 'productlink' => $request->session()->get('form-data.data.productlink.' . $i), 'sizecoloroption' => $request->session()->get('form-data.data.option.' . $i), 'quantity' => $request->session()->get('form-data.data.quantity.' . $i), 'specificinstruction' => $request->session()->get('form-data.data.specs'), 'status' => "not seen"]));
        
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
            }
            return redirect()->to('/dashboard');
        } 
        catch (Exception $e) {
            return $e;
        }
    }
}
