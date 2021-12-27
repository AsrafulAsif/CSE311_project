<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
                .button {
                background-color: #AAA4A2;
                border: none;
                color:black;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                }
                .all{
                   
                   text-align:center;
                   
                }
                .admin-main h3{
                text-align:center;
                color:black;
                }
                </style>
</head>
<body>
        <div class="admin-main">
        
        </div>
        <div class="all">
        <button onclick="location.href='admin.php'"class="button ">Admin </button>
        <button  onclick="location.href='insert_jewellery.php'" class="button ">Insert Jewellery</button>
        <button onclick="location.href='admin_index.php'"class="button ">Index</button>
        <button onclick="location.href='orders2.php'"class="button ">Buy Orders</button>
        <button onclick="location.href='borrows.php'"class="button ">Borrow Orders</button>
        <button onclick="location.href='admin_logout.php'"class="button ">Logout</button>
        </div>
</body>
</html>