<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title><?= $title ?></title>
</head>
<body class="bg-gray-100">

    <?php include __DIR__ . "/header.php"; ?>
  <main class="py-10">
        <?php include $thispage; ?>
    </main>

   
  

</body>
</html>
