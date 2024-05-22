 <!-- common_header -->

 <?php include('../../common_header.php') ?>
<!-- style -->
<style>
   .active_{
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
</style>

<!-- left-bar -->

   <?php include('../left_bar.php') ?>

<!-- right-bar -->

   <?php include('../right_bar.php') ?>
   <!-- second Nav bar -->
   <div class="second_navbar">
      <button id="basic_click">Basic Div</button>
        <button id="code_click">Code</button>
        <button><a href="#1">1. C_to Numbers</a></button>
        <button><a href="#2">2. C_to String</a></button>
        <button><a href="#3">3. C_to Boolean</a></button>
        <button><a href="#4">4. Falsy Value</a></button>
    </div>

<div id="main_content">
      <span class="to_jump" id=""></span>
   <h1 class="center">JavaScript Type Conversion(nayem-013)
<span><a href="https://www.w3schools.com/js/js_type_conversion.asp" target="_blank"> Details</a></span></h1>
   <div class="basic_div"><!-- Start Basic div -->
<pre class="s_code">
Converting Strings to Numbers
Converting Numbers to Strings
Converting Dates to Numbers
Converting Numbers to Dates
Converting Booleans to Numbers
Converting Numbers to Booleans
</pre>

   </div><!-- End Basic div -->
<div class="code_div"><!-- start code div -->
    <span class="to_jump" id="1"></span>
      <h2>Converting Strings & Boolean to Numbers</h2>
   <pre class="s_code">
   var str='1000'
   var str_float='1000.33'
   var str_int='1000'
   console.log(Number(str));
   console.log(Number.parseFloat(str_float));
   console.log(Number.parseInt(str_int));
   console.log(Number(true))
   console.log(Number(false))
   </pre>
    <span class="to_jump" id="2"></span>
      <h2>Converting Numbers & Boolean to Strings</h2>
   <pre class="s_code">
   var num=1000
   
   console.log(num.toString())
   or,
   console.log(String(num))
   console.log((123).toString())
   or
   console.log(String(123))
   console.log(true.toString())
   or
   console.log(String(true))

   console.log(false.toString())
   </pre>

    <span class="to_jump" id="3"></span>
      <h2>Converting to Boolean</h2>
   <pre class="s_code">
   var num=1000

   var str='name'
   console.log(Boolean(num))
   console.log(Boolean())
   console.log(Boolean(0))
   console.log(Boolean(str))
   console.log(Boolean(Infinity))
   </pre>

    <span class="to_jump" id="4"></span>
      <h2>Falsy Value</h2>
   <pre class="s_code">
  '',
  0,
  null,
  undefined,
  NAN
   </pre>
</div><!-- end code div -->
</div>

<!-- footer -->
<?php include('../../footer.php') ?>