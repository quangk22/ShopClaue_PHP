<div class="bg-[rgba(0,0,0,.8)] w-full h-full fixed z-50 hidden " id="MotaSP">
    <div class="flex justify-center items-center  w-full h-full scale-50  " id="detail">
        <div class="w-[800px] bg-white h-[90vh] max-md:w-full max-md:h-full max-md:overflow-auto relative">
            <button
                class="flex justify-end items-center p-5 absolute right-0 hover:rotate-180 transition-all ease-in duration-200 z-40 hover:text-red-600"
                id="close-detail" onclick="close_detail()">
                <i class="fa-solid fa-x"></i>
            </button>
            <div class="grid grid-cols-2 gap-5 max-md:block w-full">
                <div class="img h-[90vh] relative overflow-hidden group max-md:w-auto w-full">
                    <button class="absolute top-1/2 left-8 border-black border rounded-full p-2 px-3.5 w-[38px] h-[38px] flex justify-center items-center opacity-0  group-hover:opacity-100 transition-all ease-out duration-300 hover:bg-[#56cfe1] hover:text-white hover:border-[#56cfe1]
                      prev max-md:hidden" onclick="prevSlide2()"><i class="fas fa-chevron-left "></i></button>
                    <!-- Slideshow Container -->
                    <div class="slideshow-item w-full m-auto h-[90vh] " ontouchstart="touchStart(event)">
                        <div class="slideshow-image h-full">
                            <img src="" alt="" loading="lazy " id="imageProduct" class="w-full h-[90vh] object-cover">
                        </div>
                        <div class="slideshow-image" ontouchstart="touchStart(event)">
                            <img src="../public/media/img/ck-2.jpg" alt="" loading="lazy"
                                class="w-full h-[90vh] object-cover">
                        </div>
                        <div class="slideshow-image" ontouchstart="touchStart(event)">
                            <img src="../public/media/img/ck-3.jpg" alt="" loading="lazy"
                                class="w-full h-[90vh] object-cover">
                        </div>
                        <div class="slideshow-image" ontouchstart="touchStart(event)">
                            <img src="../public/media/img/ck-4.jpg" alt="" loading="lazy"
                                class="w-full h-[90vh] object-cover">
                        </div>
                    </div>
                    <button class="absolute top-1/2 right-8 border-black border rounded-full p-2 px-3.5 w-[38px] h-[38px] flex justify-center items-center opacity-0  group-hover:opacity-100 transition-all ease-out duration-300 hover:bg-[#56cfe1] hover:text-white hover:border-[#56cfe1]
                      next max-md:hidden" onclick="nextSlide2()"><i class="fas fa-chevron-right "></i></button>
                </div>
                <div class="contens overflow-hidden h-[90vh] max-md:h-full">
                    <div class="w-full px-5 mt-5 h-full overflow-auto max-md:overflow-hidden">
                        <div class="">
                            <h1 class="text-base font-semibold mb-1 " id="nameProduct"></h1>
                            <div class="text-[#878787] mb-5"><span class="text-[22px]" id="priceProduct"></span></div>
                            <div class="text-[#878787] text-sm mb-5">
                                <p id="descriptionProduct">Go sporty this summer with this vintage navy and white
                                    striped v-neck t-shirt
                                    from the Nike. Perfect for pairing with denim and white kicks for a stylish
                                    sporty vibe.</p>
                            </div>
                            <div class="mb-5">
                                <form action="" class="flex">
                                    <div class="mr-[10px]">
                                        <div
                                            class="relative py-2 flex justify-center items-center border border-black w-[115px] rounded-full font-semibold">
                                            <input type="number" min="1" value="1" inputmode="none" readonly
                                                class="outline-none w-full flex text-center bg-transparent"
                                                id="customNumberInput">
                                            <div
                                                class="absolute top-1/2  left-1/2 -translate-x-1/2 -translate-y-1/2 flex justify-between w-full">
                                                <div class="ml-3" id="decreaseButton"><i class="fa-solid fa-minus"></i>
                                                </div>
                                                <div class="mr-3" id="increaseButton"><i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mr-[10px]">
                                        <button
                                            class="bg-[#56cfe1] w-[164px] rounded-full flex justify-center items-center text-center text-sm font-semibold text-white py-2.5 uppercase">
                                            <a href="detail_product.php?id=">Add to cart</a>
                                            <!-- // -->
                                        </button>
                                    </div>
                                    <div class="flex justify-center items-center border border-black rounded-full">
                                        <i class="fa-regular fa-heart p-3"></i>
                                    </div>
                                </form>
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
                                        <img src="../public/media/img/ck-1-270x270.jpg" alt="" loading="lazy"
                                            class="w-[70px] h-[70px] object-cover">
                                        <span class="px-1 text-[#878787]">+</span>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <img src="../public/media/img/p2-5-270x270.jpg" alt="" loading="lazy"
                                            class="w-[70px] h-[70px] object-cover">
                                        <span class="px-1 text-[#878787]">+</span>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <img src="../public/media/img/p10-1-300x383.jpg" alt="" loading="lazy"
                                            class="w-[70px] h-[70px] object-cover">
                                        <span class="px-1 text-[#878787]">+</span>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <img src="../public/media/img/p1-2-300x383.jpg " alt="" loading="lazy"
                                            class="w-[70px] h-[70px] object-cover">
                                    </div>
                                </div>
                                <div class="list-select">
                                    <div class="">
                                        <div class="text-[#878787] text-sm mb-2">
                                            <input type="checkbox" checked="checkbox" disabled="disabled"
                                                class="cursor-not-allowed">
                                            <span>This product: Calvin Klein Logo Sweatpants - $29.75 /
                                                <s>$35.00</s> </span>
                                        </div>
                                    </div>
                                    <div class="mb-[10px]">
                                        <div class="text-[#878787] text-sm">
                                            <input type="checkbox" checked="checkbox" name="" id="">
                                            <span>Cyan Boheme - $38.25 / <s>$45.00</s></span>
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
                            <div class="flex justify-start mt-10 mb-5">
                                <a href="" class="px-3 text-sm"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="" class="px-3 text-sm"><i class="fa-brands fa-twitter"></i></a>
                                <a href="" class="px-3 text-sm"><i class="fa-brands fa-pinterest"></i></a>
                                <a href="" class="px-3 text-sm"><i class="fa-brands fa-tumblr"></i></a>
                            </div>
                            <div class="mb-10 flex justify-start hover:text-[#56CFE1]">
                                <a href="../public/detail_product.php" class="flex justify-center items-center">
                                    <span> View details </span>
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>