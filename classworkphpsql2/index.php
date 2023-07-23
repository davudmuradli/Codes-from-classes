<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
<form action="add-user.php" method="post" id="nameform"> 
    <input type="text" id="firstname" name="firstname" placeholder="Name"/>
    <input type="text" id="lastname" name="lastname" placeholder="Lastname"/>
    <input type="email" id="email" name="email" placeholder="Your mail"/>
    <input type="text" id="country"name="country"  placeholder="Country"/>
    <button type="submit" form="nameform" value="submit">Submit</button>
</form>
</body>
</html>