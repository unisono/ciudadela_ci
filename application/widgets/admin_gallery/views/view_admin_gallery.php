<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<div class="g12">
    <h1>Gallery <span><a href="doc-gallery.html" class="small">Documentation</a></span></h1>
    <p>a sortable gallery with lightbox</p>

    <ul class="gallery">
        <?php
            foreach ($list as $img) : ?>
        
              
            <li><a href="http://random.revaxarts.com/pool/800x400.jpg" title="Here is your Description"><img src="<?php echo base_url() ?>assets/uploads/thumbnails/<?php echo $img['archivo']?>" width="116" height ="116" alt=""></a></li>
                  <?php endforeach; ?>
        
        <li><a href="http://random.revaxarts.com/pool/800x400.jpg" title="Here is your Description"><img src="http://random.revaxarts.com/pool/116x116.jpg" width="116" height ="116" alt=""></a></li>
        <li><a href="http://random.revaxarts.com/buildings/900x500.jpg" title="some Description"><img src="http://random.revaxarts.com/buildings/116x116.jpg" width="116" height ="116" alt=""></a></li>
        <li><a href="http://random.revaxarts.com/street/800x400.jpg" title="hit the ESC key to exit the show!"><img src="http://random.revaxarts.com/street/116x116.jpg" width="116" height ="116" alt=""></a></li>
        <li><a href="http://random.revaxarts.com/turntables/900x400.jpg" title="some Description"><img src="http://random.revaxarts.com/turntables/116x116.jpg" width="116" height ="116" alt=""></a></li>
        <li><a href="http://random.revaxarts.com/kaffeetasse/800x600.jpg" title="Coffee"><img src="http://random.revaxarts.com/kaffeetasse/116x116.jpg" width="116" height ="116" alt=""></a></li>
        <li><a href="http://random.revaxarts.com/domino/850x450.jpg" title="some Description"><img src="http://random.revaxarts.com/domino/116x116.jpg" width="116" height ="116" alt=""></a></li>
        <li><a href="http://random.revaxarts.com/golf/800x400.jpg" title="some Description"><img src="http://random.revaxarts.com/golf/116x116.jpg" width="116" height ="116" alt=""></a></li>
        <li><a href="http://random.revaxarts.com/subway/300x400.jpg" title="some Description"><img src="http://random.revaxarts.com/subway/116x116.jpg" width="116" height ="116" alt=""></a></li>
        <li><a href="http://random.revaxarts.com/windows/800x500.jpg" title="some Description"><img src="http://random.revaxarts.com/windows/116x116.jpg" width="116" height ="116" alt=""></a></li>
        <li><a href="http://random.revaxarts.com/leaf/200x400.jpg" title="some Description"><img src="http://random.revaxarts.com/leaf/116x116.jpg" width="116" height ="116" alt=""></a></li>
        <li><a href="http://random.revaxarts.com/turntables/800x600.jpg" title="some Description"><img src="http://random.revaxarts.com/turntables/116x116.jpg" width="116" height ="116" alt=""></a></li>
        <li><a href="http://random.revaxarts.com/streichholz/1200x500.jpg" title="some Description"><img src="http://random.revaxarts.com/streichholz/116x116.jpg" width="116" height ="116" alt=""></a></li>
        <li><a href="http://random.revaxarts.com/rolltreppe/300x500.jpg" title="you can use the arrow keys to navigate left and right"><img src="http://random.revaxarts.com/rolltreppe/116x116.jpg" width="116" height ="116" alt=""></a></li>
        <li><a href="http://random.revaxarts.com/street/400x400.jpg" title="hit the ESC key to exit the show!"><img src="http://random.revaxarts.com/street/116x116.jpg" width="116" height ="116" alt=""></a></li>
        <li><a href="http://random.revaxarts.com/kaffeetasse/800x400.jpg" title="Coffee"><img src="http://random.revaxarts.com/kaffeetasse/116x116.jpg" width="116" height ="116" alt=""></a></li>
    </ul>

    <pre>
&lt;ul class="gallery"&gt;
	&lt;li&gt;&lt;a href="{pic_url}" title="{optional title}"&gt;&lt;img src="{thumbnail_url}" width="116" height="116" alt=""&gt;&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href="{pic_url}" title="{optional title}"&gt;&lt;img src="{thumbnail_url}" width="116" height="116" alt=""&gt;&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href="{pic_url}" title="{optional title}"&gt;&lt;img src="{thumbnail_url}" width="116" height="116" alt=""&gt;&lt;/a&gt;&lt;/li&gt;
	...
&lt;/ul&gt;</pre>

</div>

