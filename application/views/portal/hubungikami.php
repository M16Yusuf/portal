<div class="page-section">
    <div class="container">
    <nav aria-label="Breadcrumb" class="mb-4">
        <ul class="breadcrumb p-0 mb-0 bg-transparent">
          <li class="breadcrumb-item"><a href="<?= base_url('overview')?>">Beranda</a></li>
          <li class="breadcrumb-item active">Hubungi Kami</li>
        </ul>
    </nav>
    <div class="container-fluid mt-4">
      <div class="maps-container">
        <iframe width="1078" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=kantor%20desa%20laksanamekar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
    </div>
</div>
    <div class="container mt-3">
      <div class="row text-center align-items-center">
        <div class="col-lg-4 py-3">
          <div class="display-4 text-center text-primary"><span class="mai-location-outline"></span></div>
          <p class="mb-3 font-weight-medium text-lg">Alamat</p>
          <p class="mb-0 text-secondary">Jl. Raya Batujajar No.270, Laksanamekar, Padalarang, Kabupaten Bandung Barat, Jawa Barat 40553</p>
        </div>
        <div class="col-lg-4 py-3">
          <div class="display-4 text-center text-primary"><span class="mai-call-outline"></span></div>
          <p class="mb-3 font-weight-medium text-lg">Phone</p>
          <p class="mb-0"><a href="#" class="text-secondary"><?= $kontak['2']['isi']?></a></p>
          <p class="mb-0"><a href="#" class="text-secondary"><?= $kontak['3']['isi']?></a></p>
        </div>  
        <div class="col-lg-4 py-3">
          <div class="display-4 text-center text-primary"><span class="mai-mail-outline"></span></div>
          <p class="mb-3 font-weight-medium text-lg">Alamat Email</p>
          <p class="mb-0"><a href="#" class="text-secondary"><?= $kontak['1']['isi']?></a></p>
        </div>
      </div>
    </div>
    </div>
  