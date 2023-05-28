

const productItemSecond = `
<article class="facts__item">
    <div class="facts__info item_info">
        <div class="pricing">
        <span class="price">$ 249.99</span>
        <span class="price_old">$ 249.99</span>
    </div>
    <div class="stars">
        <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.80953 0L8.72238 3.87524L13 4.50048L9.90476 7.51524L10.6352 11.7743L6.80953 9.76238L2.98381 11.7743L3.71429 7.51524L0.619049 4.50048L4.89667 3.87524L6.80953 0Z" fill="#C72535"/>
        </svg>
        <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.80953 0L8.72238 3.87524L13 4.50048L9.90476 7.51524L10.6352 11.7743L6.80953 9.76238L2.98381 11.7743L3.71429 7.51524L0.619049 4.50048L4.89667 3.87524L6.80953 0Z" fill="#C72535"/>
        </svg>
        <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.80953 0L8.72238 3.87524L13 4.50048L9.90476 7.51524L10.6352 11.7743L6.80953 9.76238L2.98381 11.7743L3.71429 7.51524L0.619049 4.50048L4.89667 3.87524L6.80953 0Z" fill="#C72535"/>
        </svg>
        <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.80953 0L8.72238 3.87524L13 4.50048L9.90476 7.51524L10.6352 11.7743L6.80953 9.76238L2.98381 11.7743L3.71429 7.51524L0.619049 4.50048L4.89667 3.87524L6.80953 0Z" fill="#C72535"/>
        </svg>  
        <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.80953 0L8.72238 3.87524L13 4.50048L9.90476 7.51524L10.6352 11.7743L6.80953 9.76238L2.98381 11.7743L3.71429 7.51524L0.619049 4.50048L4.89667 3.87524L6.80953 0Z" fill="#F4F9FC"/>
        </svg>
    </div>                 
    </div>
    <div class="facts__image">
        <img src="./img/1sec.png" alt="1 sec">
    </div>
    <div class="facts__actions">
        <a href="#"><img src="img/ic1.svg" alt="ic1"></a>
        <a href="#"><img src="img/ic2.svg" alt="ic2"></a>
        <a href="#"><img src="img/ic3.svg" alt="ic3"></a>
        <a href="#"><img src="img/ic4.svg" alt="ic4"></a>
    </div>
</article>
`

function onPageLoad(){
    let productsNew = document.getElementById("new-products")
    for (let i = 0; i < 7; i++){
        productsNew.innerHTML += productItemSecond       
    }    
}

function toggleBurger() {
    let x = document.getElementById("burger");
    x.classList.toggle("toggled");
}