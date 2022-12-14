@extends("layouts.customer.main")

@section("content")
<div class="wrapper" x-data="form()">
    <div class="container">
        <form action="">
            <h3 class="third-heading">Halaman detail tanaman</h3>
            <div class="mt-[16px] md:mt-[32px] lg:mt-[48px] flex flex-col md:flex-row gap-[24px] lg:gap-[80px]">
                <div class="md:max-w-[500px] w-full">
                    <img src="/example-images/tanaman1.png" alt=""
                        class="w-full  aspect-square object-cover rounded-[10px]">
                </div>
                <div>
                    <h3 class="third-heading font-normal">Monstera</h3>
                    <p class="text-gray-3 mt-[12px]">
                        Monstera is a genus of 49 species of flowering plants in the arum family, Araceae, native to
                        tropical regions of the Americas.
                    </p>
                    <p class="mt-[20px] font-xl-responsive text-gray-2">
                        Harga
                    </p>
                    <p class="mt-2 third-heading font-light">
                        Rp <span x-text="moneyFormat.format(harga)"></span> <span
                            class="text-[12px] md:text-[16px] lg:text-[25px]">/pcs /30
                            hari</span>
                    </p>
                    <div class="my-4">
                        <hr class="text-gray-4">
                    </div>
                    <div class="mt-[20px]">
                        <p class=" font-xl-responsive text-gray-2">
                            Jumlah
                        </p>
                        <div class="w-fit flex gap-[8px] items-center">
                            <div class="mt-2 shadow-md flex items-center py-2 px-1 rounded-[8px] ">
                                <button type="button" class="mi text-gray-3 cursor-pointer hover:opacity-80 "
                                    x-on:click="plusJumlah()">add</button>
                                <input type="number" readonly
                                    class="focus:outline-none w-[60px] text-center font-xl-responsive hide-arrow"
                                    x-bind:value="jumlah" />
                                <button type="button" class="mi text-gray-3 cursor-pointer hover:opacity-80 "
                                    x-on:click="minJumlah()">remove</button>

                            </div>
                            <div>
                                <p>pcs</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[40px] ">
                        <p class="font-xl-responsive text-gray-2">
                            Durasi meminjam
                        </p>
                        <div class="w-fit flex gap-[8px] items-center">
                            <div class="mt-2 shadow-md flex items-center py-2 px-1 rounded-[8px] ">
                                <button type="button" class="mi text-gray-3 cursor-pointer hover:opacity-80 "
                                    x-on:click="plusDurasi()">add</button>
                                <input type="number" readonly
                                    class="focus:outline-none w-[60px] text-center font-xl-responsive hide-arrow"
                                    x-bind:value="durasi" />
                                <button type="button" class="mi text-gray-3 cursor-pointer hover:opacity-80 "
                                    x-on:click="minDurasi()">remove</button>
                            </div>
                            <div>
                                <p>hari</p>
                            </div>
                        </div>
                    </div>
                    <div class="my-8">
                        <hr class="text-gray-4">
                    </div>
                    <div class="flex gap-2">
                        <div><span class="mi text-gray-4">location_on</span></div>
                        <div class="text-gray-3">
                            <p class="font-xl-responsive text-grey-4">Lokasi</p>
                            <p class="font-lg-responsive text-grey-3">Jakarta</p>
                        </div>
                    </div>
                    <div class="flex gap-2 mt-[24px]">
                        <div><span class="mi text-gray-4">monitor_weight</span></div>
                        <div class="text-gray-3">
                            <p class="font-xl-responsive text-grey-4">Berat</p>
                            <p class="font-lg-responsive text-grey-3">2 kg</p>
                        </div>
                    </div>
                    <div class="flex gap-2 mt-[24px]">
                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 34 20"
                                fill="none">
                                <path
                                    d="M30.2222 16.3636C30.2222 18.3636 28.5222 20 26.4444 20H7.55556C5.47778 20 3.77778 18.3636 3.77778 16.3636V3.63636H0V0H34V3.63636H30.2222V16.3636Z"
                                    fill="#C4C4C4" />
                            </svg></div>
                        <div class="text-gray-3">
                            <p class="font-xl-responsive text-grey-4">Jenis Pot</p>
                            <p class="font-lg-responsive text-grey-3">Pot Plastik</p>
                        </div>
                    </div>


                    <div class="flex gap-2 mt-[24px]">
                        <div><span class="mi text-gray-4">light_mode</span></div>
                        <div class="text-gray-3">
                            <p class="font-xl-responsive text-grey-4">Intensitas Cahaya</p>
                            <p class="font-lg-responsive text-grey-3">Tinggi</p>
                        </div>
                    </div>
                    <div class="flex gap-2 mt-[24px]">
                        <div><span class="mi text-gray-4">water_drop</span></div>
                        <div class="text-gray-3">
                            <p class="font-xl-responsive text-grey-4">Kebutuhan Air</p>
                            <p class="font-lg-responsive text-grey-3">Sedang</p>
                        </div>
                    </div>
                    <div class="my-8">
                        <hr class="text-gray-4">
                    </div>
                    <div>
                        <p class="mt-[20px] font-lg-responsive text-gray-2">
                            Total
                        </p>
                        <p class="mt-2 third-heading font-light">
                            Rp <span x-text="moneyFormat.format(harga * jumlah)"></span>
                        </p>
                    </div>
                    <div class="mt-[40px]">
                        <div x-data="{ show: false }">
                            <button class="btn-center bg-primary lg:w-[348px] text-white" type="button"
                                x-on:click="show=true">Sewa</button>
                            <div class="relative z-10  modal" aria-labelledby="modal-title" role="dialog"
                                aria-modal="true" x-show="show">

                                <div class="fixed inset-0 bg-gray-5 bg-opacity-75 transition-opacity"></div>

                                <div class="fixed z-10 inset-0 overflow-y-auto">
                                    <div class="flex justify-center  min-h-full items-center">
                                        <div @click.away="show = false"
                                            class="flex-shrink-0 max-w-[1000px] w-full  p-2 ">
                                            <div class="bg-white p-[24px] md:p-[40px] lg:p-[60px] rounded-[10px]">
                                                <p class="font-xl text-center">
                                                    Item Layanan telah ditambahkan
                                                </p>
                                                <div class="w-full flex justify-center mt-[40px]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="189" height="189"
                                                        viewBox="0 0 189 189" fill="none">
                                                        <path
                                                            d="M133.946 60.9609H124.053C121.901 60.9609 119.855 61.9945 118.589 63.7664L85.4299 109.751L70.4112 88.9102C69.1455 87.1594 67.1205 86.1047 64.9479 86.1047H55.0549C53.6838 86.1047 52.8823 87.6656 53.6838 88.7836L79.9666 125.234C80.5875 126.1 81.406 126.806 82.3543 127.293C83.3026 127.781 84.3533 128.035 85.4194 128.035C86.4854 128.035 87.5362 127.781 88.4844 127.293C89.4327 126.806 90.2512 126.1 90.8721 125.234L135.296 63.6398C136.118 62.5219 135.317 60.9609 133.946 60.9609Z"
                                                            fill="#28B67E" />
                                                        <path
                                                            d="M94.5 0C42.3141 0 0 42.3141 0 94.5C0 146.686 42.3141 189 94.5 189C146.686 189 189 146.686 189 94.5C189 42.3141 146.686 0 94.5 0ZM94.5 172.969C51.1734 172.969 16.0312 137.827 16.0312 94.5C16.0312 51.1734 51.1734 16.0312 94.5 16.0312C137.827 16.0312 172.969 51.1734 172.969 94.5C172.969 137.827 137.827 172.969 94.5 172.969Z"
                                                            fill="#28B67E" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="flex flex-col md:flex-row gap-[24px] md:gap-[150px] md:justify-between mt-[40px]">
                                                    <a href="/product/keranjang">
                                                        <button
                                                            class="btn-center bg-white border-2  border-primary  text-primary lg:w-[348px]"
                                                            type="button" x-on:click="show=true">Lihat
                                                            Keranjang</button>
                                                    </a>
                                                    <button class="btn-center bg-primary lg:w-[348px] text-white"
                                                        type="button" x-on:click="show=true">Sewa</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@section("script")

<script>
    function form() {
      return {
        harga: 10000,
        jumlah: 0,
        durasi: 0,
        moneyFormat : Intl.NumberFormat('en-US'),
      
       handleTotal(){
        let money = Intl.NumberFormat('en-US');
        this.total = money.format(this.jumlah * this.harga);
       },
        plusJumlah() {
          this.jumlah++;
          this.handleTotal();
        },
        minJumlah() {
          if(this.jumlah > 0){
            this.jumlah--;
            this.handleTotal();
          };
        },
        plusDurasi() {
          this.durasi++;
          
        },
        minDurasi() {
          if(this.durasi > 0){
            this.durasi--;
          };
        }
      };
    }
</script>
@endsection
@endsection