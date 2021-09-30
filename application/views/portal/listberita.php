<div class="page-section">
    <div class="container">
    <nav aria-label="Breadcrumb" class="mb-4">
        <ul class="breadcrumb p-0 mb-0 bg-transparent">
          <li class="breadcrumb-item"><a href="<?= base_url('overview')?>">Beranda</a></li>
          <li class="breadcrumb-item active">List Berita</li>
        </ul>
      </nav>
      <div class="row">
        <div class="col-lg">
          <form action="" class="form-search-blog">
          <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari berita.." name="keyword1">
                    <div class="input-group-append" id="button-addon4">
                        <a class="btn btn-outline-primary" href="<?= base_url('listberita') ?>"><i class="fas fa-redo"></i></a>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
          </form>
        </div>
      </div>

      <div class="row my-5">
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
        <?php endforeach ?>
        
        

      </div>


    </div>
  </div>
