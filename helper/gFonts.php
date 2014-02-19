<script type="text/javascript">
	var html = document.getElementsByTagName('html')[0];
	html.className += '  wf-loading';
	setTimeout(function() {
	  html.className = html.className.replace(' wf-loading', '');
	}, 5000);
	WebFontConfig = {
		google: { families: [ 'PT+Sans:400,700,400italic,700italic:latin', 'Hammersmith+One::latin' ] }
	};
	(function() {
	var wf = document.createElement('script');
	wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	wf.type = 'text/javascript';
	wf.async = 'true';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(wf, s);
	})(); 
</script>  

<style type="text/css">
	.wf-loading *, 	.wf-inactive * {visibility: hidden; opacity: 0;}
	.wf-active * {visibility: visible; }
</style>