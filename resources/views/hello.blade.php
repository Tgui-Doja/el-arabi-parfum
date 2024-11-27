<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 95%;
            height: 95%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            overflow: hidden;
        }
        .sidebar {
            width: 20%;
            background-color: #f1f1f1;
            padding: 20px;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            float: left; /* Float the sidebar to the left */
        }
        .sidebar form {
            margin-bottom: 20px;
        }
        .sidebar form button {
            display: block;
            width: 100%;
            padding: 12px 0;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .sidebar form button:hover {
            background-color: #0056b3;
        }
        .content-container {
            width: 80%;
            padding: 20px;
            height: 100%;
            float: left; /* Float the content area to the left */
        }
        iframe {
            border: none;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="sidebar">
        <form id="user-form" action="/dashboard" method="get" target="content-frame">
            <button type="submit">Manage Users</button>
        </form>
        <form id="user-form" action="/dashboard1" method="get" target="content-frame">
            <button type="submit">Manage reservation</button>
        </form>
        <form id="reservation-form" action="/dashboard2" method="get" target="content-frame">
            <button type="submit">Manage Parfum - Niche</button>
        </form>
        <form id="femme-form" action="/dashboard3" method="get" target="content-frame">
            <button type="submit">Manage Parfum - Women</button>
        </form>
        <form id="homme-form" action="/dashboard4" method="get" target="content-frame">
            <button type="submit">Manage Parfum - Men</button>
        </form>
        <form id="cart-form" action="/cartUser" method="get" target="content-frame">
            <button type="submit">Cart</button>
        </form>
    </div>
    <div class="content-container">
        <iframe name="content-frame" id="content-frame"></iframe>
    </div>
</div>

</body>
</html>
