<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/bananan.png')}}">
    <link rel="stylesheet" href="css/kleurtjesv2.css">

    <title>DOCUMENT2</title>
</head>
<body>
    <div class="wrapper" id="wrapper">   
        <main> 
            @yield("content")
        </main>
        <footer>
            <p>Dipshit&Co</p> 
        </footer>
    </div>    
</body>
</html>