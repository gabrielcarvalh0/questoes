class PageController{
    constructor(){

    }
}


function Opcoes() {

    const result = document.querySelectorAll(".form-check-label span")
    const array = [];
 
    result.forEach(texto => {
     
   const res = texto.innerText

    array.push(res)
  
    });
   result[0].innerText = ramdomNumber(array)
  

   console.log(result)
}
 
function ramdomNumber(array){
    array[Math.random() < 0.5 ? 0 : 1]
}