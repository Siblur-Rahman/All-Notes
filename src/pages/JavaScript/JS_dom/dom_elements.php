<style>
   .active_element{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   </style>
   <!-- topics header -->
<?php include'./js_dom_header.php'?>
<div id="main_content"><!-- Start Main Content -->

   <h2 class="">JavaScript HTML DOM Elements<span><a href="https://www.w3schools.com/js/js_htmldom_elements.asp" target="_blank"> Details</a></span></h2>

   <p>Often, with JavaScript, you want to manipulate HTML elements. <br><br>

   To do so, you have to <span class="itc">find the elements first</span>. There are several ways to do this:</p>
   <div class="" style="background-color: aliceblue; padding:10px">
      <?php include './domMethods/getElementById.php'?>
      <?php include './domMethods/getElementsByTagName.php'?>
      <?php include './domMethods/getElementsByClassName.php'?>
      <?php include './domMethods/querySelector.php'?>
      <?php include './domMethods/querySelectorAll.php'?>
   </div>
   <pre class="code_p">

   </pre>
   <h4></h4>
   <pre class="code_p">

   </pre>
   <h4></h4>
   <pre class="code_p"></pre>
 
</div><!-- End Main Content -->
<!-- footer -->
<?php include('../../common_footer.php') ?>
