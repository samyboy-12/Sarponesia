@extends('Layout.layout1')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}" />
@endsection

@section('main')
<main class="cart mainContent">
    <section class="productOverviewSection">
        <div class="breadcrumbContainer">
            <div class="breadcrumbList">
                <span class="catalogText"><a href="{{ route('katalog') }}">Katalog</a></span>
                <span class="breadcrumbSeparator">></span>
                <span class="categoryText">Kopi</span>
                <span class="breadcrumbSeparator">></span>
                <span class="cartText">Keranjang</span>
            </div>
            <div class="productSection">
                <div class="productDetailCard">
                    <div class="selectionOption">
                        <div class="selectionHeader">
                            <div class="selectProductBox_box">
                                <span class="selectProductBox">
                                    <span class="selectProductBox_span0">Pilih </span>
                                    <span class="selectProductBox_span1" id="selectedCount">0</span>
                                </span>
                            </div>
                            <p class="removeOptionText" id="removeSelected">Hapus</p>
                        </div>
                    </div>
                    <div class="productCard" id="cartItems">
                        <!-- Cart items will be rendered here by JavaScript -->
                    </div>
                </div>
                <div class="summarySection">
                    <div class="summaryContainer">
                        <div class="summaryDetail">
                            <p class="summaryHeader">Ringkasan Belanja</p>
                            <div class="totalItemsLabel">Jumlah</div>
                            <div class="totalItemsContainer">
                                <div class="totalItemsCount" id="totalItems">0</div>
                                <div class="itemUnit">Pcs</div>
                            </div>
                            <div class="subtotalContainer">
                                <div class="subtotalLabel">Subtotal</div>
                                <div class="subtotalAmount" id="subtotal">Rp 0</div>
                            </div>
                        </div>
                        <button class="purchaseButton login-btn" id="checkoutButton" disabled>Beli</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/cart.js') }}"></script>
@endsection