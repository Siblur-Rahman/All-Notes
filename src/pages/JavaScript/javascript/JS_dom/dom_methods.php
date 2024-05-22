
<style>
.active_method{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
</style>
<!-- css topics header -->
<?php include'./js_dom_header.php'?>

<div id="main_content"><!-- Start Main Content -->

<h2><span><a href="" target="_blank"> Details</a></span></h2>
<h3 class="all-center100">JavaScript - HTML DOM Methods<span class="itc"><a href="https://www.w3schools.com/js/js_htmldom_methods.asp" target="_blank"> Details</a></span></h3>
   <p>HTML DOM methods are actions you can perform (on HTML Elements).<br>
HTML DOM properties are values (of HTML Elements) that you can set or change.</p>
<hr>

<p class="accordion">createElement()</p>
<div class="panel">
   <?php include'./domMethods/create_element.php'?>
</div>
<?php include'./domMethods/insertAfter.php'?>
<?php include './domMethods/insertBefore.php'?>
<?php include './domMethods/getElementById.php'?>
<?php include './domMethods/getElementsByClassName.php'?>
<?php include './domMethods/getElementsByTagName.php'?>
<?php include './domMethods/querySelector.php'?>
<?php include './domMethods/querySelectorAll.php'?>
<button class="accordion">Some Method</button>
<div class="panel">
   <button id="6"class="btn_block accordion">6) removeChild:</button>
   <div class="panel 6">
      <h2>6) removeChild:</h2>
      <p>o remove the effect of appendChild, we can use removeChild. Here, we need to remove the list item because it includes both “list item & newly created anchor.” And, if we didn’t create a new element, it might remove the last list item.</p> <br>
      <p>It doesn’t matter whether it was created recently or it existed. Following is a code to remove Child method:</p>
      <pre class="code_p">
      var myLinkList = document.getElementById(“list”)
      var myRemovedLink = myLinkList.lastChild;
      myLinkList.removeChild(myRemoveLink);
      </pre>
   </div><!-- End panel 6 -->

   <button id="7"class="btn_block accordion">7) getAttribute:</button>
   <div class="panel 7">
      <h2>7) getAttribute:</h2>
      <p>With the getAttribute method, you can access the value of any attribute of an element on a page. Suppose there’s an id with abc attribute having value “Best.”</p> <br>

      <p>Now, if we want to retrieve that attribute, we will use getAttribute.</p>
      <h2>Following is an example:</h2>
      <pre class="code_p">
      var myLinkFive = document.getElementById(“Prod_5”);
      var myLinkAttribute = myLinkFive.getAttribute(“abc”); 
      </pre>
      <p>Now getAttribute will retrieve the value from “abc,” i.e., “Best.” This method is used to target links with specific attributes & values.</p>
   </div><!-- End panel 7 -->

   <button id="8"class="btn_block accordion">8) setAttribute:</button>
   <div class="panel 8">
      <h2>8) setAttribute:</h2>
      <p>A useful method to replace values in the attribute. Assigning a new value to an existing attribute is done using setAttribute. Suppose we have an attribute “abc” containing value “Best.” <br>

      Now we want to change the value to “Awesome.” Following is a suitable code:</p>
      <pre class="code_p">
      Var myLinkFive = document.getElementById(“Prod_5);
      myLinkFive.setAttribute(“abc”, ”Awesome”);
      </pre>
      <p>Here, the value inside the abc attribute has been replaced. This method cannot change attributes; it can only make changes in values of an attribute.</p>
   </div><!-- End panel 8 -->

   <button id=""class="btn_block accordion">9) document.forms:</button>
   <div class="panel">
      <h2>9) document.forms:</h2>
      <p>This method is used to access “form” collections of the DOM structure. Usually, every website uses a “document.form” syntax. We might have used getElementById or TagName, but for accessing form, this method is the best.</p>
      <h4>Example:</h4>
      <pre class="code_p">
      &lt;form id=”my_form” method=”post” action=”abc.html”&gt;
         &lt;input type=”checkbox” value=”one” name=”options” id=”option1” checked=”checked” /&gt;One &lt;/br&gt;
         &lt;input type=”checkbox” value=”two” name=”options” id=”option2” /&gt; Two &lt;/br&gt;
         &lt;input type=”checkbox” value=”three” name=”options” id=”option3” /&gt; Three &lt;/br&gt;
      &lt;/form&gt;
      </pre>

      <h4>Let’s find out the “Checked” state:</h4>
      <pre class="code_p">
      var myCheckBoxOne = document.forms[“my_form”][“option1”];
      alert(myCheckBoxOne.checked);
      </pre>
      <p>Here, the result would be “True.” But if the same check is done on option2 or 3, we will get “False.”</p>
   </div><!-- End panel 9 -->

   <button id=""class="btn_block accordion accordion"">10) innerHTML:</button>
   <div class="panel">
      <h2>10) innerHTML:</h2>
      <p>The last & final method is innerHTML, an interesting one. It’s supported on mostly every browser or platform. However, it’s a nonstandard element. 
      <br>
      Typically, it is used to access & write content inside XHTML elements. Following is a code to make you understand better.</p>
      <pre class="code_p">
      Var myContentHolder = document.getElementById(“abc”);
      myContentHolder.innerHTML = “&lt;p&gt; These are the most essential DOM methods in JavaScript&lt;/p&gt;”;
      </pre>
      <p>Now, the element on the page with id name “abc” will have the following content between its tags i.e., “These are the essential DOM methods in JavaScript.” Using innerHTML, we can read or append text directly without messy texts. </p>
   </div><!-- End panel 10 -->

   <button id="basic_button" class="btn_block accordion">Conclusion:</button>
   <div class="basic_code">
      <h2>Conclusion:</h2>
      These were Top 10 essential JS DOM methods a programmer should know. I have tried to cover a maximum of them with examples & simple explanation. And, the examples were pretty simple & easy to comprehend.
      <br>
      Whether you are a beginner or intermediate coder, these methods are powerful & useful. Even though there are libraries & platforms which do the needful behind the scenes, you should know these methods. 
      </div>
   <!-- End Basic Code -->

   <button class="btn_block accordion">11. querySelector() & querySelectorAll()</button>
   <div class="panel 11">
   <h2>11. querySelector() & querySelectorAll()</h2>
   <p>The <span class="itc">querySelector()</span> method returns the first element that matches a CSS selector.

   To return all matches (not only the first), use the <span class="itc">querySelectorAll()</span> instead.

   Both <span class="itc">querySelector()</span> and <span class="itc">querySelectorAll()</span> throw a SYNTAX_ERR exception if the selector(s) is invalid.</p>
   </div><!-- End panel 11 -->

   <button id="12" class="btn_block accordion">12. document.getElementsByClassName(name)</button>
   <div class="panel 12">
   <pre class="code_p">
      var myLinkCollection = document.getElementsByClassName(“abc”);
      for (i = 0; i < myLinkCollection.length; i++) {
         if (myLinkCollection[i].className == “std_class”) {
            myLinkCollection[i].onclick = function() {
                  this.style.backgroundColor = “#f00”;
            }
         }
      }
      </pre>
   </div><!-- End panel  12-->
</div>
      

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>

