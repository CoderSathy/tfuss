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
      <h2>Install to start hacking!</h2>
      <form class="form" method="post" action="install.php">

        <fieldset class="form-fieldset ui-input __first">
          <input type="text" name="username" autocomplete="off" id="username" tabindex="0" />
          <label for="username">
            <span data-text="Username">Username</span>
          </label>
        </fieldset>

        <fieldset class="form-fieldset ui-input __third">
          <input type="password" name="password" id="new-password" />
          <label for="new-password">
            <span data-text="Password">Password</span>
          </label>
        </fieldset>

        <fieldset class="form-fieldset ui-input __fourth">
          <input type="text" name="dbname" id="repeat-new-password" />
          <label for="dbname">
            <span data-text="DB Name">DB Name</span>
          </label>
        </fieldset>


        <fieldset class="form-fieldset ui-input __fourth">
          <input type="text" name="servername" id="repeat-new-password" />
          <label for="servername">
            <span data-text="Server Name">Server Name</span>
          </label>
        </fieldset>

        <div class="form-footer">
          <button class="btn">Initialize!</button>
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
