<!-- common_header -->

<?php include('../../common_header.php') ?>
<!-- style -->
<style>
.basic_active{
    background: #786363;
    line-height: 30px;
    color: white !important;
}
   .active_6{
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
</style>

<!-- left-bar -->

   <?php include('../left_bar.php') ?>

<!-- right-bar -->

   <?php include('../right_bar.php') ?>
   <div class="second_navbar">
         <button id="basic_click">Basic</button>
         <button> <a href="#return">Return to Head</a></button>
         <button> <a href="#common_events">Common Events</a></button>
        <button id="code_click">Code</button>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
    </div>

   <div id="main_content">
   <span class="to_jump" id="return"></span>
         <h1 class="center">JavaScript Event<span><a href="https://www.w3schools.com/js/js_events.asp" target="_blank"> Details</a></span></h1>
<div class="basic_div">
         <h2>HTML Events</h2>
   <h4>
         An HTML event can be something the browser does, or something a user does. <br><br>

      Here are some examples of HTML events: <br><br>

         An HTML web page has finished loading <br>
         An HTML input field was changed <br>
         An HTML button was clicked <br>

      Often, when events happen, you may want to do something. <br><br>

      JavaScript lets you execute code when events are detected. <br><br>

      HTML allows event handler attributes, with JavaScript code, to be added to HTML elements. <br><br>

      <br><br>
   </h4>
         <pre class="s_code">
         With single quotes:

      &lt;element event='some JavaScript'&gt;

      With double quotes:
      &lt;element event="some JavaScript"&gt;

      Example-1
      &lt;button onclick="document.getElementById('demo').innerHTML = Date()"&gt;The time is?&lt;/button&gt;

      Example-2
      &lt;button onclick="this.innerHTML = Date()"&gt;The time is?&lt;/button&gt;
         </pre>
      <pre class="s_code id=common_event to_jump" id="common_events">
         
      Common HTML Events

      Here is a list of some common HTML events:
      Event 	Description
      onchange 	An HTML element has been changed
      onclick 	The user clicks an HTML element
      onmouseover 	The user moves the mouse over an HTML element
      onmouseout 	The user moves the mouse away from an HTML element
      onkeydown 	The user pushes a keyboard key
      onload 	The browser has finished loading the page
      </pre>
</div>
    
</div>

<!-- footer -->
<?php include('../../footer.php') ?>
