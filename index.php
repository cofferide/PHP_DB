<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment UAT</title>
</head>
<body>
    <div class="page_title">Dummy Payment UAT</div>
    <form action="connect.php" method="POST">

        <label for="user">Customer ID: </label><br>
        <input type="text" name="customer_id" id="customer_id" required/><br>

        <label for="payment">Payment type: </label><br>
        <input type="text" name="payment_type_id" id="payment_type_id" required></br>

        <label for="card">Card Application ID: </label><br>
        <input type="text" name="card_application_id" id="card_application_id" required></br>        

        <label for="email">Email: </label><br>
        <input type="text" name="email" id="email" required></br>

        <input type="submit" name="submit" id="submit"/>    
    </form>
</body>
</html>