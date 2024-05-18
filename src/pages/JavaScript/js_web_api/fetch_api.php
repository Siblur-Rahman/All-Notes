<style>
   .fetch_active{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   </style>
   <!-- topics header -->
<?php include'./web_api_header.php'?>
<div id="main_content"><!-- Start Main Content -->

   <h2 class="center">Web fetch API<span><a href="./examples_api/example.html" target="_blank"> Details</a></span></h2>
   <button id="toggle_b" class="btn_block"></button>
   <p>The Fetch API interface allows web browser to make HTTP requests to web servers.</p>
   <h2>A Fetch API Example</h2>
   <p>The example below fetches a file and displays the content:</p>
   <h2>Example-1</h2>
   <pre class="code_p">
   fetch('https://jsonplaceholder.typicode.com/todos/1')
      .then(response => response.json())
      .then(json => console.log(json))
   </pre>
   <div class="output">
      <h4>output</h4>
      { userId: 1, id: 1, title: 'delectus aut autem', completed: false }
   </div>
   <button class="btn_block"><a href="../js_topics_video/025_5.php" target="_blank">Watch the video<span class="itc">25-5 Load Data, JSON placeholder, GET data, display data on UI 25_5</span></a></button>
   <button class="btn_block"><a href="./examples_api/example1.html" target="_blank">example-1</a></button>
   <button class="btn_block"><a href="./examples_api/example2.html" target="_blank">example-2</a></button>
   <button class="btn_block"><a href="./examples_api/example3.html" target="_blank">example-3</a></button>
   <button class="btn_block"><a href="./examples_api/example4.html" target="_blank">example-4</a></button>
   <button class="btn_block"><a href="./examples_api/example5.html" target="_blank">example-5</a></button>
   <button class="btn_block"><a href="./examples_api/example6.html" target="_blank">example-6</a></button>
   <button class="btn_block"><a href="./examples_api/example7.html" target="_blank">example-7</a></button>
   <button class="btn_block"><a href="./examples_api/example8.html" target="_blank">example-8</a></button>
   <button class="btn_block"><a href="./examples_api/example9.html" target="_blank">example-9</a></button>
   <button class="btn_block"><a href="./examples_api/example10.html" target="_blank">example-10</a></button>
   <div class="code_b">
</div><!-- End code_b -->

</div><!-- End Main Content -->
<!-- footer -->
<?php include('../../common_footer.php') ?>
