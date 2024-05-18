
<?php include'./function_header.php'?>
<div id="main_content"><!-- Start Main Content -->

   <h2 class="center">JS Functions<span><a href="https://www.w3schools.com/js/js_functions.asp" target="_blank"> Details</a></span></h2>
   <div class="mark text-red-600">
   A JavaScript function is a block of code designed to perform a particular task.
   <br>

   A JavaScript function is executed when "something" invokes it (calls it).
   </div>
<button id="1" class="accordion">1. Suntax, declaration & Call</button>
<div class="panel 1">
   <h3>Syntax</h3>
   <pre class="code_p">
      function name(parameter1, parameter2, parameter3) {
   // code to be executed
   }
   </pre>
   <h4>Function declaration</h4>
   <pre class="code_p">
   function firstFun() {
    console.log("My First Function in Console log");
    document.getElementById("demo").innerHTML= "My First Function in innerHTML"+"<br>";  
    document.write("My First Function in Document");     
    }
   </pre>
   <h4>Calling Function</h4>
   <pre class="code_p">firstFun()</pre>
   <pre class="code_p">
   <span class="itc">1st Woay</span>
      function doubleIt (num){
         return num * 2
      };
      const result = doubleIt(15)
      console.log(result)

      <span class="itc">2nd Way</span>
      
      const func = function (num){
         return num * 2
      };
      const result = func(15);
      console.log(result);

      <span class="itc">3rd way </span>
      
      const func = function doubleIt (num){
         return num * 2
      };
      const result = func(15)
      console.log(result)
   </pre>
   </div>
<!-- End  panel 1-->
<button id="2" class="accordion ">2. Function Return</button>
<div class="panel 2">
   <pre class="code_p">
   function returnFun() {
         return 5+6
      }
      var returnCall = returnFun();
   console.log(returnCall)
   </pre>
</div><!-- End panel 2 -->

<button id="3" class="accordion">3. Parameters & Arguments</button>
<div class="panel 3">
   <div class="mark">
   Function parameters are listed inside the parentheses () in the function definition.

   Function arguments are the values received by the function when it is invoked.

   Inside the function, the arguments (the parameters) behave as local variables.
   </div>
   <pre class="code_p">
   function add(num1, num2){
    var result = num1 + num2;
    return result;
   }
   var sum = add(10, 30)

   console.log(sum)
   </pre>
</div><!-- End panel 3 -->

<button id="4" class="accordion">4. 19-1 When to use a function, use function inside a loop</button>
<div class="panel 4">
   
<button><a href="../../js_topics_video/019_1.php" target="_blank">Watch Video</a></button>
</div><!-- End panel 4 -->

<button id="5" class="accordion">5. 19-2 Again When to return from a function and from where.mp4</button>
<div class="panel 5">

<button><a href="../../js_topics_video/019_2.php" target="_blank">Watch Video</a></button>
</div><!-- End panel 5 -->

<button id="6" class="accordion">6. 19-3 Callback function and pass different function.mp4</button>
   <div class="panel 6">
      <h2 class="center">JavaScript Callbacks</h2>
      <h5>
      A callback is a function passed as an argument to another function <br>

   This technique allows a function to call another function <br>

   A callback function can run after another function has finished
      </h5>
   <h2>Example-1</h2>
   <pre class="code_p">
   function myFuntion(name, age, callBack){
      console.log("Hello ", name);
      console.log("Your age ", age);
      callBack()
   }
   function takeShower(){
      console.log("Take a shower")
   }
   function washHand(){
      console.log("Wash hand with soap")
   }
   // Clall Function

   myFuntion("Mintu", 20, takeShower);
   myFuntion("Jhuntu", 17, washHand);
   </pre>
   <h2>Example-2</h2>
   <pre class="code_p">
   let display=(some)=>console.log(some);
   let calculate=(num1, num2, callBack) => {
   let  sum = num1 + num2;

   if(callBack) callBack(sum);

   return sum;

   };

   calculate(5, 5, display);
   </pre>
   <button class="btn_block"><a href="./call_back_function_example.php" target="_blank">More Example</a></button>
   <button class=" accordion"><a href="../js_topics_video/019_3.php" target="_blank">Watch Video</a></button>
</div><!-- End panel  -->

<button id="7" class="accordion">7. 19-4 arguments and deal with unknown number of arguments</button>
<div class="panel 7">
   <h2>To under stand, it have to watch the video</h2>
   
   <button class="accordion"><a href="" target="_blank">Watch Video</a></button>
</div><!-- End panel  -->

<button id="8" class="accordion">8. 19-5 How to organize code inside a function</button>
<div class="panel 8">
   <h2>To under stand, it have to watch the video</h2>
   <button class="accordion"><a href="../js_topics_video/019_4.php" target="_blank">Watch Video</a></button>
</div><!-- End panel  -->

<button id="9" class="accordion">9. 23-3 Function default parameter for not provided values</button>
   <div class="panel 9">
   <h2>Old Way</h2>
   <pre class="code_p">
      function add(num1, num2){
      if(num2 == undefined){
         num2 = 0;
      }
      return num1 + num2;
   }
   const total = add(15);
   console.log(total);
   </pre>
   <h2>Current Way</h2>
   <pre class="code_p">
      function add(num1, num2){
      num2 = num2 || 0;
      return num1 + num2;
   }
   const total = add(15);
   console.log(total);
   </pre>
      <video src="../../all_notes_videos/js_videos/23/23-4 Template String, multiple line string.mp4" controls></video>
</div><!-- End panel 9 -->
<button class="accordion">Rest Parameters</button>
<div class="panel">
   <script>
      // function sum(...rest){
      //    let sum =0;
      //    for(let )

      // }
   </script>
</div>
<?php include'./arrow_function.php'?>
<?php include'./rest_parameter.php'?>



</div><!-- End Main Content -->
<!-- footer -->
<?php include('../../common_footer.php') ?>
