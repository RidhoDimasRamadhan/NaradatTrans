
@extends('Template/base')
<script src="https://kit.fontawesome.com/08692cf6f2.js" crossorigin="anonymous"></script>

@section('content')

<section class="d-flex justify-content-center justify-content-lg-between section" style="margin-top: 7rem;">
    <div class="container-fluid text-md-start bg-Grey">
        <div class="d-lg-flex d-sm-block justify-content-lg-between">
                <div class="article-left">
                    <h3>Profil PO NaradaTrans</h3>
                    <h2><span class="text-brown">Sejarah</span> NaradaTrans</h2>
                    <p class="pt-3">NaradaTrans adalah perusahaan otobis yang khusus melayani pariwisata dan antar jemput karyawan dalam negeri. NaradaTrans didirikan pada tahun 2004 di Jakarta.</p>
                    <p>Semua armada NaradaTrans menggunakan armada bis MERCEDES BENZ (Big Bus), Bus Medium (Mitsubishi) yang sudah terkenal akan standar kenyamanan dan keamanannya di bidang otomotif. Selain itu, kami juga menyediakan Mini Bus 15 seats menggunakan kendaraan seperti Isuzu Elf dan Toyota Commuter.</p>
                    <p>Seiring dengan berjalannya waktu, NaradaTrans telah banyak melayani perusahaan-perusahaan swasta lokal dan asing, BUMN, sekolah-sekolah swasta, negeri maupun internasional, yayasan-yayasan sosial, dan acara-acara keluarga seperti perkawinan dan mudik.</p>
                    <p>Komitmen NaradaTrans adalah memberikan layanan transportasi yang handal, nyaman, dan aman bagi setiap pelanggan kami. Dengan armada yang terjamin kualitasnya, kami siap memberikan pengalaman perjalanan yang memuaskan dan mengantarkan Anda dengan tepat waktu ke tujuan.</p>
                </div> 
            <div class="">
                <img src="{{ URL('images/img1.png') }}" alt="img" class="img1">
            </div>
        </div>
    </div>
</section>

<section class="d-flex justify-content-center justify-content-lg-between" style="margin-bottom: 2rem;">
    <div class="container-fluid text-md-start">
        <div class="d-lg-flex d-sm-block justify-content-lg-between">
            <div class="article-img">
                <img src="{{ URL('images/img2.png') }}" alt="img" class="img2">
                <img src="{{ URL('images/img3.png') }}" alt="img" class="img3">
            </div>  
            <div class="article-right">
                <h3>Layanan Kami</h3>
                <h2>Kenyamanan, Keselamatan <span class="text-brown">Penumpang Prioritas Kami</span></h2>
                <p class="pt-3">NaradaTrans menawarkan perjalanan yang nyaman dengan armada bis yang dilengkapi AC, DVD, LCD (TV layar datar), karaoke, dan reclining seats. Kami menjadi pionir "BUS THEATRE" di Indonesia, menghadirkan hiburan selama perjalanan. Keselamatan penumpang adalah prioritas utama kami, dengan setiap armada dilengkapi palu pemecah kaca, pintu darurat, dan tabung pemadam kebakaran. Pengemudi berpengalaman di bidang pariwisata menjamin kenyamanan dan keselamatan Anda.</p>
            </div>
        </div>
    </div>
</section>

<section class="d-flex justify-content-center justify-content-lg-between section">
  <div class="container-fluid text-md-start">
    <div class="d-flex justify-content-center py-5">
      <div class="row ribbon mb-4">
        <div class="col-md-3 col-lg-7 col-xl-3">
          <img src="{{ URL('images/img4.png') }}" alt="img" class="img-ribbon">
        </div>
        <div class="col-md-3 col-lg-7 col-xl-3 text-white text-ribbon">
          <h1 class="fw-bold">Anda Tertarik?</h1>
          <p class="">Silahkan hubungi kami dan download e-brochure untuk informasi lebih lanjut.</p>
        </div>
        <div class="col-md-3 col-lg-7 col-xl-6 btn-ribbon">
          <button type="button" class="btn-kontak text-white">KONTAK</button>
          <button type="button" class="btn-download text-white">Download Brosur</button>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="text-lg-start bg-footer text-muted">

  <!-- Section: Links  -->
  <section class="p-4 d-flex justify-content-center justify-content-lg-between">
    <div class="container-fluid text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-lg-3 mt-sm-1">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-lg-auto mb-4">
          <!-- Content -->
          <img src="{{ URL('images/Logo.png') }}" alt="Logo" class="logo">
          <div class="address">
            <h6 class="fw-bold text-white mt-4">Pool Bus dan Kantor Pusat</h6>
            <p class="text-white pe-sm-5">
              Jl. Jatimulya Raya No.1, Jatimulya, Kec. Tambun Selatan, Kota Bekasi, Jawa Barat 17510
            </p>
          </div>

          <div class="contact mb-4">
            <div class="d-inline-block">
              <p class="text-white">
                <img src="{{ URL('images/phoneIco.png') }}" alt="" class="bg-light ico">
                085311301830
              </p>
            </div>

            <div class="d-inline-block mail">
              <p class="text-white">
                <img src="{{ URL('images/mailIco.png') }}" alt="" class="bg-light ico">
                naradatrans@gmail.com
              </p>
            </div>

            <div class="">
              <p class="text-white">
                <img src="{{ URL('images/webIco.png') }}" alt="" class="bg-light ico">
                naradatrans.co.id
              </p>
            </div>
          </div>

          <div class="d-flex gap-4">
            <div class="">
              <img src="{{ URL('images/Twiter.png') }}" alt="" class="bg-light socialIco">
            </div>
            <div>
              <img src="{{ URL('images/Fb.png') }}" alt="" class="bg-light socialIco">
            </div>
            <div>
              <img src="{{ URL('images/igIco.png') }}" alt="" class="bg-light IGIco">        
            </div>
          </div>

          <div class="mt-4 text-light copyright">
            <p>© 2023 Team NaradaTrans, All Rights Reserved</p>
          </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-white mb-4">
            Menu Utama
          </h6>
          <div class="d-flex justify-content-lg-between border-bottom mb-3 line">
            <a href="#" class="text-white pb-3">Home</a>
          </div>
          <div class="d-flex justify-content-lg-between border-bottom mb-3 line">
            <a href="#" class="text-white pb-3">Profil</a>
          </div>
          <div class="d-flex justify-content-lg-between border-bottom mb-3 line">
            <a href="#" class="text-white pb-3">Kontak</a>
          </div>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-white mb-4">
            Jam Operasional
          </h6>
          <div class="d-flex justify-content-lg-between border-bottom mb-3">
            <span class="text-white pb-3">Senin - Jumat :</span>
            <span class="text-white">09.00 pm - 13.00 pm</span>
          </div>
          <div class="d-flex justify-content-lg-between border-bottom mb-3">
            <span class="text-white pb-3 me-md-2">Sabtu:</span>
            <span class="text-white">09.00 pm - 13.00 pm</span>
          </div>
          <div class="d-flex justify-content-lg-between border-bottom mb-3">
            <span class="text-white pb-3 me-md-2">Minggu :</span>
            <div class="libur">
              <span class="text-white">Libur</span>
            </div>
          </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  
</footer>

@endsection