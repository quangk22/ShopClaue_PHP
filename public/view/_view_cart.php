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

<body class="font-poppins ">
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
            <main class="">
                <div class="w-full">
                    <div class="relative ">
                        <div class="w-full h-full before:w-full before:bg-[rgba(0,0,0,.5)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 py-[75px]
                    " style="background-image: url(./media/img/cart.jpg); background-size: cover ; background-repeat:repeat-y ; background-position: center; background-attachment: scroll;">
                        </div>
                        <div
                            class="font-poppins absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white block  text-center w-full py-[50px]">
                            <h1 class="text-xl uppercase font-semibold">Cart</h1>

                        </div>
                    </div>
                    <div class="max-w-[73.125rem] m-auto mt-[60px]">
                        <div class="w-full px-5">
                            <table class="border w-full">
                                <thead class="border-b w-full">
                                    <tr class="w-full">
                                        <th class="p-4  max-md:hidden"></th>
                                        <th class="p-4 text-start">Product</th>
                                        <th class="p-4 max-md:hidden">Price</th>
                                        <th class="p-4 max-md:hidden">Quantity</th>
                                        <th class="p-4  md:hidden"></th>
                                        <th class="p-4 max-md:flex max-md:justify-end inline-block">Total</th>
                                        <th class="p-4 max-md:hidden">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($cart as $item) { ?>
                                        <tr class="border-b ">
                                            <td class="p-4">
                                                <img src="./media/img/<?php echo $item['productImage']; ?>.jpg" alt=""
                                                    class="w-[100px]">
                                            </td>
                                            <td class="p-4 text-sm  ">
                                                <span>
                                                    <?php echo $item['productName']; ?>
                                                </span>
                                                <dl class="flex text-[#878787] mt-1">
                                                    <dt class="">Size:</dt>
                                                    <dd class="ml-1">
                                                        <p>M</p>
                                                    </dd>
                                                </dl>
                                                <div class="hidden max-md:block">
                                                    <span class="">
                                                        <bdi><span class="">$</span>
                                                            <?php echo $item['productPrice']; ?>
                                                        </bdi>
                                                    </span>
                                                    <div
                                                        class="border-2 border-black rounded-full w-[115px]  p-2 relative mt-2">
                                                        <input type="number" value="1"
                                                            class="outline-none w-full bg-opacity-0 flex justify-center text-center items-center">
                                                        <div
                                                            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 ">
                                                            <button class="absolute left-[-36px] top-[-9px]"><i
                                                                    class="fa-solid fa-minus"></i></button>
                                                            <button class="absolute right-[-36px] top-[-9px]"><i
                                                                    class="fa-solid fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 text-center text-[#878787] max-md:hidden">
                                                <span class="">
                                                    <bdi><span class="">$</span>
                                                        <?php echo $item['productPrice']; ?>.000
                                                    </bdi>
                                                </span>
                                            </td>
                                            <td class="p-4 text-center relative max-md:hidden">
                                                <div
                                                    class="border-2 border-black rounded-full w-[115px]  p-2 float-none justify-center flex items-center text-center absolute top-1/2 left-1/2 -translate-x-1/2  -translate-y-1/2">
                                                    <input type="number" value="<?php echo $item['quantity']; ?>"
                                                        class="outline-none w-full bg-opacity-0 flex justify-center text-center items-center">
                                                    <div
                                                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 ">
                                                        <button class="absolute left-[-36px] top-[-12px]"><i
                                                                class="fa-solid fa-minus"></i></button>
                                                        <button class="absolute right-[-36px] top-[-12px]"><i
                                                                class="fa-solid fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="p-4 text-center text-[#878787]">
                                                <span class="text-center">
                                                    <bdi><span class="">$</span>
                                                        <?php echo $item['productPrice'] * $item['quantity'] ?>.000
                                                    </bdi>
                                                </span>
                                            </td>
                                            <td class="text-center p-4">
                                                <form method="post" action="cart.php">
                                                    <input type="hidden" name="productId"
                                                        value="<?php echo $item['productId']; ?>">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button type="submit">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="6" class="p-4 ">
                                            <div class="float-left max-md:float-none max-md:w-full ">
                                                <label for="coupon_code"
                                                    class="max-md:block max-md:py-5">Coupon:</label>
                                                <input type="text" name="coupon_code"
                                                    class="outline-none border  rounded-full p-2 px-3 max-md:w-full "
                                                    id="" value="" placeholder="Coupon code">
                                                <button
                                                    class="border-2 border-black p-2 px-7 font-semibold rounded-full max-md:w-full max-md:mt-5">
                                                    Apply coupon</button>
                                            </div>
                                            <button
                                                class="border-2  float-right font-semibold rounded-full p-2 px-7 text-[#878787]  max-md:float-none max-md:w-full max-md:mt-5">Update
                                                Cart</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                             <div class="w-full mt-10 pb-[60px] inline-block ">
                                <div class="w-[40%] float-right max-md:float-none max-md:w-full">
                                    <h2 class="font-bold uppercase  mb-5">Cart totals</h2>
                                    <table class="border w-full">
                                        <tbody class="">
                                            <tr class="border-b ">
                                                <th class="text-left p-4">Subtotal</th>
                                                <td data-title="Subtotal" class="text-end p-4">
                                                    <span class=""><bdi>
                                                            <?php
                                                            $totalPrice = 0;
                                                            foreach ($cart as $item) {
                                                                $totalPrice += $item['productPrice'] * $item['quantity'];
                                                            }
                                                            echo number_format($totalPrice, 3);
                                                            ?>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="border-b text-sm">
                                                <th class="text-left p-4">Shipping</th>
                                                <td class="text-end p-4">
                                                    <ul>
                                                        <li>
                                                            <input type="checkbox">
                                                            <label for="">
                                                                Local Pickup:
                                                                <span> <bdi>$</bdi>15.00 </span>
                                                            </label>
                                                        </li>
                                                        <li class="my-2">
                                                            <input type="checkbox">
                                                            <label for="">
                                                                Free Shipping
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <p class="hover:text-[#56CFE1]"><a href="#">Calculate shipping</a>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <th class="text-left p-4">Total</th>
                                                <td data-title="Total" class="text-end p-4">
                                                    <strong>
                                                        <span class=""><bdi><span class=""></span>
                                                                <?php
                                                                $totalPrice = 0;
                                                                foreach ($cart as $item) {
                                                                    $totalPrice += $item['productPrice'] * $item['quantity'];
                                                                }
                                                                echo number_format($totalPrice, 3);
                                                                ?>

                                                            </bdi></span>
                                                    </strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="check_out.php">
                                        <button class="w-full bg-black text-white  rounded-full mt-5 p-3 uppercase font-bold text-sm
                                    hover:bg-[#56CFE1] "> Proceed to checkout</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php include "./view/inc/footer.php" ?>
        </div>
    </div>
    <script src="./js/main.js"></script>
</body>

</html>