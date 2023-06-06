<x-layout>


    {{-- <div class="container">
        <div class="row mt-5">
            
        </div>
    </div> --}}

    {{-- PRESENTAZIONE --}}
    <div class="container contprofile my-4" id="presentazione">
        <div class="row align-content-center">
            <div class="col-12 col-md-5 d-flex align-content-center">

                <img src="/media/profilepic.jpg" class="profilepic ms-3" alt="">
            </div>

            <div class="col-12 col-md-7">

              <h2 class="mt-3 text-center me-3">Cinzia Loconsole</h2>
              <h4 class="mt-1 text-center me-3">Full stack developer junior</h4>
              <p class="my-3 text-center me-3">In seguito ad un coding bootcamp di Aulab ho avuto la possibilità di formarmi nell'ambito dello sviluppo web.
                <br>
                Ritengo di avere una propensione verso il backend e ritengo di avere delle buone capacità logiche applicabili nel problem solving.
                Inoltre prediligo il lavoro in team, soprattutto se finalizzato all'approfondimento delle conoscenze e competenze personali nel campo delle nuove tecnologie.</p>                
            </div>
        </div>
    </div>

    {{-- STACK TECNOLOGICO --}}

    <div class="container">
        <div class="row mt-5 d-flex justify-content-center" id="stack">
            <h3 class="text-center">Technology stack:</h3>
        </div>
    </div>

    <div class="container">
        <div class="row">
            {{-- <div class="col-12 col-md-6 d-flex align-content-center"> --}}
            <div class="col-3 icon d-flex justify-content-center">
              <img src="/media/html.png" alt="html" class="icon">
            </div>

            <div class="col-3 icon d-flex justify-content-center">
              <img src="/media/css.png" alt="css" class="icon">
            </div>

            <div class="col-3 icon d-flex justify-content-center">
              <img src="/media/js.png" alt="javascript" class="icon iconphp">
            </div>

            <div class="col-3 icon d-flex justify-content-center">
              <img src="/media/PHPlogo.png" alt="PHP" class="icon">
            </div>

            <div class="col-3 icon d-flex justify-content-center">
              <img src="/media/gitbash.png" alt="gitbash" class="icon">
            </div>

            <div class="col-3 icon d-flex justify-content-center">
              <img src="/media/laravel.png" alt="laravel" class="icon">
            </div>

            <div class="col-3 icon d-flex justify-content-center">
              <img src="/media/Nodejslogo.png" alt="nodejs" class="icon">
            </div>

            <div class="col-3 icon d-flex justify-content-center">
              <img src="/media/npm.png" alt="npm" class="icon">
            </div>

            <div class="col-3 d-flex justify-content-center">
              <img src="/media/figma.png" alt="figma" class="iconfigma icon">
            </div>

            <div class="col-3 icon d-flex justify-content-center">
              <img src="/media/laravel-livewire-removebg-preview.png" alt="livewire" class="iconlive">
            </div>

            <div class="col-3 icon d-flex justify-content-center mb-5">
              <img src="/media/mailtrap.png" alt="mailtrap" class="icon iconmailtrap">
            </div>

        </div>
    </div>


    {{-- SWIPER --}}
    <div class="container d-flex justify-content-center"  id="swiper">
      <div class="row justify-content-center my-3">
          <div class="col-12">
            <h2>My projects</h2>
          </div>
      </div>
    </div>

   

    <div class="container" >
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-6">

              <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/media/cvproject.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/media/astrosponge.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://picsum.photos/202" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon bg-info" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon bg-info" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            

            </div>
        </div>
    </div>

    


</x-layout>