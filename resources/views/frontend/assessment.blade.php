@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.assessment'))

@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="title-content">Assessment</h3>
                </div>
                <div class="col-md-12">
                    <div class="content-text assesment">
                        <div class="row assesment-row  assesment-row-1">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <p><b>Apa rencana Anda setelah lulus?</b></p>
                                <p>Akhirnya, setelah perjuangan bertahun-tahun dan seluruh jerih payah yang Anda lakukan selama ini, kelulusan kini ada di depan mata.</p>
                                <p>Pertanyaan selanjutnya adalah, apa yang akan Anda lakukan setelah lulus. Apakah Anda akan kuliah, kerja, atau berwirausaha.</p><br>
                            </div>
                            <div class="col-md-7  col-sm-6">
                                <img src="/img/assesment/lulus.png" class="img-responsive img-what-next img-what-next-step">
                            </div>
                        </div>
                        <div class="row assesment-row  assesment-row-2">

                            <div class="col-md-4 col-xs-12 text-center">
                                <div>
                                    <img src="/img/assesment/kuliah.png" class="img-responsive center-block">
                                    <p><b>Kuliah</b></p>
                                    <p>Ada 2.606 program studi yang ditawarkan 63 perguruan tinggi negri di Indonesia. Belum lagi perguruan tinggi swasta.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 text-center">
                                <div>
                                    <img src="/img/assesment/kerja.png" class="img-responsive center-block">
                                    <p><b>Kerja</b></p>
                                    <p>Ada ribuan jenis profesi yang ada di dunia kerja. Anda bisa menjadi guru, dokter, akuntan, bahkan astronot sekalipun.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 text-center">
                                <div>
                                    <img src="/img/assesment/pengusaha.png" class="img-responsive center-block">
                                    <p><b>Pengusaha</b></p>
                                    <p>Anda bisa jadi seperti Mark Zuckerberg pendiri Facebook, atau jadi pengusaha dengan membuka bengkel motor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row assesment-row  assesment-row-1">
                            <div class="col-sm-3 col-md-4">
                                <img src="/img/assesment/questions.png" class="img-responsive img-question">
                            </div>
                            <div class="col-sm-9 col-md-8">
                                <ul class="assesment-questions">
                                    <li>
                                        <b>Pertanyaan #1 </b>
                                        <p>Sudah tau mau kuliah apa? Atau kerja apa? Atau wirausaha apa?</p>
                                    </li>
                                    <li>
                                        <b>Pertanyaan #2 </b>
                                        <p>Masih bingung bidang apa yang cocok untuk Anda?</p>
                                    </li>
                                    <li>
                                        <b>Pertanyaan #3 </b>
                                        <p>Sudah tau apa potensi terpendam dan kekuatan personal Anda?</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row assesment-row assesment-row-3">
                            <div class="col-md-12">
                                <h1 class="text-center">FAKTA</h1>
                            </div>
                            <div class="col-sm-4">
                                <div class="fact">
                                    <b>FAKTA #1</b>
                                    <p>Kekuatan personal seseorang bisa dipetakan ke dalam 20 macam personality.</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="fact">
                                <b>FAKTA #2</b>
                                    <p>Menurut sebuah studi di Australia, personality lebih menentukan kesuksesan seseorang dibandingkan score IQ</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="fact">
                                <b>FAKTA #3</b>
                                    <p>60% lebih perusahaan melakukan personality test dalam seleksi pekerja.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <a href="http://talepo.com/request_tests/get_test" class="btn btn-uppercase btn-primary btn-lg">Get Online Psikotest</a> 
                </div>
            </div>
    </div><!--container-->
@endsection
