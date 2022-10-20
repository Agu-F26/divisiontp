<?php

    function isAdmin($user){
        require("con_sql.php");

        $query = "SELECT isadmin FROM tablausuarios WHERE username = '$user'";
        $check = mysqli_query($conex, $query);
        $isAdmin = $check->fetch_array()[0];
        if ($isAdmin){
            echo "
            <script>
                const botones = document.getElementsByClassName(\"btn\");
                
                for(let i = 0; i < botones.length; i++){
                    botones[i].style.display = \"inline-block\";
                }
                

                document.getElementById(\"addAuto\").style.display = \"inline-block\";

            </script>
            ";
        }
        else{
            echo "
            <script>
                const botones = document.getElementsByClassName(\"btn\");


                for(let i = 0; i < botones.length; i++){
                    botones[i].style.display = \"none\";
                }

                document.getElementById(\"addAuto\").style.display = \"none\";
            </script>
            ";
        }

        if($user != ""){
            echo "
            <script>
                const botonesAlquiler = document.getElementsByClassName(\"alquilabtn\");
                for(let i = 0; i < botonesAlquiler.length; i++){
                    botonesAlquiler[i].style.display = \"inline-block\";
                }

                document.getElementById(\"login\").style.display = \"none\";
                document.getElementById(\"create\").style.display = \"none\";
                document.getElementById(\"autoalquilado\").style.display = \"inline-block\";
            </script>
            ";
        }
        else{
            echo "
            <script>
                const botonesAlquiler = document.getElementsByClassName(\"alquilabtn\");
                
                for(let i = 0; i < botonesAlquiler.length; i++){
                    botonesAlquiler[i].style.display = \"none\";
                }
                document.getElementById(\"login\").style.display = \"inline-block\";
                document.getElementById(\"create\").style.display = \"inline-block\";
                document.getElementById(\"autoalquilado\").style.display = \"none\";
            </script>
            ";
        }
    }
?>