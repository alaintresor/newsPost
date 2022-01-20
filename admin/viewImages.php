<?php
            $conn=new mysqli("localhost","root","password","world_show");
            $sql="SELECT * FROM tblposts";
            $query=$conn->query($sql);
            while($row=mysqli_fetch_array($query))
            {
            ?>
            <tr>
            <td><?php echo $row['PostTitle'];?></td>
            <?php 
            echo "<img src='postimages/".$row['PostImage']."'>";
            ?>
                
        </tr>

                <?php

            }
            
            ?>
        
