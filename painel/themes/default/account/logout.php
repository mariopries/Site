<?php if (!defined('FLUX_ROOT')) exit; ?>
<br />
<h2><?php echo htmlspecialchars(Flux::message('LogoutHeading')) ?></h2>
<p><strong><?php echo htmlspecialchars(Flux::message('LogoutInfo')) ?></strong> <?php printf(Flux::message('LogoutInfo2'), $metaRefresh['location']) ?></p>