<nav class="navbar navbar-expand-lg bg-flock">
  <a class="navbar-brand" href="#"><img src="/images/logo.png"/></a>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
		@if (Auth::guest())
		<li class="nav-item ">
	        <a class="nav-link text-dark" href="/dashboard/list"><i class="fas fa-lock padding-right-5"></i>Login</a>
      	</li>
		@else
		<li class="nav-item active">
	        <a class="nav-link text-dark" href="/dashboard"><i class="fas fa-tachometer-alt padding-right-5"></i>Dashboard <span class="sr-only">(current)</span></a>
      	</li>
      	<li class="nav-item ">
	        <a class="nav-link text-dark" href="/contact-list"><i class="fas fa-list padding-right-5"></i>List</a>
      	</li>
      	<li class="nav-item ">
	        <a class="nav-link text-dark" href="#"><i class="fas fa-bullhorn padding-right-5"></i>Campaign</a>
      	</li>
      	<li class="nav-item ">
	        <a class="nav-link text-dark" href="#"><i class="fas fa-user-circle padding-right-5"></i>Profile</a>
      	</li>
      	<li class="nav-item ">
	        <a class="nav-link text-dark" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off padding-right-5"></i>Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
</li>
		@endif
      
    </ul>
  </div>
</nav>
        
