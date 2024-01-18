
Razorpay Payment Gateway Integration In Codeigniter using cURL

In this tutorial, We have share how to integrate razorpay payment gateway in codeigniter using cURL. Razorpay is the most polular payment Gateway in India. Razorpay provides clean, fast, secure payments services with hassle free integration with developer friendly APIs. It allows online business to accept and process payments payments modes like Cards, Netbanking, Wallets & UPI. Developer Friendly API, Fast Onboarding and No Setup. Razorpay payment gateway is the easiest option for the web developer to implement payment system on the Web Application.


<strong> Step 1: Create Razorpay Account </strong>
First we need to <a href="https://dashboard.razorpay.com/#/access/signup" target="_blank">create account</a> on Razorpay and generate KeyId and Secret Key. We will keep created Razorpay account in test mode to test payment functionality.

<strong>  Step 2: Update Razorpay Config Details </strong> 
Here in this example, we will use Test App to integrate Razorpay gateway. So we will update config.php with KeyID and Secret Key from Razorpay.

<strong>Step 3: Open file constants </strong>
Open "application/config/constants.php" file and add code like as bellow:
<pre class="lang-html">

</pre>


<strong>Step 3: Create a Controller file Razorpay </strong>
Create a model file named "Razorpay.php" inside "application/controllers" folder.
<pre class="lang-html">

</pre>
<strong>Step 4: Create a view file index</strong>
Create a view file named "index.php" inside "application/views/razorpay" folder

<pre class="lang-html">

</pre>

<strong>Step 5: Create a view file checkout</strong>
Create a view file named "checkout.php" inside "application/views/razorpay" folder

<pre class="lang-html">

</pre>

Open "application/config/routes.php" file and add code like as bellow:

<pre class="lang-html">
<?php
    // routes
	$route['default_controller'] = 'razorpay/index';
	$route['checkout/(:any)'] = "razorpay/checkout/$1";
?>
</pre>

<a class="btn btn-success" title="Demo" href="#" target="_balnk"><i class="fa fa-fw fa-eye"></i> Demo</a>&nbsp;&nbsp;[sociallocker]<a class="btn btn-primary" title="Download" href="#" target="_balnk"><i class="fa fa-fw fa-download text-right"></i> Download</a>[/sociallocker]



