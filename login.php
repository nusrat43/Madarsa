<?php
           
               
             include 'config.php';

             $formusername=$_POST['username'];
             $formpassword=$_POST['password'];

             $sql="select * from login where username='".$formusername."' and password='".$formpassword."' and status='Active'";
             $result=$conn->query($sql);
             
        
             if($row=$result->fetch_assoc())
             {
               $type=$row['type']; 
             
               if($type=='Admin')
               {
                echo "<script>
                
                window.location='adminDashboard.php'; 
                </script>";
               }
              
             }
             else
             {
                echo "Wrong username or password!"; echo $sql;
             }
             
            
         ?>