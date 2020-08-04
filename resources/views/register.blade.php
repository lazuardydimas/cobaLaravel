<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru !</h1>

    <h3>Sign Up Form</h3>

    <p>First Name:</p>
    <form method="post">
        <input type="text" name="nama">
    </form>

    <p>Last Name:</p>
    <form method="post">
        <input type="text">
    </form>

    <p>Gender:</p>
    <form>
        <input type="radio" name="gender" id=""> Male <br>
        <input type="radio" name="gender" id=""> Female <br>
        <input type="radio" name="gender" id=""> Other <br>
    </form>

    <p>Nationality:</p>
    <select name="nationality">
        <option value="">-- select one --</option>
        <option value="Indonesian">Indonesian</option>
        <option value="Malaysian">Malaysian</option>
    </select>

    <p>Language Spoken:</p>
    <form>
        <input type="checkbox" name="bahasa" id="">Bahasa Indonesia <br>
        <input type="checkbox" name="bahasa" id="">English <br>
        <input type="checkbox" name="bahasa" id="">Other <br>
    </form>

    <p>Bio:</p>
        <textarea name="" cols="40" rows="8"></textarea> <br>   
        
    <form action="/welcome">
        <button name="submit" type="submit">Sign Up</button>
    </form>
</body>
</html>