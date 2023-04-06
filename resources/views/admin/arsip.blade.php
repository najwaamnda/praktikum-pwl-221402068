@extends('admin.layout')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Arsip</h1>
        </div>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p>Pengertian arsip adalah catatan rekaman kegiatan atau sumber informasi 
            dengan berbagai macam bentuk yang dibuat oleh lembaga, organisasi maupun 
            perseorangan dalam rangka pelaksanaan kegiatan. Arsip dapat berupa surat, 
            warkat, akta, piagam, buku, dan sebagainya, yang dapat dijadikan bukti sahih 
            untuk suatu tindakan dan keputusan. Dengan adanya perkembangan teknologi, arsip 
            dapat berbentuk audio, video dan digital.</p>
        </div>

        <img class="img-fluid mx-auto d-block" width="250px"
            src="{{asset('img/arsio.jpg')}}" alt="bye">
    </div>
@endsection