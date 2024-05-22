//  document.querySelector('body').classList.add('p-6','bg-slate-300','text-red-500')
//  showCode('createElementCode-1', createElementCode_1);
const showCodeClass = document.getElementsByClassName('showCode');
for(let showItem = 0; showItem < showCodeClass.length; showItem++){
   showCodeClass[showItem].style ='color:blue; border:5px solid black; padding:10px';
}
function showCode(OutputId, codeText){
    const insertEle_1 = document.getElementById(OutputId);
    insertEle_1.style='color:blue; border:5px solid black; padding:10px';
    insertEle_1.innerText = codeText;
 }