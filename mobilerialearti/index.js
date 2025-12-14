//window.alert("Mobileria Learti ofron zbritje te madhe me 1 Dhjetor 2025!")
function ndryshotitullin() {
    document.getElementById("titulli-ri").innerHTML="Modelet e fundit i gjeni tek ne!";
}

function shfaqinfot(){
    document.getElementById("shfaqe").style.display="block";
    document.getElementById("button").style.display="none";
}

const metri =document.getElementById("input1");
const cmimimeter = document.getElementById ("input2");

function llogaritcmimin(){
    cmimimeter.value = metri.value * 300;
}
metri.addEventListener("input", llogaritcmimin);

const inputEmri = document.getElementById ("inputEmri");
const inputEmaili = document.getElementById ("inputEmaili");
const inputPershkrimi = document.getElementById ("inputPershkrimi");
const sendButton = document.getElementById ("send-button");

function Dergo (){
    if  ( inputEmri.value === "" || inputEmaili.value ===  "" || inputPershkrimi.value === "" ) {
            window.alert ("Te lutem ploteso te gjitha fushat para se te dergosh mesazhin!");
        } else {
        sendButton.value = "Duke u procesuar...";
    }
}

sendButton.addEventListener ("click", Dergo);

function mousimbi(){
    document.getElementById("foto-nje").style.display="none";

}

function mousijashte(){
    document.getElementById("foto-dy").style.display="block";
}

const cards = document.querySelectorAll(".card");

function flipcard() {
    this.classList.toggle("flip");
}
cards.forEach((card)=> card.addEventListener("click",flipcard));

const butoni = document.querySelectorAll(".button");
const image = document.querySelectorAll(".image");

for (i=0; i < butoni.length; i++) {
    butoni[i].addEventListener("click", (e) => {
        e.preventDefault();

        const filter = e.target.dataset.filter;
        image.forEach((image) => {
            if ( filter === "tegjitha") {
                image.style.display = "block";
            } else {
                if (image.classList.contains(filter)) {
                    image.style.display = "block";
                } else{
                    image.style.display = "none";
                }
            }
        })
    })
}