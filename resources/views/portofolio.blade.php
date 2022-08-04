@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="css/portofolio.css">
<div class="container">
<div class="portofolio">
        <div class="judul">
            <h1>MY WORK</h1>
        </div>
        <div class="properti">
            <img class="satu" src="../img/tujuh.png" alt="">
            <img class="dua" src="../img/delapan.png" alt="">
            <img class="tiga" src="../img/sembilan.png" alt="">
        </div>
    <div class="projek satu">
        <div class="foto-projek">
           <a href="#"> <img src="../img/projek1.png" alt=""></a>
        </div>
        <div class="desk">
            <h3>Gizi Seimbang Website</h3>
            <p>This website was created as an alternative in knowing the level of calories needed by the body using the Harris Benedict method, knowing whether the body mass index is normal or not and calculating the number of calories of a food that has been consumed by the body.</p>
        </div>
    </div>
    <div class="projek dua">
        <div class="foto-projek">
            <a href="#"> <img src="../img/projek2.png" alt=""></a>
         </div>
         <div class="desk">
             <h3>Rock Paper Scissors</h3>
             <p>This game is made for when we want to play rock paper scissors, but don't have friends to play with</p>
         </div>
    </div>
    <div class="projek tiga">
        <div class="foto-projek">
            <a href="#"> <img src="../img/projek3.png" alt=""></a>
         </div>
         <div class="desk">
             <h3>Wikrama Website</h3>
             <p>This website was created with the aim of informing complete information about smk wikrama</p>
         </div>
    </div>
    <div class="projek empat">
        <div class="foto-projek">
            <a href="#"> <img src="../img/projek4.png" alt=""></a>
         </div>
         <div class="desk">
             <h3>Blog Bogor</h3>
             <p>This website was made to provide information about the city of Bogor, especially tourism</p>
         </div>
    </div>
    <div class="properti">
        <img class="empat" src="../img/lima.png" alt="">
    </div>
</div>
</div>
@endsection