if (document.documentElement.clientWidth <= 1104) {
        function Scroll(){
            var header = document.getElementById('header');
            var height = window.pageYOffset;
            if(height > 5) {
                header.style.marginTop  = "0px";
            }
        }
        window.addEventListener("scroll",Scroll);
        }else{
            function Scroll(){
            var nav = document.getElementById('navbar');
            var logo = document.getElementById('logo');
            var menu = document.getElementById('menu');
            var breadcrumb = document.getElementById('breadcrumb');
            var dropbtn1 = document.getElementById('dropbtn1');
            var dropbtn2 = document.getElementById('dropbtn2');
            var dropbtn3 = document.getElementById('dropbtn3');
            var dropbtn4 = document.getElementById('dropbtn4');
            var dropbtn5 = document.getElementById('dropbtn5');
            var dropbtn6 = document.getElementById('dropbtn6');
            var dropdowncontent1 = document.getElementById('dropdown-content1');
            var dropdowncontent2 = document.getElementById('dropdown-content2');
            var dropdowncontent3 = document.getElementById('dropdown-content3');
            var height = window.pageYOffset;
            if(height > 5) {
                nav.style.position = "fixed";
                nav.style.marginTop = "-56px";
                nav.style.height = "80px";
                logo.style.width  = "320px";
                header.style.marginTop  = "80px";
                breadcrumb.style.marginTop  = "80px";
                dropbtn1.style.paddingBottom  = "31px";
                dropbtn2.style.paddingBottom  = "31px";
                dropbtn3.style.paddingBottom  = "31px";
                dropbtn4.style.paddingBottom  = "31px";
                dropbtn5.style.paddingBottom  = "31px";
                dropbtn6.style.paddingBottom  = "31px";
                dropdowncontent1.style.marginTop  = "30px";
                dropdowncontent2.style.marginTop  = "30px";
                dropdowncontent3.style.marginTop  = "30px";
            }else{
                nav.style.position = "none";
                nav.style.marginTop = "0px";
                nav.style.height = "120px";
                logo.style.width  = "400px";
                header.style.marginTop  = "120px";
                breadcrumb.style.marginTop  = "120px";
                dropbtn1.style.paddingBottom  = "50px";
                dropbtn2.style.paddingBottom  = "50px";
                dropbtn3.style.paddingBottom  = "50px";
                dropbtn4.style.paddingBottom  = "50px";
                dropbtn5.style.paddingBottom  = "50px";
                dropbtn6.style.paddingBottom  = "50px";
            }
        }
        window.addEventListener("scroll",Scroll);
    }


    function openNav(x) {
        x.classList.toggle("change");
        document.getElementById('container').onclick = function(){ closeNav(); } ;
        document.getElementById("mySidenav").style.top = "121px";
    }

    function closeNav() {
        document.getElementById('container').classList.toggle("change");
        document.getElementById("mySidenav").style.top = "-400px";

        document.getElementById('container').onclick = function(){ openNav(document.getElementById('container')); } ;
    }

    function openMenu(x) {
        x.classList.toggle("change");
        document.getElementById('dropdown-responsive1').onclick = function(){ closeMenu(); } ;
        document.getElementById("content-dropdown-responsive1").style.display = "block";
        document.getElementById("arrow-dropdown-responsive1").style.transform = "rotate(90deg)";
    }

    function closeMenu() {
        document.getElementById('dropdown-responsive1').classList.toggle("change");
        document.getElementById("content-dropdown-responsive1").style.display = "none";
        document.getElementById("arrow-dropdown-responsive1").style.transform = "rotate(0deg)";

        document.getElementById('dropdown-responsive1').onclick = function(){ openMenu(document.getElementById('dropdown-responsive1')); } ;
    }

    function openMenu2(x) {
        x.classList.toggle("change");
        document.getElementById('dropdown-responsive2').onclick = function(){ closeMenu2(); } ;
        document.getElementById("content-dropdown-responsive2").style.display = "block";
        document.getElementById("arrow-dropdown-responsive2").style.transform = "rotate(90deg)";
    }

    function closeMenu2() {
        document.getElementById('dropdown-responsive2').classList.toggle("change");
        document.getElementById("content-dropdown-responsive2").style.display = "none";
        document.getElementById("arrow-dropdown-responsive2").style.transform = "rotate(0deg)";

        document.getElementById('dropdown-responsive2').onclick = function(){ openMenu2(document.getElementById('dropdown-responsive2')); } ;
    }

    function openMenu3(x) {
        x.classList.toggle("change");
        document.getElementById('dropdown-responsive3').onclick = function(){ closeMenu3(); } ;
        document.getElementById("content-dropdown-responsive3").style.display = "block";
        document.getElementById("arrow-dropdown-responsive3").style.transform = "rotate(90deg)";
    }

    function closeMenu3() {
        document.getElementById('dropdown-responsive3').classList.toggle("change");
        document.getElementById("content-dropdown-responsive3").style.display = "none";
        document.getElementById("arrow-dropdown-responsive3").style.transform = "rotate(0deg)";

        document.getElementById('dropdown-responsive3').onclick = function(){ openMenu3(document.getElementById('dropdown-responsive3')); } ;
    }

$(document).ready(function () {
    var mySwiper = new Swiper ('.swiper-container', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 2500,
        },   
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		}
    })
    
});