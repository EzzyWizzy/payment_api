
<?php
header("Access-Control-Allow-Origin: *");
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Payments</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 <script>
   const inputBody = {
      "client_id": "*****************************",
      "client_secret": "****************************",
      "grant_type": "client_credentials"
};

const headers = {
 'Access-Control-Allow-Origin':'*/*'
  
};

fetch('https://openapiuat.airtel.africa/auth/oauth2/token',
{
  method: 'POST',
  body: inputBody,
  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
    $('#result').html(body);
});
 </script>

</head>

<body>
<h2>Authorization</h2>
<p id='result'></p>
</body>

</html>
