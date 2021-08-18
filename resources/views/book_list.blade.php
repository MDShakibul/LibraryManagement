<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style3.css')}}">
    <title>Document</title>
</head>
<body>

     <h1 class="tag">Book List</h1>
                
            </div>

            <div>
                <form action="{{URL::to('/')}}" method="get">
                <button class="button">+ Add Books</button>
            </div>
            <div class="box-content">
                <table class="table">
                  <thead>
                      <tr>
                          <th>Image</th>
                          <th>Book No</th>
                          <th>Title</th>
                          <th>Auther</th>
                          <th>ISBN</th>
                          <th>Edition</th>
                          <th>Quantity</th>
                          <!-- <th>Availiable</th> -->
                          
                      </tr>
                  </thead> 
                  @foreach($book_list as $list)  
                  <tbody>
                  <tr> 
                  <td><img src="{{ URL::to($list->image)}}" style="height: 80px; width: 88x;">
                        <td class="center">{{$list->book_type}}</td>
                        <td class="center">{{$list->book_title}}</td>
                        <td class="center">{{$list->authors}}</td>
                        <td class="center">{{$list->isbn}}</td>
                        <td class="center">{{$list->publisher}}</td>
                        <td class="center">{{$list->quantity}}</td>
                        
                        
                        
                    </tr>
                    
                        
                  </tbody>
                  @endforeach
              </table>            
            
    
</body>
</html>