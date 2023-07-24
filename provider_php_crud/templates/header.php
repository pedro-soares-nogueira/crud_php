<?php 
    include_once("config/url.php");
    include_once("config/process.php");

if(isset($_SESSION['message'])) {
    $printMessage = $_SESSION['message'];
    $_SESSION['message'] = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provider - Agenda</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="max-w-[1120px] mx-auto relative h-screen">
    <nav class="rounded-lg shadow">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="">
                <a href="<?php echo $BASE_URL ?>index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-16 h-16">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                    </svg>
                </a>
            </div>
            <div class="w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white ">
                    <li>
                        <a href="<?php echo $BASE_URL ?>index.php"
                            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 "
                            aria-current="page">Agenda</a>
                    </li>
                    <li>
                        <a href="<?php echo $BASE_URL ?>create.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent
                             md:border-0 md:hover:text-blue-700 md:p-0 ">Novo contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="mt-10">