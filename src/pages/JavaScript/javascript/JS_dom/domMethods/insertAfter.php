<p class="accordion">insertAfter()</p>
<div class="panel">
<h2> JavaScript node.insertAfter() Method<span class="itc"><a href="https://wikimass.com/js/node-insertafter"  target="_blank"> Details</a></span></h2>
<div class="mark">
The <node class="span itc">insertAfter()</node> method inserts a new node after the reference node (specified node). <br>

<span class="text-info">Note:</span> The node.insertAfter() is not an inbuilt javascript method, instead we created a user-defined function.
</div>
<button class="accordion">Click to see Example</button>
<pre class="panel code_p">
var parentNode = document.getElementsByTagName("body")[0];
var refNode = document.getElementById("point");

function insertAfter(newNode, refNode){
 refNode.parentNode.insertBefore(newNode, refNode.nextSibling);
}

var newNode = document.createElement("p"); 
var textnode = document.createTextNode("End");
newNode.appendChild(textnode);
insertAfter(newNode, refNode);
</pre>
<!-- <button> <span class="itc"><a href="../domMethods/insertAfterEamp.php"  target="_blank">Click to see Example Page</a></span></button> -->
</div>