//querySelector= checking for class with specific class in (hooks)
let classbtnRight = document.querySelector(".btnRight")
//querySelectorALL= checking for all classes with name in (hooks)
let varslides = document.getElementsByClassName('slides')[0].children
console.log(varslides)

let i = 0;
// function to read our click
classbtnRight.addEventListener("click", function () {
    if (i === varslides.length-1) {
        console.log('bla bla bla', i)
        varslides[i].classList.add("block")
        varslides[i-2].classList.remove("block")
        i = 0;
    }else{
        console.log('lololololol', i)
        varslides[i+1].classList.remove("block")
        varslides[i].classList.add("block")
        i++;
    }

})

