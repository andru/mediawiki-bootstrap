<footer id="footer" role="contentinfo"<?php $this->html('userlangattributes') ?>>
<div class="container">
<?php	foreach ( $icons as $blockName => $footerIcons ) { ?>
	<div id="f-<?php echo htmlspecialchars($blockName); ?>ico">
<?php foreach ( $footerIcons as $icon ) { ?>
		<?php echo $this->getSkin()->makeFooterIcon( $icon ); ?>

<?php }
?>
	</div>
<?php }

		if ( count( $links ) > 0 ):
?>	<ul id="f-list" class="unstyled">
<?php
			foreach( $links as $aLink ) { ?>
		<li id="<?php echo $aLink ?>"><?php $this->html($aLink) ?></li>
<?php
			}
?>

	</ul>
<?php endif; ?>
</div>
</footer>