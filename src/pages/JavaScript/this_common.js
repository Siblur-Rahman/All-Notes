//  document.querySelector('body').classNameList.add('p-6','bg-slate-300','text-red-500')
//  showCode('createElementCode-1', createElementCode_1);
const showCodeclassName = document.getElementsByclassName('showCode');
for(let showItem = 0; showItem < showCodeclassName.length; showItem++){
   showCodeclassName[showItem].style ='color:blue; border:5px solid black; padding:10px';
}
function showCode(OutputId, codeText){
    const insertEle_1 = document.getElementById(OutputId);
    insertEle_1.style='color:blue; border:5px solid black; padding:10px';
    insertEle_1.innerText = codeText;
 }