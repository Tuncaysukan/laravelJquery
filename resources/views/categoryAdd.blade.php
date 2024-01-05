<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Kategori Ekleme Formu -->
        <div class="card mb-4">
            <div class="card-header">Kategori Ekle</div>
            <div class="card-body">
                <form action="{{url('/categoryAdd')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="kategoriAdi">Kategori Adı</label>
                        <input type="text" class="form-control" id="kategoriAdi" name="kategoriAdi" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ekle</button>
                </form>
            </div>
        </div>

         <!-- Banner Ekleme Formu -->
         <div class="card">
            <div class="card-header">Banner Ekle</div>
            <div class="card-body">
                <form action="{{url('/bannerSave')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <!-- Banner Metni -->
                    <div class="form-group">
                        <label for="bannerMetni">Banner Metni</label>
                        <input type="text" class="form-control" id="bannerMetni" name="bannerMetni" required>
                    </div>

                    <!-- İkinci Metin -->
                    <div class="form-group">
                        <label for="ikinciMetin">İkinci Metin (Opsiyonel)</label>
                        <input type="text" class="form-control" id="ikinciMetin" name="ikinciMetin">
                    </div>

                    <!-- Kategori Seçimi -->
                    <div class="form-group">
                        <label for="kategoriId">Kategori</label>
                        <select class="form-control" id="kategoriId" name="kategoriId">
                            @foreach ($data as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>

                            @endforeach
                        </select>
                    </div>

                    <!-- Banner Görseli -->
                    <div class="form-group">
                        <label for="bannerGorsel">Banner Görseli (Opsiyonel)</label>
                        <input type="file" class="form-control-file" accept="image/*" id="bannerGorsel" name="bannerGorsel">
                    </div>

                    <!-- Buton için SVG İkon -->
                    <div class="form-group">
                        <label for="butonSvg">Buton için SVG İkon (Opsiyonel)</label>
                        <input type="text" class="form-control" id="butonSvg" name="butonSvg" placeholder="SVG kodu veya URL">
                    </div>

                    <!-- Buton için URL -->
                    <div class="form-group">
                        <label for="butonUrl">Buton URL (Opsiyonel)</label>
                        <input type="text" class="form-control" id="butonUrl" name="butonUrl" placeholder="Butonun yönlendireceği URL">
                    </div>

                    <!-- Buton Metni -->
                    <div class="form-group">
                        <label for="butonMetni">Buton Metni (Opsiyonel)</label>
                        <input type="text" class="form-control" id="butonMetni" name="butonMetni" placeholder="Buton üzerinde gösterilecek metin">
                    </div>

                    <div class="form-group">
                        <label for="icon">Font Awesome İcon </label>
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="fa-user">
                    </div>

                    <button type="submit" class="btn btn-primary">Ekle</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS ve bağımlılıkları -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
