<p class="accordion">Array includes() </p>
<div class="panel">
   <h2>Array. ()<span class="itc"><a href=""> Details</a></span></h2>
      <h2></h2>
      <div class="mark">
      The includes() method returns true if an array contains a specified value. <br>

      The includes() method returns false if the value is not found. <br>

      The includes() method is case sensitive. <br>
      </div>
      <h2>Syntax</h2>
      <div class="code_p">
       array.includes(element, start)
      </div>
      <h2></h2>
      <div class="code_p">
      const numbers = [45, 4, 9, 16, 25]; <br>

      let element = numbers.includes(30); <br>
      console.log(element)//false
      </div>
      <h2>Start the search at position 3:</h2>
      <div class="code_p">
      const numbers = [45, 4, 9, 16, 25]; <br>

      let element = numbers.includes(9, 3) <br>
      console.log(element)//false
      </div>
         
         <pre>
            
         </pre>
      <button class="btn_block accordion itc"><a href="../js_topics_video" target="_blank">watch video <span class="itc"></span> </a></button>
</div> <!--End panel -->