<h2>Member</h2>
         
         <div class="table-responsive small py-4">
           <table class="table table-striped table-sm">
             <thead>
               <tr class="">
                 <th scope="col">ID</th>
                 <th scope="col">ชื่อจริง</th>
                 <th scope="col">นามสกุล</th>
                 <th scope="col">Username</th>              
                 <th scope="col">E-mail</th>
                 <th scope="col">Password</th>
                 <th scope="col">รูปภาพ</th>
               </tr>
             </thead>
   
   
             <tbody>
               <?php
                  $i=0;
                  $sql_product = "SELECT * FROM `member`";													
                   $query = mysqli_query($con,$sql_product);
                   while($result=mysqli_fetch_array($query))
                   { 
               ?>
               <tr>
                 <td><?php echo $result['member_id']; ?></td>          
                 <td><?php echo $result['m_firstname']; ?></td>
                 <td><?php echo $result['m_lastname']; ?></td>          
                 <td><?php echo $result['username']; ?></td>
                 <td><?php echo $result['email']; ?></td>
                 <td><?php echo $result['m_password']; ?></td>
                 <td><?php echo $result['m_image']; ?></td>
               
   
               
               </tr>
               <?php } ?>
             </tbody>
             
   
             
   
   