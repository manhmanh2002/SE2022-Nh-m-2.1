let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>{
    shoppingCart.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}
let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
}


let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}
var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});

const dropArea = document.querySelector('.drag-area');
const dragText = dropArea.querySelector('header');
const button = dropArea.querySelector('button');
const input = dropArea.querySelector('input');

button.addEventListener('click', ()=>{
  input.click();
})

input.addEventListener('change', function (){
  const file = this.files[0];
  showFile(file);
})

dropArea.addEventListener('dragover', (event)=>{
  event.preventDefault();
  dragText.textContent = "Thả để Tải Ảnh lên"
})


dropArea.addEventListener('dragleave', (event)=>{
  event.preventDefault();
  dragText.textContent = "Kéo và Thả để Tải Ảnh lên"
})

dropArea.addEventListener('drop', (event)=>{
  event.preventDefault();
  const file = event.dataTransfer.files[0];
  showFile(file)
})

function showFile(file){
  const fileType = file.type;
  const validExtensions = ['image/glb', 'image/gltf'];
  if(validExtensions.includes(fileType)){
    const fileReader = new FileReader();
    fileReader.onload = () => {
      const fileUrl = fileReader.result;
      const imgTag = `<img src="${fileUrl}">`;
      dropArea.innerHTML = imgTag
    }
    fileReader.readAsDataURL(file);
  } else {
    alert("Error file");
    dragText.textContent = "Kéo và Thả để tải file lên"
  }
}
