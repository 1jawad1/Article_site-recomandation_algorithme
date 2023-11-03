let bar = document.querySelector(".head");
let affiche = true;
let upper = document.querySelector(".top");
window.addEventListener("scroll", function(){
    if(this.window.pageYOffset>50 ){
        if(affiche){
            bar.classList.toggle("header_2")
            affiche=false
        }
    }
    if(this.window.pageYOffset<50){
        if(!affiche){
            bar.classList.remove("header_2")
            affiche=true
        }
    }
    if(this.window.pageYOffset>570){
        upper.style.display="flex"
    }else{
        upper.style.display="none"

    }
})

upper.addEventListener("click", function(){

    window.scrollTo({top:0})
})



