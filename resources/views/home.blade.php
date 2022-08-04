
@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="css/home.css">
<div class="container">
    <div class="icon-gerak">
        <img  class="icon figma" src="img/figma.png" alt="">
        <img class="icon vscode" src="img/vscode.png" alt="">
    </div>
    <div class="dasbore bg">
        <div class="desk-kiri">
            <h1>Hello, I'm</h1>
            <h2>Siti Astiya Nurhayati</h2>
            <h3>A <span style="color: green">Web Developer </span> From <span style="
            color: #ce2ece;">Indonesia</span> </h3>
            <p>I'm student at SMK Wikrama Bogor, and I like to learn new things, especially programming</p>
            <a href="#about"><button>About Me</button></a>
        </div>
        <div class="desk-kanan">
            <img src="img/pp.png" class="homeimg" alt="">
        </div>
    </div>
   <a href="#about">
    <div class="scroll-icon ex-1">
        <span class="wheel"></span>
    </div>
   </a>
    
    <div class="content-skills">
        <h2>Skills</h2>
        <div class="skills">
            <ul>
                <li><img src="img/html.png" alt="HTML" style="width: 80px; border-radius:100%
                    ;"></li>
                <li> <img src="img/css2.png" alt="CSS" style="width: 90px"></li>
                <li><img src="img/bootstrap.png" alt="Bootstrap" style="width: 90px"></li>
                <li>  <img src="img/js.png" alt="Javasript" style="width: 140px"></li>
                <li> <img src="img/php2.png" alt="PHP" style="width: 120px"></li>
                <li>            <img src="img/laravel.png" alt="Laravel" style="width: 130px"></li>
            </ul>
        </div>
    </div>
    <div class="properti">
        <img class="satu" src="../img/b.png" alt="">
    </div>
    <div class="properti">
        <img class="dua" src="../img/c.png" alt="">
    </div>
    
    
    <div class="content-about" id="about">
        <div class="about">
            <div class="foto-about">
                <img src="../img/about.png" alt="" style="width: 300px">
            </div>
            <div class="desk-about">
                <h2>About Me</h2>
                <p>Hello there! I'm a web developer, and I'm very passionate and dedicated to my work. I enjoy every step of the design process, from discussion and collaboration.</p>
           
                <a href="/about"><button>Learn More</button></a>
            </div>
        </div>
    </div>
</div>
@endsection