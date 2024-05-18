<style>
   .active_css{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   </style>
   <!-- topics header -->
<?php include'./js_dom_header.php'?>
<div id="main_content"><!-- Start Main Content -->

   <h1 class="center">JavaScript HTML CSS<span><a href="https://www.w3schools.com/js/js_htmldom_css.asp" target="_blank"> Details</a></span></h1>
   <p>The HTML DOM allows JavaScript to change the style of HTML elements.</p>
   <hr>
   <h2>Changing HTML Style</h2>
To change the style of an HTML element, use this syntax:

<div class="code_p">document.getElementById(id).style.property = new style</div>
<h2>Example</h2>
<div class="code_p">document.getElementById("p2").style.color = "blue";</div>
<h2>Changing Multiple Style</h2>
<div class="code_p">
      var id = document.getElementById("myDIV"); <br>
       <br>
        id.style.background = "red"; <br>
        id.style.color = "yellow"; <br>
        id.style.width = "50%"
</div>
<h2>OR</h2>
<div class="code_p">document.getElementById("myDIV").style= "background : red; color : yellow"</div>
<div id="myDIV">
   Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dolor eaque quidem repudiandae quaerat vero ea eligendi sapiente cumque, eius, corporis maxime iste. Fuga nemo nisi libero laborum quae, delectus nihil est a laudantium tempore? Cupiditate est impedit minima saepe, ipsam, ratione, ullam veritatis odit exercitationem accusamus esse voluptatem quis.
</div>
<script>
      //  var id = document.getElementById("myDIV");
      //   id.style.background = "red";
      //   id.style.color = "yellow";
      //   id.style.width = "50%"
      document.getElementById("myDIV").style= "background : red; color : yellow"
</script>
  
</div><!-- End Main Content -->
<!-- footer -->
<?php include('../../common_footer.php') ?>
