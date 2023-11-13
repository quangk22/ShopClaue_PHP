<div class="cart bg-[rgba(0,0,0,.8)]  h-[100vh] w-[100vw] fixed z-50  hidden" id="cart_mini">
    <div class="w-[320px]  block h-full absolute right-0 bg-white translate-x-64 transition-all ease-in-out duration-500"
        id="cart_mini2">
        <div class="flex w-full bg-[#222]  leading-10 text-white p-3 text-base tracking-wider">
            <div class="cursor-pointer px-3 hover:bg-slate-700 hover:rounded-full hover:rotate-180 transition-all ease-in duration-200 "
                id="close_cart"><i class="fa-solid fa-x "></i></div>
            <h3 class="flex justify-center items-center w-full font-bold uppercase">mini cart</h3>
        </div>
        <div class="p-5">
            <div class="h-full ">
                <ul class="overflow-y-auto h-auto max-h-[24rem]">
                    <?php foreach ($itemsList as $key => $items_list) { ?>
                        <li class="flex mt-3">
                            <a href="#" class="flex text-[13px] relative">
                                
                                <div
                                    class="before:w-[70px] before:bg-[rgba(0,0,0,.5)] before:content-['X'] before:flex before:justify-center before:items-center before:text-white before:h-full before:absolute before:top-0 before:left-0 before:opacity-0 before:hover:opacity-100 before:" onclick="delete_items( <?php echo $items_list['id'] ?>)">
                                    <img src="./media/img/<?php echo $items_list['image'] ?>.jpg" alt="" loading="lazy" class="w-[70px] mr-2 ">
                                </div>

                                <span class="block whitespace-nowrap">
                                    <h1 class="text-sm font-poppins">
                                        <?php echo $items_list['name'] ?>
                                    </h1>
                                    <span class="flex text-xs text-[#878787]">
                                        <span>
                                            <span>1</span>
                                            x
                                            <span>$
                                                <?php echo $items_list['price'] ?>.00
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="flex justify-between items-center my-5 text-lg">
                <p class="font-bold">Subtotal:</p>
                <span>$80.00</span>
            </div>
            <div class="flex justify-center items-center w-full">
                <div class="w-full text-white text-sm">
                    <a href="../public/view_cart.php">
                        <p
                            class="mb-3 bg-[#222]  rounded-full flex justify-center items-center py-2 uppercase font-normal hover:bg-[#56cfe1]">
                            view cart</p>
                    </a>
                    <a href="../public/check_out.php">
                        <p
                            class="mb-3 bg-[#222] rounded-full flex justify-center items-center py-2 uppercase font-normal hover:bg-[#56cfe1]">
                            checkout</p>
                    </a>
                    <a href="../public/product.php">
                        <p
                            class="bg-[#222] rounded-full flex justify-center items-center py-2 uppercase font-normal hover:bg-[#56cfe1]">
                            continue shopping</p>
                    </a>
                </div>
            </div>


        </div>

    </div>
</div>