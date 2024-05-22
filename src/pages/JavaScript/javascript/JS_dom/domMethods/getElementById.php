
<p class="accordion">getElementsById</p>
   <div class="panel">
<h2>getElementId <span class="itc"><a href="https://www.w3schools.com/jsref/met_document_getelementbyid.asp" target="_blank">Details</a></span></h2>
   <p>getElementId is a method to access any element virtually. It accesses the first element with the specified ID.</p>
   <h3>Syntax</h3>
   <pre class="code_p">
      document.getElementById("elementID")
   </pre>
   <h4 id="test">It can also be used dynamically as follows:</h4>
   <pre class="code_p">
   var myVariable = document.getElementById(“my_squad”);
   myVariable.style.display = “block”;
   myVariable.style.backgroundColor = “#f00”;
   myVariable.style.border = “solid 1 px #00f”;
   </pre>
   <div class="mark">
   <h2>Note</h2>
    Any id should be unique, but: <br>
    If two or more elements with the same id exist, getElementById() returns the first.
   </div>
</div>