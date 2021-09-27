<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrGhzfM5bFJ4ZvmM9t-BF2ON3C56aiKz4&callback=initMap&libraries=&v=weekly" async></script>
<script src="<?php echo base_url('assets/js/mapapi.js') ?>"> </script>

<!-- body -->
<div class="container card p-1">

    <div class="row">
        <!--The div map -->
        <div id="map" class="col-12 col-md-8 "></div>
        <!-- end map -->

        <!-- Informasi -->
        <div class="col-12 col-md-4 p-4">
            <h4 class="font-weight-bold">Pengaduan</h4>
            <p>Anda dapat juga menyampaikan pengaduan melalui salah satu kontak dibawah ini.</p>
            <i class="fas fa-envelope me-3"></i> Email kami : <?php echo $kontak['1']['isi'] ?><br>
            <i class="fas fa-phone me-3"></i> Telpon : <?php echo $kontak['2']['isi'] ?><br>
            <i class="fab fa-whatsapp"></i> Whatsapp :<?php echo $kontak['3']['isi'] ?><br>
            <hr>

            <h4 class="font-weight-bold">Kantor Desa Laksanamekar</h4>
            <p class="p-0">Alamat : Jl. Raya Batujajar No.270, Laksanamekar, Padalarang, Kabupaten Bandung Barat, Jawa Barat 40553.</p>
            <i class="far fa-clock"></i> Jam Operasional : <?php echo $kontak['0']['isi'] ?><br>
            <a href="https://www.google.com/maps/place/Kantor+Kepala+Desa+Laksanamekar/@-6.8825935,107.501757,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e4e79b10b24f:0xef6af5613ac05bcd!8m2!3d-6.8825925!4d107.5039195?hl=ID" target="#" class="btn btn-outline-dark">
                <i class="fas fa-map-marker-alt"></i> Google Map</a>
        </div>
        <!-- end informasi -->
    </div>

</div>
<!-- end body -->