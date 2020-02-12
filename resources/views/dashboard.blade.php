<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="c-token" content="{!! csrf_token() !!}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        header {
            display: flex;
            width: 100%;
            height: 50px;
        }
        .MainHeader {
            display: flex;
            background-color: #121426;
            width: 300px;
            align-items: center;
            justify-content: center;
        }
        .MainHeader > h1 {
            color: white;
        }
        
        .SecondaryHeader {
            display: flex;
            flex-direction: row;
            flex: 1;
            background-color: #2a2b36;
            align-items: center;
            justify-content: space-between;
        }
        .SecondaryHeader >h2:nth-child(1) {
            margin-left: 28px;
            font-size: 20px;
            color: white;
        }
        .SecondaryHeader > a >h2 {
            margin-right: 25px;
            font-size: 18px;
            color: white;
        }
        a {
            text-decoration: none;
        }
        #Content {
            display:flex;
            width: 100%;
            
        }
        .ManageEventsContainer {
            display: flex;
            width: 300px;
            color: aquamarine;
            
        }
        .ManageEventsContainer > h3 {
            margin-left: 50px;
            margin-top: 10px;
        }
        #RealContent {
            display: flex;
            flex-direction: column;
            flex: 1;
        }
        .NewEventContainer {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 5px;
        }
        .NewEventContainer > h1 {
            margin-left: 28px;
        }
        .NewEventContainer > button {
            margin-right: 25px;
            border: 1px solid #ccc;
            background: transparent;
            padding: 5px 8px;
            border-radius: 6px;
        }
        .EventsContainer {
            display: flex;
            flex-direction: column;
        }
        .EventsContainer > div{
            margin-top: 15px;
            margin-left: 28px;
        }

        #NewEventForm {
            border-left: 1px solid #eee;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            max-width: 600px;
            z-index: 40000;
            height: 500px;
            position: absolute;
            background: white;
        }
        #NewEventForm> input {
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 5px;
            border: 0;
            border-bottom: 1px solid #ccc;
        }
        #NewEventForm > div > button {
            padding: 5px;
            border-radius: 4px;
            background: transparent;
            
        }
        #NewEventForm > div > button:nth-child(2) {
            border: 1px solid aquamarine;
            color: aquamarine;
        }

        #NewEventForm > div > button:nth-child(1) {
            border: 1px solid #ccc;
        }
        .NOTDISPLAY {
            display: none;
        }
        .DISPLAY {
            display: flex;
            flex-direction: column;
        }
    </style>
    <title>Dashboard</title>
</head>
<body>
    <header>
        <div class="MainHeader">
            <h1>Event Platform</h1>
        </div>
        <div class="SecondaryHeader">
            <h2>WorldSkills</h2>
            <a href="/logout"><h2>Sign Out</h2></a>
        </div>
    </header>
    <div id="Content">
        <div class="ManageEventsContainer">
            <h3>Manage Events</h3>
        </div>
        <div id="RealContent">
            <form action="/dashboard/newEvent" method="POST" id="NewEventForm" class="NOTDISPLAY">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    {{csrf_field()}}
                    <h1>Create new Event</h1>
                    <label>Name:</label><br>
                    <input name="name" type="text" placeholder="Digite o nome do evento"/>
                    <br><label>Slug:</label><br>
                    <input name="slug" type="text" placeholder="Digite o slug do evento"/><br>
                    <label>Date:</label><br>
                    <input name="date" type="date" placeholder="Digite a data do evento"/><br>
                    <div>
                        <button id="CancelButton" type="button">Cancel</button>
                        <button type="submit">Cadastrar</button>
                    </div>
            </form>
            <div class="NewEventContainer">
                <h1>Manage Events</h1>
                <button id="NewEvent">New event</button>
            </div>
            <div class="EventsContainer">
                @foreach ($events as $event)
                    <div>
                        <h1><a style="text-decoration: none;color: black" href="/dashboard/event/{{$event->id}}">{{$event->name}}</a></h1>
                        <h3>{{$event->date}}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="{{asset('js/dashboard.js')}}" rel="javascript" type="text/javascript"></script>
</body>
</html>