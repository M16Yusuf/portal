<div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Desa Laksanamekar</h1>
            <p class="text-lg text-grey mb-5">Jl. Raya Batujajar No.270, Laksanamekar, Padalarang, Kabupaten Bandung Barat, Jawa Barat 40553</p>
            <a href="#" class="btn btn-primary btn-split">Google Maps<div class="fab"><span class="mai-location-outline"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="<?= base_url('assets/') ?>img/gbkanan2.png" height="350" alt="">
            </div>
          </div>
        </div>
        <a href="#kontak" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  </header>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <span class="mai-newspaper"></span>
            </div>
            <div class="body">
              <h5 class="text-secondary">Berita</h5>
              <p>Informasi mengenai berita, dan kegiatan Desa Laksanamekar</p>
              <a href="service.html" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <span class="mai-newspaper-outline"></span>
            </div>
            <div class="body">
              <h5 class="text-secondary">Visi & Misi</h5>
              <p>Informasi mengenai visi dan misi Desa Laksanamekar</p>
              <a href="service.html" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <span class="mai-call"></span>
            </div>
            <div class="body">
              <h5 class="text-secondary">Hubungi Kami</h5>
              <p>Informasi mengenai kontak dan lokasi Desa Laksanamekar</p>
              <a href="service.html" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="container">
      <div class="page-banner home-banner" id="kontak">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <span class="subhead">Kantor Desa Laksanamekar</span>
          <h2 class="title-section">Laksanamekar, Kec. Padalarang, Kabupaten Bandung  Barat</h2>
          <div class="divider"></div>

          <p>Desa Laksanamekar mempunyai besar wilayah sebesar ... meliputi .. RW</p>
          <p>Berbatasan dengan desa ....</p>
          <a href="about.html" class="btn btn-primary mt-3">Read More</a>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <iframe width="425" height="430" id="gmap_canvas" src="https://maps.google.com/maps?q=desa%20laksanamekar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <!-- Blog -->
  <div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Berita</div>
        <h2 class="title-section">Baca berita terbaru kami</h2>
        <div class="divider mx-auto"></div>
      </div>

      <div class="row mt-5">
        <?php $i = 1; ?>
            <?php foreach ($berita as $b) : ?>

            <div class="col-lg-4 py-3  wow fadeInUp">
                <div class="card-blog h-100">
                    <div class="header">
                        <div class="post-thumb">
                            <img src="<?= base_url('assets/img/berita/' . $b['image']) ?>" alt="">
                        </div>
                    </div>
                    <div class="body align-items-stretch" >
                        <h3 class="post-title"><a href="<?= base_url('listberita/detail/').$b['id']?>"><?= $b['judul'] ?></a></h3>
                        <div class="post-date">
                            
                            <p><?php $text = $b['isi'];
                                if (strlen($text) > 200) {
                                    $text = substr($text, 0, 200);
                                }
                                echo $text ?> </p>
                        </div>
                        <div class="post-date"> <a href="<?= base_url('listberita/detail/').$b['id']?>"> Baca Selengkapnya..</a></div>
                    
                    <div class="float-left">Oleh : <?= $b['nama']?> </div>
                    </div>
                </div>
            </div>

            <?php if($i++ == 6) : break; ?>
            <?php endif ?>
        <?php endforeach ?>
        

        <div class="col-12 mt-4 text-center wow fadeInUp">
          <a href="<?= base_url('listberita')?>" class="btn btn-primary">Liat lebih banyak </a>
        </div>
      </div>
    </div>
  </div>