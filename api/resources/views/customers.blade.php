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
        
        <form action="{{route('customer.store')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="phone number">
            </div>
            <div class="form-group">
                <label for="rate">Rate</label>
                <input type="number" name="rate" class="form-control" placeholder="rate">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">            
                <input type="submit" class="btn btn-primary" value="Enregistrer">
            </div>
        </form>
 
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Rate</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
             @foreach ($custe as $item)
            <tr>              
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->rate}}</td>
                <td>{{$item->email}}</td>
                <td>
                    <a class="btn btn-success" href="{{'/edit_customer/'.$item->id}}".$id>edit</a>
                    <a class="btn btn-danger" href="{{'/customer/delete/'.$item->id}}">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>