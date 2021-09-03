<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWholesaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wholesale', function (Blueprint $table) {
            $table->id();
            $table->String('firstname');
            $table->String('lastname');
            $table->String('title');
            $table->String('phone');
            $table->String('email');
            $table->String('createpassord');
            $table->String('confirmpassword');
            $table->String('companyname');
            $table->String('ownername');
            $table->String('owneremail');
            $table->String('websiteurl');
            $table->String('taxid');
            $table->String('yearfounded');
            $table->String('businesstype');
            $table->String('billingcountry');
            $table->String('billingaddress');
            $table->String('billingcity');
            $table->String('billingstate');
            $table->String('billingpostalcode');
            $table->String('shippingaddress');
            $table->String('shippingcity');
            $table->String('shippingstate');
            $table->String('shippingpostalcode');
            $table->String('shipingcountry');
            $table->String('sellerinfo');
            $table->String('signature');
            $table->String('shippingcountry');
            $table->String('trialgrant');
            $table->String('correctoffers');
            $table->String('minimumpairs');
            $table->String('exceptterms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wholesale');
    }
}
