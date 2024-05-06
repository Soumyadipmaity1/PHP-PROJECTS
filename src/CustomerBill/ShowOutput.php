<?php 
$items = $_POST["items"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];
$totalPrice = $items * $quantity * $price;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <title>Your Bill</title>
</head>
<body class="px-40 py-20 bg-slate-900 text-gray-300 ">
 <section class="mx-auto text-center text-xl bg-slate-800 p-10 pb-20 w-[700px]">
        <h1 class="text-3xl font-bold  p-2 m-5 mb-10 text-lime-300">Dear <?php echo "{$_POST["username"]}" ; ?>, your bill </h1>

        <p class="p-2">Customer name: <?php echo "{$_POST["username"]}"; ?></p>
        <p class="p-2">Contact: <?php echo "{$_POST["contact"]}"; ?></p>
        <p class="p-2">Your Total items: <?php echo "{$_POST["items"]}"; ?></p>
        <p class="p-2">Total quantity of the item: <?php echo "{$_POST["quantity"]}"; ?></p>  
        <p class="p-2">Your Price per item: <?php echo "{$_POST["price"]}"; ?></p>  
        <p>Total Price: <?php echo $totalPrice; ?></p>
    </section> 
</body>
</html>

