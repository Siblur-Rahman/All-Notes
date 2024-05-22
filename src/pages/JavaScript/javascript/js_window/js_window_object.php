<style>
   .active_{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   </style>
   <!-- window header -->
<?php include'./js_window_object_header.php'?>
<div id="main_content"><!-- Start Main Content -->
<h2>JavaScript Window - The Browser Object Model<a href="https://www.w3schools.com/js/js_window.asp" target="_blank">Details </a> </h2>
<div class="mark">
The window object represents an open window in a browser. <br>

If a document contain frames (&lt;iframe&gt; tags), the browser creates one window object for the HTML document, and one additional window object for each frame.

</div>

<h2 class="">Window Object Properties and Methods<span><a href="https://www.w3schools.com/jsref/obj_window.asp" target="_blank"> Details</a></span></h2>

<?php include './methods_win/methods.php'?>



</div><!-- End Main Content -->
<!--js_common footer -->
<?php include('../../common_footer.php') ?>
