<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru !</h1>

    <h3>Sign Up Form</h3>
<form action="/welcome" method="POST">
@csrf
    First Name:
        <input type="text" name="firstname">
        <br><br>


    Last Name:
        <input type="text" name="lastname">
        <br><br>

    Gender
    <br>
        <input type="radio" name="gender" id=""> Male <br>
        <input type="radio" name="gender" id=""> Female <br>
        <input type="radio" name="gender" id=""> Other <br>
        <br>

    Nationality:
    <br>
    <select name="nationality">
        <option value="">-- select one --</option>
        <option value="Indonesian">Indonesian</option>
        <option value="Malaysian">Malaysian</option>
    </select>
    <br><br>

    Language Spoken:
    <br>
        <input type="checkbox" name="bahasa" id="">Bahasa Indonesia <br>
        <input type="checkbox" name="bahasa" id="">English <br>
        <input type="checkbox" name="bahasa" id="">Other <br>
        <br>

    Bio:
    <br>
        <textarea name="" cols="40" rows="8"></textarea> <br>   
        
        <button name="submit" type="submit">Sign Up</button>
</form>
</body>
</html>