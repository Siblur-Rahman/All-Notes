<!-- header -->

<?php include('../../common_header.php') ?>
<!-- style -->
<style>
.basic_active{
      background: #786363;
    line-height: 30px;
    color: white !important;
}
.js_18_active{
    background: #BB2966;
    line-height: 30px;
    color: white !important;
}
.basic_dropdown{
   display: block !important;
}
.to_jump{
   padding-top: 110px;
}
p{
   display: inline-block;
}
</style>
   <h1 class="center"><span><a href="" target="_blank"> Details</a></span></h1>
   <!-- Start Main Content -->
<button id="toggle_b1"></button>
   <div class="code_b1">
      <h2> </h2>
      <pre>
     
      </pre>
      
   <button id="toggle_2">Watch from Folder</button>
   <div class="code_2">
   <video src="../../all_notes_videos/javascript/02.js_starting_5-19/018. JS Date Functions _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4"width="90%" height="400px" controls ></video>
   </div>
   <!-- Youtube Button -->
   <button><a href="https://youtu.be/WC4B0vZ2CzM" target="_blank">Watch on YouTube</a></button>     
</div>
<h1 class="center">Date Get Methods<span><a href="https://www.w3schools.com/js/js_date_methods.asp" target="_blank"> Details</a></span></h1>
<pre class="s_code">
Date Get Methods
Method	Description
getFullYear()	Get year as a four digit number (yyyy)
getMonth()	Get month as a number (0-11)
getDate()	Get day as a number (1-31)
getDay()	Get weekday as a number (0-6)
getHours()	Get hour (0-23)
getMinutes()	Get minute (0-59)
getSeconds()	Get second (0-59)
getMilliseconds()	Get millisecond (0-999)
getTime()	Get time (milliseconds since January 1, 1970)
</pre>

<pre class="s_code">
      const date = new Date();
      console.log(date)
      console.log(date.getFullYear())
      document.getElementById("demo").innerHTML = date.getFullYear();
</pre>
<!-- End Main Content -->
<!-- footer -->
<?php include('../../footer.php') ?>
<script>

</script>
