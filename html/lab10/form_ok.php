<?php
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $account = $_POST['account'];
    $password = $_POST['password'];
    $writer = $_POST['account'];
    $introduce = $_POST['introduce'];
    $country = $_POST['country'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3 {
            background-color: cadetblue;
            color: white;
            padding: 10px;
            width: fit-content;
            border-radius : 10px;
        } 
        div {
            background-color: cadetblue;
            width: fit-content;
            margin-bottom: 10px;
            color : white;
            padding: 10px;
            border-radius : 10px;
        }
    </style>
</head>
<body>
    <h3>입력하신 데이터는 다음과 같습니다.</h3>
    <div>이름 : <?=$name?><br>
    성별 : <?=$gender?><br>
    아이디 : <?=$account?><br>
    비밀번호 : <?=$password?><br>
    자기소개 : <?=$introduce?><br>
    국적 : <?=$country?></div>
</body>
</html>