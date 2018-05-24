	
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Game On!</title>
                              <link rel="icon" href="lottos.png">

        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
                        <link rel="stylesheet" href="projectscss.css"  media = "screen and (min-width:769px)" >
            	<link rel = "stylesheet" type="text/css" href = "mediaqueries(tablets).css" media = "screen and (min-width:481px) and (max-width:768px)"/>
		<link rel = "stylesheet" type="text/css" href = "mediaquery(phones).css" media = "screen and (max-width:480px)"/>
                        	<meta name="viewport" content="width=device-width" />

<script src = "prog.js"></script>
        <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
</style>
        
    </head>
    
    
    <body onload = "startTime()">
        
    
        <div class="container">
          <div class="jumbotron">
                            <img id = "logo" src = "logo.jpg" />
            <h1> Dawson's Lotto Site</h1> 
            
</div>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="project.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="videopage.html">Video Page</a>
      </li>
        
      <li class="nav-item">
        <a class="nav-link " href="contactUs.html"> Contact Us</a>
      </li>
          
         <li class="nav-item">
        <a class="nav-link " href="FAQ.html"> FAQ</a>
      </li>
          <li class="nav-item">
        <a class="nav-link " href="map.html"> Map</a>
      </li>
        
        <li class="nav-item">
        <a class="nav-link " href="#"> Player History</a>
      </li>
    </ul>
          <p id = "txt" > </p>

      <label class="switch">
  <input type="checkbox" onCLick = "playMusic()">
  <span class="slider"></span>
</label>
  </div>
           
           
           
           
</nav>
 <div class="container">
          <div class="jumbotron">
            

            			<h2> Player History </h2> 
              
              <?php
    
$conn = mysqli_connect('localhost', 'root', '', 'lotto', '3307')
    or die ('cannot connect to do');
$query = "select Name,Surname, setId, LottoNum1, LottoNum2, LottoNum3, LottoNum4,LottoNum5 from lottonumbers ";
$result = mysqli_query($conn, $query)
     or die ('cannot connect to do' . mysqli_error($conn));
?>

   <html>
       
       <div> 
       <?php
           while($row = mysqli_fetch_assoc($result)){
                             echo "<table>
              <tr>
                    <th>Name</th>
                     <th>Surname</th>
                  <th>setId</th>
                <th>LottoNum1</th>
                <th>LottoNum2</th> 
                <th>LottoNum3</th>
                 <th>LottoNum4</th>
                  <th>LottoNum5</th>
              </tr>
              <tr>
                <td>$row[Name]</td>
                <td>$row[Surname]</td>
                <td>$row[setId]</td>
                <td>$row[LottoNum1]</td>
                <td>$row[LottoNum2]</td>
                <td>$row[LottoNum3]</td>
                <td>$row[LottoNum4]</td>
                <td>$row[LottoNum5]</td>
              </tr>
                          <br/>;

            </table>";

               
           }
            //   return true;
           
           ?>
       </div>
    


     </div>
            </div>

    </body>
</html>
