<style>
   .active_methods{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   </style>
   <!-- topics header -->
<?php include'./array_header.php'?>
<div id="main_content"><!-- Start Main Content -->
   <h2>JS Array Methods<span><a href="https://www.w3schools.com/js/js_array_methods.asp" target="_blank" class="itc"> Details</a></span></h2>
   <h2>Complete JavaScript Array Reference.<span><a href="https://www.w3schools.com/jsref/jsref_obj_array.asp" target="_blank" class="itc"> Details</a></span></h2>
   <button class="accordion">Summary of JS Array Methods</button>
   <div class="panel">
      <div class="mark">
      Array length-The length property provides an easy way to append a new element to an array:<br>
      Array toString() -<br> 
      Array pop()-removes the last element from an array<br>
      Array push( <span class="itc">value</span> )-adds a new element to an array (at the end)<br>

      Array shift()-removes the first array element and "shifts"all other elements to a lower index.<br> 
      Array unshift()-adds a new element to an array (at the beginning),and "unshifts" older elements<br> 
      Array join()<br>
      Array delete()<br>
      Array concat()-The concat() method creates a new array by merging (concatenating) existing arrays:<br>
      10. Array flat()<br>
      11. Array splice()<br>
      Array Slice()<br>
      Array map()-Return a new array with the square root of all element values:<br>
      Array filter <br>
      Array find()<br>
      Array findIndex()<br>
      16.Array join() <br>
      Array forEach()<br>
      Array from()<br>
      Array isArray()<br>
      Array indexOf()<br>
      Array reverse()<br>
      Array sort()<br>
      Array ()<br>
      Array ()<br>
      </div>
   </div> 
   <!-- End Summary of Array Method -->
 <?php include'./array_methods/tostring.php'?>

 <?php include'./array_methods/join.php'?>
 <p class="accordion">keys</p>
 <div class="panel">
    <?php include'./array_methods/keys.php'?>
 </div>

 <?php include'./array_methods/pop.php'?>

 <?php include'./array_methods/push.php'?>

 <?php include'./array_methods/concat.php'?>

 <?php include'./array_methods/splice.php'?>

 <?php include'./array_methods/slice.php'?>

 <?php include'./array_methods/map.php'?>

 <?php include'./array_methods/filter.php'?>

 <?php include'./array_methods/find.php'?>

 <?php include'./array_methods/includes.php'?>

 <?php include'./array_methods/findindex.php'?>

 <?php include'./array_methods/foreach.php'?> 

 <?php include'./array_methods/from.php'?>

 <?php include'./array_methods/isarray.php'?>

 <?php include'./array_methods/indexof.php'?>

 <p class="accordion">reduce()</p>
 <div class="panel">
 <?php include'./array_methods/reduce.php'?>
 </div>
 <?php include'./array_methods/reverse.php'?>
 
 <?php include'./array_methods/sort.php'?>
 </div><!-- End Main Content -->
<!--common footer -->
<?php include('../../common_footer.php') ?>
      
