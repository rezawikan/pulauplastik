@extends('layouts.app-default')

@push('t-scripts')
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endpush


@section('title', 'Selenggarakan Pemutaran')

@section('tagline','Surga Yang Terancam Sampah Plastik')

@section('description','Serial edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
<!-- Probelms -->
<div class="header-custom"></div>

<!-- Descriotion Gede Robi -->
<div class="container default-text contact-us py-4">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center mb-4">Selenggarakan Pemutaran</h3>
            @if (session('status'))
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                {{ session('status') }}.
            </div>
            @endif
            <img src="{{ asset('img/infografik-screening.jpg')}}" alt="Panduan Pemutaran">
            <p>Bagi kalian yang ingin melakukan pemutaran secara mandiri, berikut panduan/informasi yang kalian bisa siapkan agar acara bisa berlangsung dengan optimal:</p>
            <p>Menentukan target penonton akan memudahkanmu dalam menyesuaikan topik diskusi yang akan dibahas setelah penayangan Pulau Plastik. Kalian bisa menjangkau komunitas seperti pemuda/i desa, pelajar, perusahaan swasta, atau lainnya. Jangan
                lupa untuk memastikan tempat dan waktu yang ideal, karena akan berpengaruh besar pada kenyamanan saat menonton film Pulau Plastik.</p>
            <p>Pertimbangkan juga waktu pemutaran, jika pemutaran film diadakan pada siang hari, sebaiknya dilakukan di dalam ruangan (indoor) untuk menghindari masuknya cahaya. Namun, apabila kalian memilih melakukannya di luar ruangan (outdoor),
                sebaiknya dilakukan saat malam hari. Film Pulau Plastik berdurasi kurang lebih 25 menit. Oleh karena itu, sebaiknya anjurkan penonton untuk datang 15 menit sebelum film dimulai.</p>
            <p>Untuk menarik perhatian dan mengajak massa untuk datang ke acara pemutaran film Pulau Plastik, tim Pulau Plastik akan menyediakan dukungan promosi acara seperti poster template dan bantuan publikasi lewat akun social media Pulau
                Plastik. Penyebaran undangan atau posting melalui social media sebaiknya dilakukan paling tidak 1-1,5 minggu sebelumnya. Sertakan juga anjuran untuk membawa botol minum mereka sendiri dan pastikan tidak menyajikan makanan kecil yang
                dibungkus plastik sekali pakai.</p>
            <p>Menjelang acara pemutaran diselenggarakan, pastikan semua peralatan untuk pemutaran film sudah lengkap dan siap untuk digunakan. Detail alat-alat pemutaran yang dianjurkan dapat dilihat disini (link). Jangan lupa menyediakan
                galon/dispenser agar penonton dapat mengisi ulang botol minum mereka.</p>
            <p>Setelah pemutaran film berakhir, kamu bisa buka sesi diskusi seputar film dan topik sampah plastik. Dengan bantuan seorang moderator, kalian bisa turut mengundang figur publik, seperti: aktifis lingkungan, dosen, atau representatif
                dari organisasi peduli sampah sebagai pembicara. Contoh pertanyaan-pertanyaan yang bisa jadi paduan bisa kamu dapatkan <a href="{{route('faq.index')}}">disini</a>.</p>
            <p>Selamat menonton dan mari cegah bumi menjadi Pulau Plastik!</p>
            <div class="text-center">

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-custom text-center" data-toggle="modal" data-target="#exampleModal">
                  Form Selenggarakan Pemutaran
              </button>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Selenggarakan Pemutaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="bg-soft-two" method="POST" action="{{ route('host-a-screening.store')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="firtName">Nama Depan *</label>
                                        <input type="text" class="form-control" name="firstName" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName">Nama Belakang</label>
                                        <input type="text" class="form-control" name="lastName" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName">Alamat Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName">No. Kontak</label>
                                        <input type="number" class="form-control" name="phone" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Komunitas/Lembaga</label>
                                    <input type="text" class="form-control" name="community" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="lastName">Tanggal Kegiatan</label>
                                        <input id="datepicker" class="form-control" name="dateOfEvent" placeholder="dd/mm/yyyy" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName">Lokasi</label>
                                        <input type="text" class="form-control" name="location" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName">Profil Penonton</label>
                                        <input type="text" class="form-control" name="audienceProfile" placeholder="Pelajar/Mahasiswa/Umum" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName">Estimasi Jumlah Penonton</label>
                                        <input type="number" class="form-control" name="numbersOfAudience" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="YourMessage">Deskripsi singkat kegiatan (talkshow/workshop/pembicara)</label>
                                    <textarea class="form-control" rows="6" name="shortDescription" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-custom float-right">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection

@push('b-scripts')
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<script>
    let today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd-mm-yyyy',
        minDate: today
    });
</script>
@endpush
