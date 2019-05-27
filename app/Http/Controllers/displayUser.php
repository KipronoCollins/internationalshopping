<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Estimate;
use App\Invoice;
use App\Review;
use Illuminate\Support\Facades\Redirect;
use App\Chat;

class displayUser extends Controller
{
    //

    public function dashboard()
    {

        if (Auth::guard('web')->check()) {
                $user_email = Auth::user()->email;
                $name = User::where('email', $user_email)->value('name');
                $phonenumber = User::where('email', $user_email)->value('phonenumber');
                $avatar = User::where('email', $user_email)->value('avatar');

                $estimates = Estimate::where('user_id', Auth::user()->id)->where('status', 'Not seen')->get();

                $id = array();
                $estimateid = array();
                $date = array();


                foreach ($estimates as $t) {
                        if (in_array($t->id, $id)) { } else {
                                array_push($id, $t->id);
                                if (in_array($t->estimateid, $estimateid)) { } else {
                                        array_push($estimateid, $t->estimateid);
                                        array_push($date, substr($t->created_at, 0, -9));
                                    }
                            }
                    }

                $invoices = Invoice::where('user_id', Auth::user()->id)->where('status', 'Not Paid')->get();

                $messages =  Chat::where('receiver', Auth::user()->id)->where('status', 'Unread')->count();

                return view('userdashboard')->withName($name)->withPhonenumber($phonenumber)->withEmail($user_email)->withAvatar($avatar)->withEstimateid($estimateid)->withDate($date)->withInvoices($invoices)->withMessages($messages);
            } else {
                return redirect('login');
            }
    }

    public function estimates()
    {
        if (Auth::guard('web')->check()) {
                $estimate = Estimate::where('user_id', Auth::user()->id)->where('status', 'Not Seen')->get();

                // dd($estimate);
                // where('status', 'Not seen')->get();

                // foreach ($quotqtionid as $sku)
                // {
                //     echo $sku->quotationrequestid. '<br>';
                // } 



                $id = array();
                $estimateNo = array();
                $date = array();
                $arrayamount = array();
                $totalamount = array();
                $status = array();

                foreach ($estimate as $sku) {
                        $total = 0;
                        if (in_array($sku->id, $id)) { } else {
                                $singleprice = $sku->quantity * $sku->unitprice;

                                array_push($arrayamount, $singleprice);

                                $shipping = $sku->shippingcost;

                                if (in_array($sku->id, $id)) {
                                        continue;
                                    } else {
                                        if (!in_array($sku->estimateid, $estimateNo)) {
                                                array_push($estimateNo, $sku->estimateid);
                                                array_push($date, $sku->created_at);
                                                array_push($status, $sku->status);
                                            }
                                    }

                                $total = $total + $singleprice;
                            }
                        array_push($totalamount, $total);
                    }

                $avatar = User::where('id', Auth::user()->id)->value('avatar');
                return view('user/myestimates')->withEstimateNo($estimateNo)->withDate($date)->withStatus($status)->withAvatar($avatar);
            } else {
                return redirect('login');
            }
    }

    public function approveestimate($eid)
    {
        if (Auth::guard('web')->check()) {
                $estimate = Estimate::where('user_id', Auth::user()->id)->where('estimateid', $eid)->get();
                $productname = array();
                $productlink = array();
                $sizecoloroption = array();
                $unitprice = array();
                $quantity = array();
                $amount = array();
                $estimateid = array();
                $id = array();


                foreach ($estimate as $sku) {
                        $total = 0;
                        if (in_array($sku->id, $id)) { } else {
                                array_push($productname, $sku->productname);
                                array_push($productlink, $sku->productlink);
                                array_push($sizecoloroption, $sku->sizecoloroption);
                                array_push($unitprice, $sku->unitprice);
                                array_push($quantity, $sku->quantity);
                                $lamount = $sku->unitprice * $sku->quantity;
                                array_push($amount, $lamount);
                                $shipping = $sku->shippingcost;
                                $specificinstruction = $sku->specificinstruction;
                                $description = $sku->description;
                            }
                    }

                $sum = array_sum($amount);
                $total = $sum + $shipping;
                $today = date("F j, Y");

                return view('user/approveestimate')->withProductname($productname)->withProductlink($productlink)->withSizecoloroption($sizecoloroption)->withUnitprice($unitprice)->withQuantity($quantity)->withAmount($amount)->withShipping($shipping)->withTotal($total)->withSum($sum)->withSpecificinstruction($specificinstruction)->withDescription($description)->withToday($today)->withEid($eid);
            } else {
                return redirect('login');
            }
    }

    public function reviewestimate($eid, Request $request)
    {


        if (Auth::check()) {
                // return $request->status.$eid;

                $totalamount = array();
                $status = $request->status;

                $p = Estimate::where('user_id', Auth::user()->id)->where('estimateid', $eid)->update(['status' => $status,]);

                if ($status === "Accepted" && $p) {
                        $s = Estimate::where('user_id', Auth::user()->id)->where('estimateid', $eid)->where('status', 'Accepted')->get();
                        foreach ($s as $t) {
                                $total = $t->quantity * $t->unitprice;
                                array_push($totalamount, $total);
                                $shipping = $t->shippingcost;
                            }
                        $amount = array_sum($totalamount)  + $shipping;

                        $invoice = new Invoice;
                        $invoice->invoiceid = $eid;
                        $invoice->user_id =  Auth::user()->id;
                        $invoice->amount = $amount;
                        $invoice->status = 'Not Paid';
                        $save = $invoice->save();
                    }


                if ($p) {
                        return redirect()->route('myestimates');
                    } else {
                        return redirect()->back();
                    }
            } else {
                return abort(401);
            }
    }

    public function myinvoices()
    {
        if (Auth::guard('web')->check()) {
                $invoice =  Invoice::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
                $avatar = User::where('id', Auth::user()->id)->value('avatar');

                return view('user/myinvoices')->withInvoice($invoice)->withAvatar($avatar);
            } else {
                return redirect('login');
            }
    }

    public function printinvoice($iid)
    {
        if (Auth::guard('web')->check()) {

                $invoice =  Invoice::where('user_id', Auth::user()->id)->where('invoiceid', $iid)->get();

                $fromestimate = Estimate::where('user_id', Auth::user()->id)->where('estimateid', $iid)->get();

                $id = array();
                $productname = array();
                $productlink = array();
                $sizecoloroption = array();
                $unitprice = array();
                $quantity = array();
                $amount = array();

                foreach ($fromestimate as $sku) {

                        if (in_array($sku->id, $id)) { } else {
                                array_push($productname, $sku->productname);
                                array_push($productlink, $sku->productlink);
                                array_push($sizecoloroption, $sku->sizecoloroption);
                                array_push($unitprice, $sku->unitprice);
                                array_push($quantity, $sku->quantity);
                                $lamount = $sku->unitprice * $sku->quantity;
                                array_push($amount, $lamount);
                                $shipping = $sku->shippingcost;
                                $specificinstruction = $sku->specificinstruction;
                                $description = $sku->description;
                            }
                    }

                $today = date("F j, Y");
                $subtotal = array_sum($amount);
                $total = $subtotal + $shipping;



                return view('user/printinvoice')->withToday($today)->withProductname($productname)->withProductlink($productlink)->withSizecoloroption($sizecoloroption)->withUnitprice($unitprice)->withQuantity($quantity)->withAmount($amount)->withSubtotal($subtotal)->withShipping($shipping)->withTotal($total);
            } else {
                return redirect('login');
            }
    }

    public function mypurchases()
    {
        if (Auth::guard('web')->check()) {
                $invoices = Invoice::where('user_id', Auth::user()->id)->where('status', 'Paid')->get();



                $total = array();

                foreach ($invoices as $t) {
                        array_push($total, $t->amount);
                    }

                array_sum($total);

                $avatar = User::where('id', Auth::user()->id)->value('avatar');

                return view('user/mypurchases')->withInvoices($invoices)->withTotal($total)->withAvatar($avatar);
            } else {
                return redirect('login');
            }
    }

    public function contactsupport()
    {
        dd("commented");
        $avatar = User::where('id', Auth::user()->id)->value('avatar');
        return view('user/contactsupport')->withAvatar($avatar);
    }

    public function makereview()
    {
        if (Auth::guard('web')->check()) {
                $avatar = User::where('id', Auth::user()->id)->value('avatar');
                return view('user/review')->withAvatar($avatar);
            } else {
                return redirect('login');
            }
    }

    public function savereview(Request $request)
    {
        if (Auth::guard('web')->check()) {
                $idcheck = Invoice::where('invoiceid', $request->invid)->exists();
                $usercheck = Invoice::where('invoiceid', $request->invid)->where('user_id', Auth::user()->id)->exists();
                if ($idcheck == true && $usercheck == true) {
                        $review = new Review;
                        $review->user_id = Auth::user()->id;
                        $review->invoiceNo     = $request->invid;
                        $review->Review     = $request->review;
                        $review->Rating     = $request->rate;
                        $review->Status     = 'Not Seen';
                        $review->save();
                        return redirect('/dashboard');
                    } else {
                        return Redirect::back()->withErrors(['Kindly Check the Invoice Number Provided']);
                    }
            } else {
                return redirect('login');
            }
    }

    public function displaycustomersupport()
    {
        if (Auth::guard('web')->check()) {
                $avatar = User::where('id', Auth::user()->id)->value('avatar');
                $messages = Chat::where('receiver', Auth::user()->id)->where('status', 'Unread')->count();
                return view('user/customersupport')->withAvatar($avatar)->withMessages($messages);
            } else {
                return redirect('login');
            }
    }

    public function usersavemessage(Request $request)
    {
        if (Auth::guard('web')->check()) {
                $chat = new Chat();
                $chat->user_id = Auth::user()->id;
                $chat->receiver = "Admin";
                $chat->subject = $request->subject;
                $chat->message = $request->message;
                $chat->status = "Unread";
                $test = $chat->save();

                if ($test) {
                        return redirect()->back()->with('success', 'Your message has been sent. One of our personell will get in touch with you');
                    } else {
                        return redirect()->back()->with('failure', 'Kindly resend your message');
                    }
            } else {
                return redirect('login');
            }
    }

    public function displayuserinbox()
    {
        if (Auth::guard('web')->check()) {
                $messages = Chat::where('receiver', Auth::user()->id)->where('status', 'Unread')->get();
                $avatar = User::where('id', Auth::user()->id)->value('avatar');
                return view('user/userinbox')->withMessages($messages)->withAvatar($avatar);
            } else {
                return redirect('login');
            }
    }

    public function displayuserreply($id)
    {
        if (Auth::guard('web')->check()) {
                $subject = Chat::where('id', $id)->value('subject');
                $message = Chat::where('id', $id)->value('message');
                $messages = Chat::where('receiver', Auth::user()->id)->where('status', 'Unread')->count();
                $avatar = User::where('id', Auth::user()->id)->value('avatar');
                return view('user/userreply')->withSubject($subject)->withMessage($message)->withId($id)->withMessages($messages)->withAvatar($avatar);
            } else {
                return redirect('login');
            }
    }

    public function usersavereply(Request $request)
    {
        if (Auth::guard('web')->check()) {
                $adminid = Chat::where('id', $request->id)->get();
                $reply = new Chat;
                $reply->replying_to = $request->id;
                $reply->receiver = 'Admin';
                $reply->user_id = Auth::user()->id;
                $reply->subject = $request->subject;
                $reply->message = $request->reply;
                $reply->status = "Unread";
                $check = $reply->save();
                if ($check) {
                        Chat::where('id', $request->id)->update(['status' => 'Read']);
                        return redirect()->route('userinbox');
                    } else {
                        return redirect()->back();
                    }
            } else {
                return redirect('login');
            }
    }

    public function test()
    {
        /*$estimate = Estimate::where('estimateid', 'zvUEq')->get();

        // where('status', 'Not seen')->get();

        // foreach ($quotqtionid as $sku)
        // {
        //     echo $sku->quotationrequestid. '<br>';
        // } 

        

        $id = array();
        $estimateNo = array();
        $date = array();
        $arrayamount = array();
        $totalamount = array();

        foreach ($estimate as $sku)
        {
            $total = 0;
            if(in_array($sku->id, $id))
            {
                
            }
            else
            {
                $singleprice = $sku->quantity * $sku->unitprice;
                array_push($date, $sku->created_at);
                array_push($arrayamount, $singleprice);

                $shipping = $sku->shippingcost;

                if(in_array($sku->id, $id))
                {
                    continue;
                }
                else
                {
                    array_push($estimateNo, $sku->estimateid);
                }

                $total = $total + $singleprice;

                array_push($totalamount, $sku->estimateid);

            }
            array_push($totalamount, $total);
        }

        array_sum($arrayamount);

        return array_sum($arrayamount) + $shipping;*/

        //return view('user/myestimates');

        //return $today = date("F j, Y");



        return view('user/review');
    }
}
