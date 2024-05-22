<style>
   .json_active_parse{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   </style>
   <!-- topics header -->
<?php include'./js_json_header.php'?>
<div id="main_content"><!-- Start Main Content -->

   <h2 class="center">JSON.parse()<span><a href="https://www.w3schools.com/js/js_json_parse.asp" target="_blank"> Details</a></span></h2>
   <div class="mark">
   A common use of JSON is to exchange data to/from a web server. <br>

   When receiving data from a web server, the data is always a string. <br>

   Parse the data with JSON.parse(), and the data becomes a JavaScript object.
   </div>
   <h2>Creating an Object from a JSON String</h2>
   <div class="output">
   <h4>Output</h4>
      <p id="demo"></p>
   </div>
   <div class="code_p">
      const txt = '{"name":"John", "age":30, "city":"New York"}' <br>
      const obj = JSON.parse(txt); <br>
      document.getElementById("demo").innerHTML = obj.name + ", " + obj.age;
   </div>
   <script>
   const txt = '{"name":"John", "age":30, "city":"New York"}'
   const obj = JSON.parse(txt);
   document.getElementById("demo").innerHTML = obj.name + ", " + obj.age;
   </script>
   
</div><!-- End Main Content -->
<!-- common footer -->
<?php include('../../common_footer.php') ?>
