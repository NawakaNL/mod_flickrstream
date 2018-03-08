<?php
// No direct access
defined('_JEXEC') or die; ?>
<div class="flickrstream">
  <div class="flickrstream-title" style="background-color: <?PHP echo $color; ?>">
    <i class="icon-picture"></i> <?PHP echo $title; ?>
  </div>
  <div class="flickrstream-content">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe src="https://www.flickr.com/slideShow/index.gne?user_id=<?PHP echo $userId; ?>&amp;set_id=<?PHP echo $setId; ?>" width="500" height="500" style="vertical-align: center;" frameborder="0" scrolling="no" align="center"></iframe>
    </div>
  </div>
</div>
