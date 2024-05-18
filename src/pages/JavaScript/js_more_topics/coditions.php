<style>
   .active_condition{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   </style>
   <!-- topics header -->
<?php include'./js_more_topics_header.php'?>
<div id="main_content"><!-- Start Main Content -->

   <h2 class="center">Conditional Statements<span class="itc"><a href="https://www.w3schools.com/js/js_if_else.asp" target="_blank"> Details</a></span></h2>
   Use the <span class="itc">if</span> statement to specify a block of JavaScript code to be executed if a condition is true.
   <h3>Syntax</h3>
<pre class="code_p">
if (condition) {
  //  block of code to be executed if the condition is true
}
</pre>
<div class="mark">
<p>Note that <span class="itc">if</span> is in lowercase letters. Uppercase letters (If or IF) will generate a JavaScript error.</p>
</div>
   <div class="all-center100">The else Statement</div>
Use the <span class="itc">else</span> statement to specify a block of code to be executed if the condition is false.
<h3>Syntax</h3>
<div class="code_p">
if (condition) { <br>
  //  block of code to be executed if the condition is true <br>
} else { <br>
  //  block of code to be executed if the condition is false <br>
}
</div>
   <h1 class="center">The else if Statement</h1>
   
Use the <span class="itc">else if</span> statement to specify a new condition if the first condition is false.
<h3>Syntax</h3>
<div class="code_p">
if (condition1) { <br>
  //  block of code to be executed if condition1 is true <br>
} else if (condition2) { <br>
  //  block of code to be executed if the condition1 is false and condition2 is true <br>
} else { <br>
  //  block of code to be executed if the condition1 is false and condition2 is false <br>
}
</div>
<?php include'./coditions_exam.php'?>
</div><!-- End Main Content -->
<!-- footer -->
<?php include('../../common_footer.php') ?>
