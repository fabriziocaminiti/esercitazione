document.addEventListener('scroll',()=>{
    let navbar=document.querySelector('#navbar')
if(window.pageYOffset>110){
    navbar.classList.add('bg-white','border-bottom-main')
} else{
    navbar.classList.remove('bg-white','border-bottom-main')
}
    console.log(window.pageYOffset)
})