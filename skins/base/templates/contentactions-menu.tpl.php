        <li class="dropdown">
          <a href="" data-toggle="dropdown" class="dropdown-toggle">
            <i class="glyphicon glyphicon-cog"></i> <span class="title"><?php $this->msg( 'actions' ) ?></span> <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
<?php 
foreach(array($views, $namespaces, $actions, $variants) as $items):
  if(count($items) > 0):
    foreach($items as $key => $itm):
      if(isset($itm['redundant'])) continue;
?>
  <li><a href="<?php echo $itm['href'] ?>" class="<?php echo str_replace('selected', 'active', $itm['class']);?>" id="contentaction-<?php echo $key?>">
    <i class="glyphicon glyphicon-<?php echo $this->key_to_icon[$key]?>"></i> <?php echo $itm['text'] ?>
  </a></li>
<?php 
    endforeach; ?>
<li class="divider"></li>
<?php 
  endif;
endforeach;?>

          </ul>
        </li>