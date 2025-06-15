 @extends('Layout.layout1')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/pembelian.css') }}" />\
<link rel="stylesheet" type="text/css" href="{{ asset('css/DetailPengiriman.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/nota.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/pembayaran.css') }}" />
@endsection

@section('main')

 <body class="flex-column">

    <main class="pembelian contentMain">
      <!-- Main content area --> 
      <section class="checkoutSection">
        <!-- Checkout process steps and product details --> 
        <div class="processStepsContainer">
          <div class="stepsBreadcrumb">
            <div class="productDetailContainer">
              <div class="productOverview">
                <div class="productImageContainer">
                  <img class="productImage" src="/assets/Pembelian/coffee_packaging.png" alt="alt text" />
                  <div class="productDescription">
                    <p class="productName">Roastedbean robusta 800gr</p>
                    <p class="productWeight">800 gr</p>
                  </div>
                </div>
                <div class="purchaseDetail">
                  <div class="quantitySelector">
                    <!-- Quantity selector and price --> 
                    <p class="quantityLabel">QTY</p>
                    <p class="quantityValue">1</p>
                  </div>
                  <p class="productPrice">Rp 130.000</p>
                </div>
              </div>
            </div>
          </div>
          <div class="orderSummaryContainer">
            <div class="orderNotesPaymentSection">
              <div class="orderNotesContainer">
                <div class="orderNotesHeader">
                  <p class="orderNotesTitle">Order Notes</p>
                  <button class="expandNotesIcon">+</button>
                </div>
              </div>
              <div class="totalAmountContainer">
                <div class="totalAmountSummary">
                  <p class="totalLabel">TOTAL</p>
                  <div class="totalAmountDetails">
                    <div class="totalQuantity">
                      <p class="totalQuantityLabel">QTY</p>
                      <p class="totalQuantityValue">2</p>
                    </div>
                    <p class="totalPrice">Rp 230.000</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="actionsFooter">
              <!-- Footer with action buttons --> 
              <div class="proceedButtonContainer"><button class="proceedBtn">Selanjutnya</button></div>
              <div class="cancelButtonContainer"><button class="cancelBtn">Batalkan Pemesanan</button></div>
            </div>
          </div>
        </div>
      </section>


       <section class="personalInfoSection">
        <!-- Section containing personal details like name and contact --> 
        <div class="personalInfoContainer">
          <div class="nameContainer">
            <div class="firstNameContainer">
              <div class="firstNameInfoBox_box">
                <span class="firstNameInfoBox">
                  <span class="firstNameInfoBox_span0">Nama depan</span>
                  <span class="firstNameInfoBox_span1">*</span>
                </span>
              </div>
              <div class="color"></div>
            </div>
            <div class="lastNameContainer">
              <div class="lastNameInfoBox_box">
                <span class="lastNameInfoBox">
                  <span class="lastNameInfoBox_span0">Nama belakang</span>
                  <span class="lastNameInfoBox_span1">*</span>
                </span>
              </div>
              <div class="lastNameBlock"><div class="wrapper"></div></div>
            </div>
          </div>
          <div class="phoneNumberContainer">
            <div class="phoneNumberInfoBox_box">
              <span class="phoneNumberInfoBox">
                <span class="phoneNumberInfoBox_span0">Nomor Hp</span>
                <span class="phoneNumberInfoBox_span1">*</span>
              </span>
            </div>
            <div class="block">
              <div class="wrapper1"><div class="info1">+62</div></div>
            </div>
          </div>
          <div class="organizationNameContainer">
            <div class="organizationNameInfo">Nama Instansi</div>
            <div class="block"><div class="wrapper2"></div></div>
          </div>
          <div class="addressContainer">
            <div class="addressInfoBox">
              <div class="deliveryLocationInfoBox_box">
                <span class="deliveryLocationInfoBox">
                  <span class="deliveryLocationInfoBox_span0">Lokasi Pengiriman</span>
                  <span class="deliveryLocationInfoBox_span1">*</span>
                </span>
              </div>
              <div class="deliveryLocationBlock">
                <div class="wrapper3">
                  <div class="wrapper4"><div class="info11">Jalan, Desa, Kecamatan, Kabupaten, Provinsi</div></div>
                  <img class="image" src="/assets/DetailPengiriman/running_human_silhouette.svg" alt="alt text" />
                </div>
              </div>
            </div>
            <div class="postalCodeContainer">
              <div class="postalCodeInfoBox_box">
                <span class="postalCodeInfoBox">
                  <span class="postalCodeInfoBox_span0">Kode Pos</span>
                  <span class="postalCodeInfoBox_span1">*</span>
                </span>
              </div>
              <div class="block"><div class="wrapper5"></div></div>
            </div>
          </div>
          <div class="actionContainer">
            <!-- Container for action buttons like &#x27;proceed&#x27; or &#x27;cancel&#x27; --> 
            <p class="nextStepDescription">
              <!-- TODO --> 
              Selanjutnya
            </p>
            <p class="cancelOrderDescription">
              <!-- TODO --> 
              Batalkan Pemesanan
            </p>
          </div>
        </div>
      </section>

       <section class="contentWrapper">
        <div class="productWrapper">
          <div class="productDetailsWrapper">
            <div class="individualProductBlock">
              <div class="productImageAndDetailsWrapper">
                <div class="productInfoContainer">
                  <div class="productImageContainer">
                    <img class="productImage" src="/assets/Pembayaran/coffee_packaging.png" alt="alt text" />
                    <div class="productDescriptionWrapper">
                      <p class="productName">Roastedbean robusta 500gr</p>
                      <p class="productWeight">500 gr</p>
                    </div>
                    <div class="productQuantityAndPriceWrapper">
                      <div class="quantityWrapper">
                        <p class="quantityLabel">QTY</p>
                        <p class="quantityNumber">1</p>
                      </div>
                      <p class="productPrice">Rp 100.000</p>
                    </div>
                  </div>
                </div>
                <div class="additionalProductBlock">
                  <div class="additionalProductImageContainer">
                    <img class="additionalProductImage" src="/assets/Pembayaran/coffee_packaging.png" alt="alt text" />
                    <div class="additionalProductDescriptionWrapper">
                      <p class="additionalProductName">Roastedbean robusta 500gr</p>
                      <p class="additionalProductWeight">500 gr</p>
                    </div>
                    <div class="additionalProductQuantityAndPriceWrapper">
                      <div class="additionalQuantityWrapper">
                        <p class="additionalQuantityLabel">QTY</p>
                        <p class="additionalQuantityNumber">1</p>
                      </div>
                      <p class="additionalProductPrice">Rp 100.000</p>
                    </div>
                  </div>
                </div>
                <div class="totalSummaryBlock">
                  <div class="totalSummaryWrapper">
                    <p class="totalLabel">TOTAL</p>
                    <div class="totalQuantityAndPriceWrapper">
                      <div class="totalQuantityWrapper">
                        <p class="totalQuantityLabel">QTY</p>
                        <p class="totalQuantityNumber">2</p>
                      </div>
                      <p class="totalPrice">Rp 230.000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="userInformationWrapper">
              <div class="userInformationBlock">
                <div class="userDetailsWrapper">
                  <div class="userNameWrapper">
                    <p class="userNameLabel">Nama</p>
                    <p class="userNameSeparator">:</p>
                    <p class="userName">Fahreza</p>
                  </div>
                  <div class="userPhoneWrapper">
                    <p class="userPhoneLabel">No Hp</p>
                    <p class="userPhoneSeparator">:</p>
                    <p class="userPhoneNumber">+62 8906 6627 832</p>
                  </div>
                  <div class="userAddressWrapper">
                    <p class="userAddressLabel">Alamat</p>
                    <p class="userAddressSeparator">:</p>
                    <p class="userAddress">Jl. Melati No. 10, Desa Sumberrejo, Kec. Kebonagung, Kab. Pacitan, Prov. Jawa Timur</p>
                  </div>
                  <div class="userPostalCodeWrapper">
                    <p class="userPostalCodeLabel">Kode Pos</p>
                    <p class="userPostalCodeSeparator">:</p>
                    <p class="userPostalCode">57213</p>
                  </div>
                </div>
              </div>
              <div class="paymentMethodBlock">
                <div class="paymentMethodWrapper">
                  <p class="paymentMethodLabel">Metode Pembayaran</p>
                  <div class="paymentIconsWrapper">
                    <img class="paymentIcon" src="/assets/Pembayaran/company_logo.png" alt="alt text" />
                    <img class="paymentIcon1" src="/assets/Pembayaran/right_arrow.svg" alt="alt text" />
                  </div>
                </div>
              </div>
              <p class="payButton">
                <!-- TODO --> 
                Bayar
              </p>
            </div>
          </div>
          <p class="viewReceiptButton">
            <!-- TODO --> 
            Lihat Nota
          </p>
          <p class="cancelOrderButton">
            <!-- TODO --> 
            Batalkan Pemesanan
          </p>
        </div>
      </section>

       <section class="contentWrapper">
        <div class="productWrapper">
          <div class="productDetailsWrapper">
            <div class="individualProductBlock">
              <div class="productImageAndDetailsWrapper">
                <div class="productInfoContainer">
                  <div class="productImageContainer">
                    <img class="productImage" src="/assets/Pembayaran/coffee_packaging.png" alt="alt text" />
                    <div class="productDescriptionWrapper">
                      <p class="productName">Roastedbean robusta 500gr</p>
                      <p class="productWeight">500 gr</p>
                    </div>
                    <div class="productQuantityAndPriceWrapper">
                      <div class="quantityWrapper">
                        <p class="quantityLabel">QTY</p>
                        <p class="quantityNumber">1</p>
                      </div>
                      <p class="productPrice">Rp 100.000</p>
                    </div>
                  </div>
                </div>
                <div class="additionalProductBlock">
                  <div class="additionalProductImageContainer">
                    <img class="additionalProductImage" src="/assets/Pembayaran/coffee_packaging.png" alt="alt text" />
                    <div class="additionalProductDescriptionWrapper">
                      <p class="additionalProductName">Roastedbean robusta 500gr</p>
                      <p class="additionalProductWeight">500 gr</p>
                    </div>
                    <div class="additionalProductQuantityAndPriceWrapper">
                      <div class="additionalQuantityWrapper">
                        <p class="additionalQuantityLabel">QTY</p>
                        <p class="additionalQuantityNumber">1</p>
                      </div>
                      <p class="additionalProductPrice">Rp 100.000</p>
                    </div>
                  </div>
                </div>
                <div class="totalSummaryBlock">
                  <div class="totalSummaryWrapper">
                    <p class="totalLabel">TOTAL</p>
                    <div class="totalQuantityAndPriceWrapper">
                      <div class="totalQuantityWrapper">
                        <p class="totalQuantityLabel">QTY</p>
                        <p class="totalQuantityNumber">2</p>
                      </div>
                      <p class="totalPrice">Rp 230.000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="userInformationWrapper">
              <div class="userInformationBlock">
                <div class="userDetailsWrapper">
                  <div class="userNameWrapper">
                    <p class="userNameLabel">Nama</p>
                    <p class="userNameSeparator">:</p>
                    <p class="userName">Fahreza</p>
                  </div>
                  <div class="userPhoneWrapper">
                    <p class="userPhoneLabel">No Hp</p>
                    <p class="userPhoneSeparator">:</p>
                    <p class="userPhoneNumber">+62 8906 6627 832</p>
                  </div>
                  <div class="userAddressWrapper">
                    <p class="userAddressLabel">Alamat</p>
                    <p class="userAddressSeparator">:</p>
                    <p class="userAddress">Jl. Melati No. 10, Desa Sumberrejo, Kec. Kebonagung, Kab. Pacitan, Prov. Jawa Timur</p>
                  </div>
                  <div class="userPostalCodeWrapper">
                    <p class="userPostalCodeLabel">Kode Pos</p>
                    <p class="userPostalCodeSeparator">:</p>
                    <p class="userPostalCode">57213</p>
                  </div>
                </div>
              </div>
              <div class="paymentMethodBlock">
                <div class="paymentMethodWrapper">
                  <p class="paymentMethodLabel">Metode Pembayaran</p>
                  <div class="paymentIconsWrapper">
                    <img class="paymentIcon" src="/assets/Pembayaran/company_logo.png" alt="alt text" />
                    <img class="paymentIcon1" src="/assets/Pembayaran/right_arrow.svg" alt="alt text" />
                  </div>
                </div>
              </div>
              <p class="payButton">
                <!-- TODO --> 
                Bayar
              </p>
            </div>
          </div>
          <p class="viewReceiptButton">
            <!-- TODO --> 
            Lihat Nota
          </p>
          <p class="cancelOrderButton">
            <!-- TODO --> 
            Batalkan Pemesanan
          </p>
        </div>
      </section>


        <section class="orderSummarySection">
        <!-- This section contains the order summary details. --> 
        <div class="orderDetailsContainer">
          <article class="saveInvoiceMsg">
            <!-- TODO --> 
            Simpan Resi
          </article>
          <div class="orderInfoContainer">
            <div class="customerDetailsWrapper">
              <div class="identityBlock">
                <div class="billingInfoContainer">
                  <div class="invoiceLabel">Nota Pesanan / Faktur</div>
                  <div class="customerNameContainer">
                    <div class="recipientLabel">Ananda:</div>
                    <div class="recipientName">Fahreza Zaidna Isha</div>
                  </div>
                  <p class="recipientAddress">Jl. Melati No. 10, Desa Sumberrejo, Kec. Kebonagung, Kab. Pacitan, Prov. Jawa Timur / +62 8906 6627 832</p>
                </div>
                <div class="orderDetailsSection">
                  <!-- Contains individual order details. --> 
                  <div class="orderNumberWrapper">
                    <div class="orderNumberLabel">Nomor Pesanan</div>
                    <div class="orderNumberValue">#000123</div>
                  </div>
                  <div class="orderDateWrapper">
                    <div class="orderDateLabel">Di order pada</div>
                    <div class="orderDateValue">December 7, 2023.</div>
                  </div>
                  <div class="paymentDateWrapper">
                    <div class="paymentDateLabel">Terbayar pada</div>
                    <div class="paymentDateValue">December 7, 2023.</div>
                  </div>
                </div>
              </div>
              <div class="itemDetailsContainer">
                <!-- This container holds details about items in the order. --> 
                <div class="itemsListWrapper">
                  <!-- List of items --> 
                  <div class="itemLabel">Barang</div>
                  <div class="itemName1">RoastedBean Robusta 500gr</div>
                  <div class="itemName2">RoastedBean Robusta 800gr</div>
                </div>
                <div class="itemPricingDetails">
                  <div class="pricingHeader">
                    <!-- Contains headers for item pricing details. --> 
                    <div class="quantityLabel">Qty.</div>
                    <div class="priceLabel">Price</div>
                    <div class="totalLabel">Total</div>
                  </div>
                  <div class="itemDetailsRow1">
                    <div class="itemQuantity1">1</div>
                    <div class="itemPrice1">100.000</div>
                    <div class="itemTotal1">100.000,00</div>
                  </div>
                  <div class="itemDetailsRow2">
                    <div class="itemQuantity2">1</div>
                    <div class="itemPrice2">130.000</div>
                    <div class="itemTotal2">130.000,00</div>
                  </div>
                </div>
              </div>
              <div class="totalPaymentValueWrapper">
                <div class="totalPaymentLabel">Total Pembayaran</div>
                <p class="totalPaymentValue">IDR 230.000,00</p>
              </div>
              <div class="trackingInfoMsg">!! Pantau Pengiriman melalui web jnt dengan menggunakan nomor pesanan</div>
            </div>
          </div>
        </div>
      </section>

    </main>

  </body>
  
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/pembelian.js') }}"></script>
@endsection