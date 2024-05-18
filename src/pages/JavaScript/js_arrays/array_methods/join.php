<p id="" class="accordion">Array join()</p>
<div class="panel">
   <h2>Array join()<span class="itc"><a href="https://www.w3schools.com/jsref/jsref_join.asp"> Details</a></span></h2>
      <div class="mark">
         The join() method returns an array as a string. <br>
         
         The join() method does not change the original array. <br>
         
         Any separator can be specified. The default is comma (,).
      </div>
      <p class="mark">It behaves just like toString(), but in addition you can specify the separator:</p>
      <h2>Syntax</h2>
      <div class="code_p">
       array.join(separator)
      </div>
         <h2>Example</h2>
         <div class="code_p">
            const numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9]
            const together1 = numbers.join(""); //123456789 <br>
            const together2 = numbers.join(" "); //1 2 3 4 5 6 7 8 9<br>
            const together3 = numbers.join(","); //1,2,3,4,5,6,7,8,9 <br>
            const together4 = numbers.join(", This is "); //1, This is 2, This is 3, This is 4, This is 5, This is 6, This is 7, This is 8, This is 9 <br>
            console.log(together1) <br>
            console.log(together2) <br>
            console.log(together3) <br>
            console.log(together4) 
         </div>
   </div><!--End panel-->