const slider = document.querySelector(".slider__block");
const container = document.querySelector(".slider__container")
const slides = document.querySelectorAll(".slide")

window.onresize = resize;

function resize()
{
    init()
    udpate()
    console.log('update')
}

init();

function init(){
    for(let i = 0; i < slides.length; i++){
        const slide = slides[i]

        slide.dataset.order = i;
        slide.style.transform = "translate(-50%,-50%)";
        slide.addEventListener('click', clientHandler)

    }
    activeOrder = Math.floor(slides.length / 2);
    udpate();
}

function udpate(){
    const {width, height} = container.getBoundingClientRect();
    const slideRect = slides[0].getBoundingClientRect();

    const a  = width/2;
    const b = height/2;

    const delta = Math.PI / slides.length / 3

    let act = document.querySelector(
        `.slide[data-order="${activeOrder}"]`
    );
    act.classList.add("act");

    for (let i =0; i < slides.length; i++) {
  
        const leftSlide = document.querySelector(
            `.slide[data-order="${activeOrder - i}"]`
        );

        if(leftSlide) {
            leftSlide.style.zIndex = slides.length - i;
            leftSlide.style.opacity = 1 - (1.5*i) / slides.length;

            leftSlide.style.left = `${
                width / 2 + a * Math.cos((Math.PI * 3) / 2 - delta * i * 2)
            }px`;
            leftSlide.style.top = `${
                -b * Math.sin((Math.PI * 3) / 2 - delta *i * 2)
            }px`;
        }
        const rightSlide = document.querySelector(
            `.slide[data-order="${activeOrder + i}"]`
        );

        if(rightSlide) {
            rightSlide.style.zIndex = slides.length - i;
            rightSlide.style.opacity = 1 - (1.5*i) / slides.length;

            rightSlide.style.left = `${
                width / 2 + a * Math.cos((Math.PI * 3) / 2 + delta * i * 2)
            }px`;
            rightSlide.style.top = `${
                -b * Math.sin((Math.PI * 3) / 2 + delta *i * 2)
            }px`;
        }
    }
}

function clientHandler(){
    const order = parseInt(this.dataset.order, 10)
    activeOrder = order;

    for(let i = 0; i < slides.length; i++){
        const slide = slides[i]

        if (slide.dataset.order != activeOrder) {
            console.log('true')
            slide.classList.remove("act");
        }
    }
    udpate();
}

function toggleBurger() {
    let x = document.getElementById("burger");
    x.classList.toggle("toggled");
}

function setLocation(event) {
    let item = document.getElementById("revItem")
    if(event.target.id != "item"){
        item.classList.remove("clicked")
    } else {
        // Не учитывает поворот блока при адаптиве - доработать !!!
        let revItem = document.querySelector("#revItem");
        let parentPosition = getPosition(event.currentTarget);
        let xPosition = event.clientX - parentPosition.x - ( revItem.clientWidth);
        let yPosition = event.clientY - parentPosition.y - ( revItem.clientHeight / 2 -350);
         
        revItem.style.left = xPosition + "px";
        revItem.style.top = yPosition + "px";
    }
}
// Helper function to get an element's exact position
function getPosition(el) {
  let xPos = 0;
  let yPos = 0;
 
  while (el) {
    if (el.tagName == "BODY") {
      // deal with browser quirks with body/window/document and page scroll
      let xScroll = el.scrollLeft || document.documentElement.scrollLeft;
      let yScroll = el.scrollTop || document.documentElement.scrollTop;
 
      xPos += (el.offsetLeft - xScroll + el.clientLeft);
      yPos += (el.offsetTop - yScroll + el.clientTop);
    } else {
      // for all other non-BODY elements
      xPos += (el.offsetLeft - el.scrollLeft + el.clientLeft);
      yPos += (el.offsetTop - el.scrollTop + el.clientTop);
    }
 
    el = el.offsetParent;
  }
  return {
    x: xPos,
    y: yPos
  };
}

function showReview(event) { 
    let item = document.getElementById("revItem")
    item.classList.add("clicked")
}