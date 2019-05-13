@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-home"></i> @lang('navs.general.home')
                </div>
                <div class="card-body">
                    @lang('strings.frontend.welcome_to', ['place' => app_name()])
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <h1 class='page-title text-center'>Komitmen Kami</h1>
            </div><!--col-->
            <div class="col-md-4">
                <p class="lead">Anda akan menemukan potensi diri dan mengenal lebih jauh kekuatan diri anda, sehingga anda dapat menentukan pekerjaan mana yang sesuai dengan minat dan bakat anda.</p>
            </div><!--col-->
            <div class="col-md-4">
                <p class="lead">Anda akan kami promosikan kedunia kerja sesuai dengan potensi dan kekuatan diri anda.</p>
            </div><!--col-->
            <div class="col-md-4">
                <p class="lead">Anda akan kami kenalkan ke berbagai jaringan seperti BUMN, perusahaan swasta ternama dalam dan luar negri, rumah sakit, lembaga kesehatan dan instansi lainnya.</p>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->

    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <h1 class='page-title text-center'>Fasilitas Yang Dapat Anda Manfaatkan</h1>
            </div><!--col-->
            <div class="col-md-4">
                <div class="card">
                    <div class="text-center">
                        <img class="card-img-top rounded" src="https://jlfarchitects.com/wp-content/uploads/2015/03/img-placeholder.jpg" style="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Self Assesment</h5>
                    </div>
                </div><!--card-->
            </div><!--col-->
            <div class="col-md-4">
                <div class="card">
                    <div class="text-center">
                        <img class="card-img-top rounded" src="https://jlfarchitects.com/wp-content/uploads/2015/03/img-placeholder.jpg" style="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Analisa dan Rekomendasi atas Hasil Assessment</h5>
                    </div>
                </div><!--card-->
            </div><!--col-->
            <div class="col-md-4">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top rounded" src="https://jlfarchitects.com/wp-content/uploads/2015/03/img-placeholder.jpg" style="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Promosi Profil User ke Dunia Kerja Sesuai dengan Profil User</h5>
                        </div>
                    </div><!--card-->
            </div><!--col-->
        </div><!--row-->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card">
                        <div class="text-center">
                            <img class="card-img-top rounded" src="https://jlfarchitects.com/wp-content/uploads/2015/03/img-placeholder.jpg" style="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Informasi Studi Lanjutan yang Sesuai dengan Profil User</h5>
                        </div>
                    </div><!--card-->
            </div><!--col-->
            <div class="col-md-4">
                <div class="card">
                        <div class="text-center">
                            <img class="card-img-top rounded" src="https://jlfarchitects.com/wp-content/uploads/2015/03/img-placeholder.jpg" style="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Bisnis Incubator bagi yang Berwirausaha</h5>
                        </div>
                    </div><!--card-->
            </div><!--col-->
            <div class="col-md-4">
                <div class="card">
                        <div class="text-center">
                            <img class="card-img-top rounded" src="https://jlfarchitects.com/wp-content/uploads/2015/03/img-placeholder.jpg" style="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Training untuk Peningkatan Soft Skill/Hard Skill</h5>
                        </div>
                    </div><!--card-->
            </div><!--col-->
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="btn btn-primary btn-lg btn-to-top" href='#'>Get Online Psikotest</a>
            </div>
        </div>
    </div><!--container-->
@endsection
