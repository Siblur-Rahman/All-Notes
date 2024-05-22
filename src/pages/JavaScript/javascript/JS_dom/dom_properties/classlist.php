<p class="accordion">classList</p>
<div class="panel">
<style>
    .myStyle{
        background-color: yellowgreen;
        color: black;
        padding: 5px;
    }
</style>
<h2>HTML DOM Element classList <span class="itc"><a href="https://www.w3schools.com/jsref/prop_element_classlist.asp"  target="_blank">Details</a></span></h2>
<div>
The classList property returns the CSS classnames of an element. <br>

The classList property returns a <a href="https://www.w3schools.com/jsref/dom_obj_html_domtokenlist.asp" class="itc" target="_blank">DOMTokenList</a>.
</div>
<button class="accordion">classList Properties and Methods</button>
<div class="panel">
    <a href="https://www.w3schools.com/jsref/prop_element_classlist.asp" class="itc" target="_blank">Details</a> <br>
    Name	Description <br>
    add()	Adds one or more tokens to the list <br>
    contains()	Returns true if the list contains a class <br>
    entries()	Returns an Iterator with key/value pairs from the list <br>
    forEach()	Executes a callback function for each token in the list <br>
    item()	Returns the token at a specified index <br>
    keys()	Returns an Iterator with the keys in the list <br>
    length	Returns the number of tokens in the list <br>
    remove()	Removes one or more tokens from the list <br>
    replace()	Replaces a token in the list <br>
    supports()	Returns true if a token is one of an attribute's supported tokens <br>
    toggle()	Toggles between tokens in the list <br>
    value	Returns the token list as a string <br>
    values()	Returns an Iterator with the values in the list
</div>
<h2>Syntax</h2>
<div class="code_p">
    element.classList.<a href="https://www.w3schools.com/jsref/prop_element_classlist.asp" target="_blank">DOMTokenList.</a> <br>
</div>
<h5 id="apply_add">Add a "myStyle" class to an element:</h5>

<button id="add" onclick="addStyle()">Add  myStyle class </button>
<button class="accordion">js Code</button>
<div class="panel">
    <pre class="code_p">
    let apply_add = document.getElementById("apply_add");
    function addStyle(){
        apply_add.classList.add("myStyle")
    }
    </pre>
</div>
<script>
    let apply_add = document.getElementById("apply_add");
    function addStyle(){
        apply_add.classList.add("myStyle")
    }
</script>
<h5 id="apply_remove" class="myStyle">Remove a "myStyle" class to an element:</h5>
<button onclick="removeStyle()()">Remove mySty class</button>
<button class="accordion">js Code</button>
<div class="panel">
    <pre class="code_p">
    let apply_remove = document.getElementById("apply_remove");
    function removeStyle(){
            apply_remove.classList.remove("myStyle")
        }
    </pre>
</div>
<script>
 let apply_remove = document.getElementById("apply_remove");
 function removeStyle(){
        apply_remove.classList.remove("myStyle")
    }
</script>
<h5 id="apply_toggle">toggle a "myStyle" class to an element:</h5>
<button onclick="toggleStyle()()">Toggle mySty class</button>
<button class="accordion">js Code</button>
<div class="panel">
    <pre class="code_p">
    let apply_toggle = document.getElementById("apply_toggle");
    function toggleStyle(){
        apply_toggle.classList.toggle("myStyle")
    }
    </pre>
</div>
<script>
    let apply_toggle = document.getElementById("apply_toggle");
    function toggleStyle(){
        apply_toggle.classList.toggle("myStyle")
    }
</script>
</div>