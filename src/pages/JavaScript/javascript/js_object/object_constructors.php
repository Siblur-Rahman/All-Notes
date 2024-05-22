<style>
    .file_active{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
    }
</style>
<?php include'./object_header.php'?>
<div id="main_content"><!-- Start Main Content --><!-- Start Main Content -->
<h2 class="center">JS object Constructors<span><a href="https://www.w3schools.com/js/js_object_constructors.asp" target="_blank"> Details on w3School</a></span></h2>
<h2 class="center">JS object Constructors<span><a href="https://www.codecademy.com/resources/docs/javascript/constructors" target="_blank"> Details on codecademy</a></span></h2>
  <div class="code_p">
  function Person(firstName, lastName, age){ <br>
    this.firstName = firstName; <br>
    this.lastName = lastName; <br>
    this.age = age; <br>
    this.fullName = this.firstName + ' ' + this.lastName <br>
} <br>

const farwah = new Person('Farwah', 'Ahmad', 5) <br>
const siblu = new Person('Siblur', 'Rahman', 42) <br>
  </div>
</div><!-- End Main Content -->
<!-- footer -->
<?php include('../../common_footer.php') ?>