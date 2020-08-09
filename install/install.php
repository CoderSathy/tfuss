<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HBSQLI Insatll</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/install.css"/>
  </head>
  <body>


    <div class="container" >
      <h1>Hbsqli Project</h1>
      <h2>Copy the below code and Paste it in dbconfig.php inside the hbsqli folder!</h2>

      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title>HBSQLI Insatll</title>
          <meta name="viewport" content="width=device-width">
          <link rel="stylesheet" href="css/install.css"/>
        </head>
        <body>


            <textarea style="text-align:left !important;resize:none;" rows="12" cols="50">
&lt;?php
   $servername = "<?php echo $_POST['servername'];?>";
   $username = "<?php echo $_POST['username'];?>";
   $password = "<?php echo $_POST['password'];?>";
   $dbname = "<?php echo $_POST['dbname'];?>";
?&gt;
            </textarea>



        <div class="form-footer">
          <button class="btn" onclick="window.location.href='../';">DONE!</button>
        </div>
      </form>
    </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
  var $input = $('.form-fieldset > input');

$input.blur(function (e) {
$(this).toggleClass('filled', !!$(this).val());
});
  </script>
  </body>
</html>
