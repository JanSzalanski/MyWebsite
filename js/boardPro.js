const kontenerowiec = document.getElementById("Article__Artykul-Pro");
const allParagraphs = [...kontenerowiec.querySelectorAll("p")];
const tytul = document.querySelector(".Article__TytulBoczny-Pro");

const btnArticle1 = document.querySelector(".Article__Btn");
const btnArticle2 = document.querySelector(".Article__Btn-B");
const btnArticle3 = document.querySelector(".Article__Btn-C");
const btnArticle4 = document.querySelector(".Article__Btn-D");
const btnArticle5 = document.querySelector(".Article__Btn-E");

const paraA = document.getElementById("Article__Artykul-Pro-A");
const paraB = document.getElementById("Article__Artykul-Pro-B");
const paraC = document.getElementById("Article__Artykul-Pro-C");
const paraD = document.getElementById("Article__Artykul-Pro-D");
const paraE = document.getElementById("Article__Artykul-Pro-E");
const BtnDiv = document.querySelector(".Article__Buttons");
const buttonsArray = [...BtnDiv.querySelectorAll("div")];
const btnP = document.querySelector(".Button");
const btnL = document.querySelector(".Button2");

function addActionBtns() {
  let id = 0;
  buttonsArray.forEach((button) => {
    button.addEventListener("click", przewinBtn);
    button.setAttribute("data-index", `${id}`);
    id++;
  });
}

function actBtn() {
  switch (index) {
    case 0:
      buttonsArray.forEach((button) => {
        button.classList.remove("Article__Btn--active");
        button.classList.add("Article__Btn--inactive");
      });
      btnL.removeEventListener("click", przewinLewo);
      tytul.style.left = "-16.66px";
      btnL.style.opacity = "0";
      setTimeout(() => {
        btnL.style.visibility = "none";
        btnL.style.cursor = "default";
      }, 500);

      buttonsArray[0].classList.add("Article__Btn--active");
      buttonsArray[0].classList.remove("Article__Btn--inactive");
      break;

    case 1:
      buttonsArray.forEach((button) => {
        button.classList.remove("Article__Btn--active");
        button.classList.add("Article__Btn--inactive");
      });

      buttonsArray[1].classList.remove("Article__Btn--inactive");
      buttonsArray[1].classList.add("Article__Btn--active");

      break;
    case 2:
      buttonsArray.forEach((button) => {
        button.classList.remove("Article__Btn--active");
        button.classList.add("Article__Btn--inactive");
      });

      buttonsArray[2].classList.remove("Article__Btn--inactive");
      buttonsArray[2].classList.add("Article__Btn--active");

      break;

    case 3:
      buttonsArray.forEach((button) => {
        button.classList.remove("Article__Btn--active");
        button.classList.add("Article__Btn--inactive");
      });
      buttonsArray[3].classList.remove("Article__Btn--inactive");
      buttonsArray[3].classList.add("Article__Btn--active");

      break;
    case 4:
      buttonsArray.forEach((button) => {
        button.classList.remove("Article__Btn--active");
        button.classList.add("Article__Btn--inactive");
      });

      buttonsArray[4].classList.add("Article__Btn--active");
      buttonsArray[4].classList.remove("Article__Btn--inactive");

      break;
  }
}
/////////////////////////////////////////////////////////////ZMIENNE ANIMACJI///////////////////////////////////////////////////////////////////////////////////////////>
let currentIndex = 1;
let rightShift = 0; // Ło a co to kombinowałem już coś ...

let zmienna = 21.67;
let startowa = 0;
let index = 0;
let btnIndex = 0;
let znak = 1;

const options = {
  duration: 700,
  fill: "forwards",
  easing: "linear",
};

let getOpacity = [
  {
    opacity: 1,
  },

  {
    opacity: 0.4,
    offest: 0.25,
  },

  {
    opacity: 0,
    offest: 0.35,
  },

  {
    opacity: 0,
    offest: 0.5,
  },

  {
    opacity: 0.2,
    offest: 0.65,
  },

  {
    opacity: 0.5,
    offest: 0.75,
  },

  {
    opacity: 1,
  },
];
let getOpacityAlt = [
  {
    opacity: 1,
  },

  {
    opacity: 0.5,
    offest: 0.25,
  },

  {
    opacity: 0.3,
    offest: 0.35,
  },

  {
    opacity: 0.2,
    offest: 0.5,
  },

  {
    opacity: 0.3,
    offest: 0.65,
  },

  {
    opacity: 0.5,
    offest: 0.75,
  },

  {
    opacity: 1,
  },
];

/////////////////////////////////////////////////////////////FUNKCJE PRZTYCISKÓW DOLNYCH///////////////////////////////////////////////////////////////////////////////>

function przewinBtn() {

  let btnIndex = this.getAttribute("data-index");
  let mnoznik = btnIndex - index;

  mnoznik = Math.abs(mnoznik);

  buttonsArray.forEach((button) => {
    button.classList.remove("Article__Btn--active");
    button.classList.add("Article__Btn--inactive");
  });
  buttonsArray[btnIndex].classList.add("Article__Btn--active");
  buttonsArray[btnIndex].classList.remove("Article__Btn--inactive");

  if (btnIndex > index) {

    znak = -1;
    startowa = startowa + zmienna * znak * mnoznik;
    let nowa = startowa.toFixed(3);

    let Move = [
      {
        transform: `translateX(${nowa}%)`,
      },
    ];

    options.duration = 700;
    if (mnoznik > 1) {
      options.duration = 400 * mnoznik;
    }

    buttonsArray[btnIndex].removeEventListener("click", przewinBtn);

    paraA.animate(getOpacity, options);
    paraB.animate(getOpacity, options);
    paraC.animate(getOpacity, options);
    paraD.animate(getOpacity, options);
    paraE.animate(getOpacity, options);
    if (mnoznik > 1) {
      paraA.animate(getOpacityAlt, options);
      paraB.animate(getOpacityAlt, options);
      paraC.animate(getOpacityAlt, options);
      paraD.animate(getOpacityAlt, options);
      paraE.animate(getOpacityAlt, options);
    }
    kontenerowiec.animate(Move, options);

    setTimeout(() => {
      // trzeba by sie zastanowic czy to działa ???

      buttonsArray[btnIndex].addEventListener("click", przewinBtn);
    }, 466 * mnoznik);
  }
  if (btnIndex < index) {

    znak = 1;
    startowa = startowa + zmienna * znak * mnoznik;
    let nowa = startowa.toFixed(3);

    let Move = [
      {
        transform: `translateX(${nowa}%)`,
      },
    ];
    options.duration = 700;
    if (mnoznik > 1) {
      options.duration = 400 * mnoznik;
    }

    buttonsArray[btnIndex].removeEventListener("click", przewinBtn);

    paraA.animate(getOpacity, options);
    paraB.animate(getOpacity, options);
    paraC.animate(getOpacity, options);
    paraD.animate(getOpacity, options);
    paraE.animate(getOpacity, options);
    if (mnoznik > 1) {
      paraA.animate(getOpacityAlt, options);
      paraB.animate(getOpacityAlt, options);
      paraC.animate(getOpacityAlt, options);
      paraD.animate(getOpacityAlt, options);
      paraE.animate(getOpacityAlt, options);
    }

    kontenerowiec.animate(Move, options);

    setTimeout(() => {
      // trzeba by sie zastanowic czy to działa ???

      buttonsArray[btnIndex].addEventListener("click", przewinBtn);
    }, 466 * mnoznik);
  }
  index = btnIndex;
  if (index == 0) {
    btnL.removeEventListener("click", przewinLewo);
    tytul.style.left = "-16.66px";
    btnL.style.opacity = "0";
    setTimeout(() => {
      btnL.style.visibility = "none";
      btnL.style.cursor = "default";
    }, 500);
  }
  if (index > 0) {
    btnL.addEventListener("click", przewinLewo);
    btnL.style.display = "block";
    btnL.style.visibility = "visible";
    btnL.style.cursor = "pointer";

    setTimeout(() => {
      btnL.style.opacity = "1";
    }, 500);

    tytul.style.left = "-32px";
  }
  if (index == 4) {
    btnP.removeEventListener("click", przewinPrawo);
    btnP.addEventListener("click", przewinLewo);
    btnP.style.transform = "translate(50%, -50%) rotateZ(-180deg)";
    ButtonShadow();
  } else if (index < 4) {
    btnP.removeEventListener("click", przewinLewo);
    btnP.addEventListener("click", przewinPrawo);
    btnP.style.transform = "translate(50%, -50%) rotateZ(0deg)";
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

const przewinLewo = () => {
  index--;
  znak = 1;
  options.duration = 700;
  actBtn();

  // addActionBtns();
  // btnIndex = buttonsArray.findIndex(button =>  button.classList.contains("Article__Btn--active"));

  //     buttonsArray[btnIndex].removeEventListener("click", przewinBtn);

  if (index == 4) {
    btnP.removeEventListener("click", przewinPrawo);
    btnP.addEventListener("click", przewinLewo);
    btnP.style.transform = "translate(50%, -50%) rotateZ(-180deg)";
    ButtonShadow();
  } else if (index < 4) {
    btnP.removeEventListener("click", przewinLewo);
    btnP.addEventListener("click", przewinPrawo);
    btnP.style.transform = "translate(50%, -50%) rotateZ(0deg)";
    ButtonShadow();
  }

  startowa = startowa + zmienna * znak;
  let nowa = startowa.toFixed(3);
  let Move = [
    {
      transform: `translateX(${nowa}%)`,
    },
  ];

  paraA.animate(getOpacity, options);
  paraB.animate(getOpacity, options);
  paraC.animate(getOpacity, options);
  paraD.animate(getOpacity, options);
  paraE.animate(getOpacity, options);

  kontenerowiec.animate(Move, options);
};

const przewinPrawo = () => {
  index++;
  znak = -1;
  options.duration = 700;

  actBtn();

  if (index > 0) {
    btnL.addEventListener("click", przewinLewo);
    btnL.style.display = "block";
    btnL.style.visibility = "visible";
    btnL.style.cursor = "pointer";

    setTimeout(() => {
      btnL.style.opacity = "1";
    }, 500);

    tytul.style.left = "-32px";
  }

  if (index == 4) {
    btnP.removeEventListener("click", przewinPrawo);
    btnP.addEventListener("click", przewinLewo);
    btnP.style.transform = "translate(50%, -50%) rotateZ(-180deg)";
    ButtonShadow();
  } else if (index < 4) {
    btnP.removeEventListener("click", przewinLewo);
    btnP.addEventListener("click", przewinPrawo);
    btnP.style.transform = "translate(50%, -50%) rotateZ(0deg)";
    ButtonShadow();
  }

  startowa = startowa + zmienna * znak;
  let nowa = startowa.toFixed(3);
  let Move = [
    {
      transform: `translateX(${nowa}%)`,
    },
  ];

  paraA.animate(getOpacity, options);
  paraB.animate(getOpacity, options);
  paraC.animate(getOpacity, options);
  paraD.animate(getOpacity, options);
  paraE.animate(getOpacity, options);

  kontenerowiec.animate(Move, options);
};

addActionBtns();
btnL.addEventListener("click", przewinLewo);
btnP.addEventListener("click", przewinPrawo);
window.addEventListener("keydown", pomocnicza);

// Btn.style.textShadow = "0px -12px 6px rgba(0, 0, 0, 0.4)";
//Btn.style.textShadow = "0px 12px 6px rgba(0, 0, 0, 0.4)";
