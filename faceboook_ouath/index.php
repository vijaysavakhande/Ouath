<?php 
// $file =file_get_contents('https://graph.facebook.com/166973510129/picture?type=small');
// var_dump($file); // check for false https://graph.facebook.com/1669735109/picture?type=small
 ?>
<!-- for authentication chk this -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $.ajaxSetup({ cache: true });
      $.getScript('https://connect.facebook.net/en_US/sdk.js', function(){
        FB.init({
          appId: '155154761219767',
          version: 'v2.7' // or v2.1, v2.2, v2.3, ...
        });     

      //   FB.login(function(response) {
      //     console.log(response);
      //     if (response.authResponse) {
      //      console.log('Welcome!  Fetching your information.... ');
      //      FB.api('/me', function(response) {
      //       console.log(response);
      //        console.log('Good to see you, ' + response.name + '.');
      //      });
      //     } else {
      //      console.log('User cancelled login or did not fully authorize.');
      //     }
      // });
      });
    });
  </script>
</head>
<body>
  
</body>
</html>