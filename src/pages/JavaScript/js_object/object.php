
<style>
 .object_active{
         background-color: var(--activeBG-1);
         color: var(--activeColor);
    }
</style>
<?php include'./object_header.php'?>

<div id="main_content"><!-- Start Main Content -->

   <h2 class="center">JavaScript Objects<span><a href="https://www.w3schools.com/js/js_object_definition.asp" target="_blank"> Details</a></span> Another <span><a href="https://www.w3schools.com/js/js_objects.asp" target="_blank"> Details</a></span></h2>
   <div class="mark">
   Objects are same as variables in JavaScript, the only difference is that an object holds multiple values in terms of properties and methods. <br> <br>
   Object values are written as name : value pairs (name and value separated by a colon).
   </div>
<button class="accordion" title="">Objects declaration, Access Update</button>
<div class="panel">
   <pre class="code_p">

   // object
      const student = {
        fname: 'Zahid',
        class: 10
     };

     console.log(student);//output

     //property Access
     var fname = student.fname//Ist Way
     console.log(fname)

     var fname2 = student["fname"]//2nd way
     console.log(fname2)

     var fname3 = "fname"
     console.log(student[fname3])//3rd way

     //Update properrty

     student.fname ="Farwah"
     console.log(student);
     //add Property
     student.roll= 1
     console.log(student);
   </pre>

   <button class="btn_block"><a href="../js_topics_video/013_11.php" target="_blank">Watch The video</a></button>
</div>
<!-- End Basic Code -->
<button class ="accordion" class="btn_block">23-7 Class, constructor, create object from class</button>
<div class="panel">
   <pre class="code_p">
      
      <button class="btn_block"><a href="../../js_topics_video/023_7.php" target="_blank">Watch The video</a></button>
   </pre>
</div>
<!-- End panel 1 -->
<button class ="accordion 3" class="btn_block">23-9 Destructure, Object, array, destructure complex object</button>
<div class="panel 3">
   <pre class="code_p">
   const person ={
   name: "Farwah",
   age :5, 
   fName: 'Siblur Rahman', mName:'Fateema', friend:['Zidni', 'Jannatun', 'Fateeha'],
   father:{
   name: 'Siblur Rahman',
   age: 25,
   village: 'Paik Para'
   }
   }
   const {name, age, fName, mName, friend, father} =person;
   const {village} = person.father;

   console.log(name, age);
   console.log(friend);
   console.log(father);
   console.log(friend[0]);
   console.log(person);
   console.log(village);
   </pre> 
   <button class="btn_block"><a href="../js_topics_video/023_9.php" target="_blank">Watch Video</a></button>
</div><!-- End panel 3 -->
<button class="accordion">The JavaScript for in statement loops through the properties of an Object:</button>
<div class="panel">
   <h3 class="text-info">Get the Properties of an Object</h3>
   <h3><span id="for_in1"></span></h3>
   <div class="code_p">
      const person = {fname:"John", lname:"Doe", age:25}; <br>
      let text =""; <br>
      for(let properrty in person){ <br>
         text +=properrty+" "; <br>
         document.querySelector("#for_in").innerHTML = text; <br>
      }
   </div>
   <h3 class="text-info">Get the Values of the Properties of an Object</h3>
   <h3><span id="for_in2"></span></h3>
   <div class="code_p">
      const person = {fname:"John", lname:"Doe", age:25}; <br>
      let text =""; <br>
      for(let properrty in person){ <br>
         text += person[properrty]+" "; <br>
         document.querySelector("#for_in").innerHTML = text; <br>
      }
   </div>
   <h3 class="text-info">Get Property and Velu as well</h3>
   <h3><span id="for_in3"></span></h3>
   <div class="code_p">
       const person = {fname:"John", lname:"Doe", age:25}; <br>
      let text =""; <br>
      for(let properrty in person){ <br>
         text += properrty+" : " + person[properrty]+" "+"&lt;br&gt;"; <br>
         document.querySelector("#for_in").innerHTML = text; <br>
      }
   </div>

   <script>
   //   let  person1 = {
   //    name :"Siblur Rahman",
   //    frinds:["Sabbir", "Hasib", "Saif"],
   //    car:{
   //       model:"BMW",
   //       price: 6000000,
   //       color:"white"
   //    }
   //   }
   const person = {fname:"John", lname:"Doe", age:25};
   let text1 ="";
     for(let properrty in person){
      text1 +=properrty+" ";
      document.querySelector("#for_in1").innerHTML = text1;
     }
   let text2 ="";
     for(let properrty in person){
      text2 += person[properrty]+" ";
      document.querySelector("#for_in2").innerHTML = text2;
     }
   let text ="";
     for(let properrty in person){
      text += properrty+" : " + person[properrty]+" "+"<br>";
      document.querySelector("#for_in3").innerHTML = text;
     }
   </script>
</div>
<?php include'../jsWithNayem/07.JS_objectText.php'?> 
<!-- <button class ="accordion "></button>
<div class="panel ">
   <pre class="code_p">
      
      <button class="btn_block"><a href="" target="_blank">Watch The video</a></button>
   </pre>
</div> -->
<!-- End panel  -->

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
