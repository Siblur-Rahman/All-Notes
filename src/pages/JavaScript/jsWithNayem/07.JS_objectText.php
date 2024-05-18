<h2 class="center">JavaScript Objects<span><a href="https://www.w3schools.com/js/js_objects.asp" target="_blank"> Details</a></span></h2>
   
   <!-- Basic div -->
   <button class="accordion">Basic Div(50)</button>
<div class="panel"><!-- Start Basic div -->


   <button><a href="" target="_blank">Watch on Youtube (HM Nayeem-50)</a></button>
   <h2></h2>
</div><!-- End Basic div -->


<button class="accordion">Literal vs Constructor(51)</button>
<div class="panel">
   <h2> JS Object Literal vs Constructor</h2>

   <h3>You define (and create) a JavaScript object with an object literal:</h3>

   <pre>
      const obj1={
      x:10,
      y:20,
   }
   obj1.z=30
   console.log(obj1);
   </pre>
   <h2> JS Object Constructor</h2>
   <pre>
   const obj2= Object()
   obj2.a= 20;
   obj2.b=30;
   console.log(obj2)

   const obj3= new Object()
   obj3.c= 20;
   obj3.d=30;

   console.log(obj3)
   </pre>
   <button><a href="" target="_blank">Watch on Youtube (HM Nayeem-51)</a></button>
   <h2></h2>
</div>

<button class="accordion b2">Accessing Properties(52)</button>
<div class="panel 2">
   <h2>Accessing Object Properties</h2>
   <pre>
      const obj1={
         x:10,
         y:20,
      }

      obj1.z=30

      console.log(obj1.x);
      console.log(obj1.y);
      console.log(obj1.x+obj1.y);

      console.log(obj1['x']);
      console.log(obj1['y']);

      const show='x'
      console.log(obj1[show])
   </pre>
   <button><a href="" target="_blank">Watch on Youtube (HM Nayeem-52)</a></button>
   <h2></h2>
</div>

<button class="accordion b3">Setting Object Properties</button>
<div class="panel 3">
   <h2>Setting Object Properties</h2>
      <pre>
      const obj1={
    x:10,
    y:20,
   }

   console.log(obj1.p)

   console.log(obj1);
   obj1.x=35
   obj1.z=30

   console.log(obj1);
      </pre>
      <button><a href="" target="_blank">Watch on Youtube (HM Nayeem-53)</a></button>
      <h2></h2>
</div>

<button class="accordion b4">Remove Properties(54)</button>
<div class="panel 4">
   <h2>Remove Object Properties </h2>
   <pre>
      const obj1={
    x:10,
    y:20,
   }
   console.log(obj1);

   delete obj1.y
   console.log(obj1);

   obj1.x=undefined
   console.log(obj1);
   </pre>
   <button><a href="" target="_blank">Watch on Youtube (HM Nayeem-54)</a></button>
   <h2></h2>
</div>
<button class="accordion b5">Comparing Two Objects(55)</button>
<div class="panel 5">
   <h2>Comparing Two Objects</h2>
   <pre>
      const obj1={
    x:10,
    y:20,
    z:30
   }
   const obj2={
      x:10,
      y:20,
      z:30
   }

   if(obj1.x===obj2.x && obj1.y === obj2.y & obj1.z===obj2.z){
      console.log(true)
   }else{
      console.log(false)
      }
   </pre>
<button><a href="https://youtu.be/wibCQbDDATY?si=mJbIM8ScZJi0UG2-" target="_blank">Watch on Youtube (HM Nayeem-55)</a></button>
<h2></h2>
</div>
<button class="accordion b6">Iterate Object Properties(56)</button>
<div class="panel 6">
   <h2>Iterate Object Properties </h2>
   <pre>
         const obj={
      x:10,
      y:20,
      z:30
      }

      console.log('x' in obj)
      console.log('p' in obj)

      for (const i in obj){
         console.log(i)
      }
      for (const i in obj){
         console.log(i + ': ' +obj[i])
      }
   </pre>
   <button><a href="https://youtu.be/TyMrsaDp5gE?si=DCxVI2jbA3LNQjXr" target="_blank">Watch on Youtube (HM Nayeem-56)</a></button>
   <h2></h2>
</div>
<button class="accordion b7">Object Methods(57)</button>
<div class="panel 7">
   <h2>Object Methods</h2>
   <pre>
   const obj={
    x:10,
    y:20,
    z:30
   }

   const obj2 = Object.assign({}, obj)

   obj2.x = 45
   obj2.z = 105

   console.log(obj2)
   </pre>
<button><a href="https://youtu.be/rCpqHR5FzBI?si=ufSNo-oKAsibrPQU" target="_blank">Watch on Youtube (HM Nayeem-57)</a></button>
<h2></h2>
   
</div>