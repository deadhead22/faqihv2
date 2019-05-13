@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.blog'))

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <h3 class="title-content">Blog</h3>
            </div>
        </div>
        <div class="row">
                        <div class="col-md-12">
                                        <div class="media">
                            <div class="col-md-2">
                                <a href="/articles/detail/1"><img src="/frontend/img/articles/1/200x_200x200_500_F_82174184_Flccwl3Dj0t9DZ5HIhTLA1trcPVGJNuP%281%29.jpg" class="" style="max-height: 200px;max-width: 100%;" alt=""></a>                        </div>
                            <div class="col-md-10">
                                                            
                                <h3 class="media-heading">
                                    <a href="/articles/detail/1" class="">Greeting from Talepo</a>                            </h3>
                                <div class="blog-info">
                                    <span><i class="fa fa-user"></i> Talepo Admin </span>
                                    <span><i class="fa fa-calendar"></i>
                                        January 20th, 2019 06:23 PM  
                                    </span>
                                </div>


                                <p style="margin-top: 40px; margin-bottom: 40px">Selamat datang di&nbsp;Talepo!</p>
                                
                                <p class="text-left">
                                    <a href="/articles/detail/1" class="btn btn-primary btn-sm">Read More</a>                            </p>
                            </div>
                        </div>
                    
                                    <div class="clearfix"></div>   

                </div>
                
                </div>
    </div>
@endsection
