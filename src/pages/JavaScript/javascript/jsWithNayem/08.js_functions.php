<!-- common_header -->

<?php include('../../common_header.php') ?>
<!-- style -->
<style>
/* .js_active{
    background: #786363;
    line-height: 30px;
    color: white !important;
} */
.func_active{
    background: #BB2966;
    line-height: 30px;
    color: white !important;
}
/* .basic_dropdown{
   display: block !important;
} */
.to_jump{
   padding-top: 110px;
}
p{
   display: inline-block;
}
</style>

<!-- left-bar -->

   <?php include('../left_bar.php') ?>

<!-- right-bar -->

   <?php include('../right_bar.php') ?>

<div id="main_content"><!-- Start main Content-->
   <h1 class="center"><span><a href="" target="_blank"> Details</a></span></h1>
<button id="basic_click">Function</button>
<div class="basic_div"><!-- Start basic div -->
   <h2>58. JavaScript Functions</h2>
   <h4>A JavaScript function is a block of code designed to perform a particular task. <br>

   A JavaScript function is executed when "something" invokes it (calls it).</h4>
   <pre class="s_code">
   JavaScript Function Syntax

      function name(parameter1, parameter2, parameter3) {
      // code to be executed
      }
            </pre>

         <video src="../../all_notes_videos/javascript/08.js_function_58-66/058.  What is Function in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>  
</div><!-- End basic div -->
<button id="toggle_b1">59. Defining a Function</button>
   <!-- Code_b -->
   <div class="code_b1">
   <h2>Defining a Function </h2>
   <pre>
   function add(){
    var a =10
    var b =20
    console.log(a+b)
   }
   function sub(){
      var a =10
      var b =20
      console.log(a-b)
   }
   
   </pre>
   
   <video src="../../all_notes_videos/javascript/08.js_function_58-66/059.  Defining a Function in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   <h2>(Nayeem-59)</h2>
</div><!--End Code_b1 -->
<button id="toggle_b2">60. Invoking/calling a Function</button>
   <!-- Code_b -->
   <div class="code_b2">
         <h2>Invoking a Function </h2>
      <pre>
         function add(){
      var a =10
      var b =20
      console.log(a+b)
      }
      function sub(){
         var a =10
         var b =20
         console.log(a-b)
      }
      add()

      for(var i=1; i<=10; i++){
         sub()
      }
      </pre>
         <video src="../../all_notes_videos/javascript/08.js_function_58-66/060.  Invoking a Function in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
         <h2>(Nayeem-60)</h2>
</div><!--End Code_b2 -->
<button id="toggle_b3">61. Arguments and Parameters</button>
   <!-- Code_b3 -->
   <div class="code_b3">
         <h2>Arguments and Parameters</h2>
         <h3>Function parameters are the names listed in the function definition.</h3>
         <H3>Function arguments are the real values passed to (and received by) the function.</H3>
         <H3>Example</H3>
         <pre>
         function functionName(parameter1, parameter2, parameter3....) {
            // code to be executed
            }

            functionName(argument1, argument2, argument3.....)


            function add(a, b){
               var result = a+b
               console.log(result)
            }
            function sub(a, b){
               var result = a-b
               console.log(result)
            }

            add(200, 300)

            sub(300, 150)
         </pre>
         <pre>
         var arr1 = [1, 2, 3, 4]
      var arr2 = [5, 6, 7, 8]
      var arr3 = [6, 7, 8 ,9]

      var sum1=0
      for(var i = 0; i&lt;arr1.length; i++){
         sum1 += arr1[i]
      }
      console.log(sum1)

      var sum2=0
      for(var i = 0; i&lt;arr2.length; i++){
         sum2 += arr2[i]
      }
      console.log(sum2)

      var sum3=0
      for(var i = 0; i&lt;arr3.length; i++){
         sum3 += arr3[i]
      }
      console.log(sum3)

      function sumOfArray(arr){
         var sum =0;
         for(var i = 0; i&lt;arr.length; i++){
            sum +=arr[i]
         }
         console.log(sum)
      }
      sumOfArray(arr1)
      sumOfArray(arr2)
      sumOfArray(arr3)
         </pre>
         <iframe width="560" height="315" src="https://www.youtube.com/embed/YTC2OOYr8fA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         <video src="../../all_notes_videos/javascript/08.js_function_58-66/061.  Function Arguments and Parameters in Javascript _ JS All You Need To Know _ JS Bangla Tutorial(720P_HD).mp4" width="90%" height="400px" controls ></video>
         <h2>(Nayeem-61)</h2>
</div><!--End Code_b3 -->
<button id="toggle_b4">62. Argument Object</button>
   <!-- Code_b -->
<div class="code_b4">
      <h2>JS Argument Object </h2>
      <pre>
      function test(){
    console.log(arguments)

    for(var i = 0; i &lt; arguments.length; i++)
    console.log(arguments[i])
   }
   test(10, 40, 70)
      </pre>
      <pre>
      function test2(){
   var sum =0;
   for(var i = 0; i < arguments.length; i++){
    sum += arguments[i]
   }
   console.log(sum)
   }
   test2(1, 2, 3, 4,5, 6, 7)
      </pre>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/pQJf2PY-8Ls" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <video src="../../all_notes_videos/javascript/08.js_function_58-66/062.  Argument Object in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      <h2>(Nayeem-62)</h2>
</div><!--End Code_b4 -->
<button id="toggle_b5">63. Return Something</button>
   <!-- Code_b5 -->
   <div class="code_b5">
      <h2>Return Something</h2>
      <pre>
      function person(name, email){
         return {
            name : name,
            email : email
         }
         }
         var p1 = person('MS Rahman', 'msrahman048@gmail.com')
         console.log(p1)
      </pre>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/YUuklJ8koCI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <video src="../../all_notes_videos/javascript/08.js_function_58-66/063.  Return Something from a Function in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      <h2>(Nayeem-63)</h2>
</div><!--End Code_b5 --> 
<button id="toggle_b6">64. Function Expression</button>
   <!-- Code_b6 -->
   <div class="code_b6">
      <h2>Function Expression</h2>
      <pre>
         var addition = function(a, b){
      return a + b
      }
      console.log(addition(10, 10))
      var another = addition
      console.log(another(30, 20))
      </pre>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/MMTLMVWKzi8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <video src="../../all_notes_videos/javascript/08.js_function_58-66/064.  Function Expression in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      <h2>(Nayeem-64)</h2>
</div><!--End Code_b6 -->
<button id="toggle_b7">65. Inner Function</button>
   <!-- Code_b -->
   <div class="code_b7">
      <h2>Inner Function </h2>
   <pre> 
   function something(greet, name){
      function sayHi(){
         console.log(greet, name)
      }
      sayHi()
   }
   something('Good Morning,', 'MS Rahman')

   function greeting(greet, name){
      function getFirstName(){
         if(name){
               return name.split(' ')[0]
         }else{
               return ''
         }
      }
      var message = greet +' '+ getFirstName()
         console.log(message)
   }
   greeting('Good Morning,', 'MS Rahman')
   </pre>

      <iframe width="560" height="315" src="https://www.youtube.com/embed/xyu7o21xj1w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <video src="../../all_notes_videos/javascript/08.js_function_58-66/065.  Inner Function in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      <h2>(Nayeem-65)</h2>
</div><!--End Code_b7 -->
<button id="toggle_b8">66. Function Scoping</button>
   <div class="code_b8">
      <h2>66. Function Scoping</h2>
         <pre>It Have To Watch</pre>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/y2cT2E2u_Mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <video src="../../all_notes_videos/javascript/08.js_function_58-66/066.  Function Scoping in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      <h2>(Nayeem-0)</h2>
</div><!--End Code_b8 -->
</div><!-- End main Content-->

<!-- footer -->
<?php include('../../footer.php') ?>
<script>

</script>
