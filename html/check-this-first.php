<?php

session_start();
ob_start();
  require_once('recaptcha/recaptchalib.php');// download and put in the recaptcha folder 
          //Recaptcha Settings
       $publickey = "6Lc9yRETAAAAAPpOkZqZWsK6R7os4ogRJvUvCeUJ"; // you got this from the signup page
    $privatekey = "6Lc9yRETAAAAALSH9b-MC-I0oQySQbogMXQHRzpa";//your private key

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
   }
  if ($ok){  
  //set POST variables
  $url = 'https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';
  $fields = array(
     'oid'=>urlencode($oid),
     'retURL'=>urlencode($retURL),
     'title'=>urlencode($title),
     'first_name'=>urlencode($first_name),
     'last_name'=>urlencode($last_name),
     'email'=>urlencode($email),
     'country'=>urlencode($country),
     'city'=>urlencode($city),
     'company'=>urlencode($company),
     'mobile'=>urlencode($mobile),
     'description'=>urlencode($description)
     
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
 echo 'Congratulation the leads has been sent successfully.';
 } //if ok
 else {
     echo "<h4>Sorry - Invalid Captcha  Please try again  </h4>";
   } 
 } //if submit.
 ?>