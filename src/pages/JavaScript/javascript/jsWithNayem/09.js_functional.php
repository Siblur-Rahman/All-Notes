<!-- header -->

<?php include('../../common_header.php') ?>
<!-- style -->
<style>
.functional_active{
    background: #BB2966;
    line-height: 30px;
    color: white !important;
}
</style>

   <h1 class="center">JS Functional<span><a href="" target="_blank"> Details</a></span></h1>
<button id="basic_click">JS Functional</button>
   <div class="basic_div"><!-- Start basic div -->
      <h2>Javascript Functional Programming</h2>

      <button id="basic_button">Watch From Folder</button>
      <div class="basic_code">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/067.  What is Functional Programming in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      </div>
      <button><a href="https://youtu.be/mSESQG-ek8I" target="_blank">Watch on YouTube</a></button>
         
</div><!-- End basic div -->

<button id="toggle_b1">68. Pure Functions</button>
   <!-- Code_b1 -->
   <div class="code_b1">
      <h2>68. Pure Functions</h2>
      <h4>A Pure Function is a function (a block of code) that always returns the same result if the same arguments are passed. It does not depend on any state or data change during a program's execution. Rather, it only depends on its input arguments.</h4>
      <h4>examole</h4>
      <pre>
      function sqr(n){
    return n * n
   }
   console.log(sqr(3))
   console.log(sqr(7))
   console.log(sqr(8))
   console.log(sqr(10))
      </pre>
      <button id="toggle_1">Watch From Folder</button>
      <div class="code_1">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/068.  Pure Functions in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      </div>
      <!-- Youtube Button -->
      <button><a href="https://youtu.be/pOcNXZlhhMU" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b1 -->

<button id="toggle_b2">69. First Class Function</button>
   <div class="code_b2">
      <h2>JS First Class Function </h2>
      <pre>
      function add(a, b){
      return a+b
      }
      </pre>
      <h4>01. A function can be stored in a variable</h4>
      <pre>
      var sum = add
      console.log(sum(4, 5))
      console.log(typeof sum)
      </pre>
      <h4>02. A function can be stored in a Array</h4>
      <pre>
      var arr = []
      arr.push(add)
      console.log(arr)
      console.log(arr[0](5, 2))
      </pre>
      <h4>03. A function can be stored in a Object</h4>
      <pre>
      var obj = {
      sum: add
      }
      console.log(obj)
      console.log(obj.sum(7, 9))
      </pre>
      <h4>04. We can create a function as Need</h4>
      <pre>
      setTimeout(function(){
      console.log('I have created...') 
      }, 1000)
      </pre>
      <h4>5. We can Pass Function as an Arguments</h4>
      <h4>6. We can Return Function from Another Function</h4>
      <div class="mark">5 & 6 will Practice later</div>
      <button id="toggle_2">Watch From Folder</button>
      <div class="code_2">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/069.  First Class Function in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/xNtPY_RsEus" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b2 -->

<button id="toggle_b3">70. Higher Order Function</button>
   <!-- Code_b3 -->
   <div class="code_b3">
      <h2>JS Higher Order Function </h2>
      <h4>5. We can Pass Function as an Arguments</h4>
      <pre>
      function add(a, b){
      return a+b
      }
      function manipulate(a, b, func){
         var c = a+b
         var d = a-b

         function multiply(){
            var m = func(a, b)
            return c*d*m
         }
         return multiply

         or

         return function multiply(){
            var m = func(a, b)
            return c*d*m
         }
      }
      var multiply = manipulate(3, 4, add)
      console.log(multiply())
      </pre>

      <button id="toggle_3">Watch From Folder</button>
      <div class="code_3">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/070.  Higher Order Function in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/jkPB1jAJWfU" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b3 -->

<button id="toggle_b4">71. Closure First Look</button>
   <div class="code_b4">
      <h2>javascript Closure First Look </h2>
    <h4>we have to watch the video to understand the topic</h4>

      <button id="toggle_4">Watch From Folder</button>
      <div class="code_4">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/071.  Closure First Look in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/kVxsWPEzhAc" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b4 -->

<button id="toggle_b5">72. Callback Function </button>
   <div class="code_b5">
      <h2>Javascript Callback Function  </h2>
      <h4>we have to watch the video to understand the topic</h4>
   

      <button id="toggle_5">Watch From Folder</button>
      <div class="code_5">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/072.  Callback Function in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/m2JQ_RqzfXg" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b -->

<button id="toggle_b6">73. Foreach Implementation</button>
   <div class="code_b6">
      <h2>javascript Foreach Implementation </h2>
      <h3>We have to watch the video to understand the topic</h3>
      <pre>
   var arr=[1, 2, 3, 4, 5]

   arr.forEach(function(value, index, arr){
      console.log(value, index, arr)
   })

   var sum =0;
   arr.forEach(function(value, index, arr){
      sum+=value;
   })
   console.log(sum);
      </pre>

      <button id="toggle_6">Watch From Folder</button>
      <div class="code_6">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/073.  Foreach Implementation in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/1mItbWuvrMw" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b -->

<button id="toggle_b7">74. Map Function</button>
   <div class="code_b7">
      <h2>Javascript Map Function </h2>
      <h3>We have to watch the video to understand the topic</h3>
      <pre>
   var arr=[1, 2, 3]

   var sqrArr=arr.map(function(value){
      // return Math.random() * 100
      return value * value
   })
   console.log(arr)
   console.log(sqrArr)
      </pre>

      <button id="toggle_7">Watch From Folder</button>
      <div class="code_7">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/074.  Map Function in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/FWgyBeAu-vE" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b -->

<button id="toggle_b8">75. Filter Function</button>
   <div class="code_b8">
      <h2>Javascript Filter Function</h2>
      <h3>We have to watch the video to understand the topic</h3>
   <pre>
      var arr=[4, 8, 1, 3, 5, 6, 4, 3, 9]

   var filterArr1 = arr.filter(function(value){
      // return value % 2 == 0 
      // return value % 2 == 1 
      return value >4 
   })
   </pre>
      <button id="toggle_8">Watch From Folder</button>
      <div class="code_8">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/075.  Filter Function in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/w_FI5rfsehs" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b8 -->

<button id="toggle_b9">76. Reduce Function</button>
   <div class="code_b9">
      <h2>Javascript Reduce Function </h2>
      <h3>We have to watch the video to understand the topic</h3>

      <button id="toggle_9">Watch From Folder</button>
      <div class="code_9">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/076.  Reduce Function in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/YAvJVcVKwu8" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b9 -->

<button id="toggle_b10">77.Find and FindIndex Function</button>
   <div class="code_b10">
      <h2>Javascript Find and FindIndex Function</h2>
      

      <button id="toggle_10">Watch From Folder</button>
      <div class="code_10">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/077.  Find and FindIndex Function in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/PpfoZeXgaMk" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b10 -->

<button id="toggle_b11">78.Sort, Some and Every Function</button>
   <div class="code_b11">
      <h2>Javascript Sort, Some and Every Function</h2>
      

      <button id="toggle_11">Watch From Folder</button>
      <div class="code_11">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/078.  Sort_ Some and Every Function in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/IHjLft2UU_g" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b11 -->

<button id="toggle_b12">79.Return Function</button>
   <div class="code_b12">
      <h2>Javascript Return Function</h2>
      <h3>Exam-01</h3>
      <pre>
      function greet(msg){
    function greeting(name){
        return msg + ', ' + name + '!'
    }
    return greeting
   }

   var gm = greet('Goot Morning')
   var gn = greet('Goot Night')
   var hello = greet('Hello')

   var msg = gm('MS Rahman')
   console.log(msg)

   console.log(gn('Fateema'))

   console.log(hello('Farwah Ahmad'))
      </pre>
      <h3>Exam-02</h3>
      <pre>
      function base(b){
    return function(n){
        var result =1
        for(i = 1; i <= b; i++){
            result *= n
        }
        return result
    }
   }

   var base10 = base(10)

   console.log(base10(2))

   var base5 = base(5)

   console.log(base5(2))
   console.log(base5(3))
   console.log(base5(4))
   console.log(base5(5))
      </pre>

      <button id="toggle_12">Watch From Folder</button>
      <div class="code_12">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/079.  Return Function from Another Function in Javascript _ JS All You Need To Know _ JS Bangla(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/P-FFczi-giM" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b12 -->

<button id="toggle_b13">80.  Recursive Function</button>
   <div class="code_b13">
      <h2>Javascript Recursive Function </h2>
      <h3>Exam-01</h3>
      <pre>
         function sayHi(n){
    if(n == 0){
        return
    }
    console.log('Hi, I am Calling')
    sayHi(n-1)
   }

   sayHi(10)

   function sum(n){
      if(n == 1){
            return 1
      }
      return n + sum(n-1)
   }

   console.log(sum(5))

      </pre>
      <h3>Exam-02</h3>
      <pre>
   function fact(n){
      if(n == 1){
         return 1
      }

      return n * fact(n-1)
   }

   console.log(fact(5))
   console.log(fact(4))
   console.log(fact(3))
      </pre>
      <h3>Exam-03</h3>
      <pre>
   var arr =[1, 2, 3, 4, 5]

   function sumOfArry(arr, lastIndex){
      if(lastIndex < 0){
         return 0
      }
      return arr[lastIndex] + sumOfArry(arr, lastIndex-1)
   }

   console.log(sumOfArry(arr, arr.length-1))
      </pre>

      <button id="toggle_13">Watch From Folder</button>
      <div class="13">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/080.  Recursive Function in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/5eMlqhgb6i0" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b13 -->

<button id="toggle_b14">81.Currying in Javascript</button>
   <div class="code_b14">
      <h2>Javascript Currying in Javascript </h2>
      <h3>normal Function</h3>
      <pre>
      function add(a, b, c){
      return a + b + c
      }

      console.log (add(5, 10, 20))

      </pre>
      <h3>Curying Function</h3>
      <pre>
      function currying(a){
         return function (b){
            return function (c){
      return a + b + c
            }
         }
      }
      var result = currying(5)(10)(20)

      console.log(result)
      </pre>
      <button id="toggle_14">Watch From Folder</button>
      <div class="code_14">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/081.  Currying in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/Viw6rpxwZeM" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b14 -->

<button id="toggle_b15">82.Function Composition</button>
   <div class="code_b15">
      <h2>Function Composition</h2>
      <pre>
      function print(inp){
    console.log(inp)
   }
   function multiplyByFive(n){
      return n *5
   }
   function add(a, b){
      return a + b
   } 
   print(multiplyByFive(add(3, 5)))
      </pre>

      <button id="toggle_15">Watch From Folder</button>
      <div class="code_15">
      <video src="../../all_notes_videos/javascript/09.js_functional_67-82/082.  Function Composition in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/KMNNv2hK7S4" target="_blank">Watch on YouTube</a></button>
</div><!--End Code_b15 -->

<!-- footer -->
<?php include('../../footer.php') ?>
<script>

</script>
