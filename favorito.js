const like = document.getElementById('gostei');
const favorito= document.getElementById("favorito")
const deslike = document.getElementById('deslike');
const contador = document.getElementById("contador")
const div = document.getElementById("div-item");
const contadorDeslike = document.getElementById("contadorDeslike");
let count = 0;
let countDeslike = 0;
contador.innerHTML = count;
contadorDeslike.innerHTML = countDeslike;

// Logica do click e desclick 
like.addEventListener('click', ()=>{
  
   if(like.getAttribute('fill') === 'currentColor'  ){
      if(deslike.getAttribute('fill') === 'red'){
         deslike.setAttribute('fill','currentColor')
         countDeslike --;
         contadorDeslike.innerHTML = countDeslike;}
      like.setAttribute('fill', 'green')
      count++;
      contador.innerHTML = count;
      
   }else{
      like.setAttribute('fill', 'currentColor')
     count --;
     contador.innerHTML = count;
   }
});

deslike.addEventListener('click', ()=>{
   if(deslike.getAttribute('fill') === 'currentColor'){
      if(like.getAttribute('fill') === 'green'){
         count --;
         contador.innerHTML = count;
      }
      like.setAttribute('fill', 'currentColor')
      deslike.setAttribute('fill', 'red')
      
      countDeslike ++;
      contadorDeslike.innerHTML = countDeslike;
   }else{
            deslike.setAttribute('fill', 'currentColor')
     countDeslike --;
     contadorDeslike.innerHTML = countDeslike;
   }
})

favorito.addEventListener('click',()=>{
   div.classList.add('hidden');
});
