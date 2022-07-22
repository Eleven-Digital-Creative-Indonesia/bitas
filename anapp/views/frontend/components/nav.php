<?php 
    $segment = $this->uri->segment('1');
?>
<div class="navigation">
    <ul>
        <li class="<?php echo ($segment == 'home' || $segment == '') ? "active" : " "; ?>"><a href="<?= base_url() ?>"><?php echo lang('menu_home'); ?></a></li>
        <li class="<?php echo ($segment == 'about') ? "active" : " "; ?>"><a href=<?php echo base_url('about'); ?>><?php echo lang('menu_about'); ?></a></li>
        <li class="<?php echo ($segment == 'product') ? "active" : " "; ?>"><a href=<?php echo base_url('product'); ?>><?php echo lang('menu_product'); ?></a></li>
        <li class="<?php echo ($segment == 'services') ? "active" : " "; ?>"><a href=<?php echo base_url('services'); ?>><?php echo lang('menu_services'); ?></a></li>
        <li class="<?php echo ($segment == 'contact') ? "active" : " "; ?>"><a href=<?php echo base_url('contact'); ?>><?php echo lang('menu_contact'); ?></a></li>
        <li class="navigation__cta"><a href="" class="btn btn__primary" target="_blank">Lihat Penawaran</a></li>
    </ul>
</div>