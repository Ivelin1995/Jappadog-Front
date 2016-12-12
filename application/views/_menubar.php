<?php
/*
 * Menu navbar, just an unordered list
 */
?>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls=""navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/welcome"><img alt="JappaDog" width="30px" height="30px" src="/assets/images/Terimayo.jpg"></a>
		</div>

		<div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
				<li><a href="/Welcome">Homepage</a></li>
				<li><a href="/admin/supplies">Admin</a></li>
				<li><a href="/Receiving">Receiving</a></li>
				<li><a href="/Production">Production</a></li>
				<li><a href="/Sales">Sales</a></li>
				<li><a href="/Toggle">Toggle Role</a></li>
            </ul>
            <p class="navbar-text navbar-right">Role: {userrole}</p>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
