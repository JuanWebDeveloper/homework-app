<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

html,
body {
    font-family: "Poppins", sans-serif;
    background: #00001a;
    background: -webkit-linear-gradient(to left, #0c0c22, #00001a);
    background: linear-gradient(to left, #0c0c22, #00001a);
}

h2 {
    font-size: 40px;
    font-weight: 700;
    text-shadow: 0 0 15px rgba(255, 255, 255, 0.5),
        0 0 10px rgba(255, 255, 255, 0.5);
    text-align: center;
    color: rgb(255, 255, 255);
}

p {
    font-size: 20px;
    color: #fff;
}

.center-content {
    position: absolute;
    width: 90vw;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    padding-top: 50px;
}

/*<|-Styles For Responsive Design-|>*/
@media screen and (max-width: 767px) {
    h2 {
        font-size: 20px;
    }

    p {
        font-size: 17px;
    }
    
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-sm-12 center-content">
                <h2><strong>Nombre:</strong> {{$contact['name']}}</h2>
                <p><strong>Correo:</strong> {{$contact['email']}}</p>
                <p><strong>Mensaje:</strong> {{$contact['message']}}</p>
            </div>
        </div>
    </div>
</body>
</html>