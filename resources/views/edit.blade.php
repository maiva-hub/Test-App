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
            <h1>Edit-Form</h1>
        </header>
        <main>
            <form action="POST">
                @csrf
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{article->title}}">

                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10">{{article->descrition}}</textarea>

                <label for="author">Author</label>
                <input type="text" name="author" id="author" value="{{article->author}}">

                <button type="submit">Edit</button>

            </form>

        </main>
    </body>>
</html>