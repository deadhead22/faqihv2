@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="row justify-content-center align-items-center">
                <div class="col col-md-12 align-self-center">
                <h1>Temukan Potensi Anda</h1>
                <p>Daftar Sekarang untuk menemukan Potensi Anda</p>        
                                
                                    <div class="">
                                        <div class="header">
                                            <strong>
                                                @lang('labels.frontend.auth.register_box_title')
                                            </strong>
                                        </div><!--card-header-->

                                        <div class="body">
                                            {{ html()->form('POST', route('frontend.auth.register.post'))->open() }}
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            {{ html()->label(__('validation.attributes.frontend.first_name'))->for('first_name') }}

                                                            {{ html()->text('first_name')
                                                                ->class('form-control')
                                                                ->placeholder(__('validation.attributes.frontend.first_name'))
                                                                ->attribute('maxlength', 191)
                                                                ->required()}}
                                                        </div><!--col-->
                                                    </div><!--row-->

                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            {{ html()->label(__('validation.attributes.frontend.last_name'))->for('last_name') }}

                                                            {{ html()->text('last_name')
                                                                ->class('form-control')
                                                                ->placeholder(__('validation.attributes.frontend.last_name'))
                                                                ->attribute('maxlength', 191)
                                                                ->required() }}
                                                        </div><!--form-group-->
                                                    </div><!--col-->
                                                </div><!--row-->

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                                                            {{ html()->email('email')
                                                                ->class('form-control')
                                                                ->placeholder(__('validation.attributes.frontend.email'))
                                                                ->attribute('maxlength', 191)
                                                                ->required() }}
                                                        </div><!--form-group-->
                                                    </div><!--col-->
                                                </div><!--row-->

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}

                                                            {{ html()->password('password')
                                                                ->class('form-control')
                                                                ->placeholder(__('validation.attributes.frontend.password'))
                                                                ->required() }}
                                                        </div><!--form-group-->
                                                    </div><!--col-->
                                                </div><!--row-->

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            {{ html()->label(__('validation.attributes.frontend.password_confirmation'))->for('password_confirmation') }}

                                                            {{ html()->password('password_confirmation')
                                                                ->class('form-control')
                                                                ->placeholder(__('validation.attributes.frontend.password_confirmation'))
                                                                ->required() }}
                                                        </div><!--form-group-->
                                                    </div><!--col-->
                                                </div><!--row-->

                                                @if(config('access.captcha.registration'))
                                                    <div class="row">
                                                        <div class="col">
                                                            @captcha
                                                            {{ html()->hidden('captcha_status', 'true') }}
                                                        </div><!--col-->
                                                    </div><!--row-->
                                                @endif

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group mb-0 clearfix">
                                                            {{ form_submit(__('labels.frontend.auth.register_button')) }}
                                                        </div><!--form-group-->
                                                    </div><!--col-->
                                                </div><!--row-->
                                            {{ html()->form()->close() }}

                                </div><!-- card-body -->
                            </div><!-- card -->
                        </div><!-- col-md-8 -->
                    </div><!-- row -->
                </div>
            </div>
        </div> 
    </div>

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
