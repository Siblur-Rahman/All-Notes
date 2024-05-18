<p id="" class="accordion">Array concat()</p>
   <div class="panel">
      <div class="mark">
         The concat() method creates a new array by merging (concatenating) existing arrays:<br>
         The concat() method does not change the existing arrays. It always returns a new array.<br>
         The concat() method can take any number of array arguments:<br>
         The concat() method can also take strings as arguments:<br>
   
      </div>
      <h2>Example</h2>
      <div class="output">
         <h2>Output</h2>
      array1 = :1,2,3,4,5<br>
      array2 = :6,7,8,9,10<br>
      array3 = :11,12,13,15,15<br>
      newArra1 :1,2,3,4,5,6,7,8,9,10<br>
      newArray2 :1,2,3,4,5,6,7,8,9,10,11,12,13,15,15<br>
      newArray3 :1,2,3,4,5,6,7,8,9,10,11,12,13,15,15<br>
      </div>
      <pre class="code_p">
      <h2>code</h2>
      const arr1 = [1, 2, 3];
      const arr2 = [4, 5, 6];
      const arr3 = [7, 8, 9];

      const newArr1 = arr1.concat(arr2);
      console.log(newArr1);

      const newArr2 = arr1.concat(arr2).concat(arr3);
      const newArr3 = arr1.concat(arr2, arr3);

      console.log(newArr2);
      console.log(newArr3);
      </pre>
   </div> 