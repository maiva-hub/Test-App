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
            <h1>Adding ressources</h1>
        </header>
        <main>
            <form action="POST">
                @csrf
                <label for="">Title</label>
                <input type="text" name="title" >

                <label for="">Description</label>
                <textarea name="description" ></textarea>

                <label for="">Author</label>
                <input type="text" name="author" >

                <button type="submit">Create</button>

            </form>

        </main>
    </body>>
</html>