
<style>
.active_for_of{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
</style>
<!-- css topics header -->
<?php include'./js_loop_header.php'?>

<div id="main_content"><!-- Start Main Content -->

<h2>JavaScript For of Loop<span><a href="https://www.w3schools.com/js/js_loop_forof.asp" target="_blank"> Details</a></span></h2>
  <div class="mark">
  The JavaScript for of statement loops through the values of an iterable object.   <br>
    <br>
  It lets you loop over iterable data structures such as Arrays, Strings, Maps, NodeLists, and more:
  </div>
  <h3>Syntax</h3>
  <pre class="code_p">
    for (variable of iterable) {
      // code block to be executed
    }
  </pre>
  <h2>For of over Array</h2>
  <pre>
    const numbers = [45, 4, 9, 16, 25];

    for(let x of numbers){
        console.log(x)
    }
   </pre>
  <h2>For in over Object</h2>
  <h3>Syntax</h3>
  <pre class="code_p">
  for (key in object) {
    // code block to be executed
  }
  </pre>

  <h2>For In over String</h2>
      <pre>
      let name = "MD SIBLUR RAHMAN"

    for(let x of name){
        console.log(x)
    }

   </pre>

      

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
