@if(Auth::guard('web')->check())
	<p class="text-success">
		Wellcome back <strong>User</strong>
	</p>
@else
	<p class="text-danger">
		Good bye <strong>User</strong>
	</p>
@endif

@if(Auth::guard('admin')->check())
	<p class="text-success">
		Wellcome back <strong>Admin</strong>
	</p>
@else
	<p class="text-danger">
		Good bye <strong>Admin</strong>
	</p>
@endif