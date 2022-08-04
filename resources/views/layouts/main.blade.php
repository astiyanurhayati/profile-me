<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


    <title>{{ $title }}</title>
    
    <style>
    .cursor {
        position: fixed;
        width: 30px;
        height: 30px;
        border: solid 2px rgba(255, 91, 26, 0.404);
        border-radius: 50%;
        left: 0;
        top: 0;
        pointer-events: none;
        transform: translate(-50%, -50%);
        transition: 0.1s;
        z-index: 100;
    }
    .cursor2 {
        position: fixed;
        width: 0.2px;
        height: 0.2px;
        border: solid 3px rgb(195, 84, 36);
        border-radius: 50%;
        left: 0;
        top: 0;
        pointer-events: none;
        transform: translate(-50%, -50%);
        transition: 0.15s;
        z-index: 100;
    }
    </style>


</head>
<body>
    @include('properti.navbar')
    <div class="cursor"></div>
    <div class="cursor2"></div>
    <main>
        <div class="container">
            @yield('container')
        </div>
    </main>
    @include("properti.footer")

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
<script>
    let cursor = document.querySelector(".cursor");
    let cursor2 = document.querySelector(".cursor2");
    document.addEventListener("mousemove", function (e) {
      cursor.style.cssText = cursor2.style.cssText = "left:" + e.clientX + "px; top: " + e.clientY + "px;";
    });

</script>
</html>
