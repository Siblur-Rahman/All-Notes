
// Accordion Start
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

// show code
  function showCode(OutputId, codeText){
  const insertEle_1 = document.getElementById(OutputId);
  insertEle_1.style='color:blue; border:5px solid black; padding:10px';
  insertEle_1.innerText = codeText;
}

function getSetValue(getId, setId){
  let get = document.getElementById(getId).value;
  document.getElementById(setId).value = get;
}
function setValue(setId, value){
  return document.getElementById(setId).value = value;
}
function getValue(id){
  return document.getElementById(id).value;
}
