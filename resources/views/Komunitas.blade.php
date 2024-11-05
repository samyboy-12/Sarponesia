@extends('layout')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/komunitas.css') }}" />
@endsection

@section('main')
<main class="komunitas main">
      <section class="section2" style="--src:url(/assets/28b30d6491e59b10a0cba419347578e3.png)"><h2 class="hero_title1">Komunitas Kami</h2></section>

      <section class="communitySection">
        <!-- Community engagement and event information section --> 
        <div class="mainContainer">
          <div class="featureGrid">
            <!-- Feature highlights grid with icons and titles --> 
            <div class="eventInfo">
              <img class="eventIcon" src="/assets/ab3ffe861c0828028d9af5ab6a99878e.png" alt="alt text" />
              <p class="eventTitle">Informasi Event</p>
            </div>
            <div class="workshopInfo">
              <img class="workshopIcon" src="/assets/e27a636091f72729424071f30845b295.png" alt="alt text" />
              <p class="workshopTitle">Workshop Online</p>
            </div>
            <div class="recipeInfo">
              <img class="recipeIcon" src="/assets/200ee4767321e67e1846a964df2178b7.png" alt="alt text" />
              <p class="recipeTitle">Berbagi Resep</p>
            </div>
          </div>
          <div class="joinWrapper" style="--src:url(/assets/47eee4225984a44350d36f7cdd44affa.png)">
            <div class="ctaContainer">
              <p class="joinTitle">Bergabung Komunitas Kami</p>
              <button class="joinBtn">
                <!-- TODO --> 
                Bergabung
              </button>
            </div>
          </div>
          <article class="ideaExchangeLeft">
            <img class="collaborationImg" src="/assets/65873b03c4cf7efd743d9f9895f1ca8e.png" alt="alt text" />
            <div class="contentWrapper">
              <p class="sectionTitle">Bersama Bertukar Ide</p>
              <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#x27;s standard dummy text ever since Lorem Ipsum is simply dummy text of the printing</p>
            </div>
          </article>
          <article class="ideaExchangeRight">
            <div class="contentWrapper1">
              <p class="sectionTitle1">Bersama Bertukar Ide</p>
              <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#x27;s standard dummy text ever since Lorem Ipsum is simply dummy text of the printing</p>
            </div>
            <img class="collaborationImg" src="/assets/051a5acb19ca2d01c554213a5d613f60.png" alt="alt text" />
          </article>
        </div>
      </section>

    </main>
@endsection