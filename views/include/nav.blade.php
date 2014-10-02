<div role="navigation" class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="{{ URL::route('home') }}" class="navbar-brand">{{$companyName}}</a>
		</div>
<!-- CHECK IF LOGIN -->
@if(Auth::check())
	<!-- CHECK IF ADMIN OR NORMAL -->
	@if(Auth::user()->previlage == 0)
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fui-manage"></i>Manage<span class="caret"></span></a>
					<ul role="menu" class="dropdown-menu">
						<li><a href="{{ URL::route('books') }}"><i class="fui-book"></i> Books</a></li>
						<li><a href=""><i class="fui-user"></i> Users</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fui-transaction"></i> Transactions<span class="caret"></span></a>
					<ul role="menu" class="dropdown-menu">
						<li><a href="{{ URL::route('books/transactions') }}"><i class="fui-book"></i>  All Transactions</a></li>
						<li><a href="{{ URL::route('books/issueBooks') }}"><i class="fui-book"></i>  Issue Books</a></li>
						<li><a href=""><i class="fui-book"></i>  Return Books</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fui-user"></i> {{Auth::user()->username}}<span class="caret"></span></a>
					<ul role="menu" class="dropdown-menu">
						<li><a href="{{ URL::route('logout') }}"><i class="fui-power"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	
	@elseif(Auth::user()->previlage == 1)
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="{{ URL::route('home') }}">Search</a></li>
				<li><a href="#about">Transaction</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fui-user"></i> {{Auth::user()->username}}<span class="caret"></span></a>
					<ul role="menu" class="dropdown-menu">
						<li><a href="#"><i class="fui-gear"></i> Manage Profile</a></li>
						<li class="divider"></li>
						<li><a href="{{ URL::route('logout') }}"><i class="fui-power"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	@endif
@else
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="{{ URL::route('home') }}">Home</a></li>
				<li><a href="#about">Search</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ URL::route('register') }}">Register</a></li>
				<li><a href="{{ URL::route('login') }}">Login</a></li>
			</ul>
		</div><!--/.nav-collapse -->
@endif
	</div>
</div>