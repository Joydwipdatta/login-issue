<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <h1>register</h1>
    <input type="text" name="name" placeholder="enter name" >
    <br><br>
        <input type="email" name="email" placeholder="enter email" ><br><br>
        <input type="password" name="password" placeholder="enter password"><br><br>
        <button type="submit" name="submit">submit</button>
    </form>
    
</body>
</html>