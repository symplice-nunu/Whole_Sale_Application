<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wholesale extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 'lastname', 'title', 'phone', 'email', 'createpassord', 'confirmpassword', 'companyname', 'ownername', 'owneremail', 'websiteurl', 'taxid', 'yearfounded', 'businesstype', 'billingcountry', 'billingaddress', 'billingcity', 'billingstate', 'billingpostalcode', 'shippingaddress', 'shippingcity', 'shippingstate', 'shippingpostalcode', 'shipingcountry', 'sellerinfo', 'signature', 'shippingcountry'
        

    ];
    protected $table="wholesale";
}
