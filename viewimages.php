<?php
                    $conn=mysqli_connect("localhost","root","password","world_show");
                    $res=mysqli_query($conn,"SELECT PostTitle,PostImage FROM tblposts ");
                    
            echo" <div class='owl-carousel news-carousel carousel-item-4 position-relative'>
                <div class='position-relative overflow-hidden' style='height: 300px;'>";
                    while ($row=mysqli_fetch_array($res))
                     {
                        
                    
                    echo'<img src="data:./admin/postimages;base64,'.base64_encode($row['PostImage']).'">';
                     }
                     ?> 