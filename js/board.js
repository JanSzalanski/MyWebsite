const kontenerowiec = document.getElementById('Article__Artykul-Two');

const btnArticle1 = document.querySelector(".Article__Btn");
const btnArticle2 = document.querySelector(".Article__Btn-B");


const paraA = document.getElementById('Article__Artykul-Pro-Two')
const paraB = document.getElementById('Article__Artykul-Pro-Two-B')

const BtnDiv = document.querySelector(".Article__Buttons"); 
const buttonsArray = [...BtnDiv.querySelectorAll("div")];
const btnP = document.querySelector(".Button");


function addActionBtns () {

        let id = 0;

        buttonsArray.forEach( button => {
            button.addEventListener("click", przewinBtn); 
            button.setAttribute("data-index", `${id}`);
            id++;
         
        }); 
}   
 
function actBtn () {
 
    
    switch(index){
        case 0:

            buttonsArray.forEach( (button) => {

                button.classList.remove("Article__Btn--active");
                button.classList.add("Article__Btn--inactive");
        
            })
    
            buttonsArray[0].classList.add("Article__Btn--active"); 
            buttonsArray[0].classList.remove("Article__Btn--inactive");     
            break;

        case 1:

            buttonsArray.forEach( (button) => {

                button.classList.remove("Article__Btn--active");
                button.classList.add("Article__Btn--inactive");
        
            })


            buttonsArray[1].classList.remove("Article__Btn--inactive");    
            buttonsArray[1].classList.add("Article__Btn--active");           
         
            break;
      
    }
}
/////////////////////////////////////////////////////////////ZMIENNE ANIMACJI///////////////////////////////////////////////////////////////////////////////////////////>
let currentIndex = 1;
// let rightShift = 0; // Ło a co to kombinowałem już coś ...

let zmienna = 63;
let startowa = 0;
let index = 0;
let btnIndex = 0;
let znak = 1;

const options = {

    duration: 700,
    fill: 'forwards',
    easing: 'linear',

}

let getOpacity = 

[    {
    opacity: 1
},

{
    opacity: 0.4, offest: 0.25
},

{
    opacity: 0, offest: 0.35
},

{
    opacity: 0, offest:0.5
},

{
    opacity: 0.2, offest:0.65
},

{
    opacity: 0.5, offest:0.75
},

{

    opacity: 1
}]


/////////////////////////////////////////////////////////////FUNKCJE PRZTYCISKÓW DOLNYCH///////////////////////////////////////////////////////////////////////////////>

function przewinBtn () {


    let btnIndex = this.getAttribute("data-index");

    buttonsArray.forEach( (button) => {

        button.classList.remove("Article__Btn--active");
        button.classList.add("Article__Btn--inactive");

    })
    buttonsArray[btnIndex].classList.add("Article__Btn--active");
    buttonsArray[btnIndex].classList.remove("Article__Btn--inactive");
   
    if (btnIndex > index) {

        znak = -1;
        startowa = (startowa + (zmienna * znak)) ;
        let nowa = startowa.toFixed(3);
        let Move = [{ 
    
            transform: `translateX(${nowa}%)`
    
        }]
        
        options.duration = 700; 
  
        buttonsArray[btnIndex].removeEventListener("click", przewinBtn);
          
        paraA.animate(getOpacity, options);
        paraB.animate(getOpacity, options);

        kontenerowiec.animate(Move, options);

        setTimeout(() => {  // trzeba by sie zastanowic czy to działa ???

            buttonsArray[btnIndex].addEventListener("click", przewinBtn);

        }, 700);
        
    }
    if (btnIndex < index) { 

        znak = 1;
        startowa = (startowa + (zmienna * znak))  ;
        let nowa = startowa.toFixed(3);


        let Move = [{
    
            transform: `translateX(${nowa}%)`
    
        }]
        options.duration = 700; 
      

        buttonsArray[btnIndex].removeEventListener("click", przewinBtn);

        paraA.animate(getOpacity, options);
        paraB.animate(getOpacity, options);

      
        kontenerowiec.animate(Move, options);
        
        setTimeout(() => { // trzeba by sie zastanowic czy to działa ???

            buttonsArray[btnIndex].addEventListener("click", przewinBtn);

        }, 700);
        
    }
    index = btnIndex; 
    if(index == 0) {

        btnP.addEventListener("click", przewinPrawo);
        btnP.removeEventListener("click", przewinLewo);
        btnP.style.transform = "translate(50%, -50%) rotateZ(0deg)";
        ButtonShadow(); 

    }
    if (index > 0) {

        btnP.removeEventListener("click", przewinPrawo);
        btnP.addEventListener("click", przewinLewo);
        btnP.style.transform = "translate(50%, -50%) rotateZ(-180deg)";
        ButtonShadow(); 

    }
  
}

/////////////////////////////////////////////////////////////OBSŁUGA CIENI PRZYCISKOW//////////////////////////////////////////////////////////////////////////////////>
function ButtonShadow() {

    let zmienna = btnP.style.transform;

    if (btnP.style.transform == "") {

        btnP.style.transform = "translate(50%, -50%) rotateZ(0deg)";

    } else if (btnP.style.transform == "translate(50%, -50%) rotateZ(0deg)") {

        document.documentElement.style.setProperty("--arrow-shadow", "12px");
        document.documentElement.style.setProperty("--arrow-shadow-hover", "6px");

    } else if (btnP.style.transform == "translate(50%, -50%) rotateZ(-180deg)") {

        document.documentElement.style.setProperty("--arrow-shadow", "-12px");
        document.documentElement.style.setProperty("--arrow-shadow-hover", "-6px");

    }
}
/////////////////////////////////////////////////////////////OBSŁUGA STRZAŁEK PRZYCISKOW I KLAWISZY////////////////////////////////////////////////////////////////////>

const przewinLewo = () => {

    index--;
    znak= 1;
    options.duration = 700; 
    actBtn();

    // addActionBtns();
    // btnIndex = buttonsArray.findIndex(button =>  button.classList.contains("Article__Btn--active"));
        
    //     buttonsArray[btnIndex].removeEventListener("click", przewinBtn);
    if (index == 0) {

        btnP.addEventListener("click", przewinPrawo);
        btnP.removeEventListener("click", przewinLewo);
        btnP.style.transform = "translate(50%, -50%) rotateZ(0deg)";
        ButtonShadow(); 

    }

    startowa = startowa + zmienna * znak;
    let nowa = startowa.toFixed(3);
    let Move = [{

        transform: `translateX(${nowa}%)`
    }]

    paraA.animate(getOpacity, options);
    paraB.animate(getOpacity, options);

    kontenerowiec.animate(Move, options);

}

const przewinPrawo = () => {

    index++;
    znak = -1;
    options.duration = 700; 

    actBtn();


    if (index > 0) {

        btnP.removeEventListener("click", przewinPrawo);
        btnP.addEventListener("click", przewinLewo);
        btnP.style.transform = "translate(50%, -50%) rotateZ(-180deg)";
        ButtonShadow(); 

    }



    startowa = startowa + zmienna * znak;
    let nowa = startowa.toFixed(3);
    let Move = [{

        transform: `translateX(${nowa}%)`
 
    }]

    paraA.animate(getOpacity, options);
    paraB.animate(getOpacity, options);

    kontenerowiec.animate(Move, options);

}

const pomocnicza = (e) => {
    if (e.keyCode == 37) {
      if (index == 0) {
        return;
      }
      przewinLewo();
    }
  
    if (e.keyCode == 39) {
      if (index == buttonsArray.length - 1) {
        return;
      }
      przewinPrawo();
    }
  };

addActionBtns();
// btnL.addEventListener("click", przewinLewo);
btnP.addEventListener("click", przewinPrawo);
window.addEventListener("keydown", pomocnicza);

 
// Btn.style.textShadow = "0px -12px 6px rgba(0, 0, 0, 0.4)";
//Btn.style.textShadow = "0px 12px 6px rgba(0, 0, 0, 0.4)"; 