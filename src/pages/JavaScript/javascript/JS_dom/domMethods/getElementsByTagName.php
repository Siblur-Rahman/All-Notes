
<p class="accordion">getElementsByTagName</p>
<div class="panel">
      <h2>getElementsByTagName<span class="itc"><a href="https://www.w3schools.com/jsref/met_document_getelementsbytagname.asp"  target="_blank">Details</a></span></h2>
      <p>getElementByTagName allows you to search all the elements with a specified tag name on your page. </p>
      <div class="mark">
      The getElementsByTagName() method returns a collection of all elements with a specified tag name. <br>

      The getElementsByTagName() method returns an <span class="itc">HTMLCollection</span>. <br>

      The getElementsByTagName() property is read-only. <br>
      </div>
      <h2>Syntax</h2>
      <div class="code_p">
         document.getElementsByTagName("tagname");
      </div>
      <h2 class="accordion">Traversing Code</h2>
      <div class="panel tagname" id="">

      </div>         
      <script>
         const tagnameCode_1 = `
      let h2= document.getElementsByTagName('h2');

      for(let i = 0; i < h2.length; i++){
         if(i ==0){
            h2[i].style.color = 'red';
         }else if(i==1){
            h2[i].style.color = 'yellow';
         }else{
            h2[i].style.color = 'blue';
         }
      }
      `;
      document.getElementsByClassName("tagname")[0].innerText = tagnameCode_1;
      </script>
      <!-- <button class="itc"><a href="" target="_blank">watch video <span class="itc"></span></a></button> -->
      <!-- <button><a href="./file_example.html" target="_blank"></a></button> -->
</div>
