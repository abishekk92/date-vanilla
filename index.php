<?php
  require 'frameworks/facebook-php/src/facebook.php';
  require 'frameworks/php-foursquare/src/FoursqaureAPI.Class.php';


  $facebook= new Facebook(array('appid'=>'186690998096099','app-secret'=>'cede4c05fa1b3adc1aaddb8a6005d0b2'));
  
  $user=$facebook->getUser();
  

 if($user)
{
  $loginUrl=$facebook->getLoginUrl();
}
 else

{
   $logoutUrl=$facebook->getLogoutUrl();
}
?>
<!doctype html>
<title>Date</title>
<body>
<form action="/places.php" method="GET">
I'm going on a date with <input type="text" name="partner" id="partner"/> to <input type="text" name="place" id="place"/>
<br/>
<input type="submit" value="Now,can you please show me some places?"/>
</form>
<?php
/*function getFriends()
{
$friends=$facebook->api('/me/friends','GET');
$friends_a=json_decode($friends,true);
}

function getCheckins($partner)
{
  $checkins=$facebook->api('/me/'+$partner['id]'+'/checkins','GET');
  $checkin_a=json_decode($checkin);
}*/
?>

</html>


