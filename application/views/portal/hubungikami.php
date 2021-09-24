<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrGhzfM5bFJ4ZvmM9t-BF2ON3C56aiKz4&callback=initMap&libraries=&v=weekly" async></script>
<script src="<?php echo base_url('assets/js/mapapi.js') ?>"> </script>

<!-- body -->

<!--The div map -->
<div id="map"></div>
<!-- end map -->

<!-- Informasi -->
<?php echo $kontak['0']['isi'] ?>
<?php echo $kontak['1']['isi'] ?>
<?php echo $kontak['2']['isi'] ?>
<?php echo $kontak['3']['isi'] ?>
<!-- end informasi -->

<!-- end body -->