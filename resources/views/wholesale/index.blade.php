@extends('wholesale.layout')
  
@section('content')
<div style="margin-left: 6em;">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1 style="color: #0000FF;">Wholesale Account Application</h1>
            <p>We appreciate your interest in becoming a dealer for Correct Toes®! In order to join our growing team of medical professionals, retailers, and healthcare providers, please complete the form below. Please allow 2-3 business days for a response. We may have additional questions about your business before approving your application. We look forward to welcoming you to the Correct Toes family!</p>
            <p style="color: red;">Required fields are indicated in red.</p>
        </div>
        <div class="pull-right">
            <!-- <a class="btn btn-primary" href="{{ route('wholesale.index') }}"> Back</a> -->
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('wholesale.store') }}" method="POST">
    @csrf
  
     <div class="row">
         
        <div class="col-xs-12 col-sm-12 col-md-10">
                <h3 style="color: #0000FF;">Contact Information</h3>
                <hr style="border-color: #0000FF;">
        </div>
        <div class="col-xs-5 ">
            <div class="form-group">
                <strong>Contact First Name</strong>
                <input type="text" name="firstname" class="form-control" placeholder="First Name" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Contact Last Name</strong>
                <input type="text" name="lastname" class="form-control" placeholder="Last Name" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Contact Title</strong>
                <input type="text" name="title" class="form-control" placeholder="Title" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Contact Phone</strong>
                <input type="text" name="phone" class="form-control" placeholder="Phone" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                <strong>Contact Email</strong>
                <input type="text" name="email" class="form-control" placeholder="Email" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                <strong>Create Password</strong>
                <input type="password" name="createpassord" id="password" class="form-control"  style="border-color: red;" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                <strong>Confirm Password</strong>
                <input type="password" name="confirmpassword" id="confirm_password" class="form-control"  style="border-color: red;" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
                <h3 style="color: #0000FF;">Business Information</h3>
                <hr style="border-color: #0000FF;">
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Company Name</strong>
                <input type="text" name="companyname" class="form-control" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Owner Name</strong>
                <input type="text" name="ownername" class="form-control" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                <strong>Owner E-mail</strong>
                <input type="text" name="owneremail" class="form-control" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                <strong>Website URL: (Type "N/A" if you do not have a website)</strong>
                <input type="text" name="websiteurl" class="form-control" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Tax ID</strong>
                <input type="text" name="taxid" class="form-control" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Year Founded</strong>
                <input type="text" name="yearfounded" class="form-control" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group" style="border-color: red;">
                <strong>Business Type</strong>
                </div>
                <input class="form-check-input" type="radio" name="businesstype" id="flexRadioDisabled" >
                <label class="form-check-label" for="flexRadioDisabled">
                    Sole Proprietor
                </label>
                <input class="form-check-input" type="radio" name="businesstype" id="flexRadioDisabled" >
                <label class="form-check-label" for="flexRadioDisabled">
                 Partnership
                </label>
                <input class="form-check-input" type="radio" name="businesstype" id="flexRadioDisabled">
                <label class="form-check-label" for="flexRadioDisabled">
                    LLC
                </label>
                <input class="form-check-input" type="radio" name="businesstype" id="flexRadioDisabled">
                <label class="form-check-label" for="flexRadioDisabled">
                 Corporation
                </label>
                <input class="form-check-input" type="radio" name="businesstype" id="flexRadioDisabled">
                <label class="form-check-label" for="flexRadioDisabled">
                    PC
                </label>
                <input class="form-check-input" type="radio" name="businesstype" id="flexRadioDisabled">
                <label class="form-check-label" for="flexRadioDisabled">
                 Nonprofit
                </label>
                <input class="form-check-input" type="radio" name="businesstype" id="flexRadioDisabled">
                <label class="form-check-label" for="flexRadioDisabled">
                 Other
                </label>
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
                <h3 style="color: #0000FF;">Billing Information</h3>
                <hr style="border-color: #0000FF;">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                <strong>Billing Country</strong>
                <select name="billingcountry" id="" class="form-control" style="border-color: red;">
                    <option value="Åland Islands">
                    Åland Islands
                    </option>
                    <option value="Albania">Albania</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Åland Islands">
                    Åland Islands
                    </option>
                    <option value="Albania">Albania</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                <strong>Billing Address</strong>
                <input type="text" name="billingaddress" class="form-control" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Billing City</strong>
                <input type="text" name="billingcity" class="form-control" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Billing State</strong>
                <select name="billingstate" id="" class="form-control" style="border-color: red;">
                    <option value="">Select Option</option>
                    <option value="Åland Islands">
                    Åland Islands
                    </option>
                    <option value="Albania">Albania</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Åland Islands">
                    Åland Islands
                    </option>
                    <option value="Albania">Albania</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                </select>
            </div>
        </div><div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Billing Postal Code</strong>
                <input type="text" name="billingpostalcode" class="form-control" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                </div>
                <input class="form-check-input" type="checkbox" name="flexRadioDisabled" id="flexRadioDisabled" Required>
                <label class="form-check-label" for="flexRadioDisabled">
                My shipping address is the same as my billing address
                </label>
                
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
                <h3 style="color: #0000FF;">Shipping Information</h3>
                <hr style="border-color: #0000FF;">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                <strong>Shipping Address </strong>
                <input type="text" name="shippingaddress" class="form-control" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Shipping City</strong>
                <input type="text" name="shippingcity" class="form-control" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Shipping State</strong>
                <div class="form-group">
                <input type="text" name="shippingstate" class="form-control" style="border-color: red;">
            </div>
            </div>
        </div><div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Shipping Postal Code</strong>
                <input type="text" name="shippingpostalcode" class="form-control" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                <strong>Shipping Country </strong>
                <input type="text" name="shipingcountry" class="form-control" style="border-color: red;">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
                <h3 style="color: #0000FF;">Seller Information</h3>
                <hr style="border-color: #0000FF;">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
                <p>How Will You Be Selling Correct Toes? Would you like to be listed in the Correct Toes® locator service on our website? Do you sell other toe spacing or orthotic products? If yes, which products and manufacturers? </p>
                
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                <textarea name="sellerinfo" id="" style="height: 6em; border-color: red;" cols="30" rows="10" class="form-control" ></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                </div>
                <input class="form-check-input" type="checkbox" name="trialgrant" id="flexRadioDisabled" style="border-color: red;" Required>
                <label class="form-check-label" for="flexRadioDisabled">
                I understand that I am required to uphold a 30 day trial guarantee and 90 day materials warranty to my customers/patients, and that Correct Toes will reimburse me (see our terms and conditions below for full details)
                </label>
                
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                </div>
                <input class="form-check-input" type="checkbox" name="correctoffers" id="flexRadioDisabled" style="border-color: red;" Required>
                <label class="form-check-label" for="flexRadioDisabled">
                I understand that Correct Toes offers a 100% buyback of ANY unused and unopened pair of Correct Toes.
                </label>
                
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                </div>
                <input class="form-check-input" type="checkbox" name="minimumpairs" id="flexRadioDisabled" style="border-color: red;" Required>
                <label class="form-check-label" for="flexRadioDisabled">
                I understand that my first order of Correct Toes is a minimum of 10 pairs, and that each order after that is a minimum of 6 pairs.
                </label>
                
            
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-10">
                <h3 style="color: #0000FF;">Acknowledgements and Signature</h3>
                <hr style="border-color: #0000FF;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Signature  </strong>
                <input type="text" name="signature" style="height: 3em; border-color: red;" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                </div>
                <input class="form-check-input" type="checkbox" name="exceptterms" id="flexRadioDisabled" style="border-color: red;" Required>
                <label class="form-check-label" for="flexRadioDisabled">
                I have read and agree to the Terms and Conditions    
            </label>
                
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10">
            <div class="form-group">
                <strong>Shipping Country (optional)</strong>
                <select name="shippingcountry" id="" class="form-control">
                <option value="Åland Islands">
                    Åland Islands
                    </option>
                    <option value="Albania">Albania</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Åland Islands">
                    Åland Islands
                    </option>
                    <option value="Albania">Albania</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <div class="g-recaptcha" data-sitekey="6Lce3kAcAAAAAGvaArCJqWmkdKemtknxViDaVIKB"></div>
            </div>
       
</div>

        <div class="col-xs-12 col-sm-12 col-md-4">
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Apply to Become a Correct Toes Dealer!</button>
            </div>
        </div>
    </div>
    
</form>
<script>
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</div>
@endsection
