<style>
                    .swiper-container {
                        width: 100%;
                        height: auto;
                    }
                </style>

<div class="swiper-container">

    <div class="swiper-wrapper h-auto mb-4">  

        <div class="swiper-slide col-12 py-3">
            <p class="text-center">This is some text within a card body.</p>
        </div>
        <div class="swiper-slide col-12 py-3">
            <p class="text-center">This is some text within a card body.</p>
        </div>
        <div class="swiper-slide col-12 py-3">
            <p class="text-center">This is some text within a card body.</p>
        </div>
        <div class="swiper-slide col-12 py-3">
            <p class="text-center">This is some text within a card body.</p>
        </div>
        <div class="swiper-slide col-12 py-3">
            <p class="text-center">This is some text within a card body.</p>
        </div>
        <div class="swiper-slide col-12 py-3">
            <p class="text-center">This is some text within a card body.</p>
        </div>
        <div class="swiper-slide col-12 py-3">
            <p class="text-center">This is some text within a card body.</p>
        </div>
        <div class="swiper-slide col-12 py-3">
            <p class="text-center">This is some text within a card body.</p>
        </div>
        <div class="swiper-slide col-12 py-3">
            <p class="text-center">This is some text within a card body.</p>
        </div>


    </div>
    <div class="swiper-pagination"></div>
  </div>

                <script type="module">
  import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js'

  const swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
    });
</script>