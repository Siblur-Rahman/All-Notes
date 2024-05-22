<button class="btn_block accordion itc">substring()</button>
<div class="panel">
   <h2><span class="itc"><a href=""> Details</a></span></h2>
      <div class="mark">
      The substring() method extracts characters, between two indices (positions), from a string, and returns the substring. <br>

      The substring() method extracts characters from start to end (exclusive). <br>

      The substring() method does not change the original string. <br>

      If start is greater than end, arguments are swapped: (4, 1) = (1, 4). <br>

      Start or end values less than 0, are treated as 0.
      </div>
      <h2>Syntax</h2>
      <div class="code_p">
       string.substring(start, end)
      </div>
      substring() is similar to slice(). <br>

      <div class="code_p">
      var text ="0123456789"; <br>

      console.log(text.substring(2, 5));

            <h4 class="itc">Output: 234</h4>
      </div>

      The difference is that start and end values less than 0 are treated as 0 in substring().
      <h2>Example</h2>
      <div class="code_p">
            var text ="0123456789"; <br>

            console.log(text.substring(-2, 5));

            <h4 class="itc">Output: 01234</h4>
      </div>
      If you omit the second parameter, substring() will slice out the rest of the string.

</div> <!--End panel -->