document.addEventListener('scroll',()=>{

   let navbar = document.querySelector('#navbar')
   let logo =document.querySelector('#logo')


   if(window.pageXOffset > 120){
       navbar.classList.add('bg-white')
   }

    console.log(window.pageXOffset);
})