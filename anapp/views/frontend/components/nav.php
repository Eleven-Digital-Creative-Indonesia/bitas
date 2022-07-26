<?php 
    $segment    = $this->uri->segment('1');
    $home_list  = $this->Model_Home->get_home_detail();
?>
<div class="navigation">
    <ul>
        <li class="<?php echo ($segment == 'home' || $segment == '') ? "active" : " "; ?>"><a href="<?= base_url() ?>"><?php echo lang('menu_home'); ?></a></li>
        <?php if(!empty( $home_list)) : ?>
            <?php if($home_list['aboutuspage']->status == 1): ?>
                <li class="<?php echo ($segment == 'about') ? "active" : " "; ?>"><a href=<?php echo base_url('about'); ?>><?php echo lang('menu_about'); ?></a></li>
            <?php endif; ?>
            <?php if($home_list['productpage']->status == 1): ?>
            <li class="<?php echo ($segment == 'product') ? "active" : " "; ?>"><a href=<?php echo base_url('product'); ?>><?php echo lang('menu_product'); ?></a></li>
            <?php endif; ?>
            <?php if($home_list['servicepage']->status == 1): ?>
            <li class="<?php echo ($segment == 'services') ? "active" : " "; ?>"><a href=<?php echo base_url('services'); ?>><?php echo lang('menu_services'); ?></a></li>
            <?php endif; ?>
            <?php if($home_list['contactpage']->status == 1): ?>
            <li class="<?php echo ($segment == 'contact') ? "active" : " "; ?>"><a href=<?php echo base_url('contact'); ?>><?php echo lang('menu_contact'); ?></a></li>
            <?php endif; ?>
        <?php endif; ?>
        <li class="navigation__cta"><a href="" class="btn btn__primary" target="_blank">Lihat Penawaran</a></li>
    </ul>
</div>