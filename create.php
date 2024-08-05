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

<div class="flex justify-center w-full pt-32">
    <form method="post" action="./controllers/create.php"
          class="border-2 rounded-2xl p-12 bg-gray-100 flex flex-col justify-center items-center min-w-[600px] gap-6">
        <h1 class="text-3xl font-bold">Create Students</h1>

        <label class="flex items-center w-full gap-6" for="name">Name:
            <input type="text" name="name" class="w-full p-3 rounded-lg bg-white border"
                   required placeholder="Enter your Name..">
        </label>

        <label class="flex items-center w-full gap-6" for="name">Grade:
            <input type="number" name="grade" class="w-full p-3 rounded-lg bg-white border" required placeholder="Enter Grade..">
        </label>

        <span class="w-full flex justify-end">
            <button class="bg-green-600 hover:bg-green-700 transition rounded-xl px-6 py-2 text-white text-semibold">Create</button>
        </span>
    </form>
</div>
asdasdd

<?php
    function create(){

    }
?>

</body>
</html>