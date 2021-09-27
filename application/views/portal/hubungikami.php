<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrGhzfM5bFJ4ZvmM9t-BF2ON3C56aiKz4&callback=initMap&libraries=&v=weekly" async></script>
<script src="<?php echo base_url('assets/js/mapapi.js') ?>"> </script>

<!-- body -->
<di class="container card p-1">
    <!-- Informasi -->
    <div class="row">
        <!--The div map -->
        <div id="map" class="col-8"></div>
        <!-- end map -->

        <div class="col-4 pxy-2">
            <h4 class="font-weight-bold">Pengaduan</h4>
            <p>Anda dapat juga menyampaikan pengaduan melalui salah satu kontak dibawah ini.</p>
            Email kami : <?php echo $kontak['1']['isi'] ?><br>
            Telpon : <?php echo $kontak['2']['isi'] ?><br>
            Whatsapp :<?php echo $kontak['3']['isi'] ?><br>
            <hr>

            <h4 class="font-weight-bold">Kantor Desa Laksanamekar</h4>
            <p class="p-0">Alamat : Jl. Raya Batujajar No.270, Laksanamekar, Padalarang, Kabupaten Bandung Barat, Jawa Barat 40553.</p>
            Jam Operasional : <?php echo $kontak['0']['isi'] ?>

        </div>
    </div>

    <!-- end informasi -->
</di>
<!-- end body -->