<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calvin Klein Logo Sweatpants</title>
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
    <div class="warapper">

        <!-- search -->
        <?php include "./view/inc/search.php" ?>
        <!-- cart -->
        <?php include "./view/inc/cart.php" ?>
        <!--chi tiết sản phẩm -->
        <?php include "./view/inc/product_description.php" ?>
        <!-- mobi menu -->
        <?php include "./view/inc/mobi_menu.php" ?>
        <div class="container-wrapper">
            <?php include "./view/inc/header.php" ?>
            <main>
                <div class="w-full ">
                    <div class="w-full bg-[#f6f6f8]">
                        <nav>
                            <ul class="flex text-[13px] py-[10px] px-[15px]">
                                <li>Home <i class="fa-solid fa-chevron-right text-[#878787] text-[10px]"></i></li>
                                <li class="ml-1">Men <i
                                        class="fa-solid fa-chevron-right text-[#878787] text-[10px]"></i>
                                </li>
                                <li class="ml-1 text-[#878787] detail2" id="nameDetail">
                                    <?php echo $_GET["name_product"] ?>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="pt-10 w-[73.125rem] px-5 m-auto max-w-full">
                        <div class="grid grid-cols-2 pb-[50px] max-md:grid-cols-none max-md:grid-rows-1 detail">
                            <div class="w-full">
                                <div class="grid grid-cols-2 grid-rows-2 gap-3">
                                    <div class="image" id="imgProduct"><img
                                            src="./media/img/<?php echo $_GET["image_product"]; ?>.jpg" alt=""></div>
                                    <div class="image" id="imgProduct"><img
                                            src="./media/img/<?php echo $_GET["image_product"]; ?>.jpg" alt=""></div>
                                    <div class="image" id="imgProduct"><img
                                            src="./media/img/<?php echo $_GET["image_product"]; ?>.jpg" alt=""></div>
                                    <div class="image" id="imgProduct"><img
                                            src="./media/img/<?php echo $_GET["image_product"]; ?>.jpg" alt=""></div>
                                </div>
                            </div>
                            <div class="pl-8 max-md:pl-0 max-md:pt-3">
                                <div class="detail">
                                    <h1 class="text-lg font-semibold mb-1 name" id="nameProduct">
                                        <?php echo $_GET["name_product"] ?>
                                    </h1>
                                    <div class="text-[#878787] mb-5"><span class="text-[22px] price" id="priceProduct">
                                            $
                                            <?php echo $_GET["price_product"] ?>.000
                                        </span></div>
                                    <div class="text-[#878787] text-sm mb-5">
                                        <p class="description" id="description"></p>
                                    </div>
                                    <div class="mb-5">
                                        <!--  -->
                                        <div class="flex">
                                            <div class="mr-[10px]">
                                                <div
                                                    class="relative py-2 flex justify-center items-center border border-black w-[115px] rounded-full font-semibold">
                                                    <input type="number" min="1" value="1" inputmode="none" readonly
                                                        class="outline-none w-full flex text-center bg-transparent customNumberInput"
                                                        id="customNumberInput">
                                                    <div
                                                        class="absolute top-1/2  left-1/2 -translate-x-1/2 -translate-y-1/2 flex justify-between w-full">
                                                        <div class="ml-3 decreaseButton" id="decreaseButton"><i
                                                                class="fa-solid fa-minus"></i></div>
                                                        <div class="mr-3 increaseButton" id="increaseButton"><i
                                                                class="fa-solid fa-plus"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mr-[10px]">
                                                <button type="submit"
                                                    class="bg-[#56cfe1] w-[164px] rounded-full flex justify-center items-center text-center text-sm font-semibold text-white py-2.5 uppercase"
                                                    onclick="add_cart_item('<?php echo $_GET['product_id']; ?>', '<?php echo $_GET['price_product']; ?>', document.getElementById('customNumberInput').value, '<?php echo $_GET['image_product']; ?>', '<?php echo $_GET['name_product']; ?>'); cart_mini();" id="cart_mini">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <div
                                                class="flex justify-center items-center border border-black rounded-full">
                                                <i class="fa-regular fa-heart p-3"></i>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="mt-6 font-semibold text-sm">
                                            <a href="#" class="mr-">Size Guide</a>
                                            <a href="#">Delivery &amp; Return</a>
                                        </div>
                                    </div>
                                    <div class="inline-block text-sm mb-5">
                                        <span class="flex mb-[5px] text-[#878787] flex-shrink flex-wrap">
                                            Categories:
                                            <a href="" class="text-black hover:text-[#56CFE1]"> Accessories</a>,
                                            <a href="" class="text-black hover:text-[#56CFE1]">Bottom</a>,
                                            <a href="" class="text-black hover:text-[#56CFE1]">Men</a>,
                                            <a href="" class="text-black hover:text-[#56CFE1]">Shoes</a>,
                                            <a href="" class="text-black hover:text-[#56CFE1]">T-Shirt</a>,
                                            <a href="" class="text-black hover:text-[#56CFE1]">Tops</a>
                                        </span>
                                        <span class="flex mb-[5px] text-[#878787] flex-shrink flex-wrap">
                                            Tags:
                                            <a href="" class="text-black hover:text-[#56CFE1]"> bottom </a>,
                                            <a href="" class="text-black hover:text-[#56CFE1]">men</a>,
                                            <a href="" class="text-black hover:text-[#56CFE1]">shoes</a>,
                                            <a href="" class="text-black hover:text-[#56CFE1]"> short</a>
                                        </span>
                                    </div>
                                    <div class="">
                                        <h4 class="text-[21px] font-semibold">Buy this bundle and get off to 25%</h4>
                                        <p class="text-[#878787] text-sm mb-5">Buy more save more. Save 15% when you
                                            purchase 4 products, save 10% when
                                            you purchase 3 products</p>
                                        <div class="flex mb-5">
                                            <div class="flex justify-center items-center">
                                                <div class="image" id="imgProduct2"><img
                                                        src="./media/img/<?php echo $_GET["image_product"]; ?>.jpg"
                                                        alt="" class=" w-[70px] h-[70px] object-cover"></div>
                                                <span class="px-1 text-[#878787]">+</span>
                                            </div>
                                            <div class="flex justify-center items-center">
                                                <div class="image" id="imgProduct2"><img
                                                        src="./media/img/<?php echo $_GET["image_product"]; ?>.jpg"
                                                        alt="" class=" w-[70px] h-[70px] object-cover"></div>
                                                <span class="px-1 text-[#878787]">+</span>
                                            </div>
                                            <div class="flex justify-center items-center">
                                                <div class="image" id="imgProduct2"><img
                                                        src="./media/img/<?php echo $_GET["image_product"]; ?>.jpg"
                                                        alt="" class=" w-[70px] h-[70px] object-cover"></div>
                                                <span class="px-1 text-[#878787]">+</span>
                                            </div>
                                            <div class="flex justify-center items-center">
                                                <div class="image" id="imgProduct2"><img
                                                        src="./media/img/<?php echo $_GET["image_product"]; ?>.jpg"
                                                        alt="" class=" w-[70px] h-[70px] object-cover"></div>
                                            </div>
                                        </div>
                                        <div class="list-select">
                                            <div class="">
                                                <div class="text-[#878787] text-sm mb-2">
                                                    <input type="checkbox" checked="checkbox" disabled="disabled"
                                                        class="cursor-not-allowed">
                                                    <span>This product: Calvin Klein Logo Sweatpants - $29.75 /
                                                        $35.00</span>
                                                </div>
                                            </div>
                                            <div class="mb-[10px]">
                                                <div class="text-[#878787] text-sm">
                                                    <input type="checkbox" checked="checkbox" name="" id="">
                                                    <span>Cyan Boheme - $38.25 / $45.00</span>
                                                </div>
                                                <div class="text-[#878787] text-sm flex">
                                                    <div
                                                        class="border border-[#ddd] w-16 flex justify-center items-center py-2 mr-2">
                                                        <select name="" id="" class="outline-none w-full">
                                                            <option value="">Pink</option>
                                                            <option value="">Cyan</option>
                                                        </select>
                                                    </div>
                                                    <div
                                                        class="border border-[#ddd] w-10 flex justify-center items-center py-2">
                                                        <select name="" id="" class="outline-none w-full">
                                                            <option value="">M</option>
                                                            <option value="">S</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-[#878787] text-sm mb-[10px]">
                                                <input type="checkbox" checked="checkbox" name="" id="">
                                                <span>Leather White Trainers - $60.78 / $71.50</span>
                                            </div>
                                            <div class="text-[#878787] text-sm mb-[10px]">
                                                <input type="checkbox" checked="checkbox" name="" id="">
                                                <span>Premium Shoes Clean Package - $30.60 / $36.00</span>
                                            </div>
                                        </div>
                                        <div class="text-[#878787] text-sm py-5">
                                            <strong>Price for all:</strong>
                                            <span>$159.38</span>/
                                            <span>$187.50</span>
                                            <span>(save 15%)</span>
                                        </div>
                                        <div class="uppercase">
                                            <button
                                                class="bg-[#56cfe1] border-none text-white uppercase text-base font-semibold px-8 py-2 rounded-full">Add
                                                bundle to cart</button>
                                        </div>
                                    </div>
                                    <div class="flex justify-center mt-20">
                                        <a href="" class="px-3 text-lg"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="" class="px-3 text-lg"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="" class="px-3 text-lg"><i class="fa-brands fa-pinterest"></i></a>
                                        <a href="" class="px-3 text-lg"><i class="fa-brands fa-tumblr"></i></a>
                                    </div>
                                    <div class="listProduct"></div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="pt-[50px] pb-[20px]">
                            <div class="">
                                <ul class="flex justify-center items-center  text-center">
                                    <li><button
                                            class=" border border-black  font-semibold rounded-full py-2 px-5 text-sm "
                                            id="btn-description">Description</button></li>
                                    <li><button class="  font-semibold rounded-full py-2 px-5 text-sm text-[#878787]"
                                            id="btn-additional">Additional information
                                        </button></li>
                                    <li><button class="  font-semibold rounded-full py-2 px-5 text-sm text-[#878787]"
                                            id="btn-reviews">Reviews (0)</button></li>
                                </ul>
                                <div class="Description pt-10 mb-7 " id="description">
                                    <div class="text-[#878787] text-sm ">
                                        <p>Go sporty this summer with this vintage navy and white striped v-neck t-shirt
                                            from
                                            the Abercrombie & Fitch. Perfect for pairing with denim and white kicks for
                                            a
                                            stylish sporty vibe. Will fit a UK 8-10, model shown is a UK 8 and 5’5. !!
                                        </p>
                                        <p class="pt-5">Typography is the work of typesetters, compositors,
                                            typographers,
                                            graphic designers, art directors, manga artists, comic book artists,
                                            graffiti
                                            artists, and now—anyone who arranges words, letters, numbers, and symbols
                                            for
                                            publication, display, or distribution—from clerical workers and newsletter
                                            writers
                                            to anyone self-publishing materials.</p>
                                    </div>
                                    <div class="relative ">
                                        <div class=" ">
                                            <img src="./media/img/look10.jpg" alt="" class="w-full">
                                        </div>
                                        <div class="bg-[#65affa] rounded-full w-10 h-10 max-sm:w-7 max-sm:h-7 max-sm:text-[10px]  text-white flex justify-center items-center absolute top-[18%] left-[16%] group cursor-pointer  group-hover:opacity-5 "
                                            id="btn_1" onclick="toggleDisplay('btn_1')">
                                            <span class="cursor-auto">1</span>
                                            <div
                                                class="bg-white absolute py-2 px-4  text-sm flex justify-center text-center items-center whitespace-nowrap -top-12 left-[-2.5rem] text-[#878787] scale-50 group-hover:scale-100 transition-all ease-in duration-400 opacity-0 group-hover:opacity-100 
                                                    before:content-[''] before:w-[15px] before:h-[15px] before:bg-white before:absolute before:bottom-[-0.25rem] before:rotate-45">
                                                Mercury Tee
                                            </div>
                                            <div class="absolute -left-[118px] top-[55px] bg-white z-30 hidden"
                                                id="show_btn1">
                                                <div
                                                    class="before:content[''] before:w-4 before:h-4 before:bg-white before:top-0 before:left-1/2 before:-translate-y-1/2 before:absolute before:rotate-45 before:z-10 ">
                                                    <div class="w-[260px] p-3 text-black border-b  ">
                                                        <img src="./media/img/Mercury_Tee32.jpg" alt=""
                                                            class="w-full z-50">
                                                        <div class="">
                                                            <div class="flex justify-center items-center font-semibold">
                                                                Mercury Tee</div>
                                                            <div
                                                                class="flex justify-center items-center text-[#878787] text-sm mt-1">
                                                                $68.00</div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="text-black flex justify-center items-center py-2 text-sm">
                                                        <a href="" class="px-7">Detail</a>
                                                        <a href="" class="px-7">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="bg-[#65affa] rounded-full w-10 h-10 max-sm:w-7 max-sm:h-7 max-sm:text-[10px]  text-white flex justify-center items-center absolute top-[43%] left-[25%] group cursor-pointer  ">
                                            <span>2</span>
                                            <div
                                                class="bg-white absolute py-2 px-4  text-sm flex justify-center text-center items-center whitespace-nowrap -top-12 left-[-2.5rem] text-[#878787] scale-50 group-hover:scale-100 transition-all ease-in duration-400 opacity-0 group-hover:opacity-100 
                                                    before:content-[''] before:w-[15px] before:h-[15px] before:bg-white before:absolute before:bottom-[-0.25rem] before:rotate-45">
                                                Mercury Tee
                                            </div>

                                        </div>
                                        <div
                                            class="bg-[#65affa] rounded-full w-10 h-10 max-sm:w-7 max-sm:h-7 max-sm:text-[10px]  text-white flex justify-center items-center absolute bottom-[10%] left-[16%] group cursor-pointer  group-hover:opacity-5">
                                            <span>3</span>
                                            <div
                                                class="bg-white absolute py-2 px-4  text-sm flex justify-center text-center items-center whitespace-nowrap -top-12 left-[-2.5rem] text-[#878787] scale-50 group-hover:scale-100 transition-all ease-in duration-400 opacity-0 group-hover:opacity-100 
                                                    before:content-[''] before:w-[15px] before:h-[15px] before:bg-white before:absolute before:bottom-[-0.25rem] before:rotate-45">
                                                Mercury Tee
                                            </div>
                                        </div>
                                        <div class="bg-[#65affa] rounded-full w-10 h-10 max-sm:w-7 max-sm:h-7 max-sm:text-[10px]  text-white flex justify-center items-center absolute 
                                        bottom-[5%] left-[25%] group cursor-pointer  group-hover:opacity-5">
                                            <span>4</span>
                                            <div
                                                class="bg-white absolute py-2 px-4  text-sm flex justify-center text-center items-center whitespace-nowrap -top-12 left-[-2.5rem] text-[#878787] scale-50 group-hover:scale-100 transition-all ease-in duration-400 opacity-0 group-hover:opacity-100 
                                                    before:content-[''] before:w-[15px] before:h-[15px] before:bg-white before:absolute before:bottom-[-0.25rem] before:rotate-45">
                                                Mercury Tee
                                            </div>
                                        </div>
                                        <div class="bg-[#65affa] rounded-full w-10 h-10 max-sm:w-7 max-sm:h-7 max-sm:text-[10px]  text-white flex justify-center items-center absolute 
                                        top-[18%] left-[48%] group cursor-pointer  group-hover:opacity-5">
                                            <span>$25</span>
                                            <div
                                                class="bg-white absolute py-2 px-4  text-sm flex justify-center text-center items-center whitespace-nowrap -top-12 left-[-2.5rem] text-[#878787] scale-50 group-hover:scale-100 transition-all ease-in duration-400 opacity-0 group-hover:opacity-100 
                                                    before:content-[''] before:w-[15px] before:h-[15px] before:bg-white before:absolute before:bottom-[-0.25rem] before:rotate-45">
                                                Mercury Tee
                                            </div>
                                        </div>
                                        <div class="bg-[#65affa] rounded-full w-10 h-10 max-sm:w-7 max-sm:h-7 max-sm:text-[10px]  text-white flex justify-center items-center absolute 
                                        top-[28%] right-[10.25%] group cursor-pointer  group-hover:opacity-5">
                                            <span>$48</span>
                                            <div
                                                class="bg-white absolute py-2 px-4  text-sm flex justify-center text-center items-center whitespace-nowrap -top-12 left-[-2.5rem] text-[#878787] scale-50 group-hover:scale-100 transition-all ease-in duration-400 opacity-0 group-hover:opacity-100 
                                                    before:content-[''] before:w-[15px] before:h-[15px] before:bg-white before:absolute before:bottom-[-0.25rem] before:rotate-45">
                                                Mercury Tee
                                            </div>
                                        </div>
                                        <div
                                            class="bg-[#65affa] rounded-full w-10 h-10 max-sm:w-7 max-sm:h-7 max-sm:text-[10px]  text-white flex justify-center items-center absolute top-[52%] right-[40%] group cursor-pointer  group-hover:opacity-5">
                                            <span>$55</span>
                                            <div
                                                class="bg-white absolute py-2 px-4  text-sm flex justify-center text-center items-center whitespace-nowrap -top-12 left-[-2.5rem] text-[#878787] scale-50 group-hover:scale-100 transition-all ease-in duration-400 opacity-0 group-hover:opacity-100 
                                                    before:content-[''] before:w-[15px] before:h-[15px] before:bg-white before:absolute before:bottom-[-0.25rem] before:rotate-45">
                                                Mercury Tee
                                            </div>
                                        </div>
                                        <div class="bg-[#65affa] rounded-full w-10 h-10 max-sm:w-7 max-sm:h-7 max-sm:text-[10px]  text-white flex justify-center items-center absolute 
                                        top-[61%] right-[10%] group cursor-pointer  group-hover:opacity-5">
                                            <span>$7</span>
                                            <div
                                                class="bg-white absolute py-2 px-4  text-sm flex justify-center text-center items-center whitespace-nowrap -top-12 left-[-2.5rem] text-[#878787] scale-50 group-hover:scale-100 transition-all ease-in duration-400 opacity-0 group-hover:opacity-100 
                                                    before:content-[''] before:w-[15px] before:h-[15px] before:bg-white before:absolute before:bottom-[-0.25rem] before:rotate-45">
                                                Mercury Tee
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Additional pt-10 mb-7 hidden " id="additional">

                                    <table class="w-full border border-[#ddd] border-collapse text-[#878787]">
                                        <tbody>
                                            <tr class="border-b border-[#ddd]">
                                                <th class="border-r border-[#ddd] p-4">Brand</th>
                                                <td class="p-4">
                                                    <p>H&M, Mango, Nike, Zara</p>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-[#ddd]">
                                                <th class="border-r border-[#ddd] p-4">Color</th>
                                                <td class="p-4">
                                                    <p>Green, Grey, Sliver</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="border-r border-[#ddd] p-4">Size</th>
                                                <td class="p-4">
                                                    <p>XS, S, M, L, XL</p>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                                <div class="Reviews pt-10 mb-7  hidden   " id="reviews">
                                    <div class="text-[#878787] ">
                                        <h2 class="font-bold">BE THE FIRST TO REVIEW “SHORT SLEEVED HOODIE WITH STEP
                                            HEM”
                                        </h2>
                                        <p class="text-sm mt-1">You must be logged in to post a review.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="pt-[60px] ">
                            <div class="flex justify-center ">
                                <h2
                                    class="font-semibold text-2xl relative flex 
                            before:content-[''] before:w-[60px] before:h-[2px] before:bg-[#222] before:absolute before:-left-[4.5rem] before:top-[12px]
                            after:content-[''] after:w-[60px] after:h-[2px] after:bg-[#222] after:absolute after:-right-[4.5rem] after:top-[12px]">
                                    RELATED PRODUCTS</h2>
                            </div>
                            <div class="relative ">
                                <div class="flex pt-8 pb-[60px] overflow-hidden  w-full ">
                                    <div class="flex " id="slide">
                                        <!-- 1 -->
                                        <div
                                            class="card lg:w-[293px] max-sm:w-[188px] max-md:w-[246px] md:w-[246px]  max-w-full pr-3 ">
                                            <div class="product-img relative group">
                                                <div class="">
                                                    <a href=""
                                                        class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                        <img src="./media/img/p2-5-300x383.jpg" alt="">
                                                    </a>
                                                    <a href=""
                                                        class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100
                                            before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                        <img src="./media/img/p2-1-300x383.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="absolute top-3 left-3 ">

                                                </div>
                                                <div
                                                    class="product-btn max-md:hidden  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 ">
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Quick
                                                            Shop</a>
                                                    </div>
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Add to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="product-info mt-[15px] font-poppins text-sm  ">
                                                <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">Cyan Boheme Cyan
                                                </h3>
                                                <span class="text-[#696969]">$40.00 – $45.00</span>
                                                <div class="flex">
                                                    <Bottom
                                                        class="rounded-full m-1 flex bg-black border-[#333] border-[2px]">
                                                        <span class="w-4 h-4 bg-[#25bdb0] rounded-full"></span>
                                                    </Bottom>
                                                    <Bottom class="rounded-full m-1 flex  border-[#ddd] border-[2px]">
                                                        <span class="w-4 h-4 bg-[#fcc6de] rounded-full"></span>
                                                    </Bottom>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 2 -->
                                        <div
                                            class="card lg:w-[293px] max-sm:w-[188px] max-md:w-[246px] md:w-[246px] max-w-full pr-3 ">
                                            <div class="product-img relative group">
                                                <div class="">
                                                    <a href=""
                                                        class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                        <img src="./media/img/calvinKlein.jpg" alt="">
                                                    </a>
                                                    <a href=""
                                                        class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100
                                            before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                        <img src="./media/img/calvinKlein2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="absolute top-3 left-3 ">

                                                </div>

                                                <div
                                                    class="product-btn max-md:hidden  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 ">
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Quick
                                                            Shop</a>
                                                    </div>
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Add to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="product-info mt-[15px] font-poppins text-sm ">
                                                <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">Calvin Klein
                                                    Logo
                                                    Sweatpants
                                                </h3>
                                                <span class="text-[#696969]">$35.00</span>
                                            </div>
                                        </div>
                                        <!-- 3 -->
                                        <div
                                            class="card lg:w-[293px] max-sm:w-[188px] max-md:w-[246px] md:w-[246px] max-w-full pr-3 ">
                                            <div class="product-img relative group">
                                                <div class="">
                                                    <a href=""
                                                        class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                        <img src="./media/img/Bobbi_Chunky_Pom_Beanie2-300x383.jpg"
                                                            alt="">
                                                    </a>
                                                    <a href=""
                                                        class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100
                                            before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                        <img src="./media/img/Bobbi_Chunky_Pom_Beanie3-300x383.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="absolute top-3 left-3 ">

                                                </div>

                                                <div
                                                    class="product-btn max-md:hidden  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 ">
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Quick
                                                            Shop</a>
                                                    </div>
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Add to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="product-info mt-[15px] font-poppins text-sm ">
                                                <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">Cuffed Beanie
                                                    Pink
                                                </h3>
                                                <span class="text-[#696969]">$15.00</span>
                                                <div class="flex">
                                                    <Bottom
                                                        class="rounded-full m-1 flex bg-black border-[#333] border-[2px]">
                                                        <span class="w-4 h-4 bg-[#25bdb0] rounded-full"></span>
                                                    </Bottom>
                                                    <Bottom class="rounded-full m-1 flex  border-[#ddd] border-[2px]">
                                                        <span class="w-4 h-4 bg-[#fcc6de] rounded-full"></span>
                                                    </Bottom>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 4 -->
                                        <div
                                            class="card lg:w-[293px] max-sm:w-[188px] max-md:w-[246px] md:w-[246px] max-w-full pr-3 ">
                                            <div class="product-img relative group">
                                                <div class="">
                                                    <a href=""
                                                        class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                        <img src="./media/img/p8-1-300x383.jpg" alt="">
                                                    </a>
                                                    <a href=""
                                                        class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100
                                            before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                        <img src="./media/img/p8-4-300x383.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="absolute top-3 left-3 ">

                                                </div>

                                                <div
                                                    class="product-btn max-md:hidden  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 ">
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Quick
                                                            Shop</a>
                                                    </div>
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Add to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="product-info mt-[15px] font-poppins text-sm ">
                                                <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">Short Sleeved
                                                    Hoodie
                                                    With
                                                    Step Hem Grey</h3>
                                                <span class="text-[#696969]">$35.00</span>
                                                <div class="flex">
                                                    <Bottom
                                                        class="rounded-full m-1 flex bg-black border-[#333] border-[2px]">
                                                        <span class="w-4 h-4 bg-[#25bdb0] rounded-full"></span>
                                                    </Bottom>
                                                    <Bottom class="rounded-full m-1 flex  border-[#ddd] border-[2px]">
                                                        <span class="w-4 h-4 bg-[#fcc6de] rounded-full"></span>
                                                    </Bottom>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 5 -->
                                        <div
                                            class="card lg:w-[293px] max-sm:w-[188px] max-md:w-[246px] md:w-[246px] max-w-full pr-3 ">
                                            <div class="product-img relative group">
                                                <div class="">
                                                    <a href=""
                                                        class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                        <img src="./media/img/Mercury_Tee24-300x383.jpg" alt="">
                                                    </a>
                                                    <a href=""
                                                        class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100
                                            before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                        <img src="./media/img/Mercury_Tee25-300x383.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="absolute top-3 left-3 ">

                                                </div>

                                                <div
                                                    class="product-btn max-md:hidden  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 ">
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Quick
                                                            Shop</a>
                                                    </div>
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Add to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="product-info mt-[15px] font-poppins text-sm ">
                                                <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">Woleen Tee Blue
                                                </h3>
                                                <span class="text-[#696969]">$68.00</span>
                                                <div class="flex">
                                                    <Bottom
                                                        class="rounded-full m-1 flex bg-black border-[#333] border-[2px]">
                                                        <span class="w-4 h-4 bg-[#25bdb0] rounded-full"></span>
                                                    </Bottom>
                                                    <Bottom class="rounded-full m-1 flex  border-[#ddd] border-[2px]">
                                                        <span class="w-4 h-4 bg-[#fcc6de] rounded-full"></span>
                                                    </Bottom>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 6 -->
                                        <div
                                            class="card lg:w-[293px] max-sm:w-[188px] max-md:w-[246px] md:w-[246px] max-w-full pr-3 ">
                                            <div class="product-img relative group">
                                                <div class="">
                                                    <a href=""
                                                        class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                        <img src="./media/img/Bobbi_Chunky_Pom_Beanie4-300x383.jpg"
                                                            alt="">
                                                    </a>
                                                    <a href=""
                                                        class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100
                                            before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                        <img src="./media/img/Bobbi_Chunky_Pom_Beanie5-300x383.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="absolute top-3 left-3 ">
                                                    <a href="#" class="hidden group-hover:block">
                                                        <i class="fa-regular fa-heart w-5 h-[22px] text-white "></i>
                                                    </a>
                                                </div>

                                                <div
                                                    class="product-btn max-md:hidden  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 ">
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Quick
                                                            Shop</a>
                                                    </div>
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Add to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="product-info mt-[15px] font-poppins text-sm ">
                                                <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">Grey Beanie Grey
                                                </h3>
                                                <span class="text-[#696969]">$15.00</span>
                                                <div class="flex">
                                                    <Bottom
                                                        class="rounded-full m-1 flex bg-black border-[#333] border-[2px]">
                                                        <span class="w-4 h-4 bg-[#25bdb0] rounded-full"></span>
                                                    </Bottom>
                                                    <Bottom class="rounded-full m-1 flex  border-[#ddd] border-[2px]">
                                                        <span class="w-4 h-4 bg-[#fcc6de] rounded-full"></span>
                                                    </Bottom>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 7 -->
                                        <div
                                            class="card lg:w-[293px] max-sm:w-[188px] max-md:w-[246px] md:w-[246px] max-w-full pr-3 ">
                                            <div class="product-img relative group">
                                                <div class="">
                                                    <a href=""
                                                        class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                        <img src="./media/img/p2-1-300x383.jpg" alt="">
                                                    </a>
                                                    <a href=""
                                                        class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100
                                            before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                        <img src="./media/img/p2-5-300x383.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="absolute top-3 left-3 ">

                                                </div>

                                                <div
                                                    class="product-btn max-md:hidden  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 ">
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Quick
                                                            Shop</a>
                                                    </div>
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Add to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="product-info mt-[15px] font-poppins text-sm ">
                                                <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">Pink Leather
                                                    Watch
                                                </h3>
                                                <span class="text-[#696969]">$35.00</span>
                                            </div>
                                        </div>
                                        <!-- 8 -->
                                        <div
                                            class="card lg:w-[293px] max-sm:w-[188px] max-md:w-[246px] md:w-[246px] max-w-full pr-3 ">
                                            <div class="product-img relative group">
                                                <div class="">
                                                    <a href=""
                                                        class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                        <img src="./media/img/p7-1-300x383.jpg" alt="">
                                                    </a>
                                                    <a href=""
                                                        class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100
                                            before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                        <img src="./media/img/p7-2-300x383.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="absolute top-3 left-3 ">

                                                </div>

                                                <div
                                                    class="product-btn max-md:hidden  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 ">
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Quick
                                                            Shop</a>
                                                    </div>
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Add to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="product-info mt-[15px] font-poppins text-sm ">
                                                <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">Brown Sneaker
                                                    Shoes
                                                </h3>
                                                <span class="text-[#696969]">$35.00</span>
                                            </div>
                                        </div>
                                        <!-- 9 -->
                                        <div
                                            class="card lg:w-[293px] max-sm:w-[188px] max-md:w-[246px] md:w-[246px] max-w-full pr-3 ">
                                            <div class="product-img relative group">
                                                <div class="">
                                                    <a href=""
                                                        class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                        <img src="./media/img/p10-2-300x383.jpg" alt="">
                                                    </a>
                                                    <a href=""
                                                        class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100
                                            before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                        <img src="./media/img/p9-4-300x383.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="absolute top-3 left-3 ">

                                                </div>

                                                <div
                                                    class="product-btn max-md:hidden  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 ">
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Quick
                                                            Shop</a>
                                                    </div>
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Add to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="product-info mt-[15px] font-poppins text-sm ">
                                                <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">Men clothing
                                                    combo
                                                </h3>
                                                <span class="text-[#696969]">$35.00</span>
                                            </div>
                                        </div>
                                        <!-- 10 -->
                                        <div
                                            class="card lg:w-[293px] max-sm:w-[188px] max-md:w-[246px] md:w-[246px] max-w-full pr-3 ">
                                            <div class="product-img relative group">
                                                <div class="">
                                                    <a href=""
                                                        class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                        <img src="./media/img/p4-1-300x383.jpg" alt="">
                                                    </a>
                                                    <a href=""
                                                        class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100
                                            before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                        <img src="./media/img/p4-3-300x383.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="absolute top-3 left-3 ">

                                                </div>

                                                <div
                                                    class="product-btn max-md:hidden  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 ">
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Quick
                                                            Shop</a>
                                                    </div>
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Add to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="product-info mt-[15px] font-poppins text-sm ">
                                                <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">Herschel Retreat
                                                    Backpack
                                                </h3>
                                                <span class="text-[#696969]">$35.00</span>
                                            </div>
                                        </div>
                                        <!-- 11 -->
                                        <div
                                            class="card lg:w-[293px] max-sm:w-[188px] max-md:w-[246px] md:w-[246px] max-w-full pr-3 ">
                                            <div class="product-img relative group">
                                                <div class="">
                                                    <a href=""
                                                        class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                        <img src="./media/img/p5-4-300x383.jpg" alt="">
                                                    </a>
                                                    <a href=""
                                                        class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100
                                            before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                        <img src="./media/img/p5-1-300x383.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="absolute top-3 left-3 ">

                                                </div>

                                                <div
                                                    class="product-btn max-md:hidden  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 ">
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Quick
                                                            Shop</a>
                                                    </div>
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Add to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="product-info mt-[15px] font-poppins text-sm ">
                                                <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">Skinny Jeans In
                                                    Black
                                                </h3>
                                                <span class="text-[#696969]">$35.00</span>
                                            </div>
                                        </div>
                                        <!-- 12 -->
                                        <div
                                            class="card lg:w-[293px] max-sm:w-[188px] max-md:w-[246px] md:w-[246px] max-w-full pr-3 ">
                                            <div class="product-img relative group">
                                                <div class="">
                                                    <a href=""
                                                        class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                                                        <img src="./media/img/p6-1-300x383.jpg" alt="">
                                                    </a>
                                                    <a href=""
                                                        class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100
                                            before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                                                        <img src="./media/img/p6-4-300x383.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="absolute top-3 left-3 ">

                                                </div>

                                                <div
                                                    class="product-btn max-md:hidden  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 ">
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Quick
                                                            Shop</a>
                                                    </div>
                                                    <div
                                                        class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                                                        <a href="#">Add to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="product-info mt-[15px] font-poppins text-sm ">
                                                <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer ">New Look Curved
                                                    Peak
                                                    Cap
                                                </h3>
                                                <span class="text-[#696969]">$35.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="absolute top-1/2 -translate-y-1/2 left-0 border border-black hover:border-[#56CFE1] px-3 py-2 hover:bg-[#56CFE1] hover:text-white rounded-full"
                                        id="prev"><i class='bx bx-chevron-left'></i></i></button>
                                    <button
                                        class="absolute top-1/2 -translate-y-1/2 right-0 border border-black hover:border-[#56CFE1] px-3 py-2 hover:bg-[#56CFE1] hover:text-white rounded-full"
                                        id="next"><i class='bx bx-chevron-right'></i></button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php include "./view/inc/footer.php" ?>
        </div>
    </div>
    <script src="../public/js/main.js"></script>
</body>

</html>