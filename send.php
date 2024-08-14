<?php
    $name = $_POST['name'];
    $class = $_POST['class'];
    $num = $_POST['number'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantaphat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-light rounded-3 py-3 my-3">
        <form>
            <h2 class="my-3">ข้อมูล</h2>
                <p class="mb-4">ชื่อ - <?php echo $name;?></p>
                <p class="mb-4">ชั้น - <?php echo $class;?></p>
                <p class="mb-4">เลขที่ - <?php echo $num;?></p>
                <p class="mb-4">
                    เพศ - 
                    <?php
                    $gen = $_POST['gender'];
                        switch ($gen) {
                            case 1:
                                echo "ชาย";
                            break;
                            case 2:
                                echo "หญิง";
                            break;
                            default:
                                echo "อื่นๆ";
                        }
                    ?>
                </p>
            <a href="index.php" class="btn btn-dark px-3">หน้าแรก</a>
        </form>
    </div>
</body>
</html>
