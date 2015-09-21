<h3 class="heading-mosaic"><?php echo $translate->_('Videos'); ?> <span>Support for videos</span></h3>
<div class="innerLR">
	<div class="row-fluid gallery">
		<ul>
			<?php 
			$videos = array(
				array('title' => 'Vimeo', 'url' => 'http://vimeo.com/61969130'),
				array('title' => 'Vimeo', 'url' => 'http://vimeo.com/61393274'),
				array('title' => 'Vimeo', 'url' => 'http://vimeo.com/58822149'),
				array('title' => 'Vimeo', 'url' => 'http://vimeo.com/61229815'),
				array('title' => 'YouTube', 'url' => 'http://www.youtube.com/watch?v=Vpg9yizPP_g'),
				array('title' => 'YouTube', 'url' => 'http://www.youtube.com/watch?v=Iw-W1K68Sd4')
			); 
			?>
			<?php for ($i=0; $i<6; $i++): ?>
			<li class="span4">
				<span class="thumb view">
					<a href="<?php echo $videos[$i]['url']; ?>" data-toggle="prettyPhoto"><img src="http://dummyimage.com/590x388/232323/ffffff&amp;text=<?php echo $videos[$i]['title']; ?>" alt="Video" /></a>
				</span>
			</li>
			<?php endfor; ?>
		</ul>
	</div>
</div>