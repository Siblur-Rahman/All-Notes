<p class="accordion">Array push() </p>
<div class="panel">
   <h2>Array. ()<span class="itc"><a href=""> Details</a></span></h2>
      <div class="mark">
      The push() method adds new items to the end of an array. <br>

      The push() method changes the length of the array. <br>

      The push() method returns the new length.
      </div>
      <h2>Syntax</h2>
      <div class="code_p">
        array.push(item1, item2, ..., itemX)
      </div>
      <h2>adds new items to the end of an array.</h2>
      <div class="code_p">
      const numbers = [45, 4, 9, 16, 25]; <br>

      numbers.push(30, 40, 50) <br>
      console.log(numbers)//[45,  4,  9, 16, 25, 30, 40, 50]
      </div>
        <h2>returns the new length.</h2>
      <div class="code_p">
        const numbers = [45, 4, 9, 16, 25];

        let length = numbers.push(30)
        console.log(length)//6
        </div>
         
      <button class="btn_block accordion itc"><a href="../js_topics_video" target="_blank">watch video <span class="itc"></span> </a></button>
</div> <!--End panel -->