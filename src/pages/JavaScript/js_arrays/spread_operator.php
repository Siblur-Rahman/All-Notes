<button class="btn_block accordion itc">The Spread (...) Operator</button>
<div class="panel">
      <div class="mark">
      The ... operator expands an iterable (like an array) into more elements:
      </div>
      <h2>Syntax</h2>
      <div class="code_p">
      const q1 = ["Jan", "Feb", "Mar"];
      const q2 = ["Apr", "May", "Jun"]; 
      const q3 = ["Jul", "Aug", "Sep"];
      const q4 = ["Oct", "Nov", "May"];

      const year = [...q1, ...q2, ...q3, ...q4];
      document.getElementById("spdemo1").innerHTML = year; 
      <h2>Output<span id="spdemo1"></span></h2>
      </div>
      <script>
      const q1 = ["Jan", "Feb", "Mar"];
      const q2 = ["Apr", "May", "Jun"];
      const q3 = ["Jul", "Aug", "Sep"];
      const q4 = ["Oct", "Nov", "May"];

      const year = [...q1, ...q2, ...q3, ...q4];
      document.getElementById("spdemo1").innerHTML = year; 
      </script>
      <div class="code_p">
         
      </div>

      <div class="code_p">
         
         </div>
         
         <pre>
            
         </pre>
      <button class="btn_block accordion itc"><a href="../js_topics_video" target="_blank">watch video <span class="itc"></span> </a></button>
</div> <!--End panel -->