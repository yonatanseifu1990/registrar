<html>
   <head>
      <title>Creating MySQL Table</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'registrar';
         $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
         
         
         printf('Connected successfully.<br />');
   
         $sql = "SELECT id,phone FROM college";
		 
         $result = $mysqli->query($sql);
           
         if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               printf("Id: %s,phone: %s <br />", 
               $row["id"], 
            
               $row["phone"]);               
            }
         } else {
            printf('No record found.<br />');
         }
         mysqli_free_result($result);
         //$mysqli→close();
      ?>
   </body>