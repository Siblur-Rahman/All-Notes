
<h2 class="accordion">JavaScript HTML DOM EventListener</h2>
<div class="panel">
<section>
   <h2>JavaScript HTML DOM EventListener<span><a href="https://www.w3schools.com/js/js_htmldom_eventlistener.asp" target="_blank"> Details</a></span></h2>
   <h2>Syntax</h2>
   <div class="code_p">
      element.addEventListener(event, function, useCapture);
   </div>
   <div>
   The first parameter is the type of the event (like "click" or "mousedown" or any other HTML DOM Event.) <br>

   The second parameter is the function we want to call when the event occurs. <br>

   The third parameter is a boolean value specifying whether to use event bubbling or event capturing. This parameter is optional.
   </div>
   <p class="accordion">1. Add an Event Handler to an Element</p>
   <div class="panel">
         <h3 id="el-1_1">Text</h3>
         <button id="btn-el-1_1">Click Me to increase Above text</button>
      <script>
         document.getElementById('btn-el-1_1').addEventListener('click', function(){
         document.getElementById('el-1_1').style.fontSize = '50px'
         })
         </script>
         <p class="accordion">code-2.1</p>
         <div class="panel">
            document.getElementById('btn-el-1_1').addEventListener('click', function(){
            document.getElementById('el-1_1').style.fontSize = '50px'
            })
         </div>
   </div>
   <p class="accordion">2. Add Many Event Handlers to the Same Element</p>
   <div class="panel">
   <button id="btn-el-2_1" class="btn">Try it!</button>

   <script>
         const btnEL2_1 = document.querySelector('#btn-el-2_1');
         btnEL2_1.addEventListener('click', firstAlert);
         btnEL2_1.addEventListener('click', secondAlert);
         function firstAlert(){
            alert ("Watch the video first");
         }
         function secondAlert(){
            alert('After watching video, practice properly');
         }
      </script>
   
   <div class="code_p">
   element.addEventListener("click", myFunction); <br>
   element.addEventListener("click", mySecondFunction);
   </div>
   <div class="mark">You can add events of different types to the same element:</div>
   </div>
   <p class="accordion">3. Add an Event Handler to the window Object</p>
   <pre class="panel">
      window.addEventListener("resize", function(){
      document.getElementById("id").innerHTML = sometext;
      });
   </pre>
   <p class="accordion">4. Passing Parameters </p>
   <div class="panel">
      element.addEventListener("click", function(){ myFunction(p1, p2); }); <span><a href="https://www.w3schools.com/js/tryit.asp?filename=tryjs_addeventlistener_dom" target="_blank"> Details</a></span>
   </div>
   <p class="accordion">5. Event Bubbling or Event Capturing?</p>
   <div class="panel">
      <div>
         There are two ways of event propagation in the HTML DOM, bubbling and capturing.

         Event propagation is a way of defining the element order when an event occurs. If you have a <span class="itc"> &lt;p&gt; </span > element inside a <span class="itc"> &lt;div&gt; </span > element, and the user clicks on the <span class="itc"> &lt;p&gt; </span > element, which element's "click" event should be handled first?

         In bubbling the inner most element's event is handled first and then the outer: the <span class="itc"> &lt;p&gt; </span > element's click event is handled first, then the <span class="itc"> &lt;div&gt; </span > element's click event.

         In capturing the outer most element's event is handled first and then the inner: the <span class="itc"> &lt;div&gt; </span > element's click event will be handled first, then the <span class="itc"> &lt;p&gt; </span > element's click event.

         With the <span class="itc">addEventListener()</span> method you can specify the propagation type by using the "useCapture" parameter:
            <div class="code_p">
               addEventListener(event, function, useCapture);
            </div>
            <div class="mark">
               The default value is false, which will use the bubbling propagation, when the value is set to true, the event uses the capturing propagation.
            </div>
      </div>
      document.getElementById("myP").addEventListener("click", myFunction, true); <br>
      document.getElementById("myDiv").addEventListener("click", myFunction, true); <br>
      <a href="https://www.w3schools.com/js/tryit.asp?filename=tryjs_addeventlistener_usecapture">Example Code</a>
   </div>
   <p class="accordion">6. Stop Propagation</p>
   <div class="panel">
      <?php include './DOM_Event_method/stopPropagation.php'?>
   </div>
   <p class="accordion">Stop immediate Propagation</p>
   <div class="panel">
   </div>
   <p class="accordion">Stop immediate Propagation</p>
   <div class="panel">

   </div>

</section>

      <!-- <button class="itc"><a href="" target="_blank">watch video <span class="itc"></span></a></button> -->
      <!-- <button><a href="./file_example.html" target="_blank"></a></button> -->
   </div><!--End panel-->