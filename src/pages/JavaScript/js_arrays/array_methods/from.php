<p class="accordion">Array from()</p>
<div class="panel">
   <h2>Array.from ()<span class="itc"><a href="https://www.w3schools.com/jsref/jsref_from.asp" target="_blank"> Details on W3School</a></span></h2>
   <h2>Array.from ()<span class="itc"><a href="https://www.freecodecamp.org/news/javascript-range-create-an-array-of-numbers-with-the-from-method/#:~:text=from()%20method%20is%20a,object%20with%20a%20length%20property." target="_blank"> Details on freeCodeCamp</a></span></h2>
      <div class="mark">
      The <span class="itc">Array.from()</span> method is a static method of the Array object in JavaScript ES6. It creates a new, shallow-copied Array instance from an array-like or iterable object like map and set.
      </div>
      <h2>Syntax</h2>
      <div class="code_p">
      
      </div>
      <h5>Create an array from a string:</h5>
      <div class="code_p">
      let name ="SIBLUR RAHMAN" <br>
          <br>
      let myName = Array.from(name) <br>
      console.log(myName) <br>
     // ['S', 'I', 'B', 'L','U', 'R', ' ', 'R','A', 'H', 'M', 'A',
'N']
      </div>
      <h5>return an array from any object with a length property that specifies the number of elements in the object.</h5>
      <div class="code_p">
      let arrayLike = {0: 10, 1: 20, 2: 30, length: 3};  <br>
      let newArray = Array.from(arrayLike);  <br>
         <br>
      console.log(newArray); // [ 10, 20, 30]
      </div>
      <h5>I can also introduce the map function that gets called for each element. For example, if I want to manipulate each array item by maybe multiplying each with a specific number:</h5>
      <div class="code_p">
      let arrayLike = {0: 10, 1: 20, 2: 30,  length: 3};<br>
      let newArray = Array.from(arrayLike, x => x * 2);<br>
         <br>
      console.log(newArray); // [20, 40, 60 ]
      </div>
      
      <h5>The Array.from() method makes it possible for I to create a sequence of numbers using the map function:</h5>
      <div class="code_p">
      let arrayLike = {length: 4};
      let newArray = Array.from(arrayLike, (value, index)=>index);
      or
      let newArray = Array.from(arrayLike, ({length:4}, index)=>index);

      console.log(newArray);//[ 0, 1, 2, 3 ]
      </div>
      <h2></h2>
      <div class="code_p">
 
      </div>
      <h2></h2>
      <div class="code_p">
 
      </div>

</div><!--End panel -->