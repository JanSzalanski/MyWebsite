const capcha = document.querySelector(".Captcha");
const ContactBtn = document.querySelector(".Contact__Btn");
const CrossH = document.querySelector(".Contact__Cross-H--Btn");
const CrossV = document.querySelector(".Contact__Cross-V--Btn");
const ContactBoard = document.querySelector(".Contact__Board");

const AsmrBtn = document.querySelector(".Footer__Nav-Right-Title");
const PanelASMR = document.querySelector(".Footer__Nav"); //yep
const StrzalkaAsmr = document.querySelector(".Footer__Nav-Right-Arrow"); //yep

const items = document.querySelectorAll(".Nav__Item");
const itemsParent = document.querySelector(".Nav__List");

let root = document.documentElement;

const colorsOfTheNight = () => {
  root.style.setProperty("--color-main", "#720042");
  root.style.setProperty("--color-main1A", "#004d26");
  root.style.setProperty("--color-main1AA", "#ff008c99");
  root.style.setProperty("--color-main1", "#ff008c");
  root.style.setProperty("--color-main2", "#00ff00");
  root.style.setProperty("--color-main3", "#000000");
  root.style.setProperty("--color-main4", "#005558");
  root.style.setProperty("--color-main4A", "#0055587e");
  root.style.setProperty("--color-main5", "#004d27");
  root.style.setProperty("--color-panel-mainA", "rgb(55, 13, 59)");
  root.style.setProperty("--color-panel-mainB", "rgb(51, 27, 51)");
  root.style.setProperty("--color-panel-mainC", "rgba(92, 21, 94, 0.2)");
  root.style.setProperty("--color-panel-mainD", "rgba(18, 5, 18, 0.8)");
};

colorsOfTheNight();

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
    ContactBoard.classList.add("Contact__Board-Hide");
    capcha.classList.remove("Captcha-Discover");
    capcha.classList.add("Captcha-Hide");
  }
}

itemsParent.addEventListener("click", activateItem);
// itemsParent.addEventListener("touchend", activateItem);

AsmrBtn.addEventListener("click", WyjazdASMR);
// AsmrBtn.addEventListener("touchend", WyjazdASMR);

ContactBtn.addEventListener("click", WyjazdContact);
// ContactBtn.addEventListener("touchend", WyjazdContact);
