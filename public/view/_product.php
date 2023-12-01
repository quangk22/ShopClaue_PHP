<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-Claue</title>
    <link rel="stylesheet" href="../public/css/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="shortcut icon" type="image/png" href="./media/img/desktop2.png" class="tab-icon">
    <script src="https://cdn.tailwindcss.com"></script>
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
                <div class="w-full ">
                    <div class="flex justify-center items-center ">
                        <ul class=" text-[#222] text-sm  flex  font-normal align-baseline flex-nowrap overflow-x-auto">
                            <li class="my-[10px] px-[15px] hover:text-[#56cfe1] whitespace-nowrap"><a href="#">
                                    Accessories
                                </a></li>
                            <li class="my-[10px] px-[15px] hover:text-[#56cfe1] whitespace-nowrap"><a href="#">
                                    Bottom</a>
                            </li>
                            <li class="my-[10px] px-[15px] hover:text-[#56cfe1] whitespace-nowrap"><a href="#">Denim
                                </a>
                            </li>
                            <li class="my-[10px] px-[15px] hover:text-[#56cfe1] whitespace-nowrap"><a href="#">Dress
                                </a>
                            </li>
                            <li class="my-[10px] px-[15px] hover:text-[#56cfe1] whitespace-nowrap"><a href="#">
                                    Jackets</a>
                            </li>
                            <li class="my-[10px] px-[15px] hover:text-[#56cfe1] whitespace-nowrap"><a href="#">
                                    Jewellery</a></li>
                            <li class="my-[10px] px-[15px] hover:text-[#56cfe1] whitespace-nowrap"><a href="#">MenShoes
                                </a>
                            </li>
                            <li class="my-[10px] px-[15px] hover:text-[#56cfe1] whitespace-nowrap"><a href="#">T-Shirt
                                </a>
                            </li>
                            <li class="my-[10px] px-[15px] hover:text-[#56cfe1] whitespace-nowrap"><a href="#"> Tops</a>
                            </li>
                            <li class="my-[10px] px-[15px] hover:text-[#56cfe1] whitespace-nowrap"><a href="#">
                                    Women</a>
                            </li>
                        </ul>
                    </div>
                    <div class="relative ">
                        <div class="w-full h-full before:w-full before:bg-[rgba(0,0,0,.5)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 py-[75px]
                    " style="background-image: url(./media/img/baner-shop.jpg); background-size: cover ; background-repeat:repeat-y ; background-position: center; background-attachment: scroll;">
                        </div>
                        <div
                            class="font-poppins absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white block  text-center w-full py-[50px]">
                            <h1 class="text-xl">Shop All Products</h1>
                            <p class="mt-[5px] text-sm">Online fashion, furniture, handmade... store</p>
                        </div>
                    </div>
                    <div class="containre-product w-[73.125rem] px-5 m-auto max-lg:w-[46rem]  max-w-full mt-[30px] ">
                        <div class="flex justify-between relative">
                            <div class="">
                                <div class="cursor-pointer text-[#878787] hover:text-black text-2xl"><i
                                        class="fa fa-sliders fwb"></i></div>
                            </div>
                            <div class="border-[#ddd] border-2 rounded-full w-[200px]">
                                <select
                                    class=" pl-3 outline-none text-[13px]  bg-transparent text-[#878787] py-2 w-[185px]  flex justify-center items-center ">
                                    <option value="popularity" class="w-full">Sort by popularity</option>
                                    <option value="rating" class="w-full">Sort by average rating</option>
                                    <option value="date" class="w-full" selected="selected">Sort by latest</option>
                                    <option value="price" class="w-full">Sort by price: low to high</option>
                                    <option value="price-desc" class="w-full">Sort by price: high to low</option>
                                </select>
                            </div>
                        </div>
                        <div class="product mt-[30px]  z-0">
                            <div class="product1 grid grid-cols-4 gap-8 max-lg:grid-cols-3 max-sm:grid-cols-2 transition-all ease-out duration-500 mt-10 mb-10"
                                id="product1">
                                <?php for ($i = 0; $i < 8; $i++) { ?>
                                    <div class="item">
                                        <div class="product-img relative group">
                                            <div class="img">
                                                <a href="detail_product.php?id=<?php echo $productList[$i]['id']; ?>"
                                                    class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                    <img src="./media/img/<?php echo $productList[$i]['image']; ?>.jpg"
                                                        alt="" loading="lazy">
                                                </a>
                                                <a href="detail_product.php?id=<?php echo $productList[$i]['id']; ?>"
                                                    class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100 before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                    <img src="./media/img/id11.jpg" alt="" loading="lazy">
                                                </a>
                                            </div>
                                            <div class="absolute top-3 left-3 max-lg:block ">
                                                <a href="#" class="hidden group-hover:block max-lg:block">
                                                    <div class="block max-lg:block">
                                                        <div class="max-lg:block"><i
                                                                class="fa-regular fa-heart fa-lg text-white "></i>
                                                        </div>
                                                        <div class=" lg:hidden  max-md:block ">
                                                            <i class="fa-solid fa-eye fa-lg text-white quickShop"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div
                                                class="product-btn  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 max-lg:hidden">
                                                <div
                                                    class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                    <a href="detail_product.php?id=<?php echo $productList[$i]['id']; ?>"
                                                        class="whitespace-nowrap">Selec options</a>
                                                </div>
                                                <div class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm justify-center cursor-pointer quickShop"
                                                    onclick="quickShop('<?php echo $productList[$i]['image']; ?>','<?php echo $productList[$i]['name']; ?>','<?php echo $productList[$i]['price']; ?>')">
                                                    Quick Shop
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info mt-[15px] font-poppins text-sm  ">
                                            <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">
                                                <a href="detail_product.php?id=<?php echo $productList[$i]['id']; ?>">
                                                    <?php echo $productList[$i]['name']; ?>
                                                </a>
                                            </h3>
                                            <span class="text-[#696969]">
                                                $
                                                <?php
                                                $discount = 30;
                                                $discountedPrice = $productList[$i]['price'] - ($productList[$i]['price'] * $discount / 100);
                                                echo $discountedPrice ?>.000
                                                -

                                                $
                                                <?php echo $productList[$i]['price']; ?>.000
                                            </span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- end product -->
                            <div class="Btn Load More flex justify-center mt-[40px] mb-[60px]">
                                <button
                                    class="border-[2px] border-[#333] rounded-full px-11 py-3 hover:bg-[#56CFE1] hover:border-[#56CFE1] ">
                                    <a href="" class="font-poppins text-sm"> Load More</a>
                                </button>
                            </div>
                            <div class="mt-10">
                                <div class="subheadLine-label uppercase tracking-widest text-black text-2xl font-poppins font-bold
                                ">
                                    <h1 class="flex justify-center items-center leading-none">best seller</h1>
                                    <span
                                        class="flex justify-center items-center text-[14px] text-gray-400 font-LibreBaskerville font-normal italic">Top
                                        sale in this week</span>
                                </div>
                                <div class="product grid grid-cols-4 gap-8 max-lg:grid-cols-3 max-sm:grid-cols-2 transition-all ease-out duration-500 mt-10 mb-10"
                                    id="bestSeller">
                                    <?php for ($i = 0; $i < 8; $i++) { ?>
                                        <div class="item">
                                            <div class="product-img relative group">
                                                <div class="img">
                                                    <a href="detail_product.php?id=<?php echo $productList[$i]['id']; ?>"
                                                        class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                        <img src="./media/img/<?php echo $productList[$i]['image']; ?>.jpg"
                                                            alt="" loading="lazy">
                                                    </a>
                                                    <a href="detail_product.php?id=<?php echo $productList[$i]['id']; ?>"
                                                        class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100 before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                        <img src="./media/img/id11.jpg" alt="" loading="lazy">
                                                    </a>
                                                </div>
                                                <div class="absolute top-3 left-3 max-lg:block ">
                                                    <a href="#" class="hidden group-hover:block max-lg:block">
                                                        <div class="block max-lg:block">
                                                            <div class="max-lg:block"><i
                                                                    class="fa-regular fa-heart fa-lg text-white "></i>
                                                            </div>
                                                            <div class=" lg:hidden  max-md:block ">
                                                                <i class="fa-solid fa-eye fa-lg text-white quickShop"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div
                                                    class="product-btn  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 max-lg:hidden">
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="detail_product.php?id=<?php echo $productList[$i]['id']; ?>"
                                                            class="whitespace-nowrap">Selec options</a>
                                                    </div>
                                                    <div class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm justify-center cursor-pointer quickShop"
                                                        onclick="quickShop('<?php echo $productList[$i]['image']; ?>','<?php echo $productList[$i]['name']; ?>','<?php echo $productList[$i]['price']; ?>','<?php echo $productList[$i]['id']; ?>')">
                                                        Quick Shop
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info mt-[15px] font-poppins text-sm  ">
                                                <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">
                                                    <a href="detail_product.php?id=<?php echo $productList[$i]['id']; ?>">
                                                        <?php echo $productList[$i]['name']; ?>
                                                    </a>
                                                </h3>
                                                <span class="text-[#696969]">
                                                    $
                                                    <?php
                                                    $discount = 30;
                                                    $discountedPrice = $productList[$i]['price'] - ($productList[$i]['price'] * $discount / 100);
                                                    echo $discountedPrice ?>.000
                                                    -

                                                    $
                                                    <?php echo $productList[$i]['price']; ?>.000
                                                </span>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php include "./view/inc/footer.php" ?>
        </div>
    </div>

    <!-- <script src="./js/Product.js"></script> -->
    <script src="./js/main.js"></script>

</body>

</html>