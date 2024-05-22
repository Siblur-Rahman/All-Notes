<style>
   .active_iterate{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   </style>
   <!-- topics header -->
<?php include'./array_header.php'?>
<div id="main_content"><!-- Start Main Content -->
    <h2>JS Array Iteration<span><a href="https://www.w3schools.com/js/js_array_iteration.asp" target="_blank"> Details</a></span></h2>
    <!-- <button class="btn_block"><a href="" target="_blank">Watch video</a></button> -->
    <div class="mark">Array iteration methods operate on every array item.</div>
    <div class="code_p">We use looping and traversing words instead of iteration.</div>
    <h2>We can iterate an array in many ways such as :</h2>
   
   <p class="accordion">Iteration with For loop</p>
   <div class="panel code_p">
      const fruit = ["Banana", "Orange", "Apple", "Mango"];   <br>
      let text = "&lt;ul&gt;";  <br>
      <br>
         for(let i = 0; i&lt;fruit.length; i++){   <br>
         // text+=`&lt;li&gt; ${fruits[i]}&lt;/li&gt;` <br>
         text+="&lt;li&gt;"+ fruit[i]+"&lt;/li&gt;" <br>
         }  <br>
         text+="&lt;/ul"   <br>
         document.getElementById("looping_demo_1").innerHTML =text;  <br>
   </div>
   <p class="accordion">Iteration with For of</p>
   <div class="panel code_p">
         const myArray = ["Banana", "Orange", "Apple", "Mango"]; <br>
         let text2 = "&LT;ul&GT;"; <br>
         for(let item of myArray){ <br>
         text2+=`&LT;li&GT; ${item}&LT;/li&GT;` <br>
         } <br>
         text2+="&LT;/ul" <br>
         document.getElementById("looping_demo_2").innerHTML =text2;
   </div>

    <p class="accordion" > Iteration with forEach</p>
    <div class="panel">
      <?php include'./array_methods/foreach.php'?>
      <?php include'./array_methods/foreach_exam.php'?>
    </div><!-- End panel-->
    <p class="accordion" > Iteration with Array map()</p>
    <div class="panel">
       <?php include'./array_methods/map.php'?>
       <?php include'./array_methods/map_exam.php'?>
    </div><!-- End panel-->
    <p class="accordion" > Iteration with </p>
    <div class="panel">
    <? include'./array_methods/.php'?>
    </div><!-- End panel-->
    <p class="accordion" > Iteration with </p>
    <div class="panel">
    </div><!-- End panel-->
</div><!-- End Main Content -->
<!--common footer -->
<?php include('../../common_footer.php') ?>
