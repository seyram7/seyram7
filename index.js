const elements=document.querySelectorAll('.fade-in')
const observer=new IntersectionObserver(entries =>
    {
        entries.forEach(entry =>
            {
                if(entry.intersectionRatio > 1)
                {
                    entry.target.classList.add('fade-in-animation');
                    observer.unobserve(entry.target);
                }
            });
    });

    elements.forEach(element =>
        {
            observer.observe(element);
        });
        //Reveal On Scroll
        window.addEventListener('scroll', reveal);
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
              var windowHeight = window.innerHeight;
              var elementTop = reveals[i].getBoundingClientRect().top;
              var elementVisible = 90;
              if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
              } else {
                reveals[i].classList.remove("active");
              }
            }
          }

    //Mobile Menu Interaction
    let menuOpen = document.getElementById('menuOpen');
    let menuClose = document.getElementById('menuClose');
    let mobileMenu = document.getElementById('mobileMenuComp');

    //Add event listener to enhance interaction
    menuOpen.addEventListener('click',() =>
    {
        mobileMenu.style.display="block";
        mobileMenu.classList.add('animation');
        mobileMenu.classList.remove('exit');
    });
    menuClose.addEventListener('click',() =>
    {
        mobileMenu.style.display="none";
        mobileMenu.classList.add('exit');
        mobileMenu.classList.remove('animation');
       
    });



    let largeLink=document.getElementById('largeLink');
let popularLink=document.getElementById('popularLink');
 //Declating variables for the various car collection
 let largeCars=document.getElementById('large-cars');
let popularCars=document.getElementById('popular-cars');

//Adding Event Listeners to the links
largeLink.addEventListener('click',()=>
{
    largeCars.style.display="grid";
    popularCars.style.display="none";
});
popularLink.addEventListener('click',()=>
{
    popularCars.style.display="grid";
    largeCars.style.display="none";
})