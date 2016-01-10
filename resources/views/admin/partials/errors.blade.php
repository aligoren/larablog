@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Hata!</strong>
    Yazı Eklerken Bazı Hatalarla Karşılaşıldı.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
