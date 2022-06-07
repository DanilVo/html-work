//querySelector= checking for class with specific name in (hooks)
let classbtnRight = document.querySelector(".btnRight")
//querySelectorALL= checking for all classes with name in (hooks)
let varslides = document.querySelectorAll('img')

let i = 1;
// function to read our click
classbtnRight.addEventListener("click", function () {
    i++;
    if (i >= varslides.length && !(i > 3)) {
        varslides[i - 1].classList.add("block")
        varslides[i].classList.remove("block")
        if(i = 3){
            i = 1;
        }
    }else{
        varslides[i - 1].classList.add("block")
        varslides[i].classList.remove("block")
    }
})