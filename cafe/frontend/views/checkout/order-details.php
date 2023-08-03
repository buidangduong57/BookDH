<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Details</title>
    <!-- Add your CSS stylesheets here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: brown;
            color: #000;
        }

        .order-details {
            max-width: 1300px;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            font-family: Arial, sans-serif;
        }

        .order-details h2 {
            margin-top: 0;
            text-align: center;
            padding-bottom: 20px;
            font-size: 20px;
            font-weight: bold;
            border-bottom: 2px solid #000; /* Dấu gạch chân bên dưới */
        }

        .order-details p {
            font-size: 17px;
            font-weight: 300;
            margin: 5px 0;
            display: flex;
            align-items: center;
        }

        .order-details p i {
            margin-right: 10px;
        }

        .order-details h3 {
            margin-bottom: 10px;
        }

        .order-details table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .order-details th,
        .order-details td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .order-details th {
            background-color: #f2f2f2;
        }

        .order-details tr:hover {
            background-color: #f5f5f5;
        }

        /* CSS for the Total column */
        .order-details .total-col {
            font-weight: bold;
            background-color: #f2f2f2;
        }
        .order-details .total-col td {
            color: #8B4513; /* Thêm màu đỏ cho phần tổng số tiền */
        }

    </style>
</head>
<body>
<div class="order-details">
        <h2><i class="fas fa-shopping-cart"></i> CHI TIẾT ĐẶT HÀNG</h2>
        <div class="order-info">
            <p><i class="fas fa-info-circle"></i> ID đơn đặt hàng: <?= $order->id ?></p>
            <p><i class="fas fa-user"></i> Tên người đặt hàng: <?= $order->name ?></p>
            <p><i class="fas fa-map-marker-alt"></i>&nbsp;Địa chỉ người đặt hàng: <?= $order->address ?></p>
        </div>

        <h3><i class="fas fa-list" style="margin-top: 30px;"></i>&nbsp; Các mặt hàng đã đặt:</h3>
        <table>
    <tr>
        <th>Tên sách</th>
        <th>Hình ảnh</th> <!-- Cột hình ảnh sách -->
        <th>Số lượng</th>
        <th>Giá</th>
    </tr>
    <?php
    $total = 0; // Khởi tạo biến $total
    foreach ($orderItems as $orderItem) :
        $total += $orderItem->quantity * $orderItem->price; // Tính tổng số tiền
    ?>
        <tr>
            <td><?= $orderItem->product->name ?></td>
            <td>
                <img src="<?= Yii::getAlias('@backendUrl/') . $orderItem->product->image ?>" alt="Sách" style="width: 80px; height: 76px;">
            </td>
            <td><?= $orderItem->quantity ?></td>
            <td><?= $orderItem->price ?> VNĐ</td>
        </tr>
    <?php endforeach; ?>

    <!-- Total row -->
    <tr class="total-col">
        <td colspan="3" style="text-align: center;">Tổng số tiền phải thanh toán:</td>
        <td><?= $total ?> VNĐ</td>
    </tr>
</table>


    </div>

    <!-- Add your scripts or any additional content here -->
</body>
</html>
