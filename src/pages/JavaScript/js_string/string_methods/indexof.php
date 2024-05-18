<button class="accordion itc">indexOf()</button>
<div class="panel">
   <h2>JavaScript String indexOf()<span class="itc"><a href="https://www.w3schools.com/jsref/jsref_indexof.asp"> Details</a></span></h2>
      <div class="mark">
         The indexOf() method returns the position of the first occurrence of a value in a string. <br>

         The indexOf() method returns -1 if the value is not found. <br>

         The indexOf() method is case sensitive.
      </div>
      <h2>Syntax</h2>
      <div class="code_p">
         string.indexOf(searchvalue, start)
      </div>
      <h2>Search a string for "welcome":</h2>
      <div class="code_p">
         const sentence ="We Love Our Country"; br
         console.log(sentence.indexOf("Our"))//8
      </div>
      <h2>Search a string for "Welcome":</h2>
      <div class="code_p">
         let text = "Hello world, welcome to the universe.";
         let result = text.indexOf("Welcome");
         console.log(result)//-1
      </div>
         <h2>Find the first occurrence of "e":</h2>
      <div class="code_p">
         let text = "Hello world, welcome to the universe.";<br>
         let result = text.indexOf("e");<br>
         console.log(result)//1
      </div>
         <h2>Find the first occurrence of "e", starting at position 5:</h2>
      <div class="code_p">
         let text = "Hello world, welcome to the universe.";<br>
         let result = text.indexOf("e", 5);<br>
         console.log(result)//14
      </div>
</div> <!--End panel -->