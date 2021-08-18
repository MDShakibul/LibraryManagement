<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}" integrity="{{asset('css/sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Library Management</title>
</head>
<body>
    <nav class="navbar">
        <div class="title">Library Management</div>
        <div class="navbar-links">
            <ul>
                <li><a href="{{URL::to('/')}}">Add Books</a></li>
                <li><a href="{{URL::to('/book_list')}}">Book Lists</a></li>
                <li><a href="{{URL::to('/search_book')}}">Book Search</a></li>
            </ul>
        </div>
    </nav>

    <div class= main>
    <form action="{{url('/add_book')}}" method="post" enctype="multipart/form-data">
    @csrf
            <div class="form">
                <div class="name"><h2>ADD BOOKS</h2></div>
                <div class="column1">
                    <label class="librarylabel">Library</label><br>
                    <input type="text" class="library" name="library" required><br>
                    
                    <label class="depertmentlebel">Depertment</label><br>
                    <input type="text" class="depertment" name="depertment" required><br>
    
                    <label class="languagelabel">Language</label><br>
                    <input type="text" class="language" name="language" required><br>
                    
                    <label class="booktypelebel">Book Type</label><br>
                    <input type="text" class="booktype" name="book_type" required><br>
                </div>
    
                <div class="column2">
                    <label class="booktitlelabel">Book Title</label><br>
                    <input type="text" class="booktitle" name="book_title" required><br>
                    
                    <label class="isbnlebel">ISBN</label><br>
                    <input type="text" class="isbn" name="isbn" required><br>
    
                    <label class="authorslabel">Authors</label><br>
                    <input type="text" class="authors" name="authors" required><br>
                    
                    <label class="publisherlebel">Publisher</label><br>
                    <input type="text" class="publisher" name="publisher" required><br>
                </div>

                <div class="column3">
                    <label class="publisherdatelabel">Publisher Date</label><br>
                    <input type="date" class="publisherdate" name="publish_date" required>
                    
                    <label class="versionlebel">Version</label><br>
                    <input type="text" class="version" name="version" required><br>
    
                    <label class="noofpagelabel">NO. of page</label><br>
                    <input type="text" class="noofpage" name="no_of_page" required><br>
                    
                    <label class="imagelabel" for="fileInput">Image</label>
                    <input class="image" name="image"type="file"><br>
                </div>

                <div class="column4">
                    <label class="categorylabel">Category</label><br>
                    <input type="text" class="category" name="category" required>
                    
                    <label class="quantitylabel">Quantity</label><br>
                    <input type="text" class="quantity" name="quantity" required><br>
    
                    <label class="pricelabel">Price</label><br>
                    <input type="text" class="price" name="price"required><br>
                    
                    <label class="conditionlabel">Condition</label><br>
                    <input type="text" class="condition" name="condition" required><br>
                </div>

                <div class="column5">
                    <label class="locationlabel">Location</label><br>
                    <input type="text" class="location" name="location" required>
                    
                    <label class="supplierlabel">Supplier</label><br>
                    <input type="text" class="supplier" name="supplier" required><br>
    
                    <label class="daterecivedlabel">Date recived</label><br>
                    <input type="date" class="daterecived" name="date_recived" required>
                    
                    <label class="ebooklabel" for="fileInput">E-Book</label>
                    <input class="image2" name="image2"type="file" ><br>
                </div>

                <div class="column6">
                    <label class="descriptionlabel">Description</label><br>
                    <textarea rows="4" cols="50" type="text" class="description" name="description" ></textarea>
                </div>

                <div class=column7>
                    <button class="button">Add/Update</button>
                </div>
                    
                    
               

                
    
            </div>
        </form>
    </div>
    
</body>
</html>
