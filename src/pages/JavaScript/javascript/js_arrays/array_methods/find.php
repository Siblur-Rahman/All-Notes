
<p id="" class="accordion">Array find() </p>
   <div class="panel">
      <h2>Array splice()<a href=""> Details</a></h2>
      <div class="mark">
      The find() method returns the value of the first element that passes a test. <br>

      The find() method executes a function for each array element. <br>

      The find() method returns undefined if no elements are found. <br>

      The find() method does not execute the function for empty elements. <br>

      The find() method does not change the original array.
      </div>
      <h2>Syntax</h2>
      <div class="code_p">
      array.find(function(currentValue, index, arr),thisValue)
      </div>
      <h2>Example</h2>
      <div class="code_p">
         const student =[ <br>
         {id: 1, name: "Sunny"}, <br>
         {id: 2, name: "Shuv"}, <br>
         {id: 3, name: "Hohel"}, <br>
         {id: 4, name: "Mishu"} <br>
         ] <br>
         
         const id = student.find(s =>s.id >2) <br>
         console.log(id)
      </div>
      <div class="output">
         <h2>output</h2>
         { id: 3, name: 'Hohel' }
      </div>
      <div class="code_p">
         
         </div>
         
         <pre>
            
         </pre>
      <button class="btn_block itc"><a href="../js_topics_video/024_6.php" target="_blank">watch video <span class="itc">24_6</span> 5:28</a></button>
      <button><a href="./find_example.html">Find Dynamically</a></button>
   </div><!--End panel-->