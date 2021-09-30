<div class="page-section pt-5">
    <div class="container">
      <nav aria-label="Breadcrumb">
        <ul class="breadcrumb p-0 mb-0 bg-transparent">
          <li class="breadcrumb-item"><a href="<?= base_url('overview')?>">Beranda</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('listberita')?>">Berita</a></li>
          <li class="breadcrumb-item active"><?= $berita['judul']?></li>
        </ul>
      </nav>
      
      <div class="row">
        <div class="col-lg-8">
          <div class="blog-single-wrap">
            <div class="header">
              <div class="post-thumb">
                <img src="<?= base_url('assets/img/berita/' . $berita['image']) ?>" alt="">
              </div>
            </div>
            <h1 class="post-title"><?= $berita['judul']?></h1>
            <div class="post-meta">
              <div class="post-date">
                <span class="icon">
                  <span class="mai-time-outline"></span>
                </span> <?= $berita['timestamp']?>
              </div>
            </div>
            <div class="post-content">
            <?= $berita['isi']?>
            </div>
          </div>

        </div>
        <div class="col-lg-4">
          <div class="widget">

            <!-- Widget recent post -->
            <div class="widget-box">
              <h4 class="widget-title">Recent Post</h4>
              <div class="divider"></div>
              
              <?php $i = 1 ; ?>
              <?php foreach ($recent as $b) : ?>
              <div class="blog-item">
                        <a class="post-thumb" href="">
                            <img src="<?= base_url('assets/img/berita/' . $b['image']) ?>" alt="">
                        </a>
                        <div class="content">
                            <h6 class="post-title"><a href="<?= base_url('listberita/detail/').$b['id']?>"><?= $b['judul']?></a></h6>
                        <div class="meta">
                            <a href="#"><span class="mai-person"></span> <?= $b['nama']?></a>
                    </div>
                  </div>
                </div>
                <?php if($i++ == 4) : break; ?>
            <?php endif ?>
                <?php endforeach ?>
</div>
</div>
</div>
</div>
</div>
