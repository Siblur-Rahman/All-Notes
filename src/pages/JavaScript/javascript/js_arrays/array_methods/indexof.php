<p class="accordion">Array indexOf() </p>
<div class="panel">
   
   <h2>array.indexOf() <span class="itc"><a href="https://www.w3schools.com/jsref/jsref_indexof_array.asp"> Details</a></span></h2>
   <h2 class="accordion">Syntax</h2>
      <div class="code_p panel">
         array.indexOf(item, start)
      </div>
      <div class="mark">
      <p class="accordion">The indexOf() method returns the first index (position) of a specified value.</p>
      <div class="panel">
         <h5>Find the first index of "Apple":</h5>
         <div class="code_p">
            const fruits = ["Banana", "Orange","watermelon", "Apple", "Mango", "Banana"]; <br>
            let index = fruits.indexOf("Banana"); <br>
            document.getElementById("demo").innerHTML = index; //0 
         </div>
      </div>
      <p class="accordion">The indexOf() method returns -1 if the value is not found.</p>
      <div class="panel">
         <div class="code_p">
            const fruits = ["Banana", "Orange", "watermelon", "Apple", "Mango" ,]; <br>
            let index = fruits.indexOf("Guava", 3); <br>
            document.getElementById("demo").innerHTML = index; //-1
         </div>
      </div>
      <p class="accordion">The indexOf() method starts at a specified index and searches from left to right.</p>
      <div class="panel">
         <h5>Start at index 3:</h5>
         <div class="code_p">
            const fruits = ["Banana", "Orange", "watermelon", "Apple", "Mango",]; <br>
            let index = fruits.indexOf("Apple", 3); <br>
            document.getElementById("demo").innerHTML = index; //3
         </div>
      </div>

      

      By default the search starts at the first element and ends at the last. <br>

      <p class="accordion">Negative start values counts from the last element (but still searches from left to right).</p>
      <div class="panel">
         <div class="code_p">
            const number = [0, 1, 2, 3, 4, 5, 6];
            let index = number.indexOf(3, -4);

            document.getElementById("demo").innerHTML = index; // 3
         </div>
      </div>
      </div>
</div> <!-- End panel-->

      <!-- <h5></h5>
      <div class="code_p">
         
      </div>

      <h5></h5>
      <div class="code_p">
         
      </div>

      <h5></h5>
      <div class="code_p">
         <h2>output: <span id="demo"></span></h2>
      </div>
<script>



</script> -->