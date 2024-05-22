<style>
.active_class{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
</style>
<!-- js class header -->
<?php include'./js_class_header.php'?>

<div id="main_content"><!-- Start Main Content -->

<h2>javascript Class<span><a href="https://www.w3schools.com/js/js_classes.asp" target="_blank"> Details</a></span></h2>
<div class="mark">
   JavaScript Classes are templates for JavaScript Objects.
</div>

<!-- Create Object & Access with the Class -->
   <h2>JavaScript Class Syntax</h2>
   <div class="mark">
      Use the keyword class to create a class.
      <br><br>
      Always add a method named constructor():
   </div>
   <h2>Syntax</h2>
   <pre class="code_p">
      class ClassName {
         constructor() { ... }
      }
   </pre>
   
   <h2>Example</h2>
   <pre class="code_p">
      class student{
         constructor(sId, sName){
            this.id = sId;
            this.name = sName;
            this.school = "Adamdighi school"
         }
      }
   </pre>
   <pre class="code_p">
      const student1 = new student(12, "Siblur Rahman")
      const student2 = new student(12, "Saif Mohammad Zakaria")
      console.log(student1);
      console.log(student2);
      console.log(student1.name)
   </pre>
   <h2>It have to search object oriented programming core concepts</h2>

   <h2>JavaScript Class Inheritance <span class="itc"><a href="https://www.w3schools.com/js/js_class_inheritance.asp">Details</a></span></h2>
   <div class="mark">
      <p>To create a class inheritance, use the extends keyword.
         <br>
         A class created with a class inheritance inherits all the methods from another class:</p>
      </div>
      <h2>Example</h2>
      <pre class="code_p">
         class teacher{
            constructor(){
               this.teacherName = "MD Alauddin";
            }
         }
         
         class student extends teacher{
            constructor(sId, sName){
               super();
               this.id = sId;
               this.name = sName;
               this.school = "Adamdighi school"
            }
            
         }
         const student1 = new student(1, "MD SIBLUR RAHMAN")
         
         console.log(student1)  
      </pre>
      <div class="mark">Without function keyword, We can use function inside class.</div>
      <h2>Example</h2>
      <pre class="code_p">
         class father{
            constructor(){
               this.fatherName = "Siddiqee";
            }
         }
         
         class student extends father{
            constructor(sId, sName){
               super();
               this.id = sId;
               this.name = sName;
               this.school = "Adamdighi school"
            }
            // function 
            studentfatherNames(){
               return this.name + " & " + this.fatherName;
            }
         }
         const student1 = new student(1, "MD SIBLUR RAHMAN")
         
         console.log(student1.studentfatherNames());
      </pre>
      <button class="btn_block"><a href="../../js_topics_video/023_8.php" target="_blank">Watch Video</a></button>
</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
