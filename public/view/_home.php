<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Claue</title>
  <link rel="stylesheet" href="../public/css/output.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" type="image/png" href="../public/media/img/desktop2.png" class="tab-icon">
  <style>
    ::-webkit-scrollbar {
      width: 0px;
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* Position the "next button" to the right */

    .dot {
      background-color: #bbb;
    }

    .active,
    .dot:hover {
      background-color: #717171;
    }

    /* Caption text */
  </style>
</head>
<body class="font-poppins">
  <div class="container-main">
  <?php session_start(); ?>
    <!-- search -->
    <?php include "./view/inc/search.php" ?>
    <!-- cart -->
    <?php include "./view/inc/cart.php" ?>
    <!--chi tiết sản phẩm -->
    <?php include "./view/inc/product_description.php" ?>
    <!-- mobi menu -->
    <?php include "./view/inc/mobi_menu.php" ?>
    <div class="Content-Wrapper">
    
      <?php include "./view/inc/header.php" ?>
      <main>
        <!-- Slideshow container -->
        <div class="slideshow-container  lg:mx-auto lg:max-w-screen-lg relative transition-all duration-300 e">
          <!-- Full-width images with number and caption text -->
          <!-- Slides_Show_1 -->
          <div class="mySlides fade relative  ">
            <img loading="lazy" src="../public/media/img/slider1.png" class="w-full" alt="Slide 1">
            <div
              class=" absolute top-1/2 sm:-translate-x-1/2 -translate-x-1/2 left-1/3 sm:right-1 -translate-y-1/3 ml-5">
              <h4 class="text-[#878787] sm:text-[18px]  font-LibreBaskerville font-extrabold italic ">
                Spring - Summer 2016</h4>
              <h3
                class="uppercase font-bold my-[15px] text-black text-[45px] mr-[10px] max-sm:text-[18px] whitespace-nowrap leading-none">
                best of
                collection</h3>
              <p class="xl:text-[14px] text-[12px] mb-3 mr-[15px] text-[#878787] max-sm:hidden ">Duis aute irure dolor
                in
                reprehenderit in
                voluptate velit essecillum dolore
                <br> eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident
              </p>
              <a class="mt-3" href="#">
                <button
                  class="bg-white border border-black text-black font-bold py-2 px-6 rounded-full  hover:bg-[#56cfe1] hover:border-[#56cfe1] hover:text-white">Shop
                  Now</button>
              </a>
            </div>
          </div>
          <!-- Slides_Show_2 -->
          <div class="mySlides fade relative">
            <img loading="lazy" src="../public/media/img/slider2.png" class="w-full" alt="Slide 2">
            <div class="text absolute top-[45%] right-14 -translate-y-1/3 max-sm:text- ">
              <h4 class="text-[#878787] sm:text-[18px] font-LibreBaskerville font-extrabold italic">2016 New Arrivals
              </h4>
              <h3
                class="uppercase font-bold my-[15px] text-black text-[45px] mr-[10px] max-sm:text-[18px] whitespace-nowrap leading-none">
                sale off! up to 70%</h3>
              <p class="text-[10px] lg:text-[14px] my-3 sm:my-1 mr-[15px] text-[#878787] max-md:hidden">Duis aute irure
                dolor in reprehenderit in voluptate velit essecillum dolore<br> eu fugiat nulla pariatur. Excepteur sint
                occaecat cupidatat nonproident
              </p>
              <a class="mt-3" href="#">
                <button
                  class="bg-white border border-black text-black font-bold py-2 px-6 rounded-full  hover:bg-[#56cfe1] hover:border-[#56cfe1] hover:text-white">Shop
                  Now</button>
              </a>
            </div>
          </div>
          <!-- Slides_Show_3 -->
          <div class="mySlides fade relative ">
            <img loading="lazy" src="../public/media/img/slider3.png" class="w-full" alt="Slide 3">
            <div class="text absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 ">
              <h4 class="text-[#878787] sm:text-[18px] font-LibreBaskerville font-extrabold italic flex justify-center">
                2016 New Arrivals </h4>
              <h3 class="uppercase font-bold  text-black text-[32px] lg:text-[60px] flex justify-center"> FLASH SALE
              </h3>

              <a class=" flex justify-center " href="#">
                <button
                  class="bg-white border border-black text-black font-bold py-2 px-6 rounded-full  hover:bg-[#56cfe1] hover:border-[#56cfe1] hover:text-white">Shop
                  Now</button>
              </a>
            </div>
          </div>
          <!-- The dots/circles -->
          <div class=" bottom-1 right-[45%]  absolute mt-4">
            <span class="dot inline-block w-3 h-3 rounded-full bg-gray-500 mx-2 cursor-pointer"
              onclick="currentSlide(1)"></span>
            <span class="dot inline-block  w-3 h-3 rounded-full bg-gray-500 mx-2 cursor-pointer"
              onclick="currentSlide(2)"></span>
            <span class="dot inline-block  w-3 h-3 rounded-full bg-gray-500 mx-2 cursor-pointer"
              onclick="currentSlide(3)"></span>
          </div>
        </div>
        <!-- IMG_View -->
        <div class="flex max-w-[73.125rem] m-auto items-center justify-center mt-[30px] mb-[51px] ">
          <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 gap-5  px-5">
            <!-- anh-1 -->
            <div class="group relative cursor-pointer items-center justify-center overflow-hidden">
              <div class="  ">
                <img
                  class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-0 group-hover:scale-125"
                  src="../public/media/img/women.jpg" alt="" />
              </div>
              <div
                class="absolute flex bottom-10 left-1/2 -translate-x-1/2 items-center justify-center px-9 text-center">
                <button
                  class="min-w-[150px] bg-white py-2 px-3.5 font-poppins font-semibold text-[14px] capitalize text-black shadow shadow-black/60">Women</button>
              </div>
            </div>
            <!-- group-img -->
            <div class="relative items-center justify-center overflow-hidden">
              <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                <!-- anh-2 -->
                <div class="group relative cursor-pointer items-center justify-center overflow-hidden row-span-2">
                  <div class="">
                    <img
                      class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-0 group-hover:scale-125"
                      src="../public/media/img/footer-wear-120x133.jpg" alt="" />
                  </div>
                  <div
                    class="absolute flex bottom-10 left-1/2 -translate-x-1/2 items-center justify-center px-9 text-center">
                    <button
                      class="min-w-[150px] bg-white py-2 px-3.5 font-poppins font-semibold text-[14px] capitalize text-black shadow shadow-black/60">Footwear</button>
                  </div>
                </div>

                <!-- anh-3 -->
                <div class="group relative cursor-pointer items-center justify-center overflow-hidden row-span-2">
                  <div class="">
                    <img
                      class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-0 group-hover:scale-125"
                      src="../public/media/img/anh 3.jpg" alt="" />
                  </div>
                  <div
                    class="absolute flex bottom-10 left-1/2 -translate-x-1/2 items-center justify-center px-9 text-center">
                    <button
                      class="min-w-[150px] bg-white py-2 px-3.5 font-poppins font-semibold text-[14px] capitalize text-black shadow shadow-black/60">Watchs</button>
                  </div>
                </div>
              </div>
              <!-- anh-4 -->
              <div
                class="group relative mt-4 cursor-pointer items-center justify-center overflow-hidden row-span-2 col-span-2">
                <div class="">
                  <img
                    class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-0 group-hover:scale-125"
                    src="../public/media/img/acessories1.jpg" alt="" />
                </div>
                <div
                  class="absolute flex bottom-10 left-1/2 -translate-x-1/2 items-center justify-center px-9 text-center">
                  <button
                    class="min-w-[150px] bg-white py-2 px-3.5 font-poppins font-semibold text-[14px] capitalize text-black shadow shadow-black/60">Acessories</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End img-view -->
        <!-- LINE TRENDING -->
        <div class="subheadLine flex justify-center items-center mb-12 ">
          <div class="subheadLine-deco-line w-16 h-[2px] bg-black max-sm:w-10"></div>
          <div class="subheadLine-label uppercase mx-8 tracking-widest text-black text-[24px] font-poppins ">
            <h1 class="justify-center items-center text-center font-semibold">TRENDING</h1>
            <span
              class="text-[#878787] text-[14px] font-LibreBaskerville font-extrabold italic flex justify-center max-sm:text-[10px]">Top
              view in this
              week</span>
          </div>
          <div class="subheadLine-deco-line w-16 h-[2px] bg-black max-sm:w-10 "></div>
        </div>
        <!-- END-LINE-TRENDING -->
        <div class="trending  ">
          <div class="w-full">
            <div class="containre-product max-w-[73.125rem] m-auto px-5">
              <div class="grid grid-cols-4 gap-8 max-lg:grid-cols-3 max-sm:grid-cols-2" id="product1">
                <!-- 1 -->
                <?php for ($i = 0; $i < 8; $i++) { ?>
                  <div class="item">
                    <div class="product-img relative group">
                      <div class="img">
                        <a href="detail_product.php?product_id=<?php echo $productList[$i]['id']; ?>&image_product=<?php echo $productList[$i]['image']; ?>&price_product=<?php echo $productList[$i]['price']; ?> &name_product=<?php echo $productList[$i]['name']; ?> &descript_product=<?php echo $productList[$i]['description']; ?>"
                          class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                          <img src="./media/img/<?php echo $productList[$i]['image']; ?>.jpg" alt="" loading="lazy">
                        </a>
                        <a href="detail_product.php?product_id=<?php echo $productList[$i]['id']; ?>&image_product=<?php echo $productList[$i]['image']; ?>&price_product=<?php echo $productList[$i]['price']; ?> &name_product=<?php echo $productList[$i]['name']; ?> &descript_product=<?php echo $productList[$i]['description']; ?>"
                          class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100 before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                          <img src="./media/img/id11.jpg" alt="" loading="lazy">
                        </a>
                      </div>
                      <div class="absolute top-3 left-3 max-lg:block ">
                        <a href="#" class="hidden group-hover:block max-lg:block">
                          <div class="block max-lg:block">
                            <div class="max-lg:block"><i class="fa-regular fa-heart fa-lg text-white "></i>
                            </div>
                            <div class=" lg:hidden  max-md:block "
                              onclick="quickShop('<?php echo $productList[$i]['image']; ?>','<?php echo $productList[$i]['name']; ?>','<?php echo $productList[$i]['price']; ?>')">
                              <i class="fa-solid fa-eye fa-lg text-white" data-product-id="1"></i></div>
                          </div>
                        </a>
                      </div>
                      <div
                        class="product-btn  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 max-lg:hidden">
                        <div
                          class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                          <a href="detail_product.php?product_id=<?php echo $productList[$i]['id']; ?>&image_product=<?php echo $productList[$i]['image']; ?>&price_product=<?php echo $productList[$i]['price']; ?> &name_product=<?php echo $productList[$i]['name']; ?> &descript_product=<?php echo $productList[$i]['description']; ?>"
                            class="whitespace-nowrap">Selec options</a>
                        </div>
                        <div
                          class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm justify-center cursor-pointer quickShop"
                          onclick="quickShop('<?php echo $productList[$i]['image']; ?>','<?php echo $productList[$i]['name']; ?>','<?php echo $productList[$i]['price']; ?>')">
                          Quick Shop
                        </div>
                      </div>
                    </div>
                    <div class="product-info mt-[15px] font-poppins text-sm  ">
                      <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">
                        <a
                          href="detail_product.php?product_id=<?php echo $productList[$i]['id']; ?>&image_product=<?php echo $productList[$i]['image']; ?>&price_product=<?php echo $productList[$i]['price']; ?> &name_product=<?php echo $productList[$i]['name']; ?> &descript_product=<?php echo $productList[$i]['description']; ?>">
                          <?php echo $productList[$i]['name']; ?>
                        </a>
                      </h3>
                      <span class="text-[#696969]">
                        $<?php
                        $discount = 30;
                        $discountedPrice = $productList[$i]['price'] - ($productList[$i]['price'] * $discount / 100);
                        echo $discountedPrice ?>.000
                        -
                        $<?php echo $productList[$i]['price']; ?>.000
                      </span>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <!-- End trending -->
        <div class="flex min-h-[400px] items-center justify-center  sm:mx-0   mt-10 px-5">
          <div class="grid grid-cols-1 gap-5  sm:grid-cols-2">
            <!-- anh-1 -->
            <div
              class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
              <div class=" lg:h-[300px] lg:w-[570px] md:h-[250px] md:w-[475px] ">
                <img
                  class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-0 group-hover:scale-125"
                  src="../public/media/img/lookbook2016.jpg" alt="" />
              </div>

              <div class="absolute inset-0 flex  flex-col items-center justify-center px-9 text-center ">
                <h1 class="font-poppins text-2xl font-bold text-white">LOOKBOOK 2016 </h1>
                <p class="mt-3 text-[14px] font-bold  text-white ">MAKE LOVE THIS LOOK</p>
              </div>
            </div>
            <!-- anh-2 -->
            <div
              class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
              <div class="lg:h-[300px] lg:w-[570px] md:h-[250px] md:w-[475px]">
                <img
                  class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-0 group-hover:scale-125"
                  src="../public/media/img/summer-sale.jpg" alt="" />
              </div>

              <div class="absolute inset-0 flex  flex-col items-center justify-center px-9 text-center ">
                <h1 class="font-poppins text-xl font-medium text-white">SUMMER SALE </h1>
                <p class="mt-3 text-5xl font-semibold  text-white ">UP TO 70%</p>
              </div>
            </div>

          </div><!-- End lookbook -->
        </div>
        <!-- LINE Best-saler -->
        <!-- END-LINE-Best-saler -->
        <div class="best-seller  max-w-[73.125rem] m-auto px-5">
          <div class="subheadLine flex justify-center items-center mb-12 mt-10  ">
            <div class="subheadLine-deco-line w-16 h-[2px] bg-black max-sm:w-10"></div>
            <div class="subheadLine-label uppercase mx-8 tracking-widest text-black text-[24px] font-poppins ">
              <h1 class="justify-center items-center text-center font-semibold">best seller</h1>
              <span
                class="text-[#878787] text-[14px] font-LibreBaskerville font-extrabold italic flex justify-center max-sm:text-[10px]">Top
                sale in this
                week</span>
            </div>
            <div class="subheadLine-deco-line w-16 h-[2px] bg-black max-sm:w-10 "></div>
          </div>
          <div class="bestSeller grid grid-cols-4 gap-8 max-lg:grid-cols-3 max-sm:grid-cols-2" id="bestSeller">

            <?php for ($i = 0; $i < 8; $i++) { ?>
              <div class="item">
                <div class="product-img relative group">
                  <div class="img">
                    <a href="../public/detail_product?id=<?php $productList[$i]['id']; ?>"
                      class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                      <img src="./media/img/<?php echo $productList[$i]['image']; ?>.jpg" alt="" loading="lazy">
                    </a>
                    <a href="detail_product.php?product_id=<?php echo $productList[$i]['id']; ?>&image_product=<?php echo $productList[$i]['image']; ?>&price_product=<?php echo $productList[$i]['price']; ?> &name_product=<?php echo $productList[$i]['name']; ?> &descript_product=<?php echo $productList[$i]['description']; ?>"
                      class="absolute inset-0 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100 before:bg-[rgba(0,0,0,.1)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 before:w-full before:hidden before:group-hover:block before:transition-all before:duration-300">
                      <img src="./media/img/id11.jpg" alt="" loading="lazy">
                    </a>
                  </div>
                  <div class="absolute top-3 left-3 max-lg:block ">
                    <a href="#" class="hidden group-hover:block max-lg:block">
                      <div class="block max-lg:block">
                        <div class="max-lg:block"><i class="fa-regular fa-heart fa-lg text-white "></i>
                        </div>
                        <div class=" lg:hidden  max-md:block "
                          onclick="quickShop('<?php echo $productList[$i]['image']; ?>','<?php echo $productList[$i]['name']; ?>','<?php echo $productList[$i]['price']; ?>')">
                          <i class="fa-solid fa-eye fa-lg text-white quickShop"></i></div>
                      </div>
                    </a>
                  </div>
                  <div
                    class="product-btn  absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-rows-2 gap-2 group-hover:opacity-100 opacity-0 group-hover:top-1/2 group-hover:transition-all group-hover:duration-300 max-lg:hidden">
                    <div
                      class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm">
                      <a href="detail_product.php?product_id=<?php echo $productList[$i]['id']; ?>&image_product=<?php echo $productList[$i]['image']; ?>&price_product=<?php echo $productList[$i]['price']; ?> &name_product=<?php echo $productList[$i]['name']; ?> &descript_product=<?php echo $productList[$i]['description']; ?>"
                        class="whitespace-nowrap">Selec options</a>
                    </div>
                    <div
                      class="bg-white hover:text-white hover:bg-black rounded-full py-[10px] px-6 font-poppins flex text-center text-sm justify-center cursor-pointer quickShop"
                      onclick="quickShop('<?php echo $productList[$i]['image']; ?>','<?php echo $productList[$i]['name']; ?>','<?php echo $productList[$i]['price']; ?>')">
                      Quick Shop
                    </div>
                  </div>
                </div>
                <div class="product-info mt-[15px] font-poppins text-sm  ">
                  <h3 class="text-sm hover:text-[#56CFE1] cursor-pointer">
                    <a
                      href="detail_product.php?product_id=<?php echo $productList[$i]['id']; ?>&image_product=<?php echo $productList[$i]['image']; ?>&price_product=<?php echo $productList[$i]['price']; ?> &name_product=<?php echo $productList[$i]['name']; ?> &descript_product=<?php echo $productList[$i]['description']; ?>">
                      <?php echo $productList[$i]['name']; ?>
                    </a>
                  </h3>
                  <span class="text-[#696969]"> 
                  $<?php
                    $discount = 30;
                    $discountedPrice = $productList[$i]['price'] - ($productList[$i]['price'] * $discount / 100);
                    echo $discountedPrice ?>.000
                    -
                    
                    $<?php echo $productList[$i]['price']; ?>.000
                  </span>
                </div>
              </div>
            <?php } ?>
          </div>
        </div><!-- End best-seller -->
        <!-- LINE BLOG -->
        <div class="subheadLine flex justify-center items-center mb-8 mt-8 ">
          <div class="subheadLine-deco-line w-16 h-[2px] bg-black max-sm:w-10"></div>
          <div class="subheadLine-label uppercase  tracking-widest text-black text-[24px] font-poppins ">
            <h1 class="justify-center items-center text-center font-semibold max-sm:text-[18px]">LATES FROM BLOG</h1>
            <span
              class="text-[#878787] text-[14px] font-LibreBaskerville  font-normal italic flex justify-center max-sm:text-[10px]">The
              freshest and most
              exciting news</span>
          </div>
          <div class="subheadLine-deco-line w-16 h-[2px] bg-black max-sm:w-10 "></div>
        </div>
        <!-- END-LINE-BLOG -->
        <!-- Form-blog -->
        <div class="form-blog max-w-[73.125rem] m-auto mb-24 px-5  ">
          <div class="grid grid-cols-1 sm:grid-cols-3  gap-5  h-full">
            <!-- Content-1 -->
            <div class="big-card  h-full w-full ">
              <div class="  bg-cover bg-no-repeat bg-center ">
                <img src="../public/media/img/blog-img1.jpg" alt="">
              </div>
              <div class="info  mt-[15px]">
                <a class="text-[16px] font-bold uppercase" href="">Spring – Summer Trending 2017</a>
                <div class="mt-[8px]">
                  <span class="text-[14px] text-[#878787]">By
                    <span class="text-[14px] text-[#222] font-semibold">admin </span>
                  </span>

                  <span class="text-[14px] text-[#878787]">on
                    <span class="text-[14px] text-[#222] font-semibold"> December 24, 2015</span>
                  </span>
                </div>
                <div class="content text-[14px] text-[#878787] mt-[13px]">
                  Typography is the work of typesetters, compositors,<br>
                  typographers, graphic designers, art directors, <br>
                  manga artists,...

                </div>
              </div>
            </div>
            <!-- Content-2 -->
            <div class="big-card  h-full w-full ">
              <div class="  bg-cover bg-no-repeat bg-center ">
                <img src="../public/media/img/blog-img2.jpg" alt="">
              </div>
              <div class="info  mt-[15px] ">

                <a class="text-[16px] font-bold uppercase" href="">
                  The Easiest Way to Break Out on Top</a>
                <div class="mt-[8px]">
                  <span class="text-[14px] text-[#878787]">By
                    <span class="text-[14px] text-[#222] font-semibold">admin </span>
                  </span>

                  <span class="text-[14px] text-[#878787]">on
                    <span class="text-[14px] text-[#222] font-semibold"> December 24, 2015</span>
                  </span>
                </div>
                <div class="content text-[14px] text-[#878787] mt-[13px]">
                  Typography is the work of typesetters, compositors,<br>
                  typographers, graphic designers, art directors, <br>
                  manga artists,...

                </div>
              </div>
            </div>
            <!-- Content-3 -->
            <div class="big-card  h-full w-full">
              <div class="  bg-cover bg-no-repeat bg-center ">
                <img src="../public/media/img/blog-img3.jpg" alt="">
              </div>
              <div class="info  mt-[15px]">

                <a class="text-[16px] font-bold uppercase" href="">Style for couple in Weeding season</a>
                <div class="mt-[8px]">
                  <span class="text-[14px] text-[#878787]">By
                    <span class="text-[14px] text-[#222] font-semibold">admin </span>
                  </span>

                  <span class="text-[14px] text-[#878787]">on
                    <span class="text-[14px] text-[#222] font-semibold"> December 24, 2015</span>
                  </span>
                </div>
                <div class="content text-[14px] text-[#878787] mt-[13px]">
                  Typography is the work of typesetters, compositors,<br>
                  typographers, graphic designers, art directors, <br>
                  manga artists,...

                </div>
              </div>
            </div>
          </div>
        </div><!-- End form-blog -->

        <div class=" h-[186px]"></div>
        <!-- LINE Follow-US -->
        <div class="subheadLine flex justify-center items-center mb-7 mt-[-150px] ">
          <div class="subheadLine-deco-line sm:w-16 w-8 h-[2px] bg-black"></div>
          <div class="subheadLine-label uppercase sm:mx-8 mx4  text-black text-[24px] max-sm:text-[15px] font-poppins ">
            <h1 class=" font-bold">@ FOLLOW US ON INSTAGRAM</h1>
          </div>
          <div class="subheadLine-deco-line sm:w-16 w-8 h-[2px] bg-black "></div>
        </div>
        <!-- END-LINE-Follow-US -->
        <div class="follow-us w-full">
          <div
            class="grid grid-cols-2 snap-y snap-mandatory max-sm:h-[200px] max-md:h-[300px] overflow-scroll md:grid-cols-8   lg:grid-cols-8 mx-5 sm:mx-4   ">
            <div> <img src="../public/media/img/follow-us-anh1.jpg" alt=""></div>
            <div> <img src="../public/media/img/follow-us-anh2.jpg" alt=""></div>
            <div> <img src="../public/media/img/follow-us-anh3.jpg" alt=""></div>
            <div> <img src="../public/media/img/follow-us-anh4.jpg" alt=""></div>
            <div> <img src="../public/media/img/follow-us-anh5.jpg" alt=""></div>
            <div> <img src="../public/media/img/follow-us-anh6.jpg" alt=""></div>
            <div> <img src="../public/media/img/follow-us-anh7.jpg" alt=""></div>
            <div> <img src="../public/media/img/follow-us-anh8.jpg" alt=""></div>
          </div>

        </div><!-- follow-us -->
      </main>
      <?php include "./view/inc/footer.php" ?>
    </div>
    <script src="../public/js/main.js"></script>
    <script>
      const circles = document.querySelectorAll('.circle');
      let activeCircle = null;
      circles.forEach(circle => {
        circle.addEventListener('click', () => {
          // Kiểm tra xem circle đã được chọn trước đó chưa
          if (activeCircle) {
            // Nếu có, hủy lớp CSS 'border-4' để xóa vòng tròn bọc
            activeCircle.classList.remove('border-4');
          }
          // Thêm lớp CSS 'border-4' vào circle hiện tại
          circle.classList.add('border-4');
          // Đặt circle hiện tại là circle được chọn
          activeCircle = circle;
        });
      });
      // slide home
      let slideIndexx = 1;
      function plusSlides(n) {
        showSlides(slideIndexx += n);
      }
      function currentSlide(n) {
        showSlides(slideIndexx = n);
      }
      function autoSlide() {
        plusSlides(1); // Tự động chuyển sang slide tiếp theo
      }
      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
          slideIndexx = 1;
        }
        if (n < 1) {
          slideIndexx = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace("bg-gray-500", "");
        }
        slides[slideIndexx - 1].style.display = "block";
        dots[slideIndexx - 1].className += " bg-gray-500";
      }
      document.addEventListener("DOMContentLoaded", function () {
        let refreshSlider = setInterval(autoSlide, 3000);
        showSlides(slideIndexx);
      });
    </script>

    <!-- <script src="../public/js/Product.js"></script> -->

</body>

</html>