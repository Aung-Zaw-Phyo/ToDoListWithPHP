<?php
    $db = mysqli_connect('localhost', 'root', '', 'test');
    $result = mysqli_query($db, "SELECT * FROM lists");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <script src="https://kit.fontawesome.com/7c0ec42130.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row d-flex flex-column align-items-center mt-5 p-3">
            <div class="col-12 col-lg-8 p-3 bg-info rounded mb-3">
                <form action="db.php" method="post" class="">
                    <input name='title' type="text" class="form-control form-control-lg border-light my-2" placeholder="What do you want to do?" required>
                    <button name='submit' type="submit" class="btn w-100 btn-secondary my-2"> Add <i class="fa-solid fa-plus"></i></button>
                </form>
            </div>
            <div class="col-12 col-lg-8 p-3 bg-info rounded">
                <h4 class="text-light text-center fst-italic">Lists to do </h4>
                <div class="showList">
                    <ol class="list-group list-group-numbered">
                        <?php foreach($result as $value): ?>
                            <li class="my-2 border-0 shadow rounded-3 list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                <div class="fw-bold"><?= $value['title']; ?></div>
                                <?= $value['time']; ?>
                                </div>
                                <a href="db.php?mark=<?= $value['id']; ?>" class="btn btn-outline-secondary rounded btn-sm"><i class="fa-solid fa-xmark"></i></a>
                            </li>  
                        <?php endforeach?> 
                    </ol>
                </div>
            </div>
        </div>
    </div>
</body>
</html>