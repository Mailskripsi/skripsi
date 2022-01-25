Route::get('/', function () {
    $jumlahpenduduk = Penduduk::count();
    $jumlahpenduduklaki = Penduduk::where('jeniskelamin','laki')->count();
    $jumlahpendudukperempuan = Penduduk::where('jeniskelamin','perempuan')->count();


    return view('welcome', compact('jumlahpenduduk','jumlahpenduduklaki','jumlahpendudukperempuan'));
});