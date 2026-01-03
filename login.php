<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
body{
    background:#f2f2f2;
    font-family:'Poppins',sans-serif;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.login-box{
    background:#fff;
    padding:35px;
    width:100%;
    max-width:360px;
    border-radius:14px;
    box-shadow:0 10px 30px rgba(0,0,0,.1);
}

.login-box h2{
    text-align:center;
    margin-bottom:25px;
    color:#8c7b4a;
}

input{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border-radius:10px;
    border:1px solid #ddd;
}

button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:30px;
    background:#8c7b4a;
    color:#fff;
    font-weight:600;
    cursor:pointer;
}
</style>
</head>

<body>

<div class="login-box">
    <h2>Login Admin</h2>

    <form action="proses_login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
