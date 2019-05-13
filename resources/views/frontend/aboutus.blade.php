@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.aboutus'))

@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="title-content">About Us</h3>
                </div>
                    <div class="col-md-12">
                        <div class="content-text">
                                <h4 class="title-pg-about-us">Sekilas mengenai FAQIH.</h3>
                                <h5><u><strong>VISI</strong></u></h5>
                                <p>Menjadi mitra profesional yang terpercaya di bidang pengembangan Sumber Daya Manusia di Indonesia.</p>
                                <br>
            
                                <h5><u><strong>MISI</strong></u></h5>
                                <ul>
                                    <li>Memfasilitasi mitra khususnya siswa SMK menemukan minat dan bakat mereka melalui pengujian potensi secara online.</li>
                                    <li>Mengasah minat dan bakat mitra melalui layanan pelatihan dan konsultasi yang berkualitas.</li>
                                    <li>Memberikan layanan berkualitas penyediaan tenaga kerja, jasa pelatihan dan konsultasi kepada perusahaan.</li>
                                </ul>
                                <br>
            
                                <h5><u><strong>LEGALITAS</strong></u></h5>
                                <h6>AKTA PENDIRIAN</h6>
                                <p>AKTA Pendirian PT. Faqih Wahana Karya No. 31 Tanggal 21 September 2015.</p>
            
                                <h6>SK HUM HAM</h6>
                                <p>SK Kementrian Hukum dan HAM No. AHU 2458621.AH.01.01 TAHUN 2015</p>
            
                                <h6>DOMISILI</h6>
                                <p>Domisili Badan Usaha No. 3251/27.1.0/31.74.03.1002/1.755.13/2015<br> 
                                Gedung Kemang 15 lt. 3 Jl. Kemang Raya No. 15<br>
                                Kelurahan Bangka Kecamatan Mampang Prapatan Jakarta Selatan.<br></p>                    
                                <br>
            
                                <h5><u><strong>STRUKTUR ORGANISASI</strong></u></h5>
            
                                <table>
                                <tbody><tr>
                                    <td><div style="font-weight: bold; padding-right: 20px;"><h6>CEO (Chief Executive Officer)</h6></div></td><td><div>Gema Illahi Zuhdi</div></td>
                                </tr>
                                <tr>
                                    <td><div style="font-weight: bold; padding-right: 20px;"><h6>CMO (Chief Marketing Officer)</h6></div></td><td><div>Asdo Alam</div></td>
                                </tr>
                                <tr>
                                    <td><div style="font-weight: bold; padding-right: 20px;"><h6>CFO (Chief Financial Officer)</h6></div></td><td><div>Henry Sudono Widjaja</div></td>
                                </tr>
                                <tr>
                                    <td><div style="font-weight: bold; padding-right: 20px;"><h6>CPO (Chief Program Officer)</h6></div></td><td><div>Imam Subekti</div></td>
                                </tr>
                                <tr>
                                    <td><div style="font-weight: bold; padding-right: 20px;"><h6>CTO (Chief Technology Officer)</h6></div></td><td><div>Alfian Muhammad</div></td>
                                </tr>
                                </tbody></table>
                            
                        </div>
                    </div>
                    <div class="col-md-12 text-center" style="margin-top:20px;">
                        <a href="contact" class="btn btn-uppercase btn-primary btn-lg">Contact Us</a> 
                    </div>
                </div>
    </div><!--container-->
@endsection
