<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Laravel Scraper</title>
    <style>
        .wrapper {
            margin: 0 auto;
            width: 60%;
        }
    </style>
</head>
<body>
<div class="wrapper">
   <form action={{ route('save') }} class="pt-5" method="post">
   @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">URL</label>
        <input type="text" name="url" class="form-control" id="exampleFormControlInput1" placeholder="url">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Selector</label>
        <input type="text" name="selector" class="form-control" id="exampleFormControlInput1" placeholder="Selector">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</div>
</body>
</html>
