 //---------------------Page article-------------------------

const button= document.querySelector("#button")
const textareaArticle = document.querySelector("#textareaArticle")
const textareaTitreArticle = document.querySelector("#textareaTitreArticle")
const textareaCatArticle = document.querySelector("#textareaCatArticle")
const addImage = document.querySelector("#addImage")
const form =document.querySelector("form")
const container = document.querySelector("#container")

const modification = document.querySelectorAll("#title, #cat, #edit")
const editBtn = document.querySelector("#editBtn")
const saveBtn = document.querySelector('#saveBtn') 



form.addEventListener("submit", (eo)=>{
    eo.preventDefault()
    const task =  `   
  
 <div class="card-article col-lg-6 " id="task" >
                <div class="img-article"  >
                    <img  src="${addImage.value}" >
                </div>
                <div class="info-article"  >
                    <h5>${textareaTitreArticle.value}</h5>
                    <h6>Catégorie : ${textareaCatArticle.value} </h6>
                    <p   class="modArticle"> ${textareaArticle.value} </p> <br>
                    <p > jjjjj </p>
                        <input type="button" value="Supprimer l'article" class="remove"><br>
                        <input type="button" value="Modifier l'article" class="update">
                        <input type="button" value="Sauvegarder" class="saveBtn" >
                </div>
            </div>
  `
container.innerHTML += task 
})
 

container.addEventListener("click", (eo ) => {


if (eo.target.className === "remove"){  
    eo.target.parentElement.parentElement.remove()
    
} else {
    (eo.target.className === "update")
    eo.target.parentElementcontentEditable = true
}


editBtn.addEventListener("click", function() {
 if(!modification[0].contentEditable) {
    modification[0].contentEditable = true
    
}  
 
})

 
saveBtn.addEventListener("click", (e) => {
  modification.contentEditable = false;

}) 



})
 
/* 
let editBtn = document.querySelector("#editBtn")
 let modification = document.querySelectorAll("#title, #cat, #contente")
editBtn.addEventListener('click', function(e)  {
    if(!modification[0].isContentEditable){
        modification[0].isContentEditable ='true';
        modification[1].isContentEditable ='true';
        modification[2].isContentEditable ='true';
        editBtn.innerHTML = 'Sauvegarder la modification'
        editBtn.style.backgroundColor = "red"
    }else{
        //Désactiver la modification
        modification[0].isContentEditable ='false';
        modification[1].isContentEditable ='false';
        modification[2].isContentEditable ='false';
        //Changer le text et la couleur du button
        editBtn.innerHTML ='Modifier'
        editBtn.style.backgroundColor = 'blue'
        //Sauvegarder les données
           for (var i = 0; i < modification.length; i++) {
      localStorage.setItem(modification[i].getAttribute('id'), modification[i].innerHTML);
    }
    }

    
})
 */

 







