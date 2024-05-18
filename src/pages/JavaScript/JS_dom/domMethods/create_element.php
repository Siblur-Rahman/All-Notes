
<h2>HTML DOM Document createElement()<span class="itc"><a href="https://www.w3schools.com/jsref/met_document_createelement.asp"  target="_blank">Details</a></span></h2>
<div class="mark">
   The createElement() method creates an element node.
</div>
<h5>Create a &lt;p&gt; element and append it to the document:</h5>
<div id="createElementCode-1" class="showCode"></div>
<script>
   const createElementCode_1 =`
   <h4 class="mark" id="id"></h4>
   
   let para = document.createElement("p");
   para.innerHTML="I am Created Paragraph with CreateElement";
   document.getElementById("id").appendChild(para);`
   document.getElementById('createElementCode-1').innerText = createElementCode_1;
</script>
<!-- <script src="../this_common.js"></script> -->