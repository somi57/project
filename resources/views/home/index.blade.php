@include('home.petinformation')
@if (Route::has('login'))
@auth
<form method="POST" action="{{ route('logout') }}">
  @csrf
  <input class="btn btn-success" type="submit" value="Logout">
</form>
@else
<a href="{{url('/login')}}">
<i class="fa fa-user" aria-hidden="true"></i>
<span>
  Login
</span>
</a>
<a href="{{url('/register')}}">
<i class="fa fa-vcard" aria-hidden="true"></i>
<span>
  Register
</span>
</a>

@endauth
@endif
{{-- @include('adoptionform') --}}
@if (Route::has('login'))
{
  @include('review')
}
  
@endif
