
<!-- common_header -->

<?php include('../../common_header.php') ?>
<style>
      .js_random_active{
      background: #BB2966;
      color: white !important;
   }
   .basic_dropdown{
   display: block !important;
}
</style>

<!-- left-bar -->

   <?php include('../left_bar.php') ?>

<!-- right-bar -->

   <?php include('../right_bar.php') ?>
   <div class="second_navbar">
        <button id="basic_click">JS Math.random()</button>
        <button id="click_1">JS Random Integers</button>
        <button id="click_2"></button>
        <button id="click_3"></button>
        <button id="click_4"></button>
        <button id="click_5"></button>
    </div>
   <!--Start Main Code -->
   <div id="main_content">
     <div id="basic_div">
        <h1>JavaScript Random</h1>
        <h2><h2>JavaScript Math.random()</h2></h2>
        <h4>Math.random() returns a random number between 0 (inclusive),  and 1 (exclusive):</h4>
        <p id="demo"></p>
        <div class="mark">
        <h4>Math.random() always returns a number lower than 1.</h4>
        </div>
        <button class="toggle">Show Code</button>
        <script>
            document.getElementById("demo").innerHTML = Math.random();
        </script>
    <pre class="h_code">
    &lt;p&gt;Math.random() returns a random number between 0 (included) and 1 (excluded):&lt;/p&gt;

    &lt;p id="demo"&gt;&lt;/p&gt;

    &lt;script&gt;
    document.getElementById("demo").innerHTML = Math.random();
    &lt;/script&gt;
    </pre>
       
</div>
<div class="code_1">
<h1>JavaScript Random Integers</h1>
<h4>Math.random() used with Math.floor() can be used to return random integers.</h4>
<h id="demo_1"></h>
        <div class="mark">
        <h4>Math.random() used with Math.floor() can be used to return random integers.</h4>
        </div>
        <button class="toggle">Show Code</button>
<script>
        document.getElementById("demo_1").innerHTML =
        Math.floor(Math.random() * 10);
</script>
<pre class="h_code">
    &lt;p&gt;Math.random() used with Math.floor() can be used to return random integers.&lt;/p&gt;

    &lt;p id="demo_1"&gt;&lt;/p&gt;

    &lt;script&gt;
    // Returns a random integer from 0 to 9:

    document.getElementById("demo").innerHTML =
        Math.floor(Math.random() * 10);
    &lt;/script&gt;
</pre>

</div>

   </div>
   <!--End Main Code -->
<!-- footer -->

<?php include('../../footer.php') ?>