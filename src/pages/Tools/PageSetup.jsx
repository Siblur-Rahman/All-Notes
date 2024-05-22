const page =`
import { useContext, useEffect } from "react";
import { ToolsForCode } from "../../CodeProvider";
import Active, { Accordion } from "../../components/CommonJS/CommonJS";
import ToolsLeftbar from "./ToolsLeftbar";

const FileName = () => {
    const {curlyBraceOpen, curlyBraceClosed, greaterThan,
        lessThan} = useContext(ToolsForCode)
        useEffect(() =>{
            Active();
            Accordion();
        })
    return (
        <>
        <div className="leftBar">
            <ToolsLeftbar/>
        </div>    
        <div className="content">
           <ArrowFunction/>
        </div>    
        </>
    );
};

export default FileName;
`

const leftbar =`
const FileLeftbar = () => {
    return (
        <div>
            <a href="#Theme" className="link">Topic</a>
        </div>
    );
};

export default FileLeftbar;
`
var acc = document.getElementsByClassName("accordion");
var accCount;

for (accCount = 0; accCount < acc.length; accCount++) {
  acc[accCount].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display == "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    } 
  });
}
const PageSetup = () => {
    return (
        <>
        <div id="pagesetup" className="jump_to">
            <pre className="code">
            {page}
            </pre>
        </div>
        <h2 className="heading">Leftbar</h2>
        <div>
            <pre className="code">
            {leftbar}
            </pre>
        </div>
<button id="1" className="accordion">1. Suntax, declaration & Call</button>
<div className="panel">
   <h3>Syntax</h3>
   <pre className="code_p">
      function name(parameter1, parameter2, parameter3) {
   // code to be executed
   }
   </pre>
   <h4>Function declaration</h4>

   </div>
        </>
    );
};

export default PageSetup;