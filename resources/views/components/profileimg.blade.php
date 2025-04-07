@auth
<div id="showPersonalArea" class="rounded-circle">
  <a href="{{route('profile', Auth::user()->id)}}">
    <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="User Image" height="60" class="rounded-circle">
  </a>
</div>
@endauth