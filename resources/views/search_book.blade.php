<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/https://pro.fontawesome.com/releases/v5.10.0/css/all.css')}}" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    
    <title>Book Search</title>
</head>
<body>
    <form action="{{url('/issue_book')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="main">
        <div class="box">
            <i class="fa fa-search" aria-hidden="true"></i>
            <input type="text" name="book" placeholder=" Search by Book No/ISBN No/ Book Title/Author" class="search"><br>
        </div>
    
        <div class="box2">
            <label class="useridlabel">User ID</label><br>
            <input type="text" class="userid" name="user_id"><br>
            
            <label class="namelabel">Name</label><br>
            <input type="text" class="name" name="name"><br>
    
            <label class="issuedatelabel"> Issue Date</label><br>
            <input type="date" class="issuedate" name="issuedate" >
    
            <label class="duedatelabel">Due Date</label><br>
            <input type="date" class="duedate" name="duedate" >
        </div>
</form>

        <div>
            <button class="button">Issue</button>
        </div>

        

        <form action="{{URL::to('/')}}" method="get">
            <button class="button_back">Back</button>
        </form>
    </div>
</body>
</html>