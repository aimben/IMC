<?php 
	
	$blog = file_get_contents("http://imcblog.dreamhosters.com/");
 		$blog_msg = explode("<div class=\"fs-have-thumbnail\">", $blog);
 		$blog_msg2 = explode("</div>", $blog_msg[1]);
 		$blog_msg_full = trim($blog_msg2[0]);
 		#first entry header
 		$blog_hd = explode("<h4 class=\"entry-title\">", $blog);
 		$blog_hd2 = explode("</h4", $blog_hd[1]);
 		$blog_heading = trim($blog_hd2[0]);
 		#first entry link
 		$blog_link = explode("<h4 class=\"entry-title\"><strong><a href=\"", $blog);
 		$blog_linkED = explode("\">", $blog_link[1]);
 		$blog_linkfl = trim($blog_linkED[0]);
 		#first entry copy
		$blog_cpy = explode("<div class=\"entry-content\">", $blog);
 		$blog_cpy2 = explode("</div>", $blog_cpy[1]);
 		$blog_copy = trim($blog_cpy2[0]);
 			$blog_trunc_copy1 = substr($blog_copy,0, 135).'&hellip;<br /><a href="'.$blog_linkfl.'" target="_blank">Continue Reading on Blog ></a></p>';
 		
 		#second entry header
 		$blog_hd_2nd = explode("<h4 class=\"entry-title\">", $blog);
 		$blog_hd_2nd2 = explode("</h4", $blog_hd_2nd[2]);
 		$blog_heading2 = trim($blog_hd_2nd2[0]);
 		#second entry link
 		$blog_link2 = explode("<h4 class=\"entry-title\"><strong><a href=\"", $blog);
 		$blog_link2ED = explode("\">", $blog_link2[2]);
 		$blog_linkfl2 = trim($blog_link2ED[0]);
 		#second entry copyr
		$blog_cpy_2nd = explode("<div class=\"entry-content\">", $blog);
 		$blog_cpy_2nd2 = explode("</div>", $blog_cpy_2nd[2]);
 		$blog_copy2 = trim($blog_cpy_2nd2[0]);
 			$blog_trunc_copy2 = substr($blog_copy2,0, 135).'&hellip;<br /><a href="'.$blog_linkfl2.'" target="_blank">Continue Reading on Blog ></a></p>';
?>

<div class="row">
	<div class="small-12 medium-12 large-12 columns blog_pull">
		<?php echo $blog_heading ?><br />
		<?php echo $blog_trunc_copy1 ?>

		<br />
		<?php echo $blog_heading2 ?><br />
		<?php echo $blog_trunc_copy2 ?>

	</div>
</div>