<style>
.active_api_intro{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
</style>
<!-- css topics header -->
<?php include'./web_api_header.php'?>

<div id="main_content"><!-- Start Main Content -->
<h2 class="center">Web APIs - Introduction<span><a href="https://www.w3schools.com/js/js_api_intro.asp" target="_blank"> Details</a></span></h2>
   <div class="mark">
      A Web API is a developer's dream. <br>
      <br>
      It can extend the functionality of the browser <br>
      It can greatly simplify complex functions <br>
      It can provide easy syntax to complex code
   </div>
   <div class="bg_gray">
      <h3>What is Web API?</h3>
      API stands for Application Programming Interface. <br>

      A Web API is an application programming interface for the Web. <br>

      A Browser API can extend the functionality of a web browser. <br>

      A Server API can extend the functionality of a web server.
      <hr>
      <h3>Browser APIs</h3>
      All browsers have a set of built-in Web APIs to support complex operations, and to help accessing data. <br>

      For example, the Geolocation API can return the coordinates of where the browser is located.
   </div>
   <h2>Example</h2>
   Get the latitude and longitude of the user's position:
   <div class="code_p">
      <h2>JavaScript Geolocation</h2>

      <p>Click the button to get your coordinates.</p>

      <button onclick="getLocation()">Try It</button>

      <p id="demo"></p>

      <script>
      const x = document.getElementById("demo");

      function getLocation() {
      try {
         navigator.geolocation.getCurrentPosition(showPosition);
      } catch {
         x.innerHTML = err;
      }
      }

      function showPosition(position) {
      x.innerHTML = "Latitude: " + position.coords.latitude + 
      "<br>Longitude: " + position.coords.longitude;
      }
      </script>
   </div>
   <div class="bg_gray">
      <h2>Third Party APIs</h2>
      Third party APIs are not built into your browser. <br>
          <br>
      To use these APIs, you will have to download the code from the Web. <br>
      <h2>Examples</h2>
      YouTube API - Allows you to display videos on a web site. <br>
      Twitter API - Allows you to display Tweets on a web site. <br>
      Facebook API - Allows you to display Facebook info on a web site.
   </div>

      

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>

