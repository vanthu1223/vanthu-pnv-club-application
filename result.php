<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
<style>
    body{
       padding: 20px;
        font-size: 20px;
        margin-top: 10%;
        border: 2px solid salmon;
       width: max-content;
       justify-content: center;
       margin-left: 30%;
    }
</style>
</head>
<body>
    <img src="hinh.png" alt="anh" width="100px ">
    <h3>Thank You <?php echo $_GET['username']?>!!!</h3>
    <p>We received your application for the <?php echo $_GET['club']?></p>
    <?php
    if (isset($_GET['mang'])) {
        $selectedSkills = $_GET['mang'];
        $mang = [];
        foreach ($selectedSkills as $skill) {
            $mang[] = $skill;
        }
        $result = implode(" and ", $mang);
        echo "You are " . $result;
    }
    ?>
    <p>You will be avaliable on <?php echo $_GET["time"]?></p>
</body>
</html>