const model = document.querySelector(".MODEL")
const toggle_model =document.querySelectorAll("#toggle_model")
const overlay = document.querySelector(".overlay")



toggle_model.forEach((item)=>{
    item.addEventListener("click",(e)=>{
        if(model.classList.contains("active")){
            model.classList.remove("active")
            overlay.classList.remove("active")
        }
        else{
    
            model.classList.add("active")
            overlay.classList.add("active")
        }
    })
})

overlay.addEventListener("click",()=>{
    if(model.classList.contains("active")){
        model.classList.remove("active")
        overlay.classList.remove("active")
    }
    else{

        model.classList.add("active")
        overlay.classList.add("active")
    }
})