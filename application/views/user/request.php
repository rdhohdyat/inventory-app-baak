<div class="p-3 ml-12 md:ml-3 w-full ">
<div class="mb-3">
        <div class=" rounded grid grid-cols-3 gap-4">
            <div class="shadow-md p-4 bg-white rounded flex items-center gap-2 border ">
                <i class='bx bx-check-circle text-3xl w-12 bg-green-100 text-green-500 p-2 rounded'></i>
                <div>
                    <p class="text-gray-500 text-sm sm:text-base">Di Setujui</p>
                    <h1 class="text-sm xl:text-2xl font-semibold">4</h1>
                </div>
            </div>
            <div class="shadow-md p-4 bg-white rounded flex items-center gap-2 border ">
                <i class='bx bxs-truck text-3xl bg-yellow-100 w-12 text-yellow-500 p-2 rounded'></i>
                <div>
                    <p class="text-gray-500 text-sm sm:text-base">Proses</p>
                    <h1 class="text-sm xl:text-2xl font-semibold">5</h1>
                </div>
            </div>
            <div class="shadow-md p-4 bg-white rounded flex items-center gap-2 border ">
                <i class='bx bx-x-circle text-3xl w-12 bg-red-100 text-red-500 p-2 rounded'></i>
                <div>
                    <p class="text-gray-500 text-sm sm:text-base">Ditolak</p>
                    <h1 class="text-sm xl:text-2xl font-semibold">3</h1>
                </div>
            </div>


        </div>
    </div>
    <div class="bg-white rounded shadow-md border">

        <div class="p-4  block sm:flex items-center justify-between border-b border-gray-200 ">
     
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-all" aria-describedby="checkbox-1" type="checkbox"
                                                class="w-4 h-4 border-gray-300 rounded bg-gray-50  checked:bg-sky-400 focus:ring-sky-400 focus:bg-sky-400">
                                            <label for="checkbox-all" class="sr-only">checkbox</label>
                                        </div>
                                    </th>

                                    <th scope="col" class="p-4 text-xs font-medium text-left  uppercase">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left  uppercase">
                                        Barang
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left  uppercase">
                                        Jumlah
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left  uppercase">
                                        Status
                                    </th>

                                    <th scope="col" class="p-4 text-xs font-medium text-center  uppercase">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white " id="tableBody">
                                <?php for ($i = 0; $i < 5; $i++) { ?>
                                    <tr class="hover:bg-gray-100 ">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="" aria-describedby="checkbox-1" type="checkbox"
                                                    class="w-4 h-4 border-gray-300 rounded bg-gray-50  checked:bg-sky-400 focus:ring-sky-400 focus:bg-sky-400">
                                                <label for="" class="sr-only">checkbox</label>
                                            </div>
                                        </td>

                                        <td class="p-2 text-sm font-medium text-gray-900">02 November 2023</td>
                                        <td class="p-2 text-sm font-medium text-gray-900">Kertas Putih</td>
                                        <td class="p-2 text-sm font-medium text-gray-900"><span class="ml-6">1</span></td>
                                        <td class="p-2 text-sm font-medium text-gray-900">
                                            <span
                                                class="bg-amber-300 text-white shadow-md p-1 px-3 rounded">Proses</span>
                                        </td>

                                        <td class="p-4 space-x-2 text-center">
                                            <button id="batal" type="button"
                                                data-modal-target="batal-modal" data-modal-toggle="batal-modal"
                                                class="inline-flex items-center px-3 py-1 text-sm font-medium  rounded shadow-md bg-white border">
                                                <i class="bx bx-edit"></i>
                                                Batalkan
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <div class=" bottom-0 right-0 items-center w-full p-4 flex sm:justify-between border-t">
            <div class="flex items-center mb-4 sm:mb-0">
                <a href="#" class="inline-flex justify-center p-1  rounded cursor-pointer">

                </a>
                <a href="#" class="inline-flex justify-center p-1 mr-2  rounded cursor-pointer">

                </a>
                <span class="text-sm font-normal ">Showing <span class="font-semibold text-gray">1-5</span> of <span
                        class="font-semibold text-gray">100</span></span>
            </div>
            <div class="flex items-center space-x-3">
                <a href="#"
                    class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium shadow-md  rounded bg-white border ">
                    Previous
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium shadow-md border rounded bg-white ">
                    Next

                </a>
            </div>
        </div>
    </div>



    <!-- Delete Product Modal -->
    <div id="batal-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded shadow ">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 rounded text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="batal-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 ">Yakin ingin membatalkan request?</h3>
                        <button data-modal-hide="batal-modal"
                            class="bg-amber-400 text-white shadow-md  focus:outline-none  font-medium rounded text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                            Ya, lanjutkan
                        </button>
                        <button data-modal-hide="batal-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 rounded border shadow-md text-sm font-medium px-5 py-2.5 ">Tidak,
                            batal</button>
                    </div>
                </div>
            </div>
        </div>
      




    
</div>