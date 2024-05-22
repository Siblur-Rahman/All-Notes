
<?php include'../js_html_dom_header.php'?>
<!-- Start Main Content -->
<h2> <span class="itc"><a href="../domMethods/dom_methods.php">HTML DOM Methods</a></span></h2>
<p id="point">Start</p>

<script>
var parentNode = document.getElementsByTagName("body")[0];
var refNode = document.getElementById("point");

function insertAfter(newNode, refNode){
 refNode.parentNode.insertBefore(newNode, refNode.nextSibling);
}

var newNode = document.createElement("p"); 
var textnode = document.createTextNode("End");
newNode.appendChild(textnode);
insertAfter(newNode, refNode);
</script>
<!-- End Main Content -->
<!-- footer -->
<?php include('../js_html_dom_footer.php') ?>