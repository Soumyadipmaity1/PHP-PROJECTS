<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Bill</title>
    <link rel="stylesheet" href="./output.css">
</head>
<body class="px-40 py-20 bg-slate-900">
 <section class="mx-auto text-center bg-slate-800 p-10 w-[700px]">
<h1 class="mx-auto text-4xl font-bold text-white m-5 mb-8 ">Customer Billing Form </h1>
<form action="./ShowOutput.php" method="post" class="text-gray-300 items-center text-center pt-5 p-2">
    <p class="p-2 m-2 text-md ">
<label >Customer Name: 
    <input type="text" name="username" class="text-black p-1" placeholder="Customer name"> 
</label>
</p>
<p class="p-2 m-2 text-md ">
<label >Contact: 
    <input type="text" name="contact"  class="text-black p-1" placeholder="Contact"> 
</label>
</p>

<p class="p-2 m-2 text-md ">
<label >Your Total Items: 
    <input type="text" name="items" class="text-black p-1" placeholder="Total Items">     
</label>
</p>

<p class="p-2 m-2 text-md "><label >Quantity: 
    <input type="text" name="quantity" class="text-black p-1" placeholder="Quantity"> 
</label>
</p>
<p class="p-2 m-2 text-md "><label >Price per Item: 
    <input type="text" name="price" class="text-black p-1" placeholder="Quantity"> 
</label>
</p>
<p class="p-2 m-2 text-md">
    <button type="submit" class="bg-blue-500 m-5 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Check out your Bill
    </button>
</p>



</form>
 </section>         
</body> 
</html>

