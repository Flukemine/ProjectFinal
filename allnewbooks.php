<?php
    
$conn = mysqli_connect('localhost', 'root', '', 'books_db2', '3307')
    or die ('cannot connect to do');
$query = "select bookId, bookname, bookauthor, bookcategory from books ";
$result = mysqli_query($conn, $query)
     or die ('cannot connect to do' . mysqli_error($conn));
?>

<!DOCTYPE html>
   <html>
       <head>
           <title> All books </title>
       </head>
       <body>
       <h1> All books
       </h1>
       <div> 
       <?php
           while($row = mysqli_fetch_assoc($result)){
               echo "<p> $row[bookname]</p>";
                 echo "<p> $row[bookname]</p>";
                 echo "<p> $row[bookauthor]</p>";
                 echo "<p> $row[bookcategory]</p>";
                 echo "<button type='button'><a href = 'http://localhost:8084/delbook.php?id=$row[bookId]'>Delete</a></button>";
           }
           ?>
       </div>
       </body>
   </html> 

