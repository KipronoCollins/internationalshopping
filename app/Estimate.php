<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    //

    protected $fillable = ['user_id','estimateid','productname','productlink','sizecoloroption','quantity','unitprice','shippingcost','specificinstruction','description','status',];
}
