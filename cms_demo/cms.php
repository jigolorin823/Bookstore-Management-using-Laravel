<?php
    require_once("database.php");

    if(isset($_POST["submit"])){
        $sql = "INSERT INTO testDB (id,title,content,created) VALUES (?, ?, ?, CURDATE())";
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("sss", $id, $title, $content);
            
            // Set parameters
            $id = $_POST["id"];
            $title = $_POST["title"]; 
            $content = $_POST["content"];

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: cms.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
        // Close statement
        $stmt->close();
    }
?>
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
        <h3 class="text-center">Admin Stuff</h3>
        <section>
            <div class="card">
                <div class="content">
                    <table class="u-full-width">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Content</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM testDB";
                                if($result = $mysqli->query($sql)){
                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_array()){
                            ?>
                                            <tr>
                                                <td><?php echo $row["id"]; ?></td>
                                                <td><?php echo $row["title"]; ?></td>
                                                <td><?php echo $row["content"]; ?></td>
                                            </tr>
                            <?php
                                        }
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </section> <br> <br>
        <section>
            <form action="cms.php" method="post">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Title" required><br>
                <label for="content">Content</label>
                <textarea style="resize:none;" id="content" name="content" placeholder="Content" row="10"></textarea>
                <a href="index.php">Go home ur drunk</a>
                <button style="float: right" type="submit" class="btn-shadow" name="submit">Add</button>
            </form>
        </section>
    </main>
</body>
</html>