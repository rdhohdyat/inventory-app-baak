<div class="w-full ml-12 sm:ml-0 p-3 bg-white ">
    <div class="w-full  mb-3  p-2 rounded">
        <div class="items-center justify-between block sm:flex ">
            <div class="flex items-center mb-4 sm:mb-0">
                <form class="sm:pr-3" action="#" method="post" autocomplete="off">
                    <label for="products-search" class="sr-only">Search</label>
                    <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                        <input type="text" name="email" id="products-search"
                            class="bg-gray-50 border  text-gray-900 sm:text-sm rounded-lg shadow-md  block w-full p-2.5 border-gray-300 focus:ring-sky-400 focus:border-sky-400"
                            placeholder="Cari history...">
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-2 p-2">

        <?php for ($i = 0; $i < 10; $i++) { ?>
            <div class="notif-card bg-white shadow-md p-4 rounded border max-w-[80%]">
                <div class="flex text-sm justify-between items-center">
                    <div class="flex gap-4 items-center">
                        <?php if ($i % 2 == 0) { ?>
                            <div class="bg-green-100 p-1 flex items-center rounded">
                                <i class='bx bx-check-circle text-green-500'></i>
                            </div>
                        <?php } else { ?>
                            <div class="bg-red-100 p-1 flex items-center rounded">
                                <i class='bx bx-x-circle text-red-500'></i>
                            </div>
                        <?php } ?>
                        <div>
                            <h1 class="text-base font-medium">Permintaan barang : Permintaan 4 buah spidol</h1>
                            <div class="flex items-center gap-2 text-sm text-gray-500">
                                <i class='bx bx-calendar '></i>
                                <span>20 November 2023</span>
                            </div>
                        </div>
                    </div>
                    <i class='bx bx-dots-vertical-rounded' ></i>
                </div>
            </div>
        <?php } ?>
    </div>
</div>