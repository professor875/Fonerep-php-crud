<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>PHP CRUD</title>
</head>
<body>
    <nav class="w-full px-32 py-1 bg-black text-white flex justify-between text-2xl">
        <a class="p-4 hover:bg-green-600 rounded-lg transition duration-300" href="/index.php">Home</a>
        <a class="p-4 hover:bg-green-600 rounded-lg transition duration-300" href="./create.php">Create</a>
    </nav>

    <div class="w-full p-6">
        <table class="w-full border-2 rounded-xl max-w-[700px] mx-auto">
            <tr class="border border-black">
                <th>id</th>
                <th>Name</th>
                <th>Grade</th>
                <th>Action</th>
            </tr>
            <?php
            require_once "./controllers/conn.php";
            $sql_query = "SELECT * FROM users";
            if ($students = $conn ->query($sql_query)) {
                while ($row = $students -> fetch_assoc()) {
                    $Id = $row['id'];
                    $Name = $row['name'];
                    $Grade = $row['grade'];
                    ?>

                    <tr class="trow">
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $Name; ?></td>
                        <td><?php echo $Grade; ?></td>
                        <td><a href="./edit.php?id=<?php echo $Id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="./DeleteController.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                }
            }
            ?>
        </table>
    </div>

</body>
</html>