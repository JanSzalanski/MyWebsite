const Buttons = document.querySelectorAll(".BMWrap__Buttons div");
const ButtonsArr = [...Buttons];
const Scroller = document.querySelector(".BMWrap__Overflow");
const BoardMobo = document.querySelector(".BoardMobo");
const Divider = document.querySelector(".BMWrap__divider");
const Handler = document.querySelector(".BMWrap__handle");
const ToMask = document.querySelector(".BMWrap__article-container.BMWrap__article-container--first");

const BoardMoboWidth = Math.round(BoardMobo.offsetWidth);
const DividerHalfWidth = Divider.offsetWidth / 2;
let BoardMoboLeftoffset = Math.round(BoardMobo.getBoundingClientRect().left);
let ButtonsCount = 0;

let dragging = false;
let endDes = false;

function HowMany() {
  ButtonsCount = Buttons.length;
}

function ScrollerLMove() {
  let ScrollerValue = Scroller.scrollLeft;
  return ScrollerValue;
}

function SetActiveBtn() {
  let ScrollerValue = Scroller.scrollLeft;

  ButtonsArr.forEach((Btn) => {
    Btn.classList.remove("BMWrap__Btn--active");
    Btn.classList.remove("BMWrap__Btn--inactive");
  });
  if (ButtonsCount == 2) {
    if (ScrollerValue > BoardMoboWidth / ButtonsCount) {
      ButtonsArr[1].classList.add("BMWrap__Btn--active");
    } else {
      ButtonsArr[0].classList.add("BMWrap__Btn--active");
    }
  }
  if (ButtonsCount == 5) {
    if (ScrollerValue >= 0 && ScrollerValue < 272) {
      ButtonsArr[0].classList.add("BMWrap__Btn--active");
    } else if (ScrollerValue >= 272 && ScrollerValue < 544) {
      ButtonsArr[1].classList.add("BMWrap__Btn--active");
    } else if (ScrollerValue >= 544 && ScrollerValue < 816) {
      ButtonsArr[2].classList.add("BMWrap__Btn--active");
    } else if (ScrollerValue >= 816 && ScrollerValue < 1088) {
      ButtonsArr[3].classList.add("BMWrap__Btn--active");
    } else if (ScrollerValue >= 1088 && ScrollerValue <= 1360) {
      ButtonsArr[4].classList.add("BMWrap__Btn--active");
    }
  }
}

function getOffset(clientX) {
  const offset = Math.round(clientX - BoardMoboLeftoffset);
  // if (clientX >= BoardMoboWidth + BoardMoboLeftoffset) {
  //   dragging = false;
  //   return 345;
  // }

  if (offset <= -1 * DividerHalfWidth) {
    dragging = false;
    return 0;
  } else if (offset >= BoardMoboWidth - DividerHalfWidth && offset <= BoardMoboWidth + DividerHalfWidth) {
    return 345;
  } else if (offset >= BoardMoboWidth - DividerHalfWidth) {
    dragging = false;
    return 345;
  } else {
    return offset;
  }
}

function move(clientX) {
  const offset = getOffset(clientX);

  if (offset == 0) {
    Divider.style.transform = `translate(-9px, -75px)`;
    Handler.style.transform = `translateX(0)`;
    ToMask.style.maskPosition = `0px`;
    ToMask.style.webkitMaskPosition = `0px`;
  } else if (offset == 345) {
    // endDes = !endDes;
    Divider.style.transform = `translate(336px, -75px)`;
    Handler.style.transform = `translateX(345px)`;
    ToMask.style.maskPosition = `345px`;
    ToMask.style.webkitMaskPosition = `345px`;
  } else {
    Divider.style.transform = `translate(${offset}px, -75px)`;
    Handler.style.transform = `translateX(${offset + 9}px)`;   
    ToMask.style.maskPosition = `${offset + 9}px`;
    ToMask.style.webkitMaskPosition = `${offset + 9}px`;
  }
}

function initEvents() {
  Divider.addEventListener("mousedown", () => {
    dragging = true;
  });
  
  Divider.addEventListener("mouseup", () => {
    dragging = false;
  });

  window.addEventListener("mousemove", (event) => {
    if (dragging) {
      move(event.clientX);
    }
  });

  Divider.addEventListener("touchstart", (event) => {
    dragging = true;
  },
  { passive: true });

  Divider.addEventListener("touchend", () => {
    dragging = false;
  },
  { passive: true }); 

  window.addEventListener( 
    "touchmove",
    (event) => {
      if (dragging) {
        event.preventDefault();
        move(event.touches[0].clientX);
      }
    },
    { passive: false }
  );

  Scroller.addEventListener("scroll", SetActiveBtn);
}

window.addEventListener("resize", () => {
  BoardMoboLeftoffset = Math.round(BoardMobo.getBoundingClientRect().left);
});

initEvents();
HowMany();
