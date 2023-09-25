<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  {{-- logout --}}
      <div class="container">
        <h1 style="font-style: italic;">   Welcome , {{ session('loginname')}}</h1>
      </div>
 {{-- logout Button --}}
       @if (session('loginname'))
          <a href="{{ route('adminLogout') }}">
  <button type="submit" class="btn btn-warning" style="width: 150px;">Log out</button>
</a>
 @endif

  </nav>
