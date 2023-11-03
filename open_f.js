function open_full(full_but,article){
    document.querySelector("."+full_but).addEventListener("click",function(){
        document.querySelector("."+article).classList.toggle("open_article")
        // document.body.classList.toggle("blur")
        document.querySelector(".blur").classList.toggle("blur_1")
    })

}