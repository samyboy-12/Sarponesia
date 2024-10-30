@extends('layout')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PerlengkapanProduksi.css') }}" />
@endsection

@section('main')
    <main class="perlengkapan-produksi-peralatan main">

        <section class="productDisplaySection">
            <!-- Main section presenting available technology and standard tools for production needs. -->
            <div class="flexColumnContainer1">
                <div class="contentBox" style="--src:url(../assets/52ac4412589eed03b032824c5cf655ee.png)">
                    <div class="flexColumnLeft">
                        <img class="productImage" src="./assets/Logonav.png" alt="alt text" />
                        <h1 class="heroTitle">
                            <!-- Primary title describing the available tools. -->
                            Tersedia Alat Berteknologi dan Terstandar untuk Melengkapi Kebutuhan Produksi Anda
                        </h1>
                        <div class="flexRowColors">
                            <div class="colorBox1"></div>
                            <div class="colorBox2"></div>
                            <div class="colorBox3"></div>
                            <div class="colorBox4"></div>
                            <div class="colorBox5"></div>
                        </div>
                    </div>
                </div>
                <div class="flexRowCollection">
                    <!-- Row displaying the collection image and products. -->
                    <h1 class="collectionTitle">
                        <!-- Title indicating the collection of tools. -->
                        Koleksi
                        <br />
              Peralatan
                    </h1>
                    <img class="collectionImage1" src="./assets/8e9fea1b8a7fdf8624fb52e2029b0e9b.png" alt="alt text" />
                    <img class="collectionImage2" src="./assets/72bea5dde9f30a594561a50179b622de.png" alt="alt text" />
                    <img class="collectionImage3" src="./assets/cca51b517e85462a1c8723f979f724bc.png" alt="alt text" />
                    <img class="collectionImage4" src="./assets/5604653d3c0c08d66641946c81d2770a.svg" alt="alt text" />
                </div>
            </div>
        </section>

        <section class="productShowcaseSection">
            <!-- This section displays various products available for purchase. -->
            <div class="flexColumn">
                <div class="imageGalleryBox" style="--src:url(../assets/ef3cc9fc9238eea224153fd0ec0cd7df.png)">
                    <!-- This box contains images and a hero title. -->
                    <img class="productImage1" src="./assets/5f3b809bb2409b7c0185f133527664d9.svg" alt="alt text" />
                    <img class="productImage2" src="./assets/98e3c0649dede088ca34495d37ceac3a.svg" alt="alt text" />
                    <h1 class="heroTitle1">Temukan Produk Incaran Anda dengan Harga Incaran</h1>
                </div>
                <div class="categoryTitlesRow">
                    <!-- This row displays the titles for different product categories. -->
                    <h2 class="postHarvestEquipmentTitle">peralatan pasca panen </h2>
                    <h2 class="productionEquipmentTitle">peralatan produksi</h2>
                    <h2 class="processingEquipmentTitle">peralatan pengolahan </h2>
                    <h2 class="cafeEquipmentTitle">peralatan cafe</h2>
                </div>
                <div class="productGridRow1">
                    <!-- This row contains the first set of products presented in a grid layout. -->
                    <div class="productCardContainer1" style="--src:url(../assets/aa349cdb01a81cbacf19ad5f8725dc82.png)">
                        <div class="productCardColumn1">
                            <div class="productDetailsColumn1">
                                <h1 class="productName1">Nama Produk</h1>
                                <div class="productImagesRow1">
                                    <img class="productImage3" src="./assets/53c09f2a9aef6c14293a6e89b8653c38.svg" alt="alt text" />
                                    <img class="productImage4" src="./assets/0a09b3d46571c2c9d90253c110322ad9.svg" alt="alt text" />
                                    <img class="productImage5" src="./assets/df958eb8c05397b0fbee75e1219854c2.svg" alt="alt text" />
                                    <img class="productImage6" src="./assets/1d24987103bdeefeffeda0205961857b.svg" alt="alt text" />
                                    <img class="productImage7" src="./assets/c3cfee882e6f1d0a0accb9cdc00e89d9.svg" alt="alt text" />
                                </div>
                                <h1 class="productPrice1">Rp 000,00</h1>
                            </div>
                            <button class="buyButton1">
                                <!-- TODO -->
                                Beli
                            </button>
                        </div>
                    </div>
                    <div class="productCardContainer2" style="--src:url(../assets/fff1606fb9922d6676a46ca193d7bbaa.png)">
                        <div class="productCardColumn2">
                            <div class="productDetailsColumn2">
                                <h1 class="productName2">Nama Produk</h1>
                                <div class="productImagesRow2">
                                    <img class="productImage8" src="./assets/53c09f2a9aef6c14293a6e89b8653c38.svg" alt="alt text" />
                                    <img class="productImage9" src="./assets/0a09b3d46571c2c9d90253c110322ad9.svg" alt="alt text" />
                                    <img class="productImage10" src="./assets/df958eb8c05397b0fbee75e1219854c2.svg" alt="alt text" />
                                    <img class="productImage11" src="./assets/1d24987103bdeefeffeda0205961857b.svg" alt="alt text" />
                                    <img class="productImage12" src="./assets/c3cfee882e6f1d0a0accb9cdc00e89d9.svg" alt="alt text" />
                                </div>
                                <h1 class="productPrice2">Rp 000,00</h1>
                            </div>
                            <button class="buyButton2">
                                <!-- TODO -->
                                Beli
                            </button>
                        </div>
                    </div>
                    <div class="productCardContainer3" style="--src:url(../assets/8933ff8b11332de008c66360c69c3991.png)">
                        <div class="productCardColumn3">
                            <div class="productDetailsColumn3">
                                <h1 class="productName3">Nama Produk</h1>
                                <div class="productImagesRow3">
                                    <img class="productImage13" src="./assets/53c09f2a9aef6c14293a6e89b8653c38.svg" alt="alt text" />
                                    <img class="productImage14" src="./assets/0a09b3d46571c2c9d90253c110322ad9.svg" alt="alt text" />
                                    <img class="productImage15" src="./assets/df958eb8c05397b0fbee75e1219854c2.svg" alt="alt text" />
                                    <img class="productImage16" src="./assets/1d24987103bdeefeffeda0205961857b.svg" alt="alt text" />
                                    <img class="productImage17" src="./assets/c3cfee882e6f1d0a0accb9cdc00e89d9.svg" alt="alt text" />
                                </div>
                                <h1 class="productPrice3">Rp 000,00</h1>
                            </div>
                            <button class="buyButton3">
                                <!-- TODO -->
                                Beli
                            </button>
                        </div>
                    </div>
                </div>
                <div class="productGridRow2">
                    <!-- This row contains the second set of products presented in a grid layout. -->
                    <div class="productCardContainer4" style="--src:url(../assets/4ec6f1669330071c91423b2ad86a7ced.png)">
                        <div class="productCardColumn4">
                            <div class="productDetailsColumn4">
                                <h1 class="productName4">Nama Produk</h1>
                                <div class="productImagesRow4">
                                    <img class="productImage18" src="./assets/53c09f2a9aef6c14293a6e89b8653c38.svg" alt="alt text" />
                                    <img class="productImage19" src="./assets/0a09b3d46571c2c9d90253c110322ad9.svg" alt="alt text" />
                                    <img class="productImage20" src="./assets/df958eb8c05397b0fbee75e1219854c2.svg" alt="alt text" />
                                    <img class="productImage21" src="./assets/1d24987103bdeefeffeda0205961857b.svg" alt="alt text" />
                                    <img class="productImage22" src="./assets/c3cfee882e6f1d0a0accb9cdc00e89d9.svg" alt="alt text" />
                                </div>
                                <h1 class="productPrice4">Rp 000,00</h1>
                            </div>
                            <button class="buyButton4">
                                <!-- TODO -->
                                Beli
                            </button>
                        </div>
                    </div>
                    <div class="productCardContainer5" style="--src:url(../assets/16a93c2366a2aa653703055f2fa7ea95.png)">
                        <div class="productCardColumn5">
                            <div class="productDetailsColumn5">
                                <h1 class="productName5">Nama Produk</h1>
                                <div class="productImagesRow5">
                                    <img class="productImage23" src="./assets/53c09f2a9aef6c14293a6e89b8653c38.svg" alt="alt text" />
                                    <img class="productImage24" src="./assets/0a09b3d46571c2c9d90253c110322ad9.svg" alt="alt text" />
                                    <img class="productImage25" src="./assets/df958eb8c05397b0fbee75e1219854c2.svg" alt="alt text" />
                                    <img class="productImage26" src="./assets/1d24987103bdeefeffeda0205961857b.svg" alt="alt text" />
                                    <img class="productImage27" src="./assets/c3cfee882e6f1d0a0accb9cdc00e89d9.svg" alt="alt text" />
                                </div>
                                <h1 class="productPrice5">Rp 000,00</h1>
                            </div>
                            <button class="buyButton5">
                                <!-- TODO -->
                                Beli
                            </button>
                        </div>
                    </div>
                    <div class="productCardContainer6" style="--src:url(../assets/3e86c698f01606caea300a11b332de7f.png)">
                        <div class="productCardColumn6">
                            <div class="productDetailsColumn6">
                                <h1 class="productName6">Nama Produk</h1>
                                <div class="productImagesRow6">
                                    <img class="productImage28" src="./assets/53c09f2a9aef6c14293a6e89b8653c38.svg" alt="alt text" />
                                    <img class="productImage29" src="./assets/0a09b3d46571c2c9d90253c110322ad9.svg" alt="alt text" />
                                    <img class="productImage30" src="./assets/df958eb8c05397b0fbee75e1219854c2.svg" alt="alt text" />
                                    <img class="productImage31" src="./assets/1d24987103bdeefeffeda0205961857b.svg" alt="alt text" />
                                    <img class="productImage32" src="./assets/c3cfee882e6f1d0a0accb9cdc00e89d9.svg" alt="alt text" />
                                </div>
                                <h1 class="productPrice6">Rp 000,00</h1>
                            </div>
                            <button class="buyButton6">
                                Beli
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



@endsection