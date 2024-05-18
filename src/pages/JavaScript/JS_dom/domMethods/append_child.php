
<?php include'../js_html_dom_header.php'?>

<!-- Document Method List -->
<button class="accordion">Document Method List</button>
<div class="panel">
   <?php include'./dom_method_list.php'?>
</div>
<!-- Start Main Content -->
<h2>HTML DOM Element appendChild()<span class="itc"><a href="https://www.w3schools.com/jsref/met_node_appendchild.asp"  target="_blank">Details</a></span></h2>
<h5>The <span class="itc">appendChild()</span> method appends a node (element) as the last child of an element.</h5>
<div id="demo" class="mark"></div>
<button class="accordion">JS Code</button>
<div class="panel">
   <div class="code_p">
   let list = document.createElement("h2"); <br>
   list.innerHTML = "I am Added By AppendChild() Method"; <br>
   document.getElementById("demo").appendChild(list)
   </div>
</div>
<script>
   let list = document.createElement("h2");
   list.innerHTML = "I am Added By AppendChild() Method";
   document.getElementById("demo").appendChild(list)
</script>

<h5>Use of appendChild() in a function</h5>
<ul id="ul">
   <li>Coffe</li>
   <li>Tea</li>
</ul>
<button onclick="appendFunc()">appendChild</button>
<button class="accordion">JS Code</button>
<div class="panel">
   <pre class="code_p">
   function appendFunc(){
   let node = document.createElement("li")
   let textNode = document.createTextNode("Water");
   node.appendChild(textNode)
   document.getElementById("ul").appendChild(node)
   }
   </pre>
</div>
<script>
   function appendFunc(){
   let node = document.createElement("li")
   let textNode = document.createTextNode("Water");
   node.appendChild(textNode)
   document.getElementById("ul").appendChild(node)
   }
</script>
<!-- Dynamically an element creating and appending child -->
<h5>Dynamically an element creating and appending child</h5>
<ul id="my_ul"></ul>
<input type="text" id="my_input" value="">
<button onclick="append_child()" onchange="outValue()">Append Child</button>
<button class="accordion">JS Code</button>
<div class="panel">
<pre class="code_p">
   function append_child(){
      let inputValue = document.getElementById("my_input").value;
      let createElement = document.createElement("li");
      createElement.innerHTML = inputValue;
      let my_appendChild = document.getElementById("my_ul");
      my_appendChild.appendChild(createElement);
   }
</pre>
</div>
<script>
   function append_child(){
      let inputValue = document.getElementById("my_input").value;
      let createElement = document.createElement("li");
      createElement.innerHTML = inputValue;
      let my_appendChild = document.getElementById("my_ul");
      my_appendChild.appendChild(createElement);
   }
</script>
<!-- End Main Content -->
<!-- footer -->
<?php include('../js_html_dom_footer.php') ?>