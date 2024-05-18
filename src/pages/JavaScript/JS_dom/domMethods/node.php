
<?php include'../js_html_dom_header.php'?>

<!-- Document Method List -->
<button class="accordion">Document Method List</button>
<div class="panel">
   <?php include'./dom_method_list.php'?>
</div>
<!-- Start Main Content -->
<h2>Node:</h2>
   <p>Any element on a page including text & whitespaces of a DOM structure is known as “NODE.” Nodes can be between XHTML Tags.</p>
   <h4>Nodes available in DOM:</h4>
   <pre>node.childNodes
   node.firstChild
   node.lastChild
   node.parentNode
   node.nextSibling
   node.previousSibling</pre>
   <h4>Suppose we have following XHTML:</h4>

      <h3>Syntax</h3>
   <pre class="code_p">
   &lt;ul id-“list”&gt;
      &lt;li&gt;&lt;a href=”prod1.html” class=”list_one”&gt; Product Number One&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=”prod2.html”&gt; Product Number Two&lt;/a&gt;&lt;/li&gt; 
      &lt;li&gt;&lt;a href=”prod3.html”&gt; Product Number Three&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=”prod4.html”&gt; Product Number Four&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
   </pre>
   <p>Now if we want to access “Prod1” we can do so using 2 ways:</p>
   <h4>Using ChildNodes:</h4>

   <pre class="code_p">
   var myLinkList = document.getElementsById(“list”)
   var myFirstProduct = myLinklist.childNodes[0].childNodes[0];
   alert(myFirstLink.className);
   </pre>
   <h4>Using firstChild:</h4>
   <pre class="code_p">
   var myLinkList = document.getElementsById(“list”)
   var myFirstProduct = myLinklist.firstChild.firstChild;
   alert(myFirstLink.className);
   </pre>
   <p>Both codes will display the same results because the same element is accessed. Different browsers may give different outputs.
   <br><br>
   For example, Firefox’s output would be different than Chrome because it views whitespaces as nodes. Nodes can be interpreted differently. So be selective & carefully while using & test nodes.</p>
<!-- End Main Content -->
<!-- footer -->
<?php include('../js_html_dom_footer.php') ?>