<?php 
    $segment = $this->uri->segment('1');
?>
<div class="navigation">
    <ul>
        <li class="<?php echo ($segment == 'home' || $segment == '') ? "active" : " "; ?>"><a href="<?= base_url() ?>">Beranda</a></li>
        <li class="<?php echo ($segment == 'about') ? "active" : " "; ?>"><a href=<?php echo base_url('about'); ?>>Tentang Kami</a></li>
        <li class="<?php echo ($segment == 'product') ? "active" : " "; ?>"><a href=<?php echo base_url('product'); ?>>Produk</a></li>
        <li class="<?php echo ($segment == 'services') ? "active" : " "; ?>"><a href=<?php echo base_url('services'); ?>>layanan</a></li>
        <li class="<?php echo ($segment == 'contact') ? "active" : " "; ?>"><a href=<?php echo base_url('contact'); ?>>Hubungi Kami</a></li>
        <li class="navigation__cta"><a href="" class="btn btn__primary" target="_blank">Lihat Penawaran</a></li>
    </ul>
</div>