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

const btnTrybNocny = document.querySelector(".BtnTrybNocny");
const btnDzwieki = document.querySelector(".BtnDzwieki");
const btnKolory = document.getElementById("kolory");

let root = document.documentElement;

///////////////////////elementy do koloru

const ShapeA = document.querySelector(".ShapeA");
const ShapeBA = document.querySelector(".ShapeBA");

const RectangleA = document.querySelectorAll(".RectangleA");
const RectanglesA = [...RectangleA];

const LinesA = document.querySelectorAll(".LinesA");
const LinjeA = [...LinesA];

const LinesB = document.querySelectorAll(".LinesB");
const LinjeB = [...LinesB];

const RectangleTresc = document.querySelectorAll(".RectangleTresc");
const RectanglesTresc = [...RectangleTresc];

const Background = document.querySelectorAll(".Background");
const Backgrounds = [...Background];

const ShapeB = document.querySelector(".ShapeB");
const ShapeC = document.querySelector(".ShapeC");

const ShapeBB = document.querySelector(".ShapeBB");
const ShapeBC = document.querySelector(".ShapeBC");

const NaglowekTresc = document.querySelectorAll(".NaglowekTresc");
const Naglowki = [...NaglowekTresc];

const BorderPic = document.querySelectorAll(".BorderPic");
const Borders = [...BorderPic];

const sprawdzanieTrybuKolorow = () => {
  if (sessionStorage.getItem("AltColors")) {
    if (btnTrybKolorow.checked === false) {
      btnTrybKolorow.checked = true;
    }
    ShapeA.classList.remove("Light");
    ShapeBA.classList.remove("Light");

    RectanglesA.forEach((rec) => {
      rec.classList.remove("Light");
    });

    LinjeA.forEach((linja) => {
      linja.classList.remove("Light");
    });

    LinjeB.forEach((linja) => {
      linja.classList.remove("Light");
    });

    RectanglesTresc.forEach((rec) => {
      rec.classList.remove("Light");
    });

    Backgrounds.forEach((back) => {
      back.classList.remove("Light");
    });

    //NaglowekTresc.classList.remove("Light");
    Naglowki.forEach((naglowek) => {
      naglowek.classList.remove("Light");
    });

    Borders.forEach((border) => {
      border.classList.remove("Light");
    });

    ShapeB.classList.remove("Light");
    ShapeBB.classList.remove("Light");
    ShapeC.classList.remove("Light");
    ShapeBC.classList.remove("Light");
  } else {
    return;
  }
};

sprawdzanieTrybuKolorow();

const ZmianaKolorow = (e) => {
  if (e.target.checked === true) {
    sessionStorage.setItem("AltColors", "true");
    ShapeA.classList.remove("Light");
    ShapeBA.classList.remove("Light");

    RectanglesA.forEach((rec) => {
      rec.classList.remove("Light");
    });

    LinjeA.forEach((linja) => {
      linja.classList.remove("Light");
    });

    LinjeB.forEach((linja) => {
      linja.classList.remove("Light");
    });

    RectanglesTresc.forEach((rec) => {
      rec.classList.remove("Light");
    });

    Backgrounds.forEach((back) => {
      back.classList.remove("Light");
    });

    Naglowki.forEach((naglowek) => {
      naglowek.classList.remove("Light");
    });

    Borders.forEach((border) => {
      border.classList.remove("Light");
    });

    ShapeB.classList.remove("Light");
    ShapeBB.classList.remove("Light");
    ShapeC.classList.remove("Light");
    ShapeBC.classList.remove("Light");
  } else {
    sessionStorage.removeItem("AltColors");
    ShapeA.classList.add("Light");
    ShapeBA.classList.add("Light");

    RectanglesA.forEach((rec) => {
      rec.classList.add("Light");
    });

    LinjeA.forEach((linja) => {
      linja.classList.add("Light");
    });

    LinjeB.forEach((linja) => {
      linja.classList.add("Light");
    });

    RectanglesTresc.forEach((rec) => {
      rec.classList.add("Light");
    });

    Backgrounds.forEach((back) => {
      back.classList.add("Light");
    });

    Naglowki.forEach((naglowek) => {
      naglowek.classList.add("Light");
    });
    Borders.forEach((border) => {
      border.classList.add("Light");
    });

    ShapeB.classList.add("Light");
    ShapeBB.classList.add("Light");
    ShapeC.classList.add("Light");
    ShapeBC.classList.add("Light");
  }
};

const sprawdzanieTrybuNocnego = () => {
  if (sessionStorage.getItem("night")) {
    if (btnTrybNocny.checked === false) {
      btnTrybNocny.checked = true;
    }
    btnKolory.classList.toggle("night");
    root.style.setProperty("--color-panel-font", "#666");
    root.style.setProperty("--color-panel-fontA", "rgba(102,102,102,.3");
    root.style.setProperty("--color-panel-grey", "#222");
    root.style.setProperty("--color-panel-grey2", "#222");
    root.style.setProperty("--color-panel-grey3", "rgb(40,40,40)");
    root.style.setProperty("--color-panel-grey4", "#333");
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
    root.style.setProperty("--color-panel-fontA", "rgba(102,102,102,.3");
    root.style.setProperty("--color-panel-grey", "#222");
    root.style.setProperty("--color-panel-grey2", "#222");
    root.style.setProperty("--color-panel-grey3", "rgb(40,40,40)");
    root.style.setProperty("--color-panel-grey4", "#333");
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
    root.style.setProperty("--color-panel-font", "rgb(53,53,53)");
    root.style.setProperty("--color-panel-fontA", "rgba(34,34,34,.3");
    root.style.setProperty("--color-panel-grey", "rgb(193, 193, 193)");
    root.style.setProperty("--color-panel-grey2", "#444");
    root.style.setProperty("--color-panel-grey3", "#333");
    root.style.setProperty("--color-panel-grey4", "#444");
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

const colorsOfTheNight = () => {
  root.style.setProperty("--color-main", "#005919");
  root.style.setProperty("--color-main1A", "#ad8e00cc");
  root.style.setProperty("--color-main1AA", "#00ff0099");
  root.style.setProperty("--color-main1", "#00ff00");
  root.style.setProperty("--color-main2", "#fea700");
  root.style.setProperty("--color-main3", "#663700");
  root.style.setProperty("--color-main4", "#ffc800");
  root.style.setProperty("--color-main4A", "#ffc8007e");
  root.style.setProperty("--color-main5", "#ad8e00");
  root.style.setProperty("--color-panel-mainA", "rgb(21, 41, 21)");
  root.style.setProperty("--color-panel-mainB", "rgb(23, 34, 23)");
  root.style.setProperty("--color-panel-mainC", "rgba(21, 94, 21, 0.1)");
  root.style.setProperty("--color-panel-mainD", "rgba(5, 18, 5, 0.8)");
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

btnTrybNocny.addEventListener("click", TrybNocny);
