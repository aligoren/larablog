<ul class="nav navbar-nav">
  <li><a href="/" target="_blank">Anasayfa</a></li>
  @if (Auth::check())
    <li @if (Request::is('admin/post*')) class="active" @endif>
      <a href="/admin/post">Yazılar</a>
    </li>
    <li @if (Request::is('admin/tag*')) class="active" @endif>
      <a href="/admin/tag">Etiketler</a>
    </li>
    <li @if (Request::is('admin/upload*')) class="active" @endif>
      <a href="/admin/upload">Yüklemeler</a>
    </li>
  @endif
</ul>

<ul class="nav navbar-nav navbar-right">
  @if (Auth::guest())
    <li><a href="/hesap/gir">Giriş</a></li>
  @else
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
         aria-expanded="false">{{ Auth::user()->name }}
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="/hesap/cikis">Çıkış</a></li>
      </ul>
    </li>
  @endif
</ul>
