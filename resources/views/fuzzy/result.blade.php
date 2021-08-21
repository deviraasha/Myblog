@extends('fuzzy.layouts.layout')

@section('body')
    <div class="main main-raised">
        <div class="container">
            <div class="p-3 justify-content-center">
                <b style="font-size: 1.125rem; ">Hasil Test Kecerdasan {{ $data['0']['biodata']['name'] }}
                </b>
            </div>
        </div>
    </div>
    <div class="main main-raised my-2">
        <div class="container">
            <div class="pt-3">
                <div class="row">
                    <ul class="nav nav-pills nav-pills-icons" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#hasil-1" role="tab" data-toggle="tab">
                                <i class="material-icons">dashboard</i>
                                {{ trans('result.button.result') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#info-1" role="tab" data-toggle="tab">
                                <i class="material-icons">list</i>
                                {{ trans('result.button.Information') }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content tab-space pt-5">
                    <div class="tab-pane active" id="hasil-1">
                        <div class="row">
                            @foreach ($data as $key => $value)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header card-header-text card-header-primary">
                                            <div class="card-text">
                                                <h4>{{ $value->category->name_category }}</h4>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <h4><b>{{ ucwords($value->result) }}</b></h4>
                                        </div>
                                        <div class="card-footer justify-content-end">
                                            <a href="" data-toggle="modal" data-target="#{{ $value->category_input_id }}"
                                                class="btn btn-primary">
                                                {{ trans('result.button.rule') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" id="info-1">
                        <div class="row pl-2">
                            {{-- K1 --}}
                            <div class="col-md-4">
                                <div class="card text-center" style="width: 20rem;">
                                    <div class="card-body">
                                        <h4 class="card-title">Kecerdasan Verbal-Linguistik</h4>
                                        <p class="card-text">Banyak Banyak hal yang dapat ditingkatkan dariz kecerdasan ini
                                        </p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#k1">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- K2 --}}
                            <div class="col-md-4">
                                <div class="card text-center" style="width: 20rem;">
                                    <div class="card-body">
                                        <h4 class="card-title">Kecerdasan Logis-Matematis</h4>
                                        <p class="card-text">Banyak hal yang dapat ditingkatkan dari kecerdasan ini</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#k2">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- K3 --}}
                            <div class="col-md-4">
                                <div class="card text-center" style="width: 20rem;">
                                    <div class="card-body">
                                        <h4 class="card-title">Kecerdasan Visual-Spasial</h4>
                                        <p class="card-text">Banyak hal yang dapat ditingkatkan dari kecerdasan ini</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#k3">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- K4 --}}
                            <div class="col-md-4">
                                <div class="card text-center" style="width: 20rem;">
                                    <div class="card-body">
                                        <h4 class="card-title">Kecerdasan Musikal</h4>
                                        <p class="card-text">Banyak hal yang dapat ditingkatkan dari kecerdasan ini</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#k4">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- K5 --}}
                            <div class="col-md-4">
                                <div class="card text-center" style="width: 20rem;">
                                    <div class="card-body">
                                        <h4 class="card-title">Kecerdasan Kinestetik</h4>
                                        <p class="card-text">Banyak hal yang dapat ditingkatkan dari kecerdasan ini</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#k5">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- K6 --}}
                            <div class="col-md-4">
                                <div class="card text-center" style="width: 20rem;">
                                    <div class="card-body">
                                        <h4 class="card-title">Kecerdasan Interpersonal</h4>
                                        <p class="card-text">Banyak hal yang dapat ditingkatkan dari kecerdasan ini</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#k6">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- K7 --}}
                            <div class="col-md-4">
                                <div class="card text-center" style="width: 20rem;">
                                    <div class="card-body">
                                        <h4 class="card-title">Kecerdasan Naturalis</h4>
                                        <p class="card-text">Banyak hal yang dapat ditingkatkan dari kecerdasan ini</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#k7">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- K8 --}}
                            <div class="col-md-4">
                                <div class="card text-center" style="width: 20rem;">
                                    <div class="card-body">
                                        <h4 class="card-title">Kecerdasan Intrapersonal</h4>
                                        <p class="card-text">Banyak hal yang dapat ditingkatkan dari kecerdasan ini</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#k8">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- K9 --}}
                            <div class="col-md-4">
                                <div class="card text-center" style="width: 20rem;">
                                    <div class="card-body">
                                        <h4 class="card-title">Kecerdasan Eksistensial-Spiritual</h4>
                                        <p class="card-text">Banyak hal yang dapat ditingkatkan dari kecerdasan ini</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#k9">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-right">
                        <a href="/result-destroy">
                            <button class="btn btn-primary btn-round" type="submit">AKhiri</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal K1 -->
    <div class="modal fade" id="k1" tabindex="-1" role="dialog" aria-labelledby="k1Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="k1Label">Kecerdasan Verbal-Linguistik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Masa sebelum 2 Tahun :
                    <p>
                    <ul>
                        <li>
                            Berkomunikasi dengan bayi anda, berbicaralah dengan bayi anda secara alamiah
                        </li>
                        <li>Mulailah kebiasaan bercerita dan mendongeng sejak dini</li>
                        <li>Bermainlah bersama anak anda untuk melatih perkembangan kemampuan bahasa dan sosialisasi anak
                        </li>
                    </ul>
                    </p>
                    Masa 2-6 Tahun :
                    <ul>
                        <li>
                            Beri kesempatan kepada anak anda untuk mengungkapkan pendapatnya sendiri
                        </li>
                        <li>
                            bimbinglah anak dalam meningkatkan bahasa lisan
                        </li>
                        <li>Gunakan papan komunikasi untuk digunakan anak anda yang bisa diisi seperti gambar atau foto
                            kenangan, kartu ucapan dari kerabat</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal K2 -->
    <div class="modal fade" id="k2" tabindex="-1" role="dialog" aria-labelledby="k1Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="k1Label">Kecerdasan Logis-Matematis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Masa sebelum 2 Tahun :
                    <p>
                    <ul>
                        <li>
                            Ajak anak untuk mengamati benda - benda di sekitarnya serta bentuk - bentuknya
                        </li>
                        <li>Ajak anak bermain puzzle sederhana dan sesuai dengan usia anak</li>
                    </ul>
                    </p>
                    Masa 2-6 Tahun :
                    <ul>
                        <li>
                            Tumbuhkan kreativitas melalui kegiatan seni tiga dimensi
                        </li>
                        <li>Tumbuhkan kesadaran akan bilangan didalam rumah, seperti menghitung kursi meja makan</li>
                        <li>Ketika dalam perjelanan, ajak bermain dengan angka</li>
                        <li>Ketika dalam perjalanan, ajak dia melihat bilangan disekitarnya, misalnya lampu lalu lintas,
                            tiang listrik dan sebagainya</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal K3 -->
    <div class="modal fade" id="k3" tabindex="-1" role="dialog" aria-labelledby="k1Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="k1Label">Kecerdasan Visual-Spasial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Masa sebelum 2 Tahun :
                    <p>
                    <ul>
                        <li>
                            Biarkan anak bereksplorasi
                        </li>
                        <li>Ketika anak sudah punya gigi, berikan finger foods yang bisa dipegang oleh jari-jari kecilnya
                            misalnya potogan buah yang lembut</li>
                    </ul>
                    </p>
                    Masa 2-6 Tahun :
                    <ul>
                        <li>
                            Beri kesempatan ekspresi diri melalui gambar
                        </li>
                        <li>Tumbuhkan kreativitas melalui kegiatan menggunting, menempel dan menyobek</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal K4 -->
    <div class="modal fade" id="k4" tabindex="-1" role="dialog" aria-labelledby="k1Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="k1Label">Kecerdasan Musikal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Masa sebelum 2 Tahun :
                    <p>
                    <ul>
                        <li>
                            Berikan permainan bunyi-bunyian, melalui indra pendengarnya bunyi ini akan diserap sebagai bahan
                            untuk menumbuhkan kecerdasan musikal
                        </li>
                        <li>Putarkan Musik dirumah</li>
                    </ul>
                    </p>
                    Masa 2-6 Tahun
                    <ul>
                        <li>Ajak anak untuk merasakan berbagai bunyi dan getaran disekitarnya seperti merasakan detak jantuk
                        </li>
                        <li>Gunakan musik untuk membantu anak mengatasi berbagai perasaan negatif</li>
                        <li>Ajak anak untuk menikmati musik di radio atau televisi</li>
                        <li>Ajak anak untuk menikmati suatu pertunjukan musik</li>
                        <li>Perkenalkan anak dengan suatu alat musik</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal K5 -->
    <div class="modal fade" id="k5" tabindex="-1" role="dialog" aria-labelledby="k1Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="k1Label">Kecerdasan Kinestetik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Masa sebelum 2 Tahun :
                    <p>
                    <ul>
                        <li>
                            Ketika bayi mulai belajar merangkak, amankan rumah dan jauhkan segala potensi bahaya
                        </li>
                        <li>Berikan kesempatan kepada anak untuk melakukan pekerjaan - pekerjaan sederhana untuk dirinya
                            sendiri. Contoh : membuka pakaian</li>
                    </ul>
                    </p>
                    Masa 2-6 Tahun :
                    <ul>
                        <li>
                            Bermainlah bersama anak
                        </li>
                        <li>Luangkan waktu untuk bermain bersama anak</li>
                        <li>permainan untuk meningkatkan kecerdasan gerak tubuh misalnya, petak umpet, ular-ularan,
                            rumah-rumahan</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal K6 -->
    <div class="modal fade" id="k6" tabindex="-1" role="dialog" aria-labelledby="k1Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="k1Label">Kecerdasan Interpersonal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Masa sebelum 2 Tahun :
                    <p>
                    <ul>
                        <li>
                            Mengenali anggota keluarga dan teman - teman
                        </li>
                        <li>Berpisah tanpa rasa cemas. Contoh : "Ibu dan ayah akan pulang kembali dan bermain dengan rina
                            sesuah maghrib"</li>
                    </ul>
                    </p>
                    Masa 2-6 Tahun :
                    <ul>
                        <li>
                            Ungkapkan perasaan anda kepada anak. Contoh : "Wah ibu gembira sekali hari ini kamu sudah bisa
                            ....."
                        </li>
                        <li>Ungkapkan perasaan kasih dan sayang secara eksplisit</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal K7 -->
    <div class="modal fade" id="k7" tabindex="-1" role="dialog" aria-labelledby="k1Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="k1Label">Kecerdasan Naturalis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Masa Sebelum 2 Tahun :
                    <p>
                    <ul>
                        <li>
                            Ajak anak anda bersahabat dengan alam seperti jalan - jalan untuk menghirup udara segar
                        </li>
                        <li>Lakukan rutinitas doa dengan anak setiap hari
                        </li>
                    </ul>
                    </p>
                    Masa 2-6 Tahun :
                    <ul>
                        <li>
                            Libatkan anak dalam pemeliharaan tanaman atau hewan dirumah
                        </li>
                        <li>Ajak anak untuk mengamati proses pertumbuhan di alam. Contohnya menanam kacang hijau dikapas
                        </li>
                        <li>Ajak anak mengamati dan mencatat proses pertumbuhannya sendiri. Misalnya mengukur tinggi anak
                            dan menandai tinggi di dinding</li>
                        <li>Ajak anak bersahabat dengan air, sesekali ajak anak bermain dengan hujan</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal K8 -->
    <div class="modal fade" id="k8" tabindex="-1" role="dialog" aria-labelledby="k1Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="k1Label">Kecerdasan Intrapersonal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Masa sebelum 2 Tahun :
                    <p>
                    <ul>
                        <li>
                            Timanglah bayi anda dengan lembut untuk meningkatkan kontak fisik dan emosional antara orang tua
                            dan anak yang sangat penting dalam pertumbuhan anak
                        </li>
                        <li>Berikan pujian, tepuk tangan, dan sorakan untuk setiap keberhasilan kecil. Contoh : "Papa bangga
                            sama kamu!"</li>
                        <li>Ajak anak untuk melihat kegagalan sebagai proses menuju keberhasilan</li>
                    </ul>
                    </p>
                    Masa 2-6 Tahun :
                    <ul>
                        <li>
                            Hargai anak anda dengan memperlakukannya sebagai seorang pribadi yang utuh, contoh perkenalkan
                            anak anda seperti "Rina, Tante Maya ingin tahu kamu sekolah dimana. Coba kamu beritahu Tante
                            Maya"
                        </li>
                        <li>
                            Beri kesempatan kepada anak anda untuk menentukan pilihan-pilihannya sesuai dengan kapasitasnya.
                            contoh : tanyakan makanan yang disukai
                        </li>
                        <li>Beri kesempatan anak anda untuk mengungkapkan perasaannya sendiri</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal K9 -->
    <div class="modal fade" id="k9" tabindex="-1" role="dialog" aria-labelledby="k1Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="k1Label">Kecerdasan Eksistensial-Spiritual</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Masa Sebelum 2 Tahun :
                    <p>
                    <ul>
                        <li>
                            Biarkan anak melihat anda berdoa/bersembahyang, membaca kitab suci atau melakukan kegiatan -
                            kegiatan dalam agama anda
                        </li>
                        <li>Lakukan rutinitas doa dengan anak setiap hari
                        </li>
                    </ul>
                    </p>
                    Masa 2-6 Tahun :
                    <ul>
                        <li>
                            Ajak anak melakukan kegiatan keagaamaan dalam agama anda
                        </li>
                        <li>Biarkan anak menyaksikan kedekatan hubungan antara anda dengan tuhan. Contohnya jika anda
                            mendapatkan rezeki atau berkah, bersyukurla kepada tuhan dan ajari anak anda untuk berbuat
                            serupa</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @foreach ($data as $key => $value)
        <div class="modal fade bd-example-modal-lg" id="{{ $value->category_input_id }}" tabindex="-1" role="">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="card card-signup card-plain">
                        <div class="modal-header">
                            @php
                                $x = explode(',', $value->rule);
                            @endphp
                            <h4 class="card-title">Hasil Dari : {{ count($x) }} Rule</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="material-icons">clear</i>
                            </button>
                        </div>
                        <div class="modal-body">
                            @php
                                $length = Str::length($value->rule);
                                $k = str_replace('[', '', $value->rule);
                                $ka = str_replace(']', '', $k);
                                $array = explode(',', $ka);
                                $dAr = App\Models\Rule::whereIn('id', $array)->get();
                            @endphp
                            @foreach ($dAr as $item)
                                <div>
                                    <b>{{ '[R ' . $item->id . '] if ' . $item->v1 . ' and ' . $item->v2 . ' and ' . $item->v3 . ' and ' . $item->v4 . ' ' . $item->v5 . ' then ' . $item->then }}</b>
                                </div>
                            @endforeach
                        </div>
                        <div class="modal-footer justify-content-end">
                            <button type="button" class="btn btn-primary btn-link btn-wd btn-lg" data-dismiss="modal"
                                aria-label="Close">
                                Kembali
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
