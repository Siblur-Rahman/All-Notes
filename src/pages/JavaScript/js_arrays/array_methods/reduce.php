<h2>JavaScript Array reduce()<span class="itc"><a href="https://www.w3schools.com/jsref/jsref_reduce.asp" target="_blank"> Details</a></span></h2>
      <h2>Array reduce()</h2>
      <div class="mark">
      according to mdn, A value to which previousValue is initialized the first time the callback is called. <br>
      If initialValue is specified, that also causes currentValue to be initialized to the first value in the array. <br>
      If initialValue is not specified, previousValue is initialized to the first value in the array, and currentValue is initialized to the second value in the array.
      </div>
      <h2>Syntax</h2>
      <div class="code_p">
         array.reduce(function(total, currentValue, currentIndex, arr), initialValue)
      </div>
      <h2>Example</h2>
      <div id="reduce-code-1" class="output">

      </div>
      <script>
         const reduceCode_1 =`const numbers = [8, 2, 3, 4, 5];
         let sum  = numbers.reduce((total, num, i)=> {return total + num});
         console.log(sum); //22`; 
         document.getElementById('reduce-code-1').innerText = reduceCode_1; 
</script> 