const deleteForms= document.querySelectorAll('form.animal-distroyer');

deleteForms.forEach((deleteFormElement)=>{
    deleteFormElement.addEventListener('submit', function(event){
        event.preventDefault();

        if(window.confirm('ARE YOU SHURE YOU WANT DELETE THIS ANIMAL?')=== true){
            this.submit();
        }
    });
})


