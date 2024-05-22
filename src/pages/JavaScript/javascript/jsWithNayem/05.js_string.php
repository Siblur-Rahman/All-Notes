<!-- style -->
<style>
   .str_active{
    background: #000;
}

</style>
<!-- JSN_header -->

<?php include('./jsn_header.php') ?>


<!-- Start main Content-->
<button id="basic_click">JS String(36)</button>
   <h1 class="center">JavaScript Strings<span><a href="https://www.w3schools.com/js/js_strings.asp" target="_blank"> Details</a></span></h1>
<!-- Start basic div -->
<div class="basic_div">

      <h4>
      JavaScript strings are for storing and manipulating text.

      A JavaScript string is zero or more characters written inside quotes.
      </h4>
      <div class="mark">You can use single, double quotes or Backtick:</div>
      <pre>
         var str1 = 'String';
         var str2 = "String";
         var str3 = "String";

         var str4 = String('Sible')
         var 5 = String('048')
      </pre>
      <video src="../../all_notes_videos/javascript/05.js_string_36-41/036. JS String _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      <h2>Nayeem(10)</h2>
</div>
<!-- End basic div -->

<!--Escape Character code_b1 -->
<button id="toggle_b1">Escape Character(38)</button>
<div class="code_b1">
         <h2>Escape Character</h2><br>
         <h4>The backslash (\) escape character turns special characters into string characters:</h4>
      <pre class="s_code to_jump" id="escape">
         Code 	Result 	Description
         \' 	   ' 	      Single quote
         \" 	   " 	      Double quote
         \\ 	   \ 	      Backslash
         \n       Start new line

         The sequence \"  inserts a double quote in a string:
      </pre>
      
      <video src="../../all_notes_videos/javascript/js_string/038. JS Escape Notation _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      <h2>(Nayeem-38)</h2>
</div>

   <!-- String Methods(40) Code_b2 -->
   <button id="toggle_b2">String Methods(40)</button>
<div class="code_b2">
      <h1 class="center">JavaScript String Methods<span><a href="https://www.w3schools.com/js/js_string_methods.asp" target="_blank"> Details</a></span></h1>
      <pre>
         String length
         String slice()
         String substring()
         String substr()
         String replace()
         String replaceAll()
         String toUpperCase()
         String toLowerCase()
         String concat()
         String trim()
         String trimStart()
         String trimEnd()
         String padStart()
         String padEnd()
         String charAt()
         String charCodeAt()
         String split()
      </pre>
      <div class="mark">Note: String search methods are covered in the next chapter.</div>
      <video src="../../all_notes_videos/javascript/js_string/040. JS String Methods _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      <h2>Nayeem(40)</h2>
</div>

   <!--Extracting Code_b3 -->
   <button id="toggle_b3">Extracting</button>
<div class="code_b3">
      <h2 class="to_jump" id="esp">Extracting String Parts</h2>
      <h4>There are 3 methods for extracting a part of a string:</h4>
      <pre class="s_code" id="">

         slice(start, end)
         substring(start, end)
         substr(start, length)
      </pre>
      <!-- <video src="../../all_notes_videos/javascript" width="90%" height="400px" controls ></video> -->
</div>

<!--Literal Vs Constructor Code_b4 -->
<button id="toggle_b4">Literal Vs Constructor(37)</button>
<div class="code_b4">
   <h2>Literal Vs Constructor</h2>
   <pre>
    <h2>Literal  string :</h2>
      var str1='You Are WelCome'

   <h2>Constructor :</h2>
      var str2=String(123);

      var n=10;

      var str3 =n.toString();

      console.log(str3)
   </pre>
      <video src="../../all_notes_videos/javascript/js_string/037. String Literal vs Constructor _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      <h2>Nayeem(37)</h2>
</div>
<!-- String Comparison Code_b5 -->
<button id="toggle_b5">String Comparison(39)</button>
<div class="code_b5">
   <h2>String Comparison<a href="" target="_blank"></a></h2>
   <h2>JavaScript String Comparison</h2>
   
   <div class="mark">All the comparison operators above can also be used on strings:</div>

   <pre>
   var str = 'a';
   var str2 = 'b'
   console.log(str &lt; str2);
   </pre>
      <video src="../../all_notes_videos/javascript/js_string/039. JS String Comparison _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      <h2>Nayeem(39)</h2>
</div>

<!-- String Length Code_b6-->
<button id="toggle_b6">String Length(41)</button>
<div class="code_b6">
   <h2>String Length<a href="" target="_blank"></a></h2>
   <pre>
   var str = 'Some string';
   console.log(str.charAt(3));
   console.log(str.length);

   var length =0;
   while(true){
    if(str.charAt(length)==''){
        break;
    }else{
        length++;
    }
   }
   console.log(length);
   </pre>
      <video src="../../all_notes_videos/javascript/js_string/041. JS String Length _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      <h2>Nayeem (41)</h2>
</div>

   <!--String Template Code_b7 -->
   <button id="toggle_used">Used Code</button>
<div class="code_b7">
   <h2>JavaScript Template Literals <a href="https://www.w3schools.com/js/js_string_templates.asp" target="_blank"></a></h2>

      <video src="../../all_notes_videos/javascript/js_string/139.  Template String in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
      <h2>Nayeem (139)</h2>
</div>

      <div class="code_used"><!-- start code used -->
      
      </div><!-- end code used -->
      <!-- End main Content-->

<!-- footer -->
<?php include('../../footer.php') ?>
<script>

</script>
