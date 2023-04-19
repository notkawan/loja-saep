const like = document.getElementById('gostei');
const favorito= document.getElementById("favorito")
const deslike = document.getElementById('deslike');
const contador = document.getElementById("contador")
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
   if(like.getAttribute('fill') === 'green' || deslike.getAttribute('fill') === 'currentColor'){
      like.setAttribute('fill', 'currentColor')
      deslike.setAttribute('fill', 'red')
      count--;
      contador.innerHTML = count;
      countDeslike ++;
      contadorDeslike.innerHTML = countDeslike;
   }
})

favorito.addEventListener('click', ()=>{
  
      if(favorito.getAttribute('fill') === 'currentColor'){
         favorito.setAttribute('fill', 'yellow')
      }else{
         favorito.setAttribute('fill', 'currentColor')
      }
   
});

