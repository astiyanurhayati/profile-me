@extends('layouts.main', ['page' => 'contact'])

@section('container')
<link rel="stylesheet" href="css/contact.css">
<div class="container container-contact">
    <div class="judul">
        <h1>Contact Me</h1>
    </div>
    <div class="content-contact">
        <div class="left">
            <div class="left-content">
                <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="desk-icon">
                    <h3>Adress</h3>
                    <p>Bogor, Indonesia</p>
                </div>
            </div>
            <div class="left-content">
                <div class="icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="desk-icon">
                    <h3>Gmail</h3>
                    <p><a href="">astiyanurhayati18@gmail.com</a></p>
                </div>
            </div>
            <div class="left-content">
                <div class="icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="desk-icon">
                    <h3>Phone</h3>
                    <p><a href="">0856-9403-1604</a></p>
                </div>
            </div>
            <div class="left-content">
                <div class="icon">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="desk-icon">
                    <h3>Instagram</h3>
                    <p><a href="">@astiyn_</a></p>
                </div>
            </div>
        </div>
        <div class="right">
            @if(Session::get('message_sent'))
                <div class="alert">
                    <p style=  " background:rgb(150, 214, 150); padding: 8px 10px; border: solid rgb(34, 114, 44) 1px; text-aligin:center; border-radius:10px; color:rgb(34, 114, 44);">{{ Session::get('message_sent') }}</p>
                </div>
            @endif
              
            <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data" >
                @csrf
                <div class="input-list">
                    <ul>
                        <li>
                            <input type="text" name="name" placeholder="Your name" required >
                        </li>
                        <li>
                            <input type="text"name="email" placeholder="Your Mail" required>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <input type="number"  name="phone" placeholder="Your Phone" required>
                        </li>
                        <li>   
                            <input type="text"  name="subjek" placeholder="Subjek" required>
                        </li>
                    </ul>
                </div>
                <div class="message" >
                    <textarea name="msg" placeholder="Write your message here" required></textarea>
                </div>
                <div class="tombol">
                    <button type="submit" value="Submit Now">Submit Now </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection