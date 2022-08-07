<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .form-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 600px;
        }

        .form {
            width: 100%;
            margin: 0px auto;
        }

        .form-box {
            margin: 15px auto;
            display: flex;
            flex-direction: column;

        }

        .form-box>input {
            padding: 10px;
        }

        .form-box>input {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <img src="public/images/img-2.jpg" alt="no-image">
        <form action="http://localhost:8000/api/v1/video" method="POST" class="form">
            @csrf
            <div class="form-box">
                <label for="" class="form-label">title</label>
                <input type="text" name="title" id="">
            </div>
            <div class="form-box">
                <label for="" class="form-label">short_descript</label>
                <input type="text" name="short_descript" id="">
            </div>
            <div class="form-box">
                <label for="" class="form-label">descript</label>
                <input type="text" name="descript" id="">
            </div>
            <div class="form-box">
                <label for="" class="form-label">cat_id</label>
                <input type="phone" name="cat_id" id="">
            </div>
            <div class="form-box">
                <label for="" class="form-label">vidtype_id</label>
                <input type="text" name="vidtype_id" id="">
            </div>
            <div class="form-box">
                <label for="" class="form-label">user_id</label>
                <input type="number" name="user_id" id="">
            </div>
            <div class="form-box">
                <label for="" class="form-label">video</label>
                <input type="text" name="video" id="">
            </div>

            <div><input type="submit" value="Submit"></div>
        </form>
    </div>
</body>

</html>
