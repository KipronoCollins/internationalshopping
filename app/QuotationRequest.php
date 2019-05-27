<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuotationRequest extends Model
{
    //

    protected $fillable = ['quotationrequestid','userid','productname','productlink','sizecoloroption','quantity','specificinstruction','status',];

    public function User()
    {
        return $this->belongsTo('User');
    }
}
