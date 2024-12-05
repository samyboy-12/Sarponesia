@extends('Layout.layout1')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PerlengkapanProduksi.css') }}" />
@endsection

@section('scripts')
    <script src="{{ asset('js/alat.js') }}"></script>
@endsection

@section('main')
    <main class="perlengkapan-produksi-peralatan main">
        
        <div class="content">
            <section class="productDisplaySection">
                <!-- Main section presenting available technology and standard tools for production needs. -->
                <div class="flexColumnContainer1">
                    <div class="contentBox" style="--src:url(../assets/52ac4412589eed03b032824c5cf655ee.png)">
                        <div class="flexColumnLeft">
                            <img class="productImage" src="./assets/Logonav.png" alt="alt text" />
                            <h1 class="heroTitle">
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
                        <h1 class="collectionTitle">
                            Koleksi <br /> Peralatan
                        </h1>
                        <img class="collectionImage1" src="./assets/8e9fea1b8a7fdf8624fb52e2029b0e9b.png" alt="alt text" />
                        <img class="collectionImage2" src="./assets/72bea5dde9f30a594561a50179b622de.png" alt="alt text" />
                        <img class="collectionImage3" src="./assets/cca51b517e85462a1c8723f979f724bc.png" alt="alt text" />
                        <img class="collectionImage4" src="./assets/5604653d3c0c08d66641946c81d2770a.svg" alt="alt text" />
                    </div>
                </div>
            </section>
        </div>
            
            <div class="content">
            <section class="productShowcaseSection">
                <div class="flexColumn">
                    <div class="imageGalleryBox" style="--src:url(../assets/ef3cc9fc9238eea224153fd0ec0cd7df.png)">
                        <img class="productImage1" src="./assets/5f3b809bb2409b7c0185f133527664d9.svg" alt="alt text" />
                        <img class="productImage2" src="./assets/98e3c0649dede088ca34495d37ceac3a.svg" alt="alt text" />
                        <h1 class="heroTitle1">Temukan Produk Incaran Anda dengan Harga Incaran</h1>
                    </div>
                    <div class="categoryTitlesRow">
                        <a href="{{ route('peralatan', ['category' => 'Peralatan Pasca Panen']) }}" class="EquipmentTitle {{ $selectedCategory == 'Peralatan Pasca Panen' ? 'active' : '' }}">Peralatan Pasca Panen</a>
                        <a href="{{ route('peralatan', ['category' => 'Peralatan Produksi']) }}" class="EquipmentTitle {{ $selectedCategory == 'Peralatan Produksi' ? 'active' : '' }}">Peralatan Produksi</a>
                        <a href="{{ route('peralatan', ['category' => 'Peralatan Pengolahan']) }}" class="EquipmentTitle {{ $selectedCategory == 'Peralatan Pengolahan' ? 'active' : '' }}">Peralatan Pengolahan</a>
                        <a href="{{ route('peralatan', ['category' => 'Peralatan Cafe']) }}" class="EquipmentTitle {{ $selectedCategory == 'Peralatan Cafe' ? 'active' : '' }}">Peralatan Cafe</a>
                    </div>
                    
                    <div id="productGrid" class="productGridRow1">
                        @forelse ($products as $product)
                            <div class="productCardContainer1" style="--src: url('{{ asset($product->Image_path) }}');">                                
                                <div class="productCardColumn1">
                                    <div class="productDetailsColumn1">
                                        <h1 class="productName1">{{ $product->Name }}</h1>
                                        <div class="productImagesRow1">
                                            <img class="productImage3" src="./assets/53c09f2a9aef6c14293a6e89b8653c38.svg" alt="alt text" />
                                            <img class="productImage4" src="./assets/0a09b3d46571c2c9d90253c110322ad9.svg" alt="alt text" />
                                            <img class="productImage5" src="./assets/df958eb8c05397b0fbee75e1219854c2.svg" alt="alt text" />
                                            <img class="productImage6" src="./assets/1d24987103bdeefeffeda0205961857b.svg" alt="alt text" />
                                            <img class="productImage7" src="./assets/c3cfee882e6f1d0a0accb9cdc00e89d9.svg" alt="alt text" />
                                        </div>
                                        <h1 class="productPrice1">Rp {{ number_format($product->Price, 2, ',', '.') }}</h1>
                                    </div>
                                    <button class="buyButton1" onclick="window.location.href='{{ $product->Link_tokped }}'">Beli</button>
                                </div>
                            </div>
                        @empty
                            <p style="color: black">Tidak ada produk yang tersedia dalam kategori ini.</p>
                        @endforelse
                    </div>
            </div>
        </div>
    </main>
@endsection
