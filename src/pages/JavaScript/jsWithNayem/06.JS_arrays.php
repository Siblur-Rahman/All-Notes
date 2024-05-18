<!-- style -->
<style>
   .array_active{
    background: #000;
}
</style>
<!-- JSN_header -->

<?php include('./jsn_header.php') ?>
<!-- Start main Content-->
   <h1 class="center">Javascript Arrays<span><a href="https://www.w3schools.com/js/js_arrays.asp" target="_blank"> Details</a></span></h1>
   <button id="basic_click">Basic Div</button>
<div class="basic_div"><!-- Start Basic div -->
   <h4>An array is a special variable, which can hold more than one value:</h4>
   <h2>Creating an Array</h2>

   <h4>Using an array literal is the easiest way to create a javascript/06.js_array_42-49 Array.</h4>

   <pre>Syntax:
   const array_name = [item1, item2, ...];
   Example
   const cars = ["Saab", "Volvo", "BMW"];
   </pre>
   <h4>Spaces and line breaks are not important. A declaration can span multiple lines:</h4>
   <pre>
   Example
   const cars = [
  "Saab",
  "Volvo",
  "BMW"
   ]; 
   </pre>
   <h4>You can also create an array, and then provide the elements:</h4>
   <pre>
   Example
   const cars = [];
   cars[0]= "Saab";
   cars[1]= "Volvo";
   cars[2]= "BMW";
   </pre>
   <h2>Using the javascript Keyword new</h2>
   <h4>The following example also creates an Array, and assigns values to it:</h4>
   <pre>
   const cars = new Array("Saab", "Volvo", "BMW");
   </pre>
   <h2>Array Declaration with <span class="text-danger">Array</span> constructor (044)</h2>
   <pre>
   var arr = Arrary();

   var arr2= Arrary(1, 2, 3);
   </pre>

</div><!-- End Basic div -->
<button id="toggle_b1">length-43</button>
<pre class="code_b1">
   <h2>The length Property (Nayeem-043)</h2>)
   The length property of an array returns the length of 
   an array (the number of array elements).

   const fruits = ["Banana", "Orange", "Apple", "Mango"];

   let size = fruits.length;
   document.getElementById("demo").innerHTML = size;

   or
   console.log(fruits.length)

   <video src="../../all_notes_videos/javascript/06.js_array_42-49/043. JS Array Declaration _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   <h2>(Nayeem-043)</h2>
</pre>

<!-- Looping Array Elements -->
<button id="toggle_b2">Looping/traverse Array-44</button>
<pre class="code_b2">
   <h2>Looping Array Elements</h2>
   <h1>Javascript Arrays</h1>
   <h2>Looping/traverse an Array</h2>
   <h4>One way to loop through an array, is using a for loop:</h4>
   <button id="toggle_1">Code-1</button>
   <pre class="code_1">
      const fruits = ["Banana", "Orange", "Apple", "Mango"];
      let fLen = fruits.length;

      let text = "&lt;ul&gt;";
      for (let i = 0; i &lt; fLen; i++) {
      text += "&lt;li&gt;" + fruits[i] + "&lt;/li&gt;";
      }
      text += "&lt;/ul&gt;";

      document.getElementById("demo").innerHTML = text;
   </pre>
   <pre class="code_2">
      
   </pre>
</pre>
<!-- B3 -->
<pre class="code_b3">
   <h2>Array Traversing (044)</h2>
   <button id="toggle_3">Code-1</button>
   <pre class="code_3">
   var arr=[2, 5, 8, 9];

   console.log(arr);
   for(var i=0; i&lt;arr.length; i++){
      console.log(arr[i])
   };
   </pre>
   <video src="../../all_notes_videos/javascript/06.js_array_42-49/044. JS Array Traversing _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   <h2>(Nayeem-044)</h2>
</pre>
<!-- Array.forEach b4 -->
<!-- <pre class="code_b4">
   <h2>Array.forEach()</h2>
   <h1>javascript Arrays</h1>
   <h2>The forEach() Method</h2>

   <p>Call a function for each array element:</p>

   <p id="demo1"></p>

   <script>
   const fruits1 = ["Banana", "Orange", "Apple", "Mango"];

   let text1 = "<ul>";
   fruits.forEach(myFunction);
   text1 += "</ul>";

   document.getElementById("demo1").innerHTML = text;

   function myFunction(value) {
   text1 += "<li>" + value + "</li>";
   } 
   </script>
      <button id="toggle_2">Code-2</button>
      <pre class="code_2">
      const fruits1 = ["Banana", "Orange", "Apple", "Mango"];

      let text1 = "&lt;ul&gt;";
      fruits.forEach(myFunction);
      text1 += "&lt;/ul&gt;";

      document.getElementById("demo1").innerHTML = text;

      function myFunction(value) {
      text1 += "&lt;li&gt;" + value + "&lt;/li&gt;";
      } 
      </pre>
</pre> -->

<!-- B4 -->
<button id="toggle_b4">Insert, Remove & Replace</button>
<pre class="code_b4">
   <button id="toggle_4">Code-4</button>
   <h2>Insert, Remove & Replace <a href="https://www.w3schools.com/js/js_array_methods.asp" target="_blank">Details</a></h2>
   <pre class="code_4">
      
   </pre>
   <video src="../../all_notes_videos/javascript/06.js_array_42-49/045. Array Insert Remove and Replace _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   (Nayem-045)
</pre>
<!-- B5 -->
<button id="toggle_b5">Search Value</button>
<pre class="code_b5">
   <h2>Search Value<a href="" target="_blank"></a></h2>

   <button id="toggle_5">Code-5</button>
   <pre class="code_5">
      
   </pre>
   <video src="../../all_notes_videos/javascript/06.js_array_42-49/046. JS Search Value in Array _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   <h2>Nayeem-046</h2>
</pre>

<!-- B6 -->
<button id="toggle_b6">Multidimensional Array</button>
<pre class="code_b6">
<h2>Multidimensional Array <a href="" target="_blank"></a></h2>

   <button id="toggle_6">Code-6</button>
   <pre class="code_6">
      
   </pre>
   <video src="../../all_notes_videos/javascript/06.js_array_42-49/047. Multidimensional Array _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   <h2>Nayeem-046</h2>
</pre>

<!-- B7 -->
<button id="toggle_b7">Reversing an Array</button>
<pre class="code_b7">
 <h2>Reversing an Array<a href="https://www.w3schools.com/js/js_array_sort.asp" target="_blank"></a></h2>

   <button id="toggle_7">Code-</button>
   <pre class="code_7">
      
   </pre>
   <video src="../../all_notes_videos/javascript/06.js_array_42-49/048. JS Reverse An Array _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
</pre>

<!-- B8 Array Methods-->
<div class="code_b8">
<h2>Array Methods <a href="https://www.w3schools.com/js/js_array_methods.asp" target="_blank">Details</a></h2>
<h4>
   <p class="text-danger" id="toggle_9">09-length : </p><p class="code_9"> -arr.length;</p><br>
    <p class="text-danger" id="toggle_10">10-toString() : </p><p class="code_10"> -arr.toString();</p><br>
    <p class="text-danger" id="toggle_11">11-pop(): </p><p class="code_11"></p><br>
    <p class="text-danger" id="toggle_12">12-push() : </p><p class="code_12"></p><br>
    <p class="text-danger" id="toggle_13">13-shift() : </p><p class="code_13"></p><br>
    <p class="text-danger" id="toggle_14">14-unshift() : </p><p class="code_14"></p><br>
    <p class="text-danger" id="toggle_15">15-join() : </p><p class="code_15">-</p><br>
    <p class="text-danger" id="toggle_16">16-concat() : </p><p class="code_16">-arr1.concat(arr2);<br></p><br>
    <p class="text-danger" id="toggle_17">17-delete() : </p><p class="code_17">-</p><br>
    <p class="text-danger" id="toggle_18">18-flat() : </p><p class="code_18">-</p><br>
    <p class="text-danger" id="toggle_19">19-splice() : </p><p class="code_19">-</p><br>
    <p class="text-danger" id="toggle_20">20- isArray(odj) <a href="https://www.w3schools.com/jsref/jsref_isarray.asp" target="_blank"> Details</a> : </p><p class="code_20">-isArray()</p><br>
    <p class="text-danger" id="toggle_21">21-Array.from()  <a href="https://www.w3schools.com/jsref/jsref_from.asp" target="_blank"> Details</a> : </p><p class="code_2">-Array.from(object, mapFunction, thisValue)</p><br>
    <p class="text-danger" id="toggle_2">2-  <a href="" target="_blank"> Details</a> : </p><p class="code_2">-</p><br>
    <p class="text-danger" id="toggle_2">2-  <a href="" target="_blank"> Details</a> : </p><p class="code_2">-</p><br>
    <p class="text-danger" id="toggle_2">2-  <a href="" target="_blank"> Details</a> : </p><p class="code_2">-</p><br>
    <p class="text-danger" id="toggle_2">2-  <a href="" target="_blank"> Details</a> : </p><p class="code_2">-</p><br>
   </h4>

   <button id="toggle_8">Code-8</button>
   <pre class="code_8">

      
   </pre>
   <video src="../../all_notes_videos/javascript/06.js_array_42-49/049. JS Array Methods _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   <h2>Nayeem-049</h2>
</div>

<!-- B -->
<!-- <pre class="code_b">
<h2>Topic <a href="" target="_blank"></a></h2>

   <button id="toggle_">Code-</button>
   <pre class="code_">
      
   </pre>
   <video src="../../all_notes_videos/javascript/06.js_array_42-49" width="90%" height="400px" controls ></video>
</pre> -->

<!-- B -->
<!-- <pre class="code_b">
<h2>Topic <a href="" target="_blank"></a></h2>

   <button id="toggle_">Code-</button>
   <pre class="code_">
      
   </pre>
   <video src="../../all_notes_videos/javascript/06.js_array_42-49" width="90%" height="400px" controls ></video>
</pre> -->


    <div class="code_used"><!-- start code used -->
    <h4><?php include'042-49.js.php' ?></h4>
      
    </div><!-- end code used -->
    <!-- End main Content-->

<!-- footer -->
<?php include('../../footer.php') ?>
<script>

</script>
