<?php

                                            $sql ="SELECT * FROM employees WHERE tmp='$tmp'";
                                            $res = mysqli_query($mysqli,$sql);
                                            if(mysqli_num_rows($res) > 0){
                                                while($row = mysqli_fetch_assoc($res)){
                                                    $id = $row['id'];
                                                    $sqlImg ="SELECT * FROM picture WHERE tmp='$tmp'";
                                                    $resImg = mysqli_query($mysqli,$sqlImg);
                                                    while($rowImg = mysqli_fetch_assoc($resImg)){
                                                        echo "<div>";
                                                            echo "<img style='width:140px; height:140px;' src='assets/image/uploads/user".$tmp.".jpg'>";
                                                       
                                                        echo "</div>";
                                                    }
                                                }
                                            }
                                            ?> 