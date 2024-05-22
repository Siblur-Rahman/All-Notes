<style>
   .active_3{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'./js_practice_header.php'?>
<!-- Start Main Content -->

<button class="btn_block accordion itc" id="">Declare simple Object </button>
<div class="panel">
  <pre>
  var parson = {
    fName: "Siblur",
    lName: "Rahman",
    age: 41
   }
  </pre>
</div><!-- End panel-->

<button class="btn_block accordion itc" id="">Declare Object with Method </button>
<div class="panel">
   <pre>
   var parson = {
    fName: "Siblur",
    lName: "Rahman",
    age: 41,
    fullName: function(){
        return this.fName+" "+this.lName
    }
   }
   </pre>
</div><!-- End panel-->

<button class="btn_block accordion itc" id="">Set Properties in a object </button>
<div class="panel">
   <pre>
   var parson = {
      fName: "Siblur",
      lName: "Rahman",
      age: 41,
      fullName: function(){
         return this.fName+" "+this.lName
      }
   }
   parson.fatherName="Abu Bakkor Siddique"
   </pre>
</div><!-- End panel-->

<button class="btn_block accordion itc" id="">Remove/delete properties from a Object </button>
<div class="panel">
   <pre>
   var parson = {
      fName: "Siblur",
      lName: "Rahman",
      age: 41,
      fullName: function(){
         return this.fName+" "+this.lName
      }
   }
   <span class="itc">delete parson.fName</span>
   </pre>
</div><!-- End panel-->

<button class="btn_block accordion itc" id="">Set Undefined value to properties </button>
<div class="panel">
   <pre>
   var parson = {
    fName: "Siblur",
    lName: "Rahman",
    age: 41,
    fullName: function(){
        return this.fName+" "+this.lName
    }
}
<span class="itc">parson.sonName = undefined</span>
<span class="itc">parson.lName = undefined</span>
   </pre>
</div><!-- End panel-->

<button class="btn_block accordion itc" id="">Acces Object & Properties</button>
<div class="panel">
   <pre>
   var parson = {
    fName: "Siblur",
    lName: "Rahman",
    age: 41,
    fullName: function(){
        return this.fName+" "+this.lName
    }
   }

   console.log(parson);
   console.log(parson.fName);
   // or
   console.log(parson["fName"]);
   console.log(parson.fullName());
   </pre>
</div><!-- End panel-->

<button class="btn_block accordion itc" id="">Check Properties </button>
<div class="panel">
   <pre>

   </pre>
</div><!-- End panel-->
<button class="btn_block accordion itc" id="">Iterate/Traverse Object </button>
<div class="panel">
   <pre>
   var parson = {
    fName: "Siblur",
    lName: "Rahman",
    age: 41,
    fullName: function(){
        return this.fName+" "+this.lName
    }
   }

   for(const index in parson){
      console.log(index + ": " + parson[index])
   }
   </pre>
</div><!-- End panel-->

<button class="btn_block accordion itc" id=""> </button>
<div class="panel">
   <h2 class="center"><span><a href="" target="_blank"> Details</a></span></h2>
   <button class="btn_block"><a href="" target="_blank">Watch video</a></button>
</div><!-- End panel-->

<!-- End Main Content -->
<!--js_common footer -->
<?php include('../../js_common_footer.php') ?>
