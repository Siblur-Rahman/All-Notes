
<style>
.active_events{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   section{
      margin: 10px 0px;
   }
</style>
<!-- css topics header -->
<?php include'./js_events_header.php'?>

<div id="main_content"><!-- Start Main Content -->



<!-- DOM Events -->
<section>
   <div>
      <h2>JavaScript Events <span><a href="https://www.w3schools.com/js/js_events.asp" target="_blank"> Details</a></span></h2>
      <hr>
      HTML events are "things" that happen to HTML elements. <br>

      When JavaScript is used in HTML pages, JavaScript can "react" on these events.
      <hr>
      <h2>Syntax</h2>
      <pre class="code_p">
         With single quotes:
         &lt;element event='some JavaScript'&gt;

         With double quotes:
         &lt;element event="some JavaScript"&gt;
      </pre>

   </div>
   <h2>DOM Events<span><a href="https://www.w3schools.com/js/js_htmldom_events.asp" target="_blank"> Details</a></span></h2>
   <h1>We can use events in different ways</h1>
      <p class="accordion">1. Using HTML Event Attributes</p>
      <div class="panel code_p">
         &lt;div id="add-event"&gt;It will be changed this Text with Event&lt;/div&gt; <br>
         &lt;button onclick="document.getElementById('add-event').style.color = 'red'"&gt;change text color&lt;/button&gt; <br>

         &lt;button onclick="this.style ='color:red; font-size:40px'"&gt;click & change Me&lt;/button&gt;
      </div>
   <p class="accordion">2. Assign Events Using the HTML DOM</p>
   <div class="panel">
      element.onclick = functionName;
      <div id="insert-1">

      </div>
   </div>
   <p class="accordion">2. Assign Event using EventLister the HTML DOM</p>
   <div class="panel code_p">
      document.addEventListener("click", myFunction); <br>
      document.getElementById('btn-el-1_1').addEventListener('click', function(){ document.getElementById('el-1_1').style.fontSize = '50px' }) <br>
      <a href="./eventListener.php" target="_blank">Details</a>
   </div>
</section>
<!-- Some common Events -->
<section>
   <h2 class="accordion">Some common Events</h2>
   <div class="panel">
      click, change, blur, fucus, load, 
      <ul>
         <li><a href="./DOM_Events/click.html" target="_blank">click</a></li>
         <li><a href="./DOM_Events/blur.html" target="_blank">blur</a></li>
         <li><a href="" target="_blank"></a></li>
         <li><a href="" target="_blank"></a></li>
         <li><a href="" target="_blank"></a></li>
         <li><a href="" target="_blank"></a></li>
         <li><a href="" target="_blank"></a></li>
         <li><a href="" target="_blank"></a></li>
         <li><a href="" target="_blank"></a></li>
         <li><a href="" target="_blank"></a></li>
      </ul>
   </div>
   
</section>
<!-- HTML DOM Event Object Reference -->
   <h2>HTML DOM Event Object Reference<span><a href="https://www.w3schools.com/jsref/dom_obj_event.asp" target="_blank"> Details</a></span></h2>

   <!-- HTML DOM Event Methods -->
   <h2>HTML DOM Event Methods<span><a href="https://www.w3schools.com/jsref/dom_obj_event_methods.asp" target="_blank"> Details</a></span></h2>
<!-- <h2><span><a href="" target="_blank"> Details</a></span></h2>
<h2><span><a href="" target="_blank"> Details</a></span></h2>
<h2><span><a href="" target="_blank"> Details</a></span></h2> -->

      

</div><!-- End Main Content -->
<script>
   const code_1 =`element.onclick= function myFunc(){
            element.innerText = 'some text'
        }
   `
   function showCode(OutputId, codeText){
    const insertEle_1 = document.getElementById(OutputId);
   //  insertEle_1.style='border:5px solid black; padding:5px';
    insertEle_1.innerText = codeText;
 }
               showCode('insert-1', code_1)
</script>
<!--Common footer -->
<?php include('../../common_footer.php') ?>
