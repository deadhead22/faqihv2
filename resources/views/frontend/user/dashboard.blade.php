@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>
                        <i class="fas fa-tachometer-alt"></i> @lang('navs.frontend.dashboard')
                    </strong>
                </div><!--card-header-->

                <div class="card-body">
                    <div class="row">
                        <div class="col col-sm-4 order-1 order-sm-2  mb-4">
                            <div class="card mb-4 bg-light">
                                <img class="card-img-top" src="{{ $logged_in_user->picture }}" alt="Profile Picture">

                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $logged_in_user->name }}<br/>
                                    </h5>

                                    <p class="card-text">
                                        <small>
                                            <i class="fas fa-envelope"></i> {{ $logged_in_user->email }}<br/>
                                            <i class="fas fa-calendar-check"></i> @lang('strings.frontend.general.joined') {{ timezone()->convertToLocal($logged_in_user->created_at, 'F jS, Y') }}
                                        </small>
                                    </p>

                                    <p class="card-text">

                                        <a href="{{ route('frontend.user.account')}}" class="btn btn-info btn-sm mb-1">
                                            <i class="fas fa-user-circle"></i> @lang('navs.frontend.user.account')
                                        </a>

                                        @can('view backend')
                                            &nbsp;<a href="{{ route('admin.dashboard')}}" class="btn btn-danger btn-sm mb-1">
                                                <i class="fas fa-user-secret"></i> @lang('navs.frontend.user.administration')
                                            </a>
                                        @endcan
                                        <div class="profile">
                                            <ul class="list-group">
                                                <li class="list-group-item"><strong>Pendidikan:</strong><br>S1</li>
                                                <li class="list-group-item"><strong>Tahun Lulus:</strong><br>2018</li>
                                                <li class="list-group-item"><strong>Jurusan:</strong><br>Teknik Komputer dan Jaringan</li>
                                                <li class="list-group-item"><strong>Rencana Setelah Lulus:</strong><br>Melanjutkan Pendidikan</li>
                                            </ul>
                                        </div>
                                    </p>
                                </div>
                            </div>

                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a class='nav-link' href="/members/request_list">My Assesment</a>
                                </li>
                                <li class="list-group-item">
                                    <a class='nav-link' href="/members/certificate_request_list">Certificate Request</a>
                                </li>
                                <li class="list-group-item">
                                    <a class='nav-link' href="/members/payment_confirmation_list">Payment Confirmations</a>
                                </li>
                            </ul>
                        </div><!--col-md-4-->

                        <div class="col-md-8 order-2 order-sm-1">
                            <div class="row">
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h2><i>"Bila kamu tidak tahan lelahnya belajar maka kamu akan menanggung perihnya kebodohan"</i></h2>
                                            </div>
                                        </div><!--card-body-->
                                    </div><!--card-->
                                </div><!--col-md-6-->
                            </div><!--row-->

                            <div class="row">
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h4>Recent Test</h5>
                                        </div><!--card-header-->

                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-stripped">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%">No.</th>
                                                            <th>Jenis Test</th>
                                                            <th>Tanggal Test</th>
                                                            <th>Status Test</th>
                                                            <th width="5%">Hasil Test</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%">1</td>
                                                            <td>Personality Test</td>
                                                            <td>12 November 2018, 03:34 PM</td>
                                                            <td><span class="label label-success">Done</span></td>
                                                            <td><a href="/personality_exams/detail_test/d2f79b8fd613c2133a2ddf2e2cb3cb5a6ea7712f" class="btn btn-sm btn-success ">Open</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                            </div>
                                        </div><!--card-body-->
                                    </div><!--card-->
                                    <div class="card mb-4">
                                            <div class="card-header">
                                                <div class="float-left">
                                                    <h4>Biodata Lengkap</h5>
                                                </div>
                                                <div class="float-right">
                                                    <a href="/members/view_cv_pdf"><span class="fa fa-download"></span> Save CV as PDF</a>&nbsp;&nbsp;<a href="/members/edit_cv"><span class="fa fa-edit"></span> Edit CV</a>
                                                </div>
                                            </div><!--card-header-->
                                            
                                            <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h4>Data Personal</h5>
                                                            <div class="alert alert-warning" role="alert">Data belum ada</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <h4>Pendidikan</h5>
                                                            <div class="alert alert-warning" role="alert">Data belum ada</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <h4>Pengalaman Kerja / Magang</h5>
                                                            <div class="alert alert-warning" role="alert">Data belum ada</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <h4>Pengalaman Organisasi</h5>
                                                            <div class="alert alert-warning" role="alert">Data belum ada</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <h4>Training</h5>
                                                            <div class="alert alert-warning" role="alert">Data belum ada</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <h4>Prestasi</h5>
                                                            <div class="alert alert-warning" role="alert">Data belum ada</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <h4>Kompetensi &amp; Hobi</h5>
                                                            <h5>A. Kompetensi</h5>
                                                            <div class="alert alert-warning" role="alert">Data belum ada</div>
                                                            <h5>B. Skill Lain</h5>
                                                            <div class="alert alert-warning" role="alert">Data belum ada</div>                                                                                                    
                                                            <h5>C. Hobi</h5>
                                                            <div class="alert alert-warning" role="alert">Data belum ada</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--card-body-->
                                        </div><!--card-->
                                </div><!--col-md-6-->
                            </div><!--row-->

                        </div><!--col-md-8-->
                    </div><!-- row -->
                </div> <!-- card-body -->
            </div><!-- card -->
        </div><!-- row -->
    </div><!-- row -->
@endsection
