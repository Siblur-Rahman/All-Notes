<!-- header -->

<?php include('../../header.php') ?>
<!-- style -->
<style>
.basic_active{
      background: #786363;
    line-height: 30px;
    color: white !important;
}
.js_17_active{
    background: #BB2966;
    line-height: 30px;
    color: white !important;
}
.basic_dropdown{
   display: block !important;
}
.to_jump{
   padding-top: 110px;
}
p{
   display: inline-block;
}
</style>
   <!-- Start Main Content -->
<button id="toggle_b1">17. JS Math Functions</button>
   <div class="code_b1">
      <h2> </h2>
      <pre>
     
      </pre>
      
   <button id="toggle_2">Watch from Folder</button>
   <div class="code_2">
   <video src="../../all_notes_videos/javascript/02.js_starting_5-19/017. JS Math Functions _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4"width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/iVgpwXRXjXw" target="_blank">Watch on YouTube</a></button>     
</div>
<h1 class="center">JS Math<span><a href="" target="_blank"> Details</a></span></h1>
   <div class=""><!-- Start Basic div -->
   <h2>JavaScript Math Object</h2>
   <br>
   <h4>Unlike other objects, the Math object has no constructor. <br>

      The Math object is static. <br>

      All methods and properties can be used without creating a Math object first.</h4>
      <h2>Math Properties (Constants)</h2>
      <br>
      <h4>The syntax for any Math property is : <span class="text-danger">Math.property</span>. <br>

         JavaScript provides 8 mathematical constants that can be accessed as Math properties:</h4>
   <pre class="s_code" id="">
   Example
      Math.E        // returns Euler's number
      Math.PI       // returns PI
      Math.SQRT2    // returns the square root of 2
      Math.SQRT1_2  // returns the square root of 1/2
      Math.LN2      // returns the natural logarithm of 2
      Math.LN10     // returns the natural logarithm of 10
      Math.LOG2E    // returns base 2 logarithm of E
      Math.LOG10E   // returns base 10 logarithm of E 
   </pre>
   <h2>Math Methods</h2>
   <h4>The syntax for Math any methods is : Math.method(number)</h4>
   <br>
   <h2>Number to Integer</h2>
   <br>
   <h4>here are 4 common methods to round a number to an integer:</h4>
    <pre class="s_code">
    Math.round(x)	Returns x rounded to its nearest integer
    Math.ceil(x)	Returns x rounded up to its nearest integer
    Math.floor(x)	Returns x rounded down to its nearest integer
    Math.trunc(x)	Returns the integer part of x (new in ES6)
    </pre>

   </div><!-- End Basic div -->
    <div class=""><!-- start code div -->
<pre class="s_code">
   console.log(Math.E)
   console.log(Math.PI)
   console.log(Math.PI)

   var num=4.556
   console.log(Math.abs(num))
   console.log(Math.floor(num))
   console.log(Math.ceil(num))
   console.log(Math.round(num))
   console.log(Math.max(400, 500, 200))
   console.log(Math.min(400, 500, 200))
   console.log(Math.pow(4, 5))
   console.log(Math.sqrt(4))
   console.log(Math.random())
   console.log(Math.round(Math.random()*50+1))
</pre>
</div>
<!-- End Main Content -->
<!-- footer -->
<?php include('../../footer.php') ?>
<script>

</script>
