const model = document.querySelector(".MODEL")
const toggle_model =document.querySelectorAll("#toggle_model")
const overlay = document.querySelector(".overlay")
const card = document.querySelector(".card")


toggle_model.forEach((item)=>{
    
    item.addEventListener("click",(e)=>{
        
        card.dataset.id = e.target.dataset.id
        const id= e.target.dataset.id
        const name = e.target
        console.log(id)

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