<h2>JavaScript Array keys()<span class="itc"><a href="https://www.w3schools.com/jsref/jsref_keys.asp" target="_blank"> Details</a></span></h2>
      <h2>Array keys()</h2>
      <div class="mark">
         The keys() method returns an Array Iterator object with the keys of an array. <br>

         The keys() method does not change the original array.
      </div>
      <h2>Syntax</h2>
      <div class="code_p">
         array.keys()
      </div>
      <h2>Example</h2>
      <h4>Create an Array Iterator object, containing the keys of the array:</h4>
      <div class="code_p" id="key-code-1">
         <script>
            const keyCode_1 = `const friends = ['karim', 'rahim', 'tipu'];
            const  keys = friends.keys();
            let keysList =''
            for( key of keys){
               keysList +=key;
            }
            //012`
            document.getElementById('key-code-1').innerText = keyCode_1;
            console.log(keys);         
         </script>
      </div>
      <h4>We can do the same using the built-in Object.keys() Method</h4>
      <div class="code" id="key-code-2">
         <script>
           const keyCode_2 = `const friends = ['karim', 'rahim', 'tipu'];
            const  keys = Object.keys(friends);
            let keysList =''
            for( key of keys){
               keysList +=key;
            }
            //012`
            document.getElementById('key-code-2').innerText = keyCode_2;         
         </script>
         
      </div>
      <div class="code_p">
         
         </div>
      <!-- <button class="itc"><a href="" target="_blank">watch video <span class="itc"></span></a></button> -->
      <!-- <button><a href="./file_example.html" target="_blank"></a></button> -->