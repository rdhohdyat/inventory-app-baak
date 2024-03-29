<div class="p-3 ml-12 md:ml-3 w-full ">
    <div class="grid grid-cols-3 gap-3">
        <div class="col-span-3">
            <div class="bg-white shadow-md flex items-center border rounded">
                <img src="<?= base_url('dist/check.svg') ?>" class="w-[200px] h-[200px]  ">
                <div>
                    <h1 class="text-sky-400">Hi,
                        <?= $user['nama'] ?>
                    </h1>
                    <h1 class="text-2xl">Selamat datang di <span class="text-amber-400 font-medium">Inventaris
                            BAAK</span>
                    </h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id, aliquid.</p>
                </div>
            </div>

        </div>

        <div class="col-span-3">
            <div class="grid grid-cols-3 gap-3">
                <div class="bg-white shadow-md p-2 rounded border mt-2 flex flex-col items-center justify-evenly">
                    <i class='bx bx-check-circle text-6xl'></i>
                    <p>Permintaan diterima</p>
                    <span class="text-3xl">4</span>
                </div>
                <div class="bg-white shadow-md p-2 rounded border mt-2 flex flex-col items-center justify-evenly">
                    <i class='bx bxs-truck text-6xl'></i>
                    <p>Permintaan dalam proses</p>
                    <span class="text-3xl">5</span>
                </div>
                <div class="bg-white shadow-md p-2 rounded border mt-2  flex flex-col items-center justify-evenly">
                    <i class='bx bx-x-circle text-6xl'></i>
                    <p>Permintaan ditolak</p>
                    <span class="text-3xl">3</span>
                </div>
            </div>

        </div>

        <div class=" col-span-2">
            <div class="grid grid-cols-1 gap-4">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="notif-card bg-white shadow-md p-2 rounded border">

                        <div class="flex text-sm justify-between items-center">
                            <div class="flex gap-4 items-center">
                                <i class='bx bx-history'></i>
                                <div>
                                    <h1 class="text-base font-semibold">Permintaan barang</h1>
                                    <p>Permintaan spidol, 4 buah</p>
                                </div>

                            </div>
                            <div class="p-3 py-1 bg-green-400 text-white rounded">Diterima</div>
                            <div class="w-48">20 November 2023</div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <?php $progres = ['Pengajuan ke baak', 'Menunggu Verifikasi dari BAAK', 'Permintaan diterima'] ?>

        <div class="col-span-1">
            <div class="bg-white shadow-md p-2 border rounded pb-6">
                <div>
                    <h1 class="font-medium text-center mb-3">Aktivitas Terbaru</h1>

                    <ul>
                        <?php foreach ($progres as $p): ?>

                            <li>
                                <div class="p-3">
                                    <div class="flex items-center gap-2 mb-6">
                                        <i class='bx bx-check-circle text-green-400'></i>
                                        <?= $p ?>
                                    </div>

                                </div>
                            </li>

                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>