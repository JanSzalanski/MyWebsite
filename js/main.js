const capcha = document.querySelector(".Captcha");
const AsmrBtn = document.querySelector(".Footer__Nav-Right-Title"); //check
const PanelASMR = document.querySelector(".Footer__Nav"); //check
const StrzalkaAsmr = document.querySelector(".Footer__Nav-Right-Arrow"); //check

const ContactBtn = document.querySelector(".Contact__Btn");
const CrossH = document.querySelector(".Contact__Cross-H--Btn");
const CrossV = document.querySelector(".Contact__Cross-V--Btn");
const ContactBoard = document.querySelector(".Contact__Board");

const MeLink = document.querySelector(".MeButton-Link"); //button strona główna pstać ...
const naglowek = document.querySelector(".Header");
const stopka = document.querySelector(".Footer");
const beton = document.querySelector(".News");
const ogien = document.querySelector(".Board");
// const ogienMobo = document.querySelector(".boardMobo");
const ogienF = document.querySelector(".Canvas");
const ogienS1 = document.querySelector(".CanvasA");
const ogienS2 = document.querySelector(".CanvasB");
const ogienS3 = document.querySelector(".CanvasShadow");
const artykulT = document.querySelector(".GreyTop");
const artykul = document.querySelector(".GreyMiddle");
const nazwaM = document.querySelector(".Header__Logo-Left-H3");
const wiezaBabel1 = document.querySelector(".GreyMiddle__P1");
const wiezaBabel2 = document.querySelector(".GreyMiddle__P2");
const wiezaBabel3 = document.querySelector(".GreyMiddle__P3");
const wiezaBabel4 = document.querySelector(".GreyMiddle__P4");

const ogienM = document.querySelector(".BoardMobo");
const ogienFM = document.querySelector(".CanvasM");
const ogienS1M = document.querySelector(".CanvasAM");
const ogienS2M = document.querySelector(".CanvasBM");
const ogienS3M = document.querySelector(".CanvasShadowM");

const items = document.querySelectorAll(".Nav__Item");
const itemsParent = document.querySelector(".Nav__List");

const btnTrybNocny = document.querySelector(".BtnTrybNocny");
const btnDzwieki = document.querySelector(".BtnDzwieki");
const btnKolory = document.getElementById("kolory");

let root = document.documentElement;

const sprawdzanieTrybuNocnego = () => {
  if (sessionStorage.getItem("night")) {
    if (btnTrybNocny.checked === false) {
      btnTrybNocny.checked = true;
    }
    btnKolory.classList.toggle("night");
    root.style.setProperty("--color-panel-font", "#666");
    root.style.setProperty("--color-panel-grey", "#222");
    root.style.setProperty("--color-light-grey", "#3f3f3f");
    root.style.setProperty("--color-light-greyTop", "#696969");
    root.style.setProperty("--color-social", "rgb(255,255,255)");
    root.style.setProperty(
      "--color-screw",
      "radial-gradient(farthest-corner at 8px 8px, #111 0%, rgb(71, 61, 61) 100%)"
    );
    root.style.setProperty(
      "--shadow",
      "inset 0 0 0 1px rgba(34, 34, 34, 1), 0 0 0px 1px rgba(34, 34, 34, 0.5),-4px -5px 12px rgba(255, 255, 255, 0.2), 4px 5px 16px rgba(0, 0, 0, 1), 0px -3px 2px rgba(255, 255, 255, 0.15),0px 3px 2px rgba(0, 0, 0, 0.45), inset -5px -5px 12px rgba(0, 0, 0, 0.5), inset 5px 5px 12px rgba(0, 0, 0, 1)"
    );
  } else {
    return;
  }
};
sprawdzanieTrybuNocnego();

const TrybNocny = (e) => {
  if (e.target.checked === true) {
    sessionStorage.setItem("night", "true");
    btnKolory.classList.toggle("night");
    root.style.setProperty("--color-panel-font", "#666");
    root.style.setProperty("--color-panel-grey", "#222");
    root.style.setProperty("--color-light-grey", "#3f3f3f");
    root.style.setProperty("--color-light-greyTop", "#696969");
    root.style.setProperty("--color-social", "rgb(255,255,255)");
    root.style.setProperty(
      "--color-screw",
      "radial-gradient(farthest-corner at 8px 8px, #111 0%, rgb(71, 61, 61) 100%)"
    );
    root.style.setProperty(
      "--shadow",
      "inset 0 0 0 1px rgba(34, 34, 34, 1), 0 0 0px 1px rgba(34, 34, 34, 0.5),-4px -5px 12px rgba(255, 255, 255, 0.2), 4px 5px 16px rgba(0, 0, 0, 1), 0px -3px 2px rgba(255, 255, 255, 0.15),0px 3px 2px rgba(0, 0, 0, 0.45), inset -5px -5px 12px rgba(0, 0, 0, 0.5), inset 5px 5px 12px rgba(0, 0, 0, 1)"
    );
  } else {
    sessionStorage.removeItem("night");
    btnKolory.classList.toggle("night");
    root.style.setProperty("--color-panel-font", "#222");
    root.style.setProperty("--color-panel-grey", "rgb(193, 193, 193)");
    root.style.setProperty("--color-light-grey", "#8d8d8d");
    root.style.setProperty("--color-light-greyTop", "#b3b3b3");
    root.style.setProperty("--color-social", "rgb(0,0,0)");
    root.style.setProperty(
      "--color-screw",
      "radial-gradient(farthest-corner at 8px 8px, #222 0%, rgb(177, 156, 156) 100%)"
    );
    root.style.setProperty(
      "--shadow",
      " inset 0 0 0 1px rgba(204, 204, 204, 0.5), 0 0 0px 1px rgba(204, 204, 204, 0.65),-4px -5px 12px rgb(255, 255, 255), 2px 5px 15px rgba(0, 0, 0, 1), 0px -3px 2px rgba(255, 255, 255, 0.15),0px 3px 2px rgba(255, 255, 255, 0.95), inset -5px -5px 12px rgba(0, 0, 0, 0.35),inset 5px 5px 12px rgba(0, 0, 0, 0.6)"
    );
  }
};

function onSubmit(token) {
  document.getElementById("demo-form").submit();
}

const getActiveItem = () => {
  return Array.from(items).findIndex((item) => getActiveItem.classList.contains("Nav-Item--Active"));
};

const activateItem = (e) => {
  if (e.target.classList.contains("Nav__Item")) {
    items.forEach((item) => item.classList.remove("Nav__Item--Active"));
    e.target.classList.add("Nav__Item--Active");
  }
};

function WyjazdASMR() {
  if (!PanelASMR.classList.contains("Footer__Nav--open")) {
    if (PanelASMR.classList.contains("Footer__Nav--close")) {
      PanelASMR.classList.remove("Footer__Nav--close");
    }

    StrzalkaAsmr.style.transform = "rotateZ(90deg)";
    PanelASMR.classList.add("Footer__Nav--open");
  } else if (PanelASMR.classList.contains("Footer__Nav--open")) {
    PanelASMR.classList.remove("Footer__Nav--open");
    PanelASMR.classList.add("Footer__Nav--close");
    StrzalkaAsmr.style.transform = "rotateZ(-90deg)";
  }
}

//Plansza Kontaktu i obsługa animacji i eventów

function WyjazdContact() {
  if (!ContactBoard.classList.contains("Contact__Board-Discover")) {
    if (ContactBoard.classList.contains("Contact__Board-Hide")) {
      ContactBoard.classList.remove("Contact__Board-Hide");
    } //kontakt wjezdza ...
    // ponizej funkcje do nadawania i zabierania listenerow na przyciskach na zadany czas setTimeout
    ContactBtn.removeEventListener("click", WyjazdContact);
    setTimeout(() => {
      ContactBtn.addEventListener("click", WyjazdContact);
    }, 1450);

    ContactBtn.classList.remove("Contact__Btn");
    ContactBtn.classList.add("Contact__Btn-Active");
    CrossH.classList.add("Contact__Cross-H--Btn-Active");
    CrossH.classList.remove("Contact__Cross-H--Btn");
    CrossV.classList.add("Contact__Cross-V--Btn-Active");
    CrossV.classList.remove("Contact__Cross-V--Btn");
    ContactBtn.textContent = "Zamknij";
    ContactBoard.classList.add("Contact__Board-Discover");
    capcha.classList.remove("Captcha-Hide");
    capcha.classList.add("Captcha-Discover");
  } else if (ContactBoard.classList.contains("Contact__Board-Discover")) {
    ContactBtn.removeEventListener("click", WyjazdContact);
    setTimeout(() => {
      ContactBtn.addEventListener("click", WyjazdContact);
    }, 1050);

    //kontakt sie chowa ...
    ContactBtn.classList.remove("Contact__Btn-Active");
    ContactBtn.classList.add("Contact__Btn");
    CrossH.classList.remove("Contact__Cross-H--Btn-Active");
    CrossH.classList.add("Contact__Cross-H--Btn");
    CrossV.classList.remove("Contact__Cross-V--Btn-Active");
    CrossV.classList.add("Contact__Cross-V--Btn");
    ContactBtn.textContent = "Kontakt";
    ContactBoard.classList.remove("Contact__Board-Discover");
    capcha.classList.remove("Captcha-Discover");
    capcha.classList.add("Captcha-Hide");
    ContactBoard.classList.add("Contact__Board-Hide");
  }
}

function OddechStrony() {
  if (!naglowek.classList.contains("Header--Open")) {
    if (naglowek.classList.contains("Header--Close")) {
      naglowek.classList.remove("Header--Close");
      stopka.classList.remove("Footer--Close");
      beton.classList.remove("News--Discover");
      ogien.classList.remove("Board--Discover");
      ogienF.classList.remove("Canvas--Discover");
      ogienS1.classList.remove("Canvas--Discover");
      ogienS2.classList.remove("Canvas--Discover");
      ogienS3.classList.remove("Canvas--Discover");

      ogienM.classList.remove("BoardMobo--Discover");
      ogienFM.classList.remove("CanvasM--Discover");
      ogienS1M.classList.remove("CanvasM--Discover");
      ogienS2M.classList.remove("CanvasM--Discover");
      ogienS3M.classList.remove("CanvasM--Discover");

      artykul.classList.remove("GreyMiddle--Discover");
      artykulT.classList.remove("GreyTop--Discover");
      nazwaM.classList.remove("Header__Logo-Left-H3--Hide");
      wiezaBabel1.classList.remove("GreyMiddle__P--Hide");
      wiezaBabel2.classList.remove("GreyMiddle__P--Hide");
      wiezaBabel3.classList.remove("GreyMiddle__P--Hide");
      wiezaBabel4.classList.remove("GreyMiddle__P--Hide");
    }
    //rozpraszamy i zamykamy wszytkie zbedne rzeczy ...

    MeLink.removeEventListener("click", OddechStrony);
    setTimeout(() => {
      MeLink.addEventListener("click", OddechStrony);
    }, 3050); //wiadomo dezaktywuje przycisk postaci na czas trwania animacji
    naglowek.classList.add("Header--Open");
    stopka.classList.add("Footer--Open");
    beton.classList.add("News--Hide");
    ogien.classList.add("Board--Hide");
    ogienF.classList.add("Canvas--Hide");
    ogienS1.classList.add("Canvas--Hide");
    ogienS2.classList.add("Canvas--Hide");
    ogienS3.classList.add("Canvas--Hide");

    ogienM.classList.add("BoardMobo--Hide");
    ogienFM.classList.add("CanvasM--Hide");
    ogienS1M.classList.add("CanvasM--Hide");
    ogienS2M.classList.add("CanvasM--Hide");
    ogienS3M.classList.add("CanvasM--Hide");
    artykulT.classList.add("GreyTop--Hide");
    artykul.classList.add("GreyMiddle--Hide");
    nazwaM.classList.add("Header__Logo-Left-H3--Discover");
    wiezaBabel1.classList.add("GreyMiddle__P--Discover");
    wiezaBabel2.classList.add("GreyMiddle__P--Discover");
    wiezaBabel3.classList.add("GreyMiddle__P--Discover");
    wiezaBabel4.classList.add("GreyMiddle__P--Discover");

    if (ContactBtn.classList.contains("Contact__Btn-Active")) {
      ContactBtn.classList.add("Contact__Btn");
      ContactBtn.classList.remove("Contact__Btn-Active");
      CrossH.classList.remove("Contact__Cross-H--Btn-Active");
      CrossH.classList.add("Contact__Cross-H--Btn");
      CrossV.classList.remove("Contact__Cross-V--Btn-Active");
      CrossV.classList.add("Contact__Cross-V--Btn");
      ContactBtn.textContent = "Kontakt";
      ContactBoard.classList.add("Contact__Board-Hide");
    }
    if (PanelASMR.classList.contains("Footer__Nav--open")) {
      PanelASMR.classList.remove("Footer__Nav--open");
      PanelASMR.classList.add("Footer__Nav--close");
      StrzalkaAsmr.style.transform = "rotateZ(-90deg)";
    }
  } else if (naglowek.classList.contains("Header--Open")) {
    MeLink.removeEventListener("click", OddechStrony);
    setTimeout(() => {
      MeLink.addEventListener("click", OddechStrony);
    }, 1550); //wiadomo dezaktywuje przycisk postaci na czas trwania animacji powrotnej inne czasy ...

    naglowek.classList.remove("Header--Open");
    stopka.classList.remove("Footer--Open");
    beton.classList.remove("News--Hide");
    ogien.classList.remove("Board--Hide");
    ogienF.classList.remove("Canvas--Hide");
    ogienS1.classList.remove("Canvas--Hide");
    ogienS2.classList.remove("Canvas--Hide");
    ogienS3.classList.remove("Canvas--Hide");

    ogienM.classList.remove("BoardMobo--Hide");
    ogienFM.classList.remove("CanvasM--Hide");
    ogienS1M.classList.remove("CanvasM--Hide");
    ogienS2M.classList.remove("CanvasM--Hide");
    ogienS3M.classList.remove("CanvasM--Hide");
    artykul.classList.remove("GreyMiddle--Hide");
    artykulT.classList.remove("GreyTop--Hide");
    nazwaM.classList.remove("Header__Logo-Left-H3--Discover");
    wiezaBabel1.classList.remove("GreyMiddle__P--Discover");
    wiezaBabel2.classList.remove("GreyMiddle__P--Discover");
    wiezaBabel3.classList.remove("GreyMiddle__P--Discover");
    wiezaBabel4.classList.remove("GreyMiddle__P--Discover");

    naglowek.classList.add("Header--Close");
    stopka.classList.add("Footer--Close");
    beton.classList.add("News--Discover");
    ogien.classList.add("Board--Discover");
    ogienF.classList.add("Canvas--Discover");
    ogienS1.classList.add("Canvas--Discover");
    ogienS2.classList.add("Canvas--Discover");
    ogienS3.classList.add("Canvas--Discover");

    ogienM.classList.add("BoardMobo--Discover");
    ogienFM.classList.add("CanvasM--Discover");
    ogienS1M.classList.add("CanvasM--Discover");
    ogienS2M.classList.add("CanvasM--Discover");
    ogienS3M.classList.add("CanvasM--Discover");
    artykul.classList.add("GreyMiddle--Discover");
    artykulT.classList.add("GreyTop--Discover");
    nazwaM.classList.add("Header__Logo-Left-H3--Hide");
    wiezaBabel1.classList.add("GreyMiddle__P--Hide");
    wiezaBabel2.classList.add("GreyMiddle__P--Hide");
    wiezaBabel3.classList.add("GreyMiddle__P--Hide");
    wiezaBabel4.classList.add("GreyMiddle__P--Hide");
  }
}

itemsParent.addEventListener("click", activateItem);
// itemsParent.addEventListener("mouseover", hoverItem);
//itemsParent.addEventListener("touchend", activateItem);

ContactBtn.addEventListener("click", WyjazdContact);
//ContactBtn.addEventListener("touchend", WyjazdContact);

AsmrBtn.addEventListener("click", WyjazdASMR);
//AsmrBtn.addEventListener("touchend", WyjazdASMR);

MeLink.addEventListener("click", OddechStrony);
//MeLink.addEventListener("touchend", OddechStrony);

btnTrybNocny.addEventListener("click", TrybNocny);
