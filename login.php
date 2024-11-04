<?php
require_once('connection.php');
$newConnection->userLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>

    <div class="flex min-h-[100svh] justify-center items-center flex-col gap-2">
        <form action="" method="post" class="border rounded-md p-2 flex items-center flex-col gap-2">
            <div>
                <label for="username" class="block text-sm/6 font-medium text-white">Username</label>
                <div class="relative mt-2 rounded-md shadow-sm">
                    <input type="text" name="username" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" value="test">
                </div>
            </div>
            <div>
                <label for="password" class="block text-sm/6 font-medium text-white">Password</label>
                <div class="relative mt-2 rounded-md shadow-sm">
                    <input type="password" name="password" id="password" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" value="password123">
                </div>
            </div>
            <div>
                <button type="submit" name="user_login" class="inline-flex items-center rounded-md bg-gray-50 px-4 py-2 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Login</button>
                <a href="register.php">walay account?</a>
            </div>
        </form>
    </div>

</body>

</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>