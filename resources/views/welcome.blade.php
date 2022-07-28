<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .form-container{
            display: flex;
            align-items: center;
            justify-content: center;
            width:600px;
        }
        .form{
            width: 100%;
            margin: 0px auto;
        }
        .form-box{
            margin: 15px auto;
            display: flex;
            flex-direction: column;
            
        }
        .form-box>input{
            padding: 10px;
        }
        .form-box>input{
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <img src="public/images/img-2.jpg" alt="no-image">
        <form action="/store" method = "POST" class="form">
            @csrf
            <div class="form-box">
                <label for="" class="form-label">Username</label>
                <input type="text" name="uname" id="">
            </div>
            <div class="form-box">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" id="">
            </div>
            <div class="form-box">
                <label for="" class="form-label">Nationality</label>
                <input type="text" name="nationality" id="">
            </div>
            <div class="form-box">
                <label for="" class="form-label">Phone</label>
                <input type="phone" name="phone" id="">
            </div>
            <div class="form-box">
                <label for="" class="form-label">Address</label>
                <input type="text" name="address" id="">
            </div>
            <div class="form-box">
                <input type="submit" name="address" id="">
            </div>
        </form>
    </div>
</body>
</html>