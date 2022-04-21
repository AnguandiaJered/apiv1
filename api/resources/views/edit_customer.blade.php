<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container col-md-8">
        <form action="{{route('customer.update')}}" method="POST">
        @csrf
        <input type="hidden" value="{{$custe->id}}" name="id"> 
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{$custe->name}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" value="{{$custe->phone}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="rate">Rate</label>
                <input type="number" name="rate" value="{{$custe->rate}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{$custe->email}}" class="form-control">
            </div>
            <div class="form-group">            
                <input type="submit" class="btn btn-primary" value="Modifier">
            </div>
        </form>
    </div>
</body>
</html>