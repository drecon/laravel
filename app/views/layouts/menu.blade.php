<div class="navbar">
	<div class="navbar-inner">
	<a class="brand" href="#">Job4Fun</a>
	<ul class="nav">
		<li><a href="{{ URL::to('hero/index') }}">Hero</a></li>
		<li><a href="#">Campaigns</a></li>
		<li><a href="#">Premiuns</a></li>
		<li><a href="#">Feeds</a></li>
	</ul>
	<div class="navbar-form pull-right">
		<a href="{{ URL::to('logout') }}" type="submit" class="btn">Logout</a>
	 </div>			
	</div>
</div>
