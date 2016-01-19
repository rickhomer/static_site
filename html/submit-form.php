<?php

ob_start();
session_start();

  require_once('/recaptcha/recaptchalib.php');

         //Recaptcha Settings
       $publickey = "6Lc9yRETAAAAAPpOkZqZWsK6R7os4ogRJvUvCeUJ"; // you got this from the signup page
    $privatekey = "6Lc9yRETAAAAALSH9b-MC-I0oQySQbogMXQHRzpa";


//curl method posting
//extract data from the post
      extract($_POST);

  if ($submit){

  $ok = 1;

  $resp = recaptcha_check_answer ($privatekey,
   $_SERVER["REMOTE_ADDR"],
   $_POST["recaptcha_challenge_field"],
   $_POST["recaptcha_response_field"]);

   if (!$resp->is_valid) {
      $ok = 0;
    echo("Verify is failing");
  }
if ($ok){
  //set POST variables
// CTR curl code to resubmit to Salesforce web to lead
//set POST variables
  echo("Verify is progressing 1");
  $url = 'https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';
  $fields = array(
     'oid'=>urlencode($oid),
		 'rating'=>urlencode($rating),
     'retURL'=>urlencode($retURL),
     'first_name'=>urlencode($first_name),
     'last_name'=>urlencode($last_name),
     'company'=>urlencode($company),
     'country'=>urlencode($country),
     'email'=>urlencode($email),
		 'phone'=>urlencode($phone),
		 'description'=>urlencode($description),
     '00N6100000Aw7Zm'=>urlencode($Form_Name),
     'lead_source'=>urlencode($lead_source),


    );

  //url-ify the data for the POST
  foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
  rtrim($fields_string,'&');

  //print_r($fields_string);

  //open connection
  $ch = curl_init();

  //set the url, number of POST vars, POST data
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_POST,count($fields));
  curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);

  //execute post
  $result = curl_exec($ch);

  //close connection
  curl_close($ch);

   } //if $OK
else{
  die ("<p>The reCAPTCHA wasn't entered correctly. Go back and try it again.<br>" .
         "(reCAPTCHA said: " . $resp->error . ")</p>"); }
} //if submit
  ?>
