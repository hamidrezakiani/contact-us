<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New ticket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-3">
            <h1>Contact us</h1>
        </div>
        <div class="row">
           <div class="col-3"></div>
           <div class="col-6">
               <form action="{{url('contact-us')}}" method="POST">
                   @csrf
                   <div class="form-group m-3">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Enter your name...." name="name" id="name" class="form-control">
                   </div>
                   <div class="form-group m-3">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Enter your email...." name="email" id="email" class="form-control">
                   </div>
                   <div class="form-group m-3">
                    <label for="title">Title</label>
                    <input type="text" placeholder="Enter title...." name="title" id="title" class="form-control">
                   </div>
                   <div class="form-group m-3">
                    <label for="text">Message</label>
                    <textarea name="text" class="form-control" id="text" cols="30" rows="10"></textarea>
                   </div>
                   <div class="form-group m-3">
                       <button type="submit" class="btn btn-success">Send</button>
                   </div>
               </form>
           </div>
           <div class="col-3"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>