<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
    
        <header>
            <h1>{{$article->title}}</h1>
        </header>
        <main>
            <p>{{$article->description}}</p>
            <a href="/">retour</a>
            <a href="/edit/{{article->id}}">edit</a>
            <a href="/delete/{{article->id}}">Delete</a>
        </main>
    </body>>
</html>