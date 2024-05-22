
<P class="accordion">QuerySelector</P>
<div class="panel">
   <h2>HTML DOM querySelector() Method <span class="itc"><a href="https://www.w3schools.com/jsref/met_element_queryselector.asp"  target="_blank">Details</a></span></h2>
   The <span class="itc">querySelector()</span> method returns the first child element that matches a specified CSS selector(s) of an element.

   <div class="code_p">
      <h2>Syntax</h2>
      document.querySelector(CSS selectors)
   </div>
   <button class="accordion">Example</button>
   <div class="panel code_p">
      document.querySelector("p"); <br>
      document.querySelector(".example"); <br>
      document.querySelector("p.example"); <br>
      document.querySelector("#demo").innerHTML = "Hello World!"; <br>
      document.querySelector("div > p"); <br>
      document.querySelector("a[target]"); <br>
      document.querySelector("h3, h4").style.backgroundColor = "red"; <br>
      document.querySelector("h3, h4").style.backgroundColor = "red"; <br>
   </div>
   <div class="mark">Note: <span class="itc">querySelector()</span> method only returns the first element that matches the specified selectors. To return all the matches, use the <span class="itc">querySelectorAll()</span> method instead.</div>

   <div class="mark">
      <a href="https://www.w3schools.com/cssref/css_selectors.php">CSS Selector Reference</a> <br>
      <a href="https://www.w3schools.com/css/css_selectors.asp">CSS Selector</a>
   </div>
</div>