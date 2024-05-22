<!--header -->
<?php include('../../common_header.php') ?>
<!-- style -->
<style>
.oop_active{
    background: #BB2966;
    line-height: 30px;
    color: white !important;
}
/* .basic_dropdown{
   display: block !important;
} */
.to_jump{
   padding-top: 110px;
}
p{
   display: inline-block;
}
</style>
   <h1 class="center"><span><a href="" target="_blank"> Details</a></span></h1>
<button id="toggle_b1">106. Intro to Object Oriented</button>
   <div class="code_b1">
      <h2> </h2>
      
   <button id="toggle_1">Watch from Folder</button>
   <div class="code_1">
   <video src="../../all_notes_videos/javascript/12.js_oop_106-119/106.  Intro to Object Oriented in Javascript _ Stack Learner(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/MzkCSRGOdck" target="_blank">Watch on YouTube</a></button> 
</div><!--End Code_b1 -->
<br>
<button id="toggle_b2">107.  Object Literal in Javascript</button>
   <div class="code_b2">
      <h2> </h2>
      <pre>
      var rect ={
    width: 100,
    height: 50,
    draw: function() {
        console.log('I am a rectangle')
        console.log('My Width is ' + this.width)
        console.log('My Height is ' + this.height)

    }
   }
   rect.draw()

   rect.height = 70

   rect.draw()
      </pre>
      
   <button id="toggle_2">Watch from Folder</button>
   <div class="code_2">
   <video src="../../all_notes_videos/javascript/12.js_oop_106-119/107.  Object Literal in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/MzkCSRGOdck" target="_blank">Watch on YouTube</a></button>     
</div>
<br>
<button id="toggle_b3">108. _THIS_ in Javascript</button>
   <div class="code_b3">
      <h2> </h2>
      <pre>
      var rect ={
    width: 100,
    height: 50,
    draw: function() {
        console.log('I am a rectangle')
        this.printProperties()
        console.log(this)

    },

    printProperties: function() {
        console.log('My Width is ' + this.width)
        console.log('My Height is ' + this.height)
    }
   }
   rect.draw()

   var another = {
      width: 47,
      height: 56,

      print: rect.printProperties
   }

   console.log(another.print)

   another.print()
   </pre>
 <button id="toggle_3">Watch from Folder</button>
   <div class="code_3">
   <video src="../../all_notes_videos/javascript/12.js_oop_106-119/108.  _THIS_ in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/ro9x3SVucDY" target="_blank">Watch on YouTube</a></button> 
</div>
<br>
<button id="toggle_b4">109. Factory Pattern in Javascript</button>
   <div class="code_b4">
   <h2></h2>
   <pre>
      
   var createRect = function (width, height) {
    return {
        width: width,
        height: height,
        draw: function() {
            console.log('I am a rectangle')
            this.printProperties()
            console.log(this)
    
        },
    
        printProperties: function() {
            console.log('My Width is ' + this.width)
            console.log('My Height is ' + this.height)
        }
    }
   }

   var rect1 = createRect(10, 15)

   rect1.draw()
   var rect2 = createRect(30, 35)

   rect2.draw()
   </pre>
   <button id="toggle_4">Watch from Folder</button>
   <div class="code_4">
   <video src="../../all_notes_videos/javascript/12.js_oop_106-119/109.  Factory Pattern in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/h_h7FDOkl2A" target="_blank">Watch on YouTube</a></button>  
</div><!--End Code_b4 -->
<br>
<button id="toggle_b5">110. Constructor Pattern in Javascript</button>
   <div class="code_b5">
      <h2> </h2>
      <pre>
      var Rectangle = function (width, height) {
    
    this.width = width
    this.height = height
    this.draw = function() {
        console.log('I am a rectangle')
        this.printProperties()
        console.log(this)

    }

    this.printProperties = function() {
        console.log('My Width is ' + this.width)
        console.log('My Height is ' + this.height)
    }
   }

   var Rectangle1= new Rectangle(10, 15)
   Rectangle1.draw()
      </pre>
   <button id="toggle_5">Watch from Folder</button>
   <div class="code_5">
   <video src="../../all_notes_videos/javascript/12.js_oop_106-119/110.  Constructor Pattern in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/DB-dN4TtYD0" target="_blank">Watch on YouTube</a></button>   
</div><!--End Code_b5 -->
<br>
<button id="toggle_b6">111. New Keyword in Javascript</button>
   <div class="code_b6">
      <h2> </h2>
      
   <button id="toggle_6">Watch from Folder</button>
      <div class="code_6">
      <video src="../../all_notes_videos/javascript/12.js_oop_106-119/111.  New Keyword in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(1080P_HD).mp4" width="90%" height="400px" controls ></video>
      </div>
      <!-- Youtube Button -->
      <button><a href="https://youtu.be/-OqmWA_P1WI" target="_blank">Watch on YouTube</a></button>   
</div><!--End Code_b6 -->
<br>
<button id="toggle_b7">112. Factory vs Constructor in Javascript</button>
   <div class="code_b7">
      <h2> </h2>
      
      <button id="toggle_7">Watch from Folder</button>
      <div class="code_7">
      <video src="../../all_notes_videos/javascript/12.js_oop_106-119/112.  Factory vs Constructor in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/F3k99p89SyY" target="_blank">Watch on YouTube</a></button>  
</div><!--End Code_b7 -->
<br>
<button id="toggle_b8">113. Constructor Property in Javascript</button>
   <div class="code_b8">
      <h2> </h2>
      
      <button id="toggle_8">Watch from Folder</button>
      <div class="code_8">
      <video src="../../all_notes_videos/javascript/12.js_oop_106-119/113.  Constructor Property in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/kAUptUeN3Gg" target="_blank">Watch on YouTube</a></button>  
</div><!--End Code_b8 -->
<br>
<button id="toggle_b9">114. Functions Are Object in Javascript</button>
   <div class="code_b9">
      <h2> </h2>
      
      <button id="toggle_9">Watch from Folder</button>
      <div class="code_9">
      <video src="../../all_notes_videos/javascript/12.js_oop_106-119/114.  Functions Are Object in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/3qitu-Sjx2E" target="_blank">Watch on YouTube</a></button>  
</div><!--End Code_b9 -->
<br>
<button id="toggle_b10">115. Bind_ Call_ Apply in Javascript</button>
   <div class="code_b10">
      <h2> </h2>
      
      <button id="toggle_10">Watch from Folder</button>
      <div class="code_10">
      <video src="../../all_notes_videos/javascript/12.js_oop_106-119/115.  Bind_ Call_ Apply in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/Irb4_0Sheos" target="_blank">Watch on YouTube</a></button>  
</div><!--End Code_b10 -->
<br>
<button id="toggle_b11">116. Pass By Value vs Pass By Reference in Javascript</button>
   <div class="code_b11">
      <h2> </h2>
      
      <button id="toggle_11">Watch from Folder</button>
      <div class="code_11">
      <video src="../../all_notes_videos/javascript/12.js_oop_106-119/116. Pass By Value vs Pass By Reference in Javascript _ JS All You Need To Know _ JS Bangla Tutorial(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/DyZwXcSsYtU" target="_blank">Watch on YouTube</a></button>  
</div><!--End Code_b11 -->
<br>
<button id="toggle_b12">117. Abstraction in Javascript</button>
   <div class="code_b12">
      <h2> </h2>
      
      <button id="toggle_12">Watch from Folder</button>
      <div class="code_12">
      <video src="../../all_notes_videos/javascript/12.js_oop_106-119/117.  Abstraction in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/nkIVqb3D_hE" target="_blank">Watch on YouTube</a></button>  
</div><!--End Code_b12 -->
<br>
<button id="toggle_b13">118.  Private Properties in Javascript</button>
   <div class="code_b13">
      <h2> </h2>
      
      <button id="toggle_13">Watch from Folder</button>
      <div class="code_13">
      <video src="../../all_notes_videos/javascript/12.js_oop_106-119/118.  Private Properties in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="" target="_blank">Watch on YouTube</a></button>  
</div><!--End Code_b13 -->
<br>
<button id="toggle_b14">119. How to Use Getter Setter in Javascript</button>
   <div class="code_b14">
      <h2> </h2>
      
      <button id="toggle_14">Watch from Folder</button>
      <div class="code_14">
      <video src="../../all_notes_videos/javascript/12.js_oop_106-119/119.  How to Use Getter Setter in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/HAPQADxe2SU" target="_blank">Watch on YouTube</a></button>  
</div><!--End Code_b14 -->

<!-- footer -->
<?php include('../../footer.php') ?>
<script>

</script>
