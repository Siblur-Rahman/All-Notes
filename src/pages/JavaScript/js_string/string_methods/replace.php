<button class="btn_block accordion itc">replace()</button>
<div class="panel">
   <h2>JavaScript String replace()<span class="itc"><a href="https://www.w3schools.com/jsref/jsref_replace.asp"> Details</a></span></h2>
      <div class="mark">
      The replace() method replaces a specified value with another value in a string.

      The replace() method searches a string for a value or a regular expression. <br>

      The replace() method returns a new string with the value(s) replaced. <br>

      The replace() method does not change the original string.
      </div>
      <h2>Syntax</h2>
      <div class="code_p">
      
      </div>
      <div class="mark">
      <h2>Note</h2>
      The replace() method does not change the string it is called on. <br>

      The replace() method returns a new string. <br>

      The replace() method replaces only the first match <br>

      If you want to replace all matches, use a regular expression with the /g flag set. See examples below.
      </div>
      <h2>Replace universe</h2>
      <div class="code_p">
      let text = "Hello world, welcome to the universe.";
      let result = text.replace("universe", "Creation");
      console.log(result)//Hello world, welcome to the Creation.
      </div>

      <div class="code_p">
         
         </div>
</div> <!--End panel -->