<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-3">
            <h1>Contacts</h1>
        </div>
        <div class="row">
           <table class="table table-bordered">
              <thead class="table-dark">
                  <tr>
                     <th style="text-align: center;vertical-align:middle">name</th>
                     <th style="text-align: center;vertical-align:middle">title</th>
                     <th style="text-align: center;vertical-align:middle">email</th>
                     <th style="text-align: center;vertical-align:middle">status</th>
                     <th style="text-align: center;vertical-align:middle">date</th>
                     <th style="text-align: center;vertical-align:middle">operations</th>
                  </tr>
              </thead>
              <tbody>
                 @foreach($contacts as $contact)
                   <tr>
                     <td style="text-align: center;vertical-align:middle">{{$contact->name}}</td>
                     <td style="text-align: center;vertical-align:middle">{{$contact->title}}</td>
                     <td style="text-align: center;vertical-align:middle">{{$contact->email}}</td>
                     <td style="text-align: center;vertical-align:middle">
                        @switch($contact->status)
                            @case('READ')
                                 <span class="badge bg-secondary">Read</span>
                                @break
                            @default
                                 <span class="badge bg-warning">New</span>
                        @endswitch
                     </td>
                     <td style="text-align: center;vertical-align:middle">{{$contact->updated_at->format('Y-m-d H:i')}}</td>
                     <td style="text-align: center;vertical-align:middle"><a href="{{url('admin/contact-us/'.$contact->id)}}" class="btn btn-info">View</a></td>
                   </tr>
                 @endforeach
              </tbody>
           </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>