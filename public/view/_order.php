<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Claue</title>
    <link rel="stylesheet" href="../public/css/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" type="image/png" href="./media/img/desktop2.png" class="tab-icon">
    <style>
        ::-webkit-scrollbar {
            width: 0px;
        }
    </style>
</head>

<body class="font-poppins">
    <div class="warapper relative ">
        <!-- search -->
        <?php include "./view/inc/search.php" ?>
        <!-- cart -->
        <?php include "./view/inc/cart.php" ?>
        <!--chi tiết sản phẩm -->
        <?php include "./view/inc/product_description.php" ?>
        <!-- mobi menu -->
        <?php include "./view/inc/mobi_menu.php" ?>
        <div class="container-wrapper ">
            <?php include "./view/inc/header.php" ?>
            <main class="mb-5">
                <div class="relative ">
                    <div class="w-full h-full before:w-full before:bg-[rgba(0,0,0,.5)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 py-[75px]
                    "
                        style="background-image: url(./media/img/cart.jpg); background-size: cover ; background-repeat:repeat-y ; background-position: center; background-attachment: scroll;">
                    </div>
                    <div
                        class="font-poppins absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white block  text-center w-full py-[50px]">
                        <h1 class="text-xl uppercase font-semibold">My Order</h1>

                    </div>
                </div>
                <!--  -->
                <div class="max-w-[73.125rem] m-auto mt-[60px] ">
                    <div class="w-full justify-center items-center text-center">
                       
                            <ul class="w-auto text-center">
                                <li class="mt-2 font-bold text-start">Information :</li>
                                <li class="text-start">Email :
                                    <?php echo $_SESSION['email'] ?>
                                </li>
                               
                                <li class="text-start">ID :
                                    <?php echo $_SESSION['users_id'] ?>
                                </li>
                               
                                </li>
                            </ul>
                    </div>
                    <div class="mt-5">
                        <table class="border-collapse border border-slate-400 w-full table-auto">
                            <thead class="border-b w-full">
                                <tr class=" w-full border-black border-b ">
                                    <th class="p-4 border border-slate-300 ">Order</th>
                                    <th class="p-4 border border-slate-300 ">Date</th>
                                    <th class="p-4 border border-slate-300 ">Status</th>
                                    <th class="p-4 border border-slate-300 ">Phone</th>
                                    <th class="p-4 border border-slate-300 ">Address</th>
                                    <th class="p-4 border border-slate-300 ">Total</th>
                                    <th class="p-4 border border-slate-300 ">Name products</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($order as $itemOrder) { ?>
                                    <tr class="border-b border-black ">
                                        <td class="p-4 text-center border border-slate-300">#
                                            <?php echo $itemOrder['code'] ?>
                                        </td>
                                        <td class="p-4 text-center border border-slate-300">
                                            <?php echo $itemOrder['date'] ?>
                                        </td>
                                        <td class="p-4 text-center border border-slate-300">
                                            <?php echo $itemOrder['status'] ?>
                                        </td>
                                        <td class="p-4 text-center border border-slate-300">
                                            <?php echo $itemOrder['phone'] ?>
                                        </td>
                                        <td class="p-4 text-center border border-slate-300 max-w-[150px] overflow-x-auto">
                                            <?php echo $itemOrder['address'] ?>
                                        </td>
                                        <td class="p-4 text-center border border-slate-300">$
                                            <?php echo $itemOrder['total'] ?>.000 for
                                            <?php echo $itemOrder['number'] ?> item
                                        </td>

                                        <td class="p-4 text-center border border-slate-300">
                                            <?php foreach ($itemOrder['name'] as $productName): ?>
                                                <?php echo $productName; ?><br>
                                            <?php endforeach; ?>
                                        </td>
                                        
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
            <?php include "./view/inc/footer.php" ?>
        </div>
    </div>
    <script src="./js/main.js"></script>
</body>

</html>