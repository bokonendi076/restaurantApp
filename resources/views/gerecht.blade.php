<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{route('process-create-gerecht')}}" method="POST">
            @csrf
            <label for="">naam</label>
            <input class="form-control" type="text" name="naam">
        
            <label for="">code</label>
            <input class="form-control" type="text" name="code">
        
            <label for="">categorie</label>
            <select class="form-control" name="categorie" id="">
                @foreach ($categorieeën as $categorie)
                <option value="{{$categorie->id}}">{{$categorie->naam}}</option>
                @endforeach
            </select>
        
            <input type="submit">   
        </form> 
    </div>
</body>
</html>

