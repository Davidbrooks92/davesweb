<script src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
  var timestamp = '<?= time(); ?>';

  function updateTime() {
    $('#time').html(Date(timestamp));
    timestamp++;
  }
  $(function() {
    setInterval(updateTime, 1000);
  });
</script>
<?php
function template_header($title)


{



  echo <<<EOT
    <!DOCTYPE html>
    <head>
      <link rel="stylesheet" href="styling.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <script src="script.js"></script>
      <title>$title</title>
      <nav>
        <ul class="menu">
          <li class="logo"><a><img src="cat_logo.png" alt="CAT Logo" style="height:50px;"></a></li>
          <li class="item"><a href="index.php">Home</a></li>
          <li class="item"><a href="aboutus.php">About</a></li>
          <li class="item"><a href="jobs.php">Careers</a></li>
          <li class="item"><a href="contactus.php">Contact Us</a></li>
          <li class="item has-submenu">
            <a tabindex="0">Services</a>
            <ul class="submenu">
                <li class="subitem"><a href="services.php">Services</a></li>
                <li class="subitem"><a href="#">Development</a></li>
                <li class="subitem"><a href="#">SEO</a></li>
                <li class="subitem"><a href="#">Copywriting</a></li>
            </ul>
          </li>
          <li class="item has-submenu">
              <a tabindex="0">Plans</a>
              <ul class="submenu">
                  <li class="subitem"><a href="#">Freelancer</a></li>
                  <li class="subitem"><a href="#">Startup</a></li>
                  <li class="subitem"><a href="#">Enterprise</a></li>
              </ul>
          </li>
          <li class="item"><a href="#">Blog</a></li>
          <li class="item"><a href="#">Contact</a></li>
          <li class="item button"><a href="#">Log In</a></li>
          <li class="item button secondary"><a href="#">Sign Up</a></li>
          <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
      </nav>
    </head>
    <body class="body">

EOT;
}
?>
<?php
// Template Footer
function template_footer()
{
  $year = date('Y');

  echo <<<EOT
<script src="script.js"></script>
</body>
<footer class="footer">
  <div class="bottomstuff">
    <iframe id="copy" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10234.11845083172!2d-5.2693913!3d50.1138109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x656537ff3a72993b!2sCornwall%20Auto%20Technics%20Ltd!5e0!3m2!1sen!2suk!4v1644421880679!5m2!1sen!2suk" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <p>7 Water-Ma-Trout, Helston Cornwall TR13 0LW</p>
    <p>Tel: 01326 554063</p>     
    <p>Copyright &#169; $year Cornwall Auto Technics</p>
    <p id="time"></p>
    </div>
</footer>
</html>
EOT;
}
?>