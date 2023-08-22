const btnBuy = document.getElementById('btn_buy');
let loginForm = document.querySelector('.login-form');
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');

document.querySelector('#login-btn').onclick = () =>{
   loginForm.classList.add('active');
}

document.querySelector('#close-login-form').onclick = () =>{
   loginForm.classList.remove('active');
}

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
}

window.onscroll = () =>{
   loginForm.classList.remove('active');
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');

   if(window.scrollY > 0){
      document.querySelector('.header').classList.add('active');
   }else{
      document.querySelector('.header').classList.remove('active');
   }
}

btnBuy.addEventListener('click', function (event) {
   console.log("Evento de clic agregado");
   event.preventDefault();

   btnBuy.innerHTML = 'Enviando...';

   const serviceID = 'service_jg0hz5r';
   const templateID = 'template_yqk5m8x';

   const templateParams = {
      to_email: 'fedepr2345@gmail.com',
      subject: 'Gracias por tu compra',
      message: '¡Gracias por tu compra en Premiur Air!'
   };

   emailjs.send(serviceID, templateID, templateParams)
   .then(() => {
      btnBuy.innerHTML = 'Buy'; 
      alert('Correo de agradecimiento enviado con éxito.');
   })
   .catch((err) => {
      btnBuy.innerHTML = 'Buy'; 
      alert('Error al enviar el correo de agradecimiento: ' + JSON.stringify(err));
   });
});
