<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuotationRequest;
use App\Estimate;
use App\User;
use App\Invoice;
use Illuminate\Support\Facades\Auth;
use App\Chat;
use Illuminate\Support\Facades\Hash;
use App\Review;
use Illuminate\Support\Facades\DB;


class displayAdmin extends Controller
{
    //

    public function requests()
    {

        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $quotqtionid = QuotationRequest::where('status', 'not seen')->get();



                // foreach ($quotqtionid as $sku)
                // {
                //     echo $sku->quotationrequestid. '<br>';
                // }

                $quotationidd = array();
                $id = array();
                $requestid = array();
                $createdat = array();
                $email = array();

                foreach ($quotqtionid as $sku) {
                        if (in_array($sku->quotationrequestid, $quotationidd)) {
                                // echo "iko <br>";
                            } else {
                                $useremail = User::where('id', $sku->user_id)->value('email');
                                // echo "haiko <br>";
                                array_push($id, $sku->id);
                                array_push($requestid, $sku->quotationrequestid);
                                array_push($createdat, $sku->created_at);
                                array_push($email, $useremail);
                                if (in_array($sku->quotationrequestid, $quotationidd)) {
                                        continue;
                                    } else {
                                        array_push($quotationidd, $sku->quotationrequestid);
                                    }
                            }
                    }

                return view('admin/requests')->withId($id)->withRequestid($requestid)->withCreatedat($createdat)->withEmail($email);
            } else {
                return redirect('login');
            }
    }

    public function newestimate($rid)
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $id = array();
                $productname = array();
                $productlink = array();
                $sizecoloroption = array();
                $quantity = array();


                $requests =  QuotationRequest::where('quotationrequestid', $rid)->get();



                foreach ($requests as $sku) {

                        if (in_array($sku->id, $id)) { } else {
                                array_push($id, $sku->id);
                                array_push($productname, $sku->productname);
                                array_push($productlink, $sku->productlink);
                                array_push($sizecoloroption, $sku->sizecoloroption);
                                array_push($quantity, $sku->quantity);
                                $specificinstruction = $sku->specificinstruction;
                                $userid = $sku->user_id;
                            }
                    }


                return view('admin/newestimate')->withId($id)->withProductname($productname)->withProductlink($productlink)->withSizecoloroption($sizecoloroption)->withQuantity($quantity)->withSpecificinstruction($specificinstruction)->withRid($rid)->withUserid($userid);
            } else {
                return redirect('login');
            }
    }

    public function storenewestimate($rid, Request $request)
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $productname = $request['productname'];
                $productlink = $request['productlink'];
                $sizecoloroption = $request['sizecoloroption'];
                $unitprice = $request['price'];
                $quantity = $request['quantity'];
                $userid = $request['userid'];
                $shippingcost = $request['shippingcost'];
                $specificinstruction = $request['specificinstruction'];
                $description = $request['description'];



                for ($i = 0; $i < count($productname); $i++) {
                        $new = new Estimate;
                        $new->user_id = $userid;
                        $new->estimateid = $rid;
                        $new->productname = $productname[$i];
                        $new->productlink = $productlink[$i];
                        $new->sizecoloroption = $sizecoloroption[$i];
                        $new->quantity = $quantity[$i];
                        $new->unitprice = $unitprice[$i];
                        $new->shippingcost = $shippingcost;
                        $new->specificinstruction = $specificinstruction;
                        $new->description = $description;
                        $new->status = "Not seen";
                        $new->save();
                    }

                $save = QuotationRequest::where('quotationrequestid', $rid)->update(['status' => "Estimate Created",]);

                if ($save) {
                        return redirect()->route('requests');
                    }
            } else {
                return redirect('login');
            }
    }


    public function editestimate(Request $request)
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $eid = array();
                $date = array();

                $data =  Estimate::where('status', 'Not seen')->get();
                foreach ($data as $t) {
                        if (in_array($t->estimateid, $eid)) { } else {
                                array_push($eid, $t->estimateid);
                                array_push($date, $t->created_at);
                            }
                    }

                $null = null;
                return view('Admin/estimates')->withEid($eid)->withDate($date)->withNull($null);
            } else {
                return redirect('login');
            }
    }

    public function changeestimate($eid)
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $data = Estimate::where('estimateid', $eid)->get();

                $id = array();
                $productname = array();
                $productlink = array();
                $sizecoloroption = array();
                $unitprice = array();
                $quantity = array();
                $amount = array();

                foreach ($data as $t) {
                        if (in_array($t->id, $id)) { } else {
                                array_push($id, $t->id);
                                array_push($productname, $t->productname);
                                array_push($productlink, $t->productlink);
                                array_push($sizecoloroption, $t->sizecoloroption);
                                array_push($unitprice, $t->unitprice);
                                array_push($quantity, $t->quantity);

                                $singleamount = $t->unitprice * $t->quantity;

                                array_push($amount, $singleamount);

                                $shippingcost = $t->shippingcost;

                                $specificinstruction = $t->specificinstruction;
                                $description = $t->description;
                            }
                    }

                $subtotal = array_sum($amount);

                $total = $subtotal  + $shippingcost;

                return view('Admin/editestimate')->withEid($eid)->withProductname($productname)->withId($id)->withProductlink($productlink)->withSizecoloroption($sizecoloroption)->withUnitprice($unitprice)->withQuantity($quantity)->withAmount($amount)->withSubtotal($subtotal)->withShippingcost($shippingcost)->withTotal($total)->withSpecificinstruction($specificinstruction)->withDescription($description);
            } else {
                return redirect('login');
            }
    }

    public function savechangedestimate($eid, Request $request)
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $id = $request['id'];
                $sco = $request['sco'];
                $price = $request['price'];
                $quantity = $request['quantity'];
                $shipping = $request['shippingcost'];
                $description = $request['description'];
                for ($i = 0; $i < count($id); $i++) {

                        $p = Estimate::where('id', $id[$i])->where('estimateid', $eid)->update(['sizecoloroption' => $sco[$i], 'unitprice' => $price[$i], 'quantity' => $quantity[$i], 'shippingcost' => $shipping, 'description' => $description,]);
                    }
                if ($p) {
                        return redirect()->route('editestimate');
                    } else {
                        return Redirect::back()->withErrors(['error', 'The operation failed please try again and please check the data you entered']);
                    }
            } else {
                return redirect('login');
            }
    }

    public function searchestimate(Request $request)
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $eid = $request->search;

                $check = Estimate::where('estimateid', $eid)->exists();
                // dd($check);

                if ($check == false) {
                        return redirect()->back()->with('error', 'The record you searched for does not exist or is closed');
                    }
                return $this->changeestimate($eid);
            } else {
                return redirect('login');
            }
    }

    public function invoices()
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $invoices = Invoice::all();
                return view('Admin/invoices')->withInvoices($invoices);
            } else {
                return redirect('login');
            }
    }

    public function printinvoice($iid)
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $invoice =  Invoice::where('invoiceid', $iid)->get();

                $fromestimate = Estimate::where('estimateid', $iid)->get();

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



                return view('admin/printinvoice')->withToday($today)->withProductname($productname)->withProductlink($productlink)->withSizecoloroption($sizecoloroption)->withUnitprice($unitprice)->withQuantity($quantity)->withAmount($amount)->withSubtotal($subtotal)->withShipping($shipping)->withTotal($total);
            } else {
                return redirect('login');
            }
    }

    public function displayadmininbox()
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $messages = Chat::where('status', 'Unread')->where('admin_id', null)->get();
                return view('admin/admininbox')->withMessages($messages);
            } else {
                return redirect('login');
            }
    }

    public function displayadminreply($id)
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $userid =  Chat::where('id', $id)->value('user_id');
                $name = User::where('id', $userid)->value('name');
                $subject = Chat::where('id', $id)->value('subject');
                $message = Chat::where('id', $id)->value('message');
                return view('admin/adminreply')->withName($name)->withSubject($subject)->withMessage($message)->withId($id);
            } else {
                return redirect('login');
            }
    }

    public function adminsavereply(Request $request)
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                if (Auth::guard('superadmin')->check() == true) {
                        $adminid = Auth::guard('superadmin')->user()->id;
                    } else {
                        $adminid = Auth::guard('admin')->user()->id;
                    }
                $userid = Chat::where('id', $request->id)->value('user_id');
                $reply = new Chat;
                $reply->replying_to = $request->id;
                $reply->receiver = $userid;
                $reply->admin_id = $adminid;
                $reply->subject = $request->subject;
                $reply->message = $request->reply;
                $reply->status = "Unread";
                $check = $reply->save();
                if ($check) {
                        Chat::find($request->id)->update(['status' => 'Read']);
                        return redirect()->route('displayadmininbox');
                    } else {
                        return redirect()->back();
                    }
            } else {
                return redirect('login');
            }
    }

    public function displayuseraccounts()
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $users = User::all();

                $display = 'none';

                return view('admin/manageuseraccounts')->withUsers($users)->withDisplay($display);
            } else {
                return redirect('login');
            }
    }

    public function admindisplayedituser($id)
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $email = trim(User::where('id', $id)->value('email'));
                return view('admin/edituser')->withEmail($email)->withId($id);
            } else {
                return redirect('login');
            }
    }


    public function adminedituser(Request $request)
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $dd = $this->validate(request(), [
                    'email' => 'required|email',
                    'password' => 'required|confirmed',
                ]);

                $password = Hash::make($request->password);

                $check = User::where('id', $request->id)->update(['email' => $request->email, 'password' => $password]);

                if ($check) {
                        return redirect()->route('displayuseraccounts');
                    } else {
                        return redirect()->back();
                    }
            } else {
                return redirect('login');
            }
    }

    public function managereviews()
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $reviews = Review::where('status', 'Not Seen')->get(); #dd($reviews);
                return view('admin/managereviews')->withReviews($reviews);
            } else {
                return redirect('login');
            }
    }


    public function reviewstatus(Request $request)
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $check = Review::where('id', $request->id)->update(['Status' => $request->status]);
                return redirect()->back();
            } else {
                return redirect('login');
            }
    }

    public function adminsales()
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
                $sales = DB::table('invoices')->where('status', 'paid')->paginate(15); //Invoice::where('status','paid')->get(); 
                return view('admin/adminsales')->withSales($sales);
            } else {
                return redirect('login');
            }
    }

    public function newuser(Request $request)
    {
        if (Auth::guard('superadmin')->check() || Auth::guard('admin')->check()) {
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


    public function test()
    {


        return view('test');
    }
}
