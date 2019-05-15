<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple CMS</title>
    <link rel="stylesheet" href="css/skeleton-plus.min.css">
    <style media="screen">
        .container{
            margin-top: 2%;
        }
    </style>
</head>
<body>
    <main class="container">
        <h3 class="text-center">Simple CMS Crap</h3>
        <section>
            <?php 
                require_once("database.php");

                $sql = "SELECT * FROM testDB";
                if($result = $mysqli->query($sql)){
                    if($result->num_rows > 0){
                        while($row = $result->fetch_array()){
            ?>
                            <div class="card card-shadow">
                                <div class="content">
                                    <a style="text-decoration: none;" href=""><h5><?php echo $row["title"];?></h5></a>
                                    <?php echo $row["content"];?>
                                </div>
                            </div>
            <?php
                        }
                    }
                }
            ?>
        </section> <br> <br>
        <section>
            <form action="cms.php" method="post">
                <button style="float: right;"type="submit" class="btn-shadow">Admin Stuff</button>
            </form>
        </section>
    </main>
</body>
</html>