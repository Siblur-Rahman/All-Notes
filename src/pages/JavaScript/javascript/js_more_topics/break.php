<!-- header -->

<?php include('../../header.php') ?>
<!-- style -->
<style>
   .js_active_33{
    background: #EF043C;
    line-height: 30px;
    color: white !important;
}
.basic_dropdown{
   display: block !important;
}
.to_jump{
   padding-top: 110px;
}
pre{
   font-size: 20px;
}
</style>
<!-- Start main Content-->
<button id="basic_click">Basic Div</button>
        <button id="code_click">Code</button>
   <h2 class="center">JavaScript Break<span><a href="https://www.w3schools.com/js/js_break.asp" target="_blank"> Details</a></span></h2>
   <div class="basic_div"><!-- Start Basic div -->
      <h4>The break statement "jumps out" of a loop.</h4>
      <h2>JavaScript Loops</h2>

<p>A loop with a <b>break</b> statement.</p>

<p id="demo"></p>

<script>
let text = "";
for (let i = 0; i < 10; i++) {
  if (i === 3) { break; }
  text += "The number is " + i + "<br>";
}

document.getElementById("demo").innerHTML = text;
</script>

   </div><!-- End Basic div -->
    <div class="code_div"><!-- start code div -->
      <pre>
      let text = "";
      for (let i = 0; i < 10; i++) {
      if (i === 3) { break; }
      text += "The number is " + i + "&lt;br&gt;";
      }
      </pre>
    </div><!-- end code div -->
<!-- End main Content-->

<!-- footer -->
<?php include('../../footer.php') ?>
