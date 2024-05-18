<p class="accordion">Array filter <span class="itc"></span></span></p>
   <div class="panel">
      <h2>Description</h2>
      <div class="mark">
      The filter() method creates a new array filled with elements that pass a test provided by a function. <br>
      <br>
      The filter() method does not execute the function for empty elements.
      <br>
      The filter() method does not change the original array.
      </div>
      <h2>Syntax</h2>
      <div class="code_p">
      array.filter(function(currentValue, index, arr), thisValue)
      </div>
      <div class="mark"></div>
      
      <h2>Example</h2>
      <p class="code_p">
      const numbers = [2, 3, 5, 8, 9]; <br>

      const bigger = numbers.filter(x => x < 8); <br>
      console.log(bigger)
      </p>
      <button class="btn_block itc"><a href="../js_topics_video/024_5.php" target="_blank">watch video 9:51</a></button>
      
      <h2>Example</h2>
      <pre class="code_p">
         const student =[ <br>
         {id: 1, name: "Sunny"}, <br>
         {id: 2, name: "Shuv"}, <br>
         {id: 3, name: "Hohel"}, <br>
         {id: 4, name: "Mishu"} <br>
         ] <br>
         <br>
         const id = student.filter(s =>s.id >2) <br>
         console.log(id)
      </pre>
      <div class="output">
         <h2>output</h2>
         <pre>
            [ { id: 3, name: 'Hohel' }, { id: 4, name: 'Mishu' } ]
         </pre>
      </div>
      <button class="btn_block itc"><a href="../js_topics_video/024_6.php" target="_blank">watch video 24_6</a></button>
      <h2>Example</h2>
      <p class="code">
      const numbers = [45, 4, 9, 16, 25];

      const result = numbers.filter(function(value){
         return value > 4
      })
      console.log(result)//[ 45, 9, 16, 25 ]
      </p>
      <button><a href="./array_methods/filter_example.html">Filter Dynamically</a></button>
   </div><!--End panel 4-->