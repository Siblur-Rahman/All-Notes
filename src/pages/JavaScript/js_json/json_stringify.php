<style>
   .json_active_stringify{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   </style>
   <!-- topics header -->
<?php include'./js_json_header.php'?>
<div id="main_content"><!-- Start Main Content -->

   <h2 class="center">JSON.stringify()<span><a href="https://www.w3schools.com/js/js_json_stringify.asp" target="_blank"> Details</a></span></h2>
   <button id="toggle_b" class="btn_block"></button>
<div class="code_b">
   <div class="mark">
   A common use of JSON is to exchange data to/from a web server. <br>

   When sending data to a web server, the data has to be a string. <br>

   Convert a JavaScript object into a string with JSON.stringify().
   </div>
   <h2>Create a JSON string from a JavaScript object.</h2>
   <div class="output">
      <h4>Output</h4>
      <p id="demo"></p>
   </div>
   <div class="code_p">
   const obj = {name: "John", age: 30, city: "New York"}; <br>
   const myJSON = JSON.stringify(obj); <br>
   document.getElementById("demo").innerHTML = myJSON;
   </div>
<button class="btn_block"><a href="../../js_topics_video/025_4.php" target="_blank">Watch Video <span class="itc">225_4</span></a></button>
<script>
const obj = {name: "John", age: 30, city: "New York"};
const myJSON = JSON.stringify(obj);
document.getElementById("demo").innerHTML = myJSON;
</script>
</div><!-- End code_b -->

</div><!-- End Main Content -->
<!-- footer -->
<?php include('../../common_footer.php') ?>
