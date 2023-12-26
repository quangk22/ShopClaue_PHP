<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-Claue</title>
    <link rel="stylesheet" href="../public/css/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="shortcut icon" type="image/png" href="./public/media/img/desktop2.png" class="tab-icon">
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
                    " style="background-image: url(./public/media/img/baner-shop.jpg); background-size: cover ; background-repeat:repeat-y ; background-position: center; background-attachment: scroll;">
                        </div>
                        <div
                            class="font-poppins absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white block  text-center w-full py-[50px]">
                            <h1 class="text-xl">Shop All Products</h1>
                            <p class="mt-[5px] text-sm">Online fashion, furniture, handmade... store</p>
                        </div>
                    </div>
                    <div class="containre-product w-[73.125rem] px-5 m-auto max-lg:w-[46rem]  max-w-full mt-[30px] ">
                        <!-- <div class="flex justify-between relative">
                            <div class="">
                                <div class="cursor-pointer text-[#878787] hover:text-black text-2xl"><i
                                        class="fa fa-sliders fwb"></i></div>
                            </div>
                            <form action="product.php" method="GET"
                                class="border-[#ddd] border-2 rounded-full w-[200px]">
                                <select selected="selected"
                                    class=" pl-3 outline-none text-[13px]  bg-transparent text-[#878787] py-2 w-[185px]  flex justify-center items-center ">
                                    <option value="popularity" class="w-full">Sort by lowest price</option>
                                    <option value="rating" class="w-full">Sort by highest price</option>
                                    
                                </select>
                            </form>
                        </div> -->
                        <div class="grid grid-cols-6 gap-5 mt-5">
                            <div class="product  col-span-5  z-0">
                                <div class="product1 grid grid-cols-4 gap-8 max-lg:grid-cols-3 max-sm:grid-cols-2 transition-all ease-out duration-500 mb-10"
                                    id="product1">
                                    <?php foreach ($productList as $product) { ?>
                                        <div class="item">
                                            <div class="product-img relative group">
                                                <div class="img">
                                                    <a href="detail_product.php?id=<?php echo $product['id']; ?>"
                                                        class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                        <img src="./public/media/img/<?php echo $product['image']; ?>.jpg"
                                                            alt="" loading="lazy">
                                                    </a>
                                                    <a href="detail_product.php?id=<?php echo $product['id']; ?>"
                                                        class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100 before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                        <img src="./public/media/img/id11.jpg" alt="" loading="lazy">
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
                                                        <a href="detail_product.php?id=<?php echo $product['id']; ?>"
                                                            class="whitespace-nowrap">Selec options</a>
                                                    </div>
                                                    <div class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm justify-center cursor-pointer quickShop"
                                                        onclick="quickShop('<?php echo $product['image']; ?>','<?php echo $product['name']; ?>','<?php echo $product['price']; ?>')">
                                                        Quick Shop
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info mt-[15px] font-poppins text-sm  ">
                                                <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">
                                                    <a href="detail_product.php?id=<?php echo $product['id']; ?>">
                                                        <?php echo $product['name']; ?>
                                                    </a>
                                                </h3>
                                                <span class="text-[#696969]">
                                                    $
                                                    <?php echo $product['price'] - 10;?>.000
                                                    -
                                                    $
                                                    <?php echo $product['price']; ?>.000
                                                </span>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <!-- end product -->
                                <div class=" flex justify-center mt-[40px] mb-[60px]">
                                    <ul class="flex">
                                        <?php for ($i = 1; $i < 5; $i++) { ?>
                                            <?php
                                            echo '<li class=" w-12 border flex text-center justify-center hover:text-white hover:bg-black">
                                                <a class="p-3 m-0" href="product.php?page=' . $i . '">' . $i . '</a>
                                            </li>'
                                                ?>
                                        <?php } ?>
                                    </ul>
                                </div>

                            </div>
                            <!-- Right-menuBar -->
                            <div class="sider_bar ">
                                <div>
                                    <aside class="widget woocommerce widget_product_categories">
                                        <h4 class=" text-lg font-poppins mb-2 pb-5">Product Categories</h4>
                                        <hr class="border-2 border-black w-[60px] mt-[-30px] mb-2">
                                        <ul class="product-categories space-y-2 text-[14px]">
                                            <?php foreach ($category_list as $category) { ?>
                                                <li class="cat-item cat-item-86 current-cat">
                                                    <a href="product.php?category_id=<?php echo $category['id']; ?>"
                                                        class="text-black hover:text-[#56cfe1]">+
                                                        <?php echo get_category($category['id'])['name']; ?>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </aside>
                                </div>
                                <!-- Filter by price -->
                                <form action="product.php" method="get" class="mt-[10px]">
                                    <h4 class=" text-lg font-poppins">Filter by price</h4>
                                    <div class="block items-center">
                                        <div class="flex">
                                            $
                                            <input
                                                class="w-7 border-none outline-none pointer-events-none bg-transparent"
                                                id="price-min" name="price-min" value="000" readonly>.000</input>
                                        </div>

                                        <div class="flex items-center">
                                            <span class="mr-2">Price:</span>
                                            <input type="range" min="0" max="100" step="1" value="0"
                                                oninput="updatePriceRange(this.value)"
                                                class="w-full appearance-none rounded-full h-2 bg-blue-900 outline-none"
                                                id="price-range">
                                        </div>



                                    </div>
                                    <div class=" flex justify-center items-center mt-5 ">
                                        <button type="submit"
                                            class="bg-white border border-black text-black font-bold py-2 px-4 rounded-full hover:border-[#56cfe1]  hover:bg-[#56cfe1] hover:text-white">Filter
                                            Now</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php include "./view/inc/footer.php" ?>
        </div>
    </div>
    <script src="./public/js/main.js"></script>
    <script>
        function updatePriceRange(value) {
            // Format the value as currency (e.g., $100.00)
            document.getElementById('price-min').value = value;
        }
    </script>
</body>

</html>