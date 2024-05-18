<p class="accordion">style</p>
<div class="panel">
    <h2>HTML DOM Element style <span class="itc"><a href="https://www.w3schools.com/jsref/prop_html_style.asp"  target="_blank">Details</a></span></h2>
    <div class="mark">
    The style property returns the values of an element's style attribute. <br>

    The style property returns a CSSStyleDeclaration object. <br>

    The CSSStyleDeclaration object contains all inline styles properties for the element. It does not contain any style properties set in the &lt;head&gt; section or in any external style sheets.
    </div>
    <h2>Syntax</h2>
        <h3>Returns a style property</h3>
        element.style.property
        <p>Example</p>
        document.getElementById("id").style.color;

        <h3>Set a style property</h3>
        element.style.property = "value"
        <p>Example</p>
        document.getElementById("id").style.color = "blue";
        <h3>Changing Multiple Style</h3>
        element.style= "property: <span class="itc">value</span>; property: <span class="itc">value</span>; ....."
        <p>Example</p>
        document.getElementById("id").style= "background : red; color : yellow"
        <h3>Or</h3>
        var id = document.getElementById("id"); <br><br>
        id.style.background = "red"; <br>
        id.style.color = "yellow"; <br>
        id.style.width = "50%" <br>
        <!-- <button> <span class="itc"><a href="../../js_html_dom/dom_properties"  target="_blank">Click to see Example Page</a></span></button> -->
</div>