<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Items</title>
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
        nav {
            background-color: #666;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
        }
        nav a:hover {
            background-color: #444;
        }
        main {
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<header>
    <h1>List of Items</h1>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
</nav>

<main>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Debit1</th>
                <th>Debit2</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ventilations as $ventilation)
                <tr>
                    <td>{{ $ventilation->id }}</td>
                    <td>{{ $ventilation->type }}</td>
                    <td>{{ $ventilation->debit1 }}</td>
                    <td>{{ $ventilation->debit2 }}</td>
                    <td><button>Delete</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</main>

<footer>
    <p>&copy; 2024 Your Website Footer</p>
</footer>

</body>
</html>
