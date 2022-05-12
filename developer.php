<?php

require "header.php";

?>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style>
        
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");
* {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  text-decoration: none;
  outline: none;
  border: none;
  text-transform: capitalize;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}

html {
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-behavior: smooth;
  scroll-padding-top: 7rem;
}

#menu-bar{
  color: #333;
}
html::-webkit-scrollbar {
  width: 1rem;
}

html::-webkit-scrollbar-track {
  background: transparent;
}

html::-webkit-scrollbar-thumb {
  background: #e60000;
}

section {
  padding: 3rem 9%;
}
    

.btn {
  display: inline-block;
  margin-top: 1rem;
  padding: 1rem 3rem;
  background: #ffa500;
  color: #fff;
  font-size: 1.7rem;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
  cursor: pointer;
}

.btn:hover {
  letter-spacing: .1rem;
}
.about {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 2rem;
  margin-top: 70px;
}

.about .image {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
  padding-bottom: 5rem;
  padding-right: 5rem;
}

.about .image img {
  width: 90%;
  height: 330px;
  -webkit-box-shadow: 4rem 4rem 0 #eee;
          box-shadow: 4rem 4rem 0 #eee;
}

.about .content {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
}

.about .content .box {
  padding: 3rem;
  background: #eee;
}

.about .content .box h3 {
  font-size: 2.5rem;
  color: #222;
}

.about .content .box p {
  padding: 1rem 0;
  line-height: 2;
  color: #666;
  font-size: 1.4rem;
}

.about .content .icons-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  gap: 2rem;
  margin-top: 2rem;
}

.about .content .icons-container .icons {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 16rem;
          flex: 1 1 16rem;
  background: #eee;
  padding: 2rem;
  text-align: center;
}

.about .content .icons-container .icons i {
  color: #e60000;
  margin-bottom: 1rem;
  font-size: 5rem;
}

.about .content .icons-container .icons p {
  font-size: 1.4rem;
  color: #666;
}


header{
  position: fixed;
  top:0; left: 0; right:0;
  background:#333;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding:2rem 2%;
}

header .logo{
  font-size: 2.5rem;
  font-weight: bolder;
  color:#fff;
}

header .logo span{
  color:#ffa500;
}

header .navbar a{
  color:#fff;
  font-size: 2rem;
  margin:0 .8rem;
}

header .navbar a:hover{
  color:var(--orange);
}

header .icons i{
  font-size: 2.5rem;
  color:#fff;
  cursor: pointer;
  margin-right: 2rem;
}

header .icons i:hover{
  color:var(--orange);
}

header .search-bar-container{
  position: absolute;
  top:100%; left: 0; right:0;
  padding:1.5rem 2rem;
  background:#333;
  border-top: .1rem solid rgba(255,255,255,.2);
  display: flex;
  align-items: center;
  z-index: 1001;
  clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
}

header .search-bar-container.active{
  clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
}

header .search-bar-container #search-bar{
  width:100%;
  padding:1rem;
  text-transform: none;
  color:#333;
  font-size: 1.7rem;
  border-radius: .5rem;
}

header .search-bar-container label{
  color:#fff;
  cursor: pointer;
  font-size: 3rem;
  margin-left: 1.5rem;
}


@media (max-width:991px){

header{
  padding:2rem;
}

section{
  padding:2rem;
}

}


@media (max-width:700px){
.home .content h3{
  font-size: 29px;
}
}

@media (max-width:928px){

#menu-bar{
  display: block;
  color: #fff;
  font-weight: 800;
  font-size: 20px;
  cursor: pointer;
}
#menu-bar .fa{
  color: #fff;
  font-weight: 800;
  font-size: 34px;
}

header .navbar{
  position: absolute;
  top:100%; right:0; left: 0;
  background: #333;
  border-top: .1rem solid rgba(255,255,255,.2);
  padding:1rem 2rem;
  clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
}

header .navbar.active{
  clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
}

header .navbar a{
  display: block;
  border-radius: .5rem;
  padding:1.5rem;
  margin:1.5rem 0;    
  background:#222;
}

}


.footer{
  background: whitesmoke;
}
.footer .box-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(25rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
  gap: 1.5rem;
}

.footer .box-container .box h3 {
  font-size: 2.2rem;
  color: #333;
  padding: 1rem 0;
}

.footer .box-container .box a {
  display: block;
  font-size: 1.4rem;
  color: #666;
  padding: 1rem 0;
}

.footer .box-container .box a:hover {
  color: #ffa500;
}

.footer .box-container .box a:hover i {
  padding-right: 2rem;
}

.footer .box-container .box a i {
  color: #ffa500;
  padding-right: .5rem;
}

.footer .box-container .box p {
  font-size: 1.5rem;
  color: #666;
  margin-bottom: 1rem;
}

.footer .box-container .box form input[type="email"] {
  width: 100%;
  padding: 1rem 1.2rem;
  border-radius: .5rem;
  background: gainsboro;
  font-size: 1.6rem;
  text-transform: none;
  margin: .5rem 0;
}

.footer .credit {
  text-align: center;
  padding: 1rem;
  padding-top: 2.5rem;
  margin-top: 2.5rem;
  font-size: 2rem;
  color: #666;
}

.footer .credit span {
  color: #ffa500;
}







    </style>





<section class="about" id="about">

<div class="image">
    <img src="images/009.jpg" alt="">
</div>

<div class="content">
    <div class="box">
        <h3>mr Yusuf Al-ameen</h3>
        <p>mr Yusuf Al-ameen is a web developer that basicaly on frontnEnd and Backend developement it has been work hard for many years now mostly work with team and developer groups</p>
        <a href="#" class="btn">+234_ _ _ _ _ _ _ _ _ _</a>
    </div>
    <div class="icons-container">
        <div class="icons">      <i class="fa fa-linkedin"></i>

            <p>Linkedin</p>
        </div>
        <div class="icons">
            <i class="fa fa-github"></i>
            <p>github</p>
        </div>
        <div class="icons">
            <i class="fa fa-inbox"></i>
            <p>_____@gmail.com</p>
        </div>
    </div>
</div>

</section>

<hr>



<section class="about" id="about">

<div class="image">
    <img src="images/0977.png" alt="">
</div>

<div class="content">
    <div class="box">
        <h3>Durallite</h3>
        <p>Durallite is a web developer that basicaly on frontnEnd and Backend developement it has been work hard for more than 5 years now mostly work with team and developer groups</p>
        <a href="#" class="btn">+2347026626851  or  +2348169743963</a>
    </div>
    <div class="icons-container"><a href="https://www.linkedin.com/in/dural-lite-664a54198/">
        <div class="icons">
            <i class="fa fa-linkedin"></i>
            <p>Linkedin</p>
        </div>
</a>
        <a href="https://www.linkedin.com/in/dural-lite-664a54198/">
        <div class="icons">
            <i class="fa fa-github"></i>
            <p>github</p>
        </div></a>
        <div class="icons">
            <i class="fa fa-inbox"></i>
            <p>Durallite@gmail.com</p>
        </div>
    </div>
</div>

</section>

    <?php
require "footer.php";
?>
    
  

    <script>
      
let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let videoBtn = document.querySelectorAll('.vid-btn');

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
});

formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});
    </script>
</body>
</html>