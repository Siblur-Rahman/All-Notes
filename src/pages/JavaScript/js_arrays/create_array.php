<style>
   .active_create{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   </style>
   <!-- topics header -->
<?php include'./array_header.php'?>
<div id="main_content"><!-- Start Main Content -->
    <h2>JavaScript Array<span><a href="https://www.w3schools.com/js/js_arrays.asp" target="_blank"> Details</a></span></h2>
    <!-- <button id="1" class="btn_block accordion itc">Creating an Array</button>
<div class="panel"> -->
   <h4>Using an array literal is the easiest way to create a javascript.</h4>
<h3 class="accordion">Syntax:</h3>
   <div class="panel">
      <p class="code_p">const array_name = [item1, item2, ...];</p>
      Example: <br>
      const cars = ["Saab", "Volvo", "BMW"];
   </div>

   <p class = "accordion" >Spaces and line breaks are not important. A declaration can span multiple lines:</h2>
   <div class="panel">
   <pre class = "code_p">
      Example :
      const cars = [
      "Saab",
      "Volvo",
      "BMW"
      ]; 
   </pre>
   </div>
   <p class = "accordion" >You can also create an array, and then provide the elements:</h2>
   <div class="panel">
      <pre class = "code_p">
      Example
      const cars = [];
      cars[0]= "Saab";
      cars[1]= "Volvo";
      cars[2]= "BMW";
      </pre>
   </div>
   <p class = "accordion" >Using the javascript Keyword new</h2>
   <div class="panel">
      <h4>The following example also creates an Array, and assigns values to it:</h4>
      <pre class = "code_p">
       const cars = new Array("Saab", "Volvo", "BMW");
      </pre>
   </div>
   <p class = "accordion" >Array Declaration with <span class="text-danger">Array</span> constructor (043)</h2>
   <div class="panel">
   <pre class = "code_p">
      var arr = Arrary(); //for emty Array

      var arr2= Arrary(1, 2, 3);
   </pre>
   </div>
</div><!-- End Main Content -->
<!--common footer -->
<?php include('../../common_footer.php') ?>
