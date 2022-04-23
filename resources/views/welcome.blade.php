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
            <h1>ARTICLE-LIST</h1>
        </header>
        <main>
            <div class= "container"></div>
                @foreach($article as $artiche)
                
                <a href="/article/article->{{id}}">
                    <div class="card">
                        <h2>&plus; {{$article->title}}</h2>
                    </div>

                </a>
                @endforeach
                <a href="/add">add</a>

        </main>
    </body>
</html>