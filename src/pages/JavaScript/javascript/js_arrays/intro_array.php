<style>
   .active_intro{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   </style>
   <!-- topics header -->
<?php include'./array_header.php'?>
<!--Start second-navbar -->
<div id="second-navbar">
   <a href="#intro">Intro</a>
   <a href="#create">Create</a>
   <a href="#concatenate">Concatenate</a>
   <a href="#find-out">Find out</a>
</div>
<!--End second-navbar -->
<div id="main_content"><!-- Start Main Content -->
   <span class="to_jump" id="intro"></span>
   <section class="border"><!--Start intro section -->
      <h3>JavaScript Array<span><a href="https://www.w3schools.com/js/js_arrays.asp" target="_blank"> Details</a></span></h3>
      <h4>An array is a special variable, which can hold more than one value:</h4>
   </section><!--End intro section -->

   <span class="to_jump" id="create"></span>
   <section class="border">
      <h4>Using an array literal is the easiest way to create a javascript.</h4>
      <h3 class="heading">Syntax:</h3>
      <div class="">
         <p class="code_p">const array_name = [item1, item2, ...];</p>
         Example: <br>
         const cars = ["Saab", "Volvo", "BMW"];
      </div>

      <p class = "heading" >Spaces and line breaks are not important. A declaration can span multiple lines:</h3>
      <div class="">
      <pre class = "code_p">
         Example :
         const cars = [
         "Saab",
         "Volvo",
         "BMW"
         ]; 
      </pre>
      </div>
      <h3 class = "heading" >You can also create an array, and then provide the elements:</h3>
      <div class="">
         <pre class = "code_p">
         Example
         const cars = [];
         cars[0]= "Saab";
         cars[1]= "Volvo";
         cars[2]= "BMW";
         </pre>
      </div>
      <h3 class = "heading" >Using the javascript Keyword new</h3>
      <div class="">
         <h4>The following example also creates an Array, and assigns values to it:</h4>
         <pre class = "code_p">
         const cars = new Array("Saab", "Volvo", "BMW");
         </pre>
      </div>
      <h3 class = "heading" >Array Declaration with <span class="text-danger">Array</span> constructor (043)</h3>
      <div class="code_p">
            var arr = Arrary(); //for emty Array <br>

            var arr2= Arrary(1, 2, 3);
      </div>
   </section><!-- End create topic -->
   <span class="to_jump" id=""></span>
   <section class="border">


   </section>

   <span class="to_jump" id="concatenate"></span>
   <section class="border">
      <h3 class="heading">Concatenate multiple arrays with Spread operator, array max</h3>
      <h3>The Spread Operator (...)<span class="itc"><a href="https://www.w3schools.com/howto/howto_js_spread_operator.asp" target="_blank"> Details</a></span></h3>
         <div class="mark">
            <h3>The Spread Operator</h3>
            The JavaScript spread operator (...) expands an iterable (like an array) into more elements.
            <br>
            This allows us to quickly copy all or parts of an existing array into another array:
         </div>  
         <div class="code_p">
         <h3>Example</h3>
         <pre>
         const arr1 = [1, 2, 3];
         const arr2 = [4, 5, 6];
         const arr3 = [7, 8, 9];

         const newArr = [...arr1, ...arr2, ...arr3];
         console.log(newArr)
         </pre>
         <div class="output">
         <h3>output</h3>
            <pre>
            [
               1, 2, 3, 4, 5,
               6, 7, 8, 9
               ]
            </pre>
         </div>
         </div>
         <div class="mark">
            The spread operator is often used to extract only what's needed from an array:<br>
         </div>
         <h3>Example</h3>
      <div class="code_p">
         <pre>
            const numbers = [1, 2, 3, 4, 5, 6];

            const [one, two, ...rest] = numbers;
            console.log(one);
            console.log(two);
            console.log(rest);
         </pre>
         <div class="output">
            <h4>output</h4>
            <pre>
            1
            2
            [ 3, 4, 5, 6 ]
            </pre>
         </div>
      </div>
      <h3 class="heading">create an new array from older array and add an element</h3>
      <div class="code_p">
      const array =[1, 2, 3, 4, 5, 6]
      <br>
      const newArray =[...array, 9]
      </div>
   </section>
   <span class="to_jump" id="find-out"></span>
   <section>
      <h3 class="heading">Find out highest Value from Array with Spread & Math.max() Methods (5:50)</h3>
         <h3>Example</h3>
      <div class="code_p">
         const numbers = [1, 2, 3, 4, 5, 6];
               <br> <br>
         const max = Math.max(...numbers)
         console.log(max)
         <h4>output: 6</h4>
      </div>

   </section>
</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
