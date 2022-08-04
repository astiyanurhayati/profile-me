@extends('layouts.main', ['page' => 'about'])

@section('container')
<link rel="stylesheet" href="css/about.css">
<div class="container">
    <div class="content">
        <div class="page-satu">
            <div class="foto">
                <img src="../img/about.png" alt="">
            </div>
            <div class="desk">
                <h1>About Me</h1>
                <p>Hello! My name is Siti Astiya Nurhayati, a web developer, and I am very passionate and dedicated to my work. I am 15 years old. I will seek to acquire the skills and knowledge necessary to make your project a success. I enjoy every step of the design process, from discussion and collaboration.</p>
            </div>
        </div>
        <hr>
        <div class="properti">
            <img class="satu" src="../img/empat.png" alt="" style="width: 120px;">
        </div>
        
        <div class="page-dua">
            <div class="layout education">
                <div class="circle">
                    <img src="../img/education2.png" alt="">
                </div>
                <div class="desk">
                    <h3>Education</h3>
                    <ul>
                        <li>SMK Wikrama Bogor -- 2021-Now</li>
                        <li>SMPN 02 Megamendung -- 2018-2021</li>
                        <li>SDN Sukamanah 2012 -- 2018</li>
                    </ul>
                </div>
            </div>
        <hr>
        <div class="properti">
            <img class="dua" src="../img/lima.png" alt="" style="width: 190px">
        </div>
            <div class="layout experience">
                <div class="circle">
                    <img src="../img/experience.png" alt="">
                </div>
                <div class="desk">
                    <h3>Organizational Experience</h3>
                    <p><b>KURMA (Keluarga Remaja Masjid Wikrama)</b> <br>
                        Coordinate all Islamic religious activities at SMK Wikrama Bogor 
                    </p><br>
                    <p><b> Pencaksilat Pakubumi</b><br>Coordinate the pencak silat team to carry out exercises, <br> and is responsible for recording neatness in dress. SMPN 02 Megamendung</p>


                </div>
            </div>
        <hr>
            <div class="layout achievement">
                <div class="circle">
                    <img src="../img/achievement.png" alt="">
                </div>
                <div class="desk">
                    <h3>Achievement</h3>
                    <ul>
                        <li>1st place in the poster design competition with the theme of Indonesian Heroes Day,<br> SMK Wikrama Bogor</li>
                        <li>1st Winner of International Women's Singles Pencak Silat</li>
                    </ul>
                </div>
                <div class="properti">
                    <img class="tiga" src="../img/enam.png" alt="">
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection