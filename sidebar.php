<?php 
/**
 * The template for sidebar
 *
 * atheme - a WordPress theme for developers
 * by Aldrin Mojica
 *
 */ 
?>
<div class="col-md-3 col-sm-4 col-xs-12 main-sidebar filter_category">
	<?php if (is_active_sidebar('sidebar-1')) { dynamic_sidebar('sidebar-1'); } ?>
</div>