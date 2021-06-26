const ContactBtn = document.querySelector(".Contact__BtnP");
const CrossH = document.querySelector(".Contact__Cross-H--BtnP");
const CrossV = document.querySelector(".Contact__Cross-V--BtnP");
const ContactBoard = document.querySelector(".Contact__Board");

const AsmrBtn = document.querySelector(".Footer__Nav-Right-TitleP");
const PanelASMR = document.querySelector(".Footer__Nav"); //yep
const StrzalkaAsmr = document.querySelector(".Footer__Nav-Right-ArrowP"); //yep

const items = document.querySelectorAll(".Nav__Item");
const itemsParent = document.querySelector(".Nav__List");

const logo = document.querySelector(".Header__Logo-Middle-Div");

let root = document.documentElement;

const colorsOfTheNight = () => {
  root.style.setProperty("--color-main", "#a8a888");
  root.style.setProperty("--color-main1A", "#e4e4e4");
  root.style.setProperty("--color-main1AA", "#fd050599");
  root.style.setProperty("--color-main1", "#fd0505");
  root.style.setProperty("--color-main2", "#a8a8a8");
  root.style.setProperty("--color-main3", "#a8a8a8");
  root.style.setProperty("--color-main4", "#a80000");
  root.style.setProperty("--color-main5", "#a8a8a8");
};
colorsOfTheNight();

const comeBack = () => {
  return window.open("index.html", "_self");
};

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
  }
}

logo.addEventListener("click", comeBack);

itemsParent.addEventListener("click", activateItem);
// itemsParent.addEventListener("touchend", activateItem);

AsmrBtn.addEventListener("click", WyjazdASMR);
// AsmrBtn.addEventListener("touchend", WyjazdASMR);

ContactBtn.addEventListener("click", WyjazdContact);
// ContactBtn.addEventListener("touchend", WyjazdContact);
