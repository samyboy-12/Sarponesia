@extends('Layout.layout1')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}" />
@endsection

@section('main')
<main>
    <div class="content">
        <section class="section2" style="--src:url(/assets/91f73f1bd709d1f38b71ca0974c71011.png)">
            <h2 class="hero_title1">Tumbuh Bersama Sarponesia</h2>
        </section>
    </div>

    <div class="content">
        <section class="contactSection">
            <!-- Contact information and message form section --> 
            <div class="contactContainer">
                <div class="contactHeader">
                    <h2 class="contactTitle">Kontak Kami</h2>
                    <p class="contactSubtitle">Hubungi kami dan beri tahu kami apa yang bisa dibantu</p>
                </div>
                <div class="contactInfoContainer">
                    <!-- Contact information cards --> 
                    <article class="locationCard">
                        <div class="locationContent">
                            <img class="locationIcon" src="/assets/3f25ba6090b6e6ca0e63f0e34da17d8d.svg" alt="alt text" />
                            <h3 class="locationTitle">Lokasi Kami</h3>
                            <p class="locationAddress">
                                jln mt haryono no 15 pacitan
                                <br />
                            </p>
                        </div>
                    </article>
                    <article class="phoneCard">
                        <div class="phoneContent">
                            <img class="phoneIcon" src="/assets/579fce016b0bb53f89e625000776c8ec.svg" alt="alt text" />
                            <h3 class="phoneTitle">Telephone</h3>
                            <a class="phoneNumber" href="https://wa.me/6283890958930">083890958930</a>
                        </div>
                    </article>
                    <article class="hoursCard">
                        <div class="hoursContent">
                            <img class="hoursIcon" src="/assets/df60c106e50b9da6f261db1362dca972.svg" alt="alt text" />
                            <h3 class="hoursTitle">Jam Buka</h3>
                            <p class="hoursDetails">
                                Senin - sabtu
                                <br />
                                08.00-23.00
                            </p>
                        </div>
                    </article>
                </div>
                <div class="messageFormContainer">
                    <!-- Message form section --> 
                    <div class="messageFormWrapper">
                        <img class="messageFormImage" src="/assets/374080a366e80cc5ed26e9f7ed32abc0.png" alt="alt text" />
                        <div class="messageFormContent">
                            <div class="formInputContainer">
                                <textarea class="formInput1"></textarea>
                                <textarea class="formInput2"></textarea>
                                <textarea class="formInput3"></textarea>
                                <textarea class="formTextarea"></textarea>
                            </div>
                            <button class="sendMessageBtn">
                                <!-- TODO --> 
                                Kirim Pesan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
