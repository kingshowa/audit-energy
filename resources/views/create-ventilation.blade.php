<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <style>
        /* Basic CSS for layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        main {
            padding: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<header>
    <h1>Add Item</h1>
</header>

<main>
    <form method="POST" action="{{ route('ventilation') }}">
        @csrf
        <label for="name">Type:</label>
        <input type="text" id="" name="type" required>

        <label for="debit1">Debit1:</label>
        <textarea id="debit1" name="debit1" required></textarea>
        <label for="debit2">Debit2:</label>
        <textarea id="debit2" name="debit2" required></textarea>

        <button type="submit">Add Ventilation</button>
    </form>
</main>

</body>
</html>
