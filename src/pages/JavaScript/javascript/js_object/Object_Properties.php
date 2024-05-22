<style>
    .properties_active{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
    }
</style>
<?php include'../js_object/object_header.php'?>
<div id="main_content"><!-- Start Main Content --><!-- Start Main Content -->
<h2>JavaScript Object Properties<span><a href="https://www.w3schools.com/js/js_object_properties.asp" target="_blank"> Details</a></span></h2>
<div class="mark">
    Properties are the values associated with a JavaScript object. <br>

    A JavaScript object is a collection of unordered properties. <br>

    Properties can usually be changed, added, and deleted, but some are read only.
</div>
<button class="accordion">Accessing JavaScript Properties</button>
<div class="panel">
    The syntax for accessing the property of an object is: <br>
    <div class="code_p">

    objectName.property      // person.age <br>
    or

    objectName["property"]   // person["age"] <br>
    or

    objectName[expression]   // x = "age"; person[x] <br>
    </div>
    <h2>Example</h2>
    <div id="ass_demo"></div>
    <button class="accordion">Code</button>
    <pre class="panel">

    const person = {
      firstname: "John",
      lastname: "Doe",
      age: 50,
      eyecolor: "blue"
    };
    
    document.getElementById("ass_demo").innerHTML = person.firstname + " is " + person.age + " years old.";
    </pre>
    <script>
    const person = {
      firstname: "John",
      lastname: "Doe",
      age: 50,
      eyecolor: "blue"
    };
    
    document.getElementById("ass_demo").innerHTML = person.firstname + " is " + person.age + " years old.";
    </script>
</div>
<button class="accordion">test</button>
<div class="panel">
test
</div>
<button class="accordion"></button>
<div class="panel">

</div>
</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>