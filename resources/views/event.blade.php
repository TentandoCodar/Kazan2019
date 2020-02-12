<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
</head>
<body>
    <form action="edit/{{$event->id}}" method="POST">
        {{csrf_field()}}
        <label>Nome: </label>
        <input name="name" value="{{$event->name}}"></input><br><br>
        <label>Slug: </label>
        <input name="slug" value="{{$event->slug}}"></input><br><br>
        <label>Data: </label>
        <input name="date" value="{{$event->date}}"></input>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>