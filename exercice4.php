<!DOCTYPE html>  
 <html>  
      <head>  
           <title>json-php</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Append Data to JSON File</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>First Name</label>  
                     <input type="text" name="name" class="form-control" /><br />   
                     <label>Last Name</label>  
                     <input type="text" name="lname" class="form-control" /><br />  
                     <label>N° phone</label>  
                     <input type="number" name="phone" class="form-control" /><br />  
                     <input type="submit" name="submit" value="Append" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>
            
           <br> 

           <?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      } 
      else if(empty($_POST["lname"]))  
      {  
           $error = "<label class='text-danger'>Enter Gender</label>";  
      }  
      else if(empty($_POST["phone"]))  
      {  
           $error = "<label class='text-danger'>Enter Designation</label>";  
      }  
      else  { 
       
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'lname'          =>     $_POST["lname"],  
                     'phone'     =>     $_POST["phone"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
               
                $content = file_get_contents("data.json");
                $data = json_decode($content, true);
                echo '<table class="table table-borderless">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>N° Phone</th>
                    </tr>
               </thead>';
              
                foreach($data as $row){
                echo'<table class="table table-borderless">
                
                <tbody>
                <td>'.$row["name"].'</td>  <td>'.$row["lname"].'</td>  <td>'.$row["phone"].'</td><br><br>
                </tbody>
            </table> ';
            

               }
                }  
               else  
                {  
                $error = 'JSON File not exits';  
               }  
               }  
               }  
          ?>  
      </body>  
 </html>  