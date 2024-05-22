
      <h2>Example</h2>
      <pre class="code_p">
      const number = [3, 5, 7, 9];

      const square1 = number.map(function(element){
         return element * element;
      })
      console.log(square1);

      const square2 = element =>element * element;
      const result = number.map(square2)
      console.log(result)

      const square3 = number.map(element =>element * element);
      console.log(square3)

      const square4 = x => x * x;
      const result2 = number.map(square4);
      console.log(result2);

      const square5 = number.map(x => x * x)
      console.log(square5)
      </pre>
      <div class="output">
         <h4>output</h4>
         [ 9, 25, 49, 81 ]
      </div>
      <h2>Example</h2>
      <pre class="code_p">
      const number = [3, 5, 7, 9];

      number.map(function square(element, index, array){
         console.log(element, index, array);
      })
      </pre>
      <div class="output">
         <h2>output</h2>
         <pre>
         3 0 [ 3, 5, 7, 9 ]
         5 1 [ 3, 5, 7, 9 ]
         7 2 [ 3, 5, 7, 9 ]
         9 3 [ 3, 5, 7, 9 ]
         </pre>
      </div>
      <button class="btn_block itc"><a href="../js_topics_video/024_5.php" target="_blank">watch video 24_5</a></button>
      <h2>Apply map on array of Objects</h2>
      <h2>Example</h2>
      <pre class="code_p">
      const student =[ <br>
      {id: 1, name: "Sunny"}, <br>
      {id: 2, name: "Shuv"}, <br>
      {id: 3, name: "Hohel"}, <br>
      {id: 4, name: "Mishu"} <br>
      ] <br>
      const names = student.map(s =>s.name) <br>
      console.log(names) <br>
      const id = student.map(s =>s.id) <br>
      console.log(id)
      </pre>
      <div class="output">
         <h2>output</h2>
         <pre>
         [ 'Sunny', 'Shuv', 'Hohel', 'Mishu' ]
         [ 1, 2, 3, 4 ]
         </pre>
      </div>
      <!-- <button class="btn_block itc"><a href="../js_topics_video/024_6.php" target="_blank">watch video 24_6</a></button> -->
