<p class="accordion">Array forEach() </p>
 <div class="panel">
    <h2>Array forEach() <span class="itc"><a href="https://www.w3schools.com/jsref/jsref_foreach.asp" target="_blank"> Details</a></span></h2>
          <div class="mark">
          The forEach() method calls a function for each element in an array. <br>
    
          The forEach() method is not executed for empty elements.
          </div>
          <h2>Syntax</h2>
          <div class="code_p">
          array.forEach(function(currentValue, index, arr), thisValue)
          </div>
          <h2>Examples</h2>
          <p class="accordion">01. forEach() calls a function for each element in an array:</p>
          <pre class="panel code_p">
          const numbers = [4, 6, 8, 9, 3];
          let text ="";
    
          numbers.forEach(myFunction)
          document.getElementById("demo-1").innerHTML = text;
             function myFunction(value, index, array){
                text += index + " :" + value +"&lt;br&gt;";
                document.getElementById("demo-2").innerHTML = array;
             }
          </pre>
          <p class="accordion">02. Compute the sum of the values in an array:</p>
          <pre class="panel code_p">
          const numbers = [4, 6, 7, 9];
                let sum = 0;
                numbers.forEach(myFunction);
                document.getElementById("demo").innerHTML = sum;
                function myFunction(value){
                   sum+=value;
                }
          </pre>
          <p class="accordion">03. Multiply the value of each element with 10:</p>
          <pre class="panel code_p">
          const numbers = [4, 6, 7, 9];
          numbers.forEach(myFunction);
          document.getElementById("demo").innerHTML = numbers;
    
          function myFunction(value, index, array){
             array[index] = value * 10;
          }
          </pre>
          <h2 class="accordion">We can call  Arrow function</h2>
          <pre class="panel code_p">
             let text = "";
             const fruits = ["apple", "orange", "cherry"];
             
             fruits.forEach((value, index, arr)=>{
                   text+= index+" : "+ value+""&lt;br&gt;"";
                })
             document.getElementById("demo").innerHTML = text;
    
             function myFunction(value, index, array){
                text +=index + " : " + value + "&lt;br&gt;";
             }
          </pre>
          <p class="accordion"></p>
          <div class="panel code_p">
             const fruits = ["apple", "orange", "cherry"];
                let text ="";
                
                document.getElementById("demo").innerHTML = text;
          </div>
          <p class="accordion"></p>
          <div class="panel code_p">
             
          </div>
          <p class="accordion"></p>
          <div class="panel code_p">
            
          </div>
    <?php include'./array_methods/foreach_exam.php'?> 
</div> <!-- End panel--> 
      <!-- <div class="code_p">
         <h3>sum<span id="demo"></span></h3>
      </div>
      <script>
            const fruits = ["apple", "orange", "cherry"];
            let text ="";
            fruits.forEach((value, index, arr)=>{
               text+= index+" : "+ value+"<br>";
            })
            document.getElementById("demo").innerHTML = text;

         </script> -->
      <!-- <button class="accordion"><a href="" target="_blank">watch video <span class="itc"></span> </a></button> -->
   