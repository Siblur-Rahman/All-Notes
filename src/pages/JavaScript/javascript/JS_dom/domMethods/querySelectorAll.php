

<p class="accordion">querySelectorAll</p>
<div class="panel">
   <!-- Start Main Content -->
   <h2>HTML DOM Document querySelectorAll() <span class="itc"><a href="https://www.w3schools.com/jsref/met_document_queryselectorall.asp"  target="_blank">Details</a></span></h2>
      The <span class="itc">querySelectorAll()</span> method returns all elements that matches a CSS selector(s). <br>

      The <span class="itc">querySelectorAll()</span> method returns a NodeList. <br>

      The <span class="itc">querySelectorAll()</span> method throws a SYNTAX_ERR exception if the selector(s) is invalid
   <div class="code_p">
      <h2>Syntax</h2>
      document.querySelectorAll(CSS selectors)
   </div>
   <button class="accordion">Examples</button>
   <div class="panel">
      <h5>Select all elements with class="example":</h5>
      <div class="code_p">
         const nodeList = document.querySelectorAll(".example"); <br>
         for (let i = 0; i < nodeList.length; i++) { <br>
         nodeList[i].style.backgroundColor = "red"; <br>
         }
      </div>
      
      <h5>Number of elements with class="example":</h5>
      <div class="code_p">
         let numb = document.querySelectorAll(".example").length; <br>
         document.getElementById("demo").innerHTML = num;
      <h2>Or</h2>
         const nodeList = document.querySelectorAll(".example"); <br>
         document.getElementById("demo").innerHTML = nodeList.length;
      </div>

      <h5>Add a background color to the first <p> element:</h5>
      <div class="code_p">
         const nodeList = document.querySelectorAll("p"); <br>
         nodeList[0].style.backgroundColor = "red";
      </div>

      <h5></h5>
      <div class="code_p">

      </div>

      <h5></h5>
      <div class="code_p">

      </div>
   </div>
</div>