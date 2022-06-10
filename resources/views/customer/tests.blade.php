<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
        @if($categories->count() <= 0)
            <h1> aucune categorie pour le moment</h1>
            @else
            <h1> Vos categories:</h1>
            @foreach($categories as $categorie)
            {{$categorie->titre}}  <br>
            @endforeach
            @endif

    </div>
    <div>
        @if($modules->count() <= 0)
            <h1> aucun module</h1>
            @else
            <h1> Des modules</h1>
            @foreach($modules as $module)
            {{$module->titre}}  <br>
            @endforeach
            @endif

    </div>
    <div>
           {{-- <h1> Vos formations:</h1>
            @foreach($formations as $formation)
            {{$formation->nom}}  <br>
            @endforeach --}}
       
    </div>

   {{--  <div>
        @if($estabonne->count() <= 0)
            <h1> aucun client</h1>
            @else
            <h1> Des clients</h1>
            @foreach($estabonne as $clients)
            @foreach($clients->user as $client)
                  {{$client->name}}  <br>
            @endforeach
            @endforeach
            @endif

    </div>  {{--}}


          
</body>
</html>