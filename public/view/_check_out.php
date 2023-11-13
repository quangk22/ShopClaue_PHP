<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckOut-Claue</title>
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
                    " style="background-image: url(./media/img/baner-shop.jpg); background-size: cover ; background-repeat:repeat-y ; background-position: center; background-attachment: scroll;">
                        </div>
                        <div
                            class="font-poppins absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white block  text-center w-full py-[50px]">
                            <h1 class="text-xl uppercase font-semibold">Checkout</h1>

                        </div>
                    </div>
                    <div class="max-w-[73.125rem] m-auto mt-[60px]">
                        <div class="my-[60px] w-full px-4">
                            <div class="my-[30px]">
                                <div
                                    class="bg-[#d9edf7] border border-[#bce8f1] flex px-[50px] py-[30px] w-full text-sm max-sm:p-5 flex-nowrap">
                                    <span class="text-[#31708f] mr-1"> Returning customer? </span>
                                    <a href="#" class="hover:text-[#56cfe1]" id="show-formLogin">Click here to login</a>
                                </div>
                            </div>
                            <form action="" class="text-sm w-full text-[#878787] hidden " id="form-login">
                                <p class="mb-6 flex-wrap">If you have shopped with us before, please enter your details
                                    below. If
                                    you are a new customer, please proceed to the Billing section.</p>

                                <div class="block">
                                    <div class="w-[49%] float-left mb-5 max-sm:block max-sm:float-none max-sm:w-full">
                                        <label for="username" class="mb-1">Username or email *</label>
                                        <input type="text" name="username"
                                            class="w-full h-10 px-4 block outline-none border mt-1">
                                    </div>
                                    <div class="float-right w-[49%] mb-5 max-sm:block max-sm:float-none max-sm:w-full">
                                        <label for="password" class="mb-1">password *</label>
                                        <input type="password" name="password"
                                            class="w-full h-10 px-4 block outline-none border mt-1">
                                    </div>
                                </div>
                                <div class="w-full float-left mb-5">
                                    <label for="" class="flex items-center ">
                                        <input type="checkbox" class="mr-1">
                                        <span class="mr-2 ">Remember me</span>
                                        <button type="submit" class="border-2 border-black rounded-full px-9 py-2 font-semibold text-black hover:bg-[#56cfe1] hover:border-[#56cfe1]
                                            hover:text-white ">Login</button>
                                    </label>

                                </div>
                                <p class="lost_password"> <a href="#">Lost your password?</a></p>
                            </form>
                            <div class="mt-[30px]">
                                <div
                                    class="bg-[#d9edf7] border border-[#bce8f1] flex px-[50px] py-[30px] w-full text-sm">
                                    <span class="text-[#31708f] mr-1">Have a coupon? </span>
                                    <a href="#" class="hover:text-[#56cfe1]" id="show-fromCode"> Click here to enter
                                        your code</a>
                                </div>
                            </div>
                            <form action="" class="bg-[#f1f1f1] text-[#878787] hidden" id="form-code">
                                <div class="px-5 py-10">
                                    <p class="mb-5">If you have a coupon code, please apply it below.</p>
                                    <div class="flex w-full items-center max-sm:block">
                                        <input type="text" name=""
                                            class="w-[49%] outline-none border py-2 border-black px-4 mr-7 max-sm:w-full"
                                            placeholder="Coupon code" id="" value="">
                                        <button type="submit"
                                            class="text-black border-2 border-black rounded-full  px-7 py-2 text-sm font-semibold hover:bg-[#56cfe1] hover:border-[#56cfe1]
                                            hover:text-white max-sm:flex max-sm:justify-center max-sm:items-center max-sm:mt-4" name=""
                                            value="">Apply coupon</button>
                                    </div>
                                </div>
                            </form>
                            <div class="mt-16">
                                <div class="grid grid-cols-2 max-md:grid-cols-none max-md:grid-rows-2">
                                    <div class="pr-4 max-md:pr-0 text-[#878787]">
                                        <h3 class="uppercase font-bold text-black">Billing details</h3>
                                        <div class=" w-full">
                                            <p class="block float-left w-[49%] mb-5">
                                                <label for="">First name </label>
                                                <input type="text"
                                                    class="outline-none border border-[#ccc] px-5 w-full h-9 mt-2 ">
                                            </p>
                                            <p class="block float-right w-[49%] mb-5">
                                                <label for="">Last name </label>
                                                <input type="text"
                                                    class="outline-none border border-[#ccc] px-5 w-full h-9 mt-2 ">
                                            </p>
                                            <p class="block mt-5">
                                                <label for="">Company name (optional) </label>
                                                <input type="text"
                                                    class="outline-none border border-[#ccc] px-5 w-full h-9 mt-2 ">
                                            </p>
                                            <p class="block mt-5">
                                                <label for="">Country / Region</label>
                                                <input type="text"
                                                    class="outline-none border border-[#ccc] px-5 w-full h-9 mt-2 ">
                                            </p>
                                            <p class="block mt-5">
                                                <label for="">Postcode / ZIP (optional)</label>
                                                <input type="text"
                                                    class="outline-none border border-[#ccc] px-5 w-full h-9 mt-2 ">
                                                <input type="text"
                                                    class="outline-none border border-[#ccc] px-5 w-full h-9 mt-5 ">
                                            </p>
                                            <p class="block mt-5">
                                                <label for="">Town / City </label>
                                                <input type="text"
                                                    class="outline-none border border-[#ccc] px-5 w-full h-9 mt-2 ">
                                            </p>
                                            <p class="block mt-5">
                                                <label for="">Town / City </label>
                                                <input type="text"
                                                    class="outline-none border border-[#ccc] px-5 w-full h-9 mt-2 ">
                                            </p>
                                            <p class="block mt-5">
                                                <label for="">Phone</label>
                                                <input type="text"
                                                    class="outline-none border border-[#ccc] px-5 w-full h-9 mt-2 ">
                                            </p>
                                            <p class="block mt-5">
                                                <label for="">Email address</label>
                                                <input type="text"
                                                    class="outline-none border border-[#ccc] px-5 w-full h-9 mt-2 ">
                                            </p>
                                        </div>
                                        <div class="mt-5">
                                            <p>
                                                <input type="checkbox">
                                                <span>Create an account?</span>
                                            </p>
                                        </div>
                                        <div class="mt-20 mb-5">
                                            <h3 class="uppercase font-bold text-black">
                                                <input type="checkbox" class=""></input>
                                                <span>Ship to a different address?</span>
                                            </h3>

                                        </div>
                                        <div class="block">
                                            <label for="" class="mb-3">Order notes<span
                                                    class="">(optional)</span></label>
                                            <span class="mt-3">
                                                <textarea name="" id=""
                                                    placeholder="Notes about your order, e.g. special notes for delivery."
                                                    class="mt-2 w-full outline-none border border-[#ccc] px-5 p-4"></textarea>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pl-5 max-md:pl-0 max-md:mt-7 text-[#878787]">
                                        <h3 class="uppercase font-bold text-black">Your order</h3>
                                        <div class="w-full">
                                            <table class="w-full border h-full mt-7 text-sm mb-6">
                                                <thead class="border-b ">
                                                    <tr class=" w-full">
                                                        <th class="p-4 text-black">Product</th>
                                                        <th class="p-4"></th>
                                                        <th class="p-4 text-black">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="w-full border-b">
                                                    <?php foreach ($itemsList as $key => $items_list) { ?>
                                                        <tr class="cart_item w-full">
                                                            <td class="p-4 w-[80px]">
                                                                <img src="./media/img/<?php echo $items_list['image'] ?>.jpg"
                                                                    alt="" class="w-[80px]">
                                                            </td>
                                                            <td class="item-name p-4">
                                                                <?php echo $items_list['name'] ?>&nbsp; <strong class="">×
                                                                    1</strong>
                                                                <ul class=""></ul>
                                                            </td>
                                                            <td class="product-total p-4 text-end">
                                                                <span class=""><bdi><span class="">$</span>
                                                                        <?php echo $items_list['price'] ?>.000
                                                                    </bdi></span>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <tfoot class="">
                                                    <tr class="border-b">
                                                        <th class="p-4 text-start text-black">Subtotal</th>
                                                        <td class="p-4 text-end" colspan="2">
                                                            <bdi><span class="">$</span>35.00</bdi>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <th class="p-4 text-start text-black">Shipping</th>
                                                        <td class="p-4 text-end" colspan="2">
                                                            <span>Local Pickup:</span>
                                                            <bdi><span class="">$</span>15.00</bdi>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <th class="p-4 text-start text-black">Total</th>
                                                        <td class="p-4 text-end" colspan="2">
                                                            <strong>
                                                                <span class="text-black">
                                                                    <bdi><span class="">$</span>50.00</bdi>
                                                                </span>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="border border-[#ccc] text-sm">
                                                <ul class="p-4">
                                                    <li class="mb-5">
                                                        <input type="checkbox">
                                                        <span>Check payments</span>
                                                    </li>
                                                    <li class="mb-5">
                                                        <input type="checkbox">
                                                        <span>Cash on delivery</span>
                                                    </li>
                                                    <li class="flex items-center flex-wrap">
                                                        <input type="checkbox">
                                                        <label for="" class="flex items-center ml-1 ">
                                                            <span>PayPal </span>
                                                            <img src="./media/img/AM_mc_vs_dc_ae.jpg" alt=""
                                                                class="h-12 ml-2">
                                                            <a href="#" class="text-black">what is PayPal ?</a>
                                                        </label>
                                                        <div class="bg-[#f1f1f1] mt-3 relative">
                                                            <p
                                                                class="p-5 before:content-[''] before:bg-[#f1f1f1] before:w-4 before:h-4 before:absolute before:top-[-8px] before:rotate-45 text-sm">
                                                                Pay via PayPal; you can pay with your credit card if you
                                                                don’t have a PayPal account. SANDBOX ENABLED. You can
                                                                use sandbox testing accounts only. See the
                                                                <a href="" class="text-black">PayPal Sandbox Testing
                                                                    Guide</a> for more details.
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="p-4">
                                                    <div class="flex items-center mb-8">
                                                        <input type="checkbox" class="mr-1">
                                                        <span>I have read and agree to the website
                                                            <a href="" class="text-black"> terms and conditions</a>
                                                        </span>
                                                    </div>
                                                    <button
                                                        class="text-black border-2 border-black rounded-full px-9 py-2 font-semibold hover:bg-[#56cfe1] hover:border-[#56cfe1] hover:text-white">Proceed
                                                        to PayPal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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