@extends('layouts.master') 
@section('title','CSK | Contact Us')
@section('content')
<style>
.cromaForm input{
    border: 1px solid #000;
    border-radius: 5px;
    padding: 5px 10px;
    width: 300px;
    height: 35px;
}
</style>
<div class="container">
<div class="row">
<div class="col-sm-4" style="padding:20px">
<div class="cp-my-account">

<div class="yCmsComponent address pad">
<div class="content" id="Dnull"><br>
 <h3 style="color: #69a2a9;font-size: 17px;font-family: Tahoma, Geneva, Arial, Helvetica, sans-serif;margin-bottom: 10px;"><strong>Registered Office:</strong></h3> 
 <p><span style="font-size: small;"><strong><strong>Infiniti Retail Limited<br> CIN: U31900MH2005PLC158120<br> Unit No. 701 &amp; 702,Wing A, 7th Floor,<br> Kaledonia, Sahar Road, Andheri (East),<br> Mumbai 400069, India<br> Telephone: (+123) 456 789 - (+123) 666 888<br> Fax: +91 6761 3669<br> Email: </strong></strong>
 </span>
 <span style="font-size: x-small;"><strong><strong>
 <a href="mailto:customersupport@croma.com">
 <span style="font-size: small;">customersupport@amazed.com</span></a></strong></strong>
 </span><strong><strong><br> </strong></strong></p></div></div> <p>&nbsp;</p></div>
 </div>
&nbsp;&nbsp;
 <div class="col-sm-8" style="text-align:left;padding:20px;">
 <div id="filterFormSection">

    <div id="response"></div>

    <div class="contactDetails">
      <div class="row">
        <div><h3 style="color: #69a2a9;">Connect with us:</h3></div>
        <div><p><b>Call support (6am to 10pm)</b><span>:</span></p></div>
        <div><p>(+123) 456 789 - (+123) 666 888</p></div>
        <div class="clearfix"></div>
	<div ><p><b>Email support</b><span>:</span></p></div>
        <div ><a href="mailto:customersupport@croma.com">customersupport@amazed.com</a></div>
        <div class="clearfix"></div>
        <div  style="margin-top:20px;"><p><b>Log a service request</b></p></div>
      </div>
    </div>

    <div class="cromaForm">
      <div id="preloader" style="display: none;"><img src="images/loader.gif"></div>
      <div class="row">
        <div class="col-md-12">
          <form class="form-container" id="cnfForm" name="cnfForm"  action="/" method="POST"novalidate="novalidate">
            <input type="hidden" name="hdntype" id="hdntype" value="cnf">
            <fieldset>
            <input type="text" name="name" id="name" placeholder="Name" required="" aria-required="true">
            </fieldset><br>
            <fieldset>
            <input type="text" name="email" id="email" placeholder="Email" required="" aria-required="true">
            </fieldset><br>
            <fieldset>
            <input type="text" name="mobile" id="mobile" placeholder="Mobile" required="" aria-required="true">
            </fieldset><br>
            <fieldset>
            <textarea type="textarea" name="message" id="message"style="width:300px" placeholder="* Upto 300 characters" required="" aria-required="true"></textarea>
            </fieldset><br>
            <fieldset>
            <input type="submit" id="submitBtn" name="submitBtn" class="btn btn-success" value="Submit">
            </fieldset>
          </form>
        </div>
      </div>
    </div>
     
</div>
 </div>
 
 </div>

</div>

@endsection