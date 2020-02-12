<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login FORM</title>
</head>
<body>
    <form action="/organizers/login" method="post">
        {{csrf_field()}}
        <h1>Faça seu login</h1>
        <label for="">Digite seu email:</label>
        <input type="text" name="email" id="email" placeholder="Email"><br><br>
        <label for="">Digite sua senha:</label>
        <input type="password" name="password" id="password" placeholder="Password"><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>