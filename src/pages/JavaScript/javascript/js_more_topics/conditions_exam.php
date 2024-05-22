<button class="accordion">Example-1 Check Even & Odd Number with if else & Function</button>
<div class="panel">
  <input type="number" id="ex1Input"><button id="ex1_btn_1">Check Even & Odd Number</button>
  <h2>result : <span id="ex1_output" class="itc"></span></h2>
  <script>
   
   let ex1_output= document.getElementById("ex1_output");
   let ex1_btn_1 = document.getElementById("ex1_btn_1");

   ex1_output.style.fontSize ="30px";
   

  //  Enen & Odd number Checker Function
   function checkEvenOddNumber(number){
    if(number==""){
      return "You didn't input a Number"
    }else if(number % 2 ===0){
      return "Input number is a Enen Number"
    }else if(number%2!==0){
      return "Input number is a Odd Number"
    }
    
   }

   ex1_btn_1.addEventListener("click", function(){
    let inputData = document.getElementById("ex1Input").value;
    ex1_output.innerText=checkEvenOddNumber(inputData);
   })
  </script>
</div>