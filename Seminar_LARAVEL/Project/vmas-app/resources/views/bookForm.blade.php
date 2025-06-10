<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <form name="add-new-book" method="post" action="{{ url('store') }}">
        @csrf
        <div class="form">
            <div class="form__item">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div class="form__item">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" required>
            </div>
            <div class="form__item">
              <label for="genre">Choose Genre:</label>
              <select name="genre" id="genre">
                <option value="fantasy">Fantasy</option>
                <option value="sci-fi">Sci-Fi</option>
                <option value="mistery">Mistery</option>
                <option value="drama">Drama</option>
              </select>
          </div>
            <button type="submit" class="form__button">Submit</button>
        </div>
    </form>

    @foreach ($errors->all() as $error)
    <li class="error">{{$error}}</li>
    @endforeach

</body>

</html>
