const header = document.querySelector("header");
window.addEventListener ("scroll", function() {
	header.classList.toggle ("sticky", window.scrollY > 100);
});

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navlist.classList.toggle('open');
};

window.onscroll = () => {
	menu.classList.remove('bx-x');
	navlist.classList.remove('open');
};


function cb(response) {
    document.getElementById('visits').innerText = response.value;
}



let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

	var i = 0;
		var images = [];
		var time  = 3000;
		images[0] = 'img/portfolio1.jpg';
		images[1] = 'img/portfolio1.jpg';
		images[2] = 'img/portfolio2.jpg';

		function changeImg() {
			document.slide.src = images[i];
			if(i < images.length -1){
				i++;
			} else {
				i = 0;
			}
		}


  grecaptcha.ready(function() {
      grecaptcha.execute('6LdT3HIjAAAAACqOaXIlLXphule9c2bg7vIvTQTF', {action: 'homepage'}).then(function(token) {
         // console.log(token);
         document.getElementById("token").value = token;
      });
  });
