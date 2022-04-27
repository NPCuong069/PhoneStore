<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create phone</h2>
    <form action="/phone/create" method="post">
        @csrf
        <label for="Name">
            Phone name:
            <input type="text" name="phone_name">
        </label><br><br>
        <label for="Price">
            Price:
            <input type="text" name="phone_price">
        </label><br><br>
        <label for="Details">
            details:
            <input type="text" name="phone_details">
        </label><br><br>
        <label for="Brand">
            brand:
            <input type="text" name="phone_brand">
        </label><br><br>
        <button type="submit">Create Phone</button>
    </form>
</body>
</html>