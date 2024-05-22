<button class="btn_block accordion itc">String substr</button>
<div class="panel">
   <h2>JavaScript String substr()<span class="itc"><a href="https://www.w3schools.com/jsref/jsref_substr.asp"> Details</a></span></h2>
      <div class="mark">
         The substr() method extracts a part of a string. <br>

         The substr() method begins at a specified position, and returns a specified number of characters. <br>

         The substr() method does not change the original string. <br>

         To extract characters from the end of the string, use a negative start position.
      </div>
      <h2>Syntax</h2>
      <div class="code_p">
         string.substr(start, length)
      </div>
      <h2>Extract a substring from text:</h2>
      <div class="code_p">
         let text = "Hello world, welcome to the universe."; <br>
         let result = text.substr(1, 4); <br>
         console.log(result)//ello
      </div>
      <h2>Start at position 2:</h2>
      <div class="code_p">
         let text = "Hello world, welcome to the universe."; <br>
         let result = text.substr(6); <br>
         console.log(result)//world, welcome to the universe.
      </div>
         
         <pre>
            
         </pre>
      <button class="btn_block accordion itc"><a href="" target="_blank">watch video <span class="itc"></span> </a></button>
</div> <!--End panel -->