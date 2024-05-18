
   <h1 class="center">JavaScript Objects<span><a href="https://www.w3schools.com/js/js_objects.asp" target="_blank"> Details</a></span></h1>
   
   <!-- Basic div -->
   <button class="accordion">Basic Div(50)</button>
<div class="panel"><!-- Start Basic div -->


   <video src="../../all_notes_videos/javascript/07.js_object_50-57/050. JS Object _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   <h2>(Nayeem-50)</h2> 
</div><!-- End Basic div -->


<button class = "accordion 1">Literal vs Constructor(51)</button>
<div class="panel 1">
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

   <iframe width="560" height="315" src="https://www.youtube.com/embed/g3jZqtK-fDE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   
   <video src="../../all_notes_videos/javascript/07.js_object_50-57/051. JS Object Literal vs Constructor _ JS All You Need to Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   <h2>(Nayeem-0)</h2>
</div>

<button class = "accordion 2">Accessing Properties(52)</button>
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

   <iframe width="560" height="315" src="https://www.youtube.com/embed/ls80JBqgIOw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   <video src="../../all_notes_videos/javascript/07.js_object_50-57/052. Accessing Object Properties in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   <h2>(Nayeem-52)</h2>
</div>

<button class = "accordion 3">Setting Object Properties(53)</button>
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
   <iframe width="560" height="315" src="https://www.youtube.com/embed/7A4CnVlobfg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

   <video src="../../all_notes_videos/javascript/07.js_object_50-57/053.  Setting Object Properties in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   <h2>(Nayeem-53)</h2>
</div>

<button class = "accordion 4">Remove Properties(54)</button>
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
   <iframe width="560" height="315" src="https://www.youtube.com/embed/K-icBn7l_vA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   <video src="../../all_notes_videos/javascript/07.js_object_50-57/054. Remove Object Properties in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   <h2>(Nayeem-54)</h2>
</div>
<button class = "accordion 5">Comparing Two Objects(55)</button>
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
      <iframe width="560" height="315" src="https://www.youtube.com/embed/wibCQbDDATY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   <video src="../../all_notes_videos/javascript/07.js_object_50-57/055.  Comparing Two Objects in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   <h2>(Nayeem-55)</h2>
</div>
<button class = "accordion 6">Iterate Object Properties(56)</button>
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
      <iframe width="560" height="315" src="https://www.youtube.com/embed/TyMrsaDp5gE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   <video src="../../all_notes_videos/javascript/07.js_object_50-57/056. Iterate Object Properties in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   <h2>(Nayeem-56)</h2>
</div>
<button class = "accordion 7">Object Methods(57)</button>
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

   <video src="../../all_notes_videos/javascript/07.js_object_50-57/057.  Object Methods in Javascript _ JS All You Need To Know _ JS Bangla Tutorials(720P_HD).mp4" width="90%" height="400px" controls ></video>
   <h2>(Nayeem-57)</h2>
</div>