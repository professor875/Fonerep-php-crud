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
                <th>Name</th>
                <th>Grade</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
            </tr>
        </table>
    </div>

</body>
</html>