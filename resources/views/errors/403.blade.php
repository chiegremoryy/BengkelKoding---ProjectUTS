<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization Denied!</title>
    <style>
        body {
            background-color: #f8f8f8;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            padding: 50px;
        }
        img {
            width: 100%;
            max-width: 550px;
            height: auto;
        }

        h3 {
            color: #4a148c;
        }
        
        p {
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>
    <img src="{{ asset('lte\dist\img\not-found.png') }}" alt="Unauthorized Access">
    <h3>Whoops! Anda Tidak Punya Akses!</h3>
    <p>Authorization Denied!🚫</p>
</body>
</html>
