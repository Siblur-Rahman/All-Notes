
<style>
.active_loop{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
</style>
<!-- css topics header -->
<?php include'./js_loop_header.php'?>

<div id="main_content"><!-- Start Main Content -->

<h2>JavaScript Loop<span><a href="https://www.w3schools.com/js/js_loop_for.asp" target="_blank"> Details</a></span></h2>
<button class="accordion">JS Loop</button>
<div class="panel">
   <h2>JavaScript Loops</h2>
   <h4>Loops are handy, if you want to run the same code over and over again, each time with a different value.</h4>

   <h2>Different Kinds of Loops</h2>
   <pre>
   JavaScript supports different kinds of loops:

   for - loops through a block of code a number of times
   for/in - loops through the properties of an object
   for/of - loops through the values of an iterable object
   while - loops through a block of code while a specified condition is true
   do/while - also loops through a block of code while a specified condition is true
   </pre>
      
  
</div><!-- End panel b1 -->
<?php include'./loop_for.php'?>
<?php include'./loop_while.php'?>
<?php include'./loop_do_while.php'?>

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
