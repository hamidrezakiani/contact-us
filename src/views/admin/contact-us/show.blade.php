<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-3">
            <h3>Name : {{$contact->name}}</h3>
            <h3>Title : {{$contact->title}}</h3>
            <h3>Email : {{$contact->email}}</h3>
            <h3>Date : {{$contact->created_at->format('Y-m-d H:i')}}</h3>
        </div>
        <div class="row">
           <div class="col-2"></div>
           <div class="col-8">
               <div style="width: 100%;display: flex;padding:10px;flex-direction: column;background-color: bisque;min-height: 200px">
                  <p>{{$contact->text}}</p>
               </div>
           </div>
           <div class="col-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>