<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Beranda</title>
    <meta name="description" content="">
    <meta name="title" content="">
    <meta name="author" content="Kejaksaan Negeri Kabupaten Tangerang">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Kejaksaan Negeri Kabupaten Tangerang">
    <link rel="icon" type="image/png" href="https://kejari-kabupatentangerang.kejaksaan.go.id/themes/cms-kejari/assets/images/winter.png">
    <link rel="stylesheet" href="https://kejari-kabupatentangerang.kejaksaan.go.id/plugins/shahiemseymor/poll/assets/css/poll.css">
    <link rel="stylesheet" href="/modules/system/assets/css/snowboard.extras.css">
</head>
<body>
    <!--NAVBAR-->
    @include('navbar')
    <!--NAVBAR-->
    <!--BODY-->
    <carousel id="layout-carousel">
        <section id="carousel">
            <div id="slideshow" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#slideshow" data-bs-slide-to="0" class=""></button>
                    <button type="button" data-bs-target="#slideshow" data-bs-slide-to="1" class="active" aria-current="true"></button>
                </div>
                <div class="carousel-inner">    				
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/kejaksaan1.jpeg" alt="" height="650" width="100%">
                        <div class="carousel-caption"></div>
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/images/kejaksaan2.jpeg" alt="" height="650" width="100%">
                        <div class="carousel-caption"></div>
                    </div>
                </div>
            </div>
        </section>
    </carousel>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-9">
                <div class="container my-4">
                    <div class="col">
                        <h4 class="heading-block mx-2 mt-2 py-4 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <style>svg{fill:#000000}</style>
                                <path d="M96 96c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H80c-44.2 0-80-35.8-80-80V128c0-17.7 14.3-32 32-32s32 14.3 32 32V400c0 8.8 7.2 16 16 16s16-7.2 16-16V96zm64 24v80c0 13.3 10.7 24 24 24H296c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24H184c-13.3 0-24 10.7-24 24zm208-8c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zM160 304c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/>
                            </svg>
                            <b>Berita</b>
                        </h4>
                    </div>
                    <div class="col">
                        <div class="card-group mx-2 mb-2">
                            <div class="card">
                                <img src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/62b/282/a90/62b282a9080e2781941930.jpg" class="card-img-top" style="height: 240px; border-bottom-left-radius: 15px;">
                                <div class="card-img-overlay">
                                    <div class="mask" style="border-bottom-left-radius: 15px;">
                                        <h3><a href="">Berita 1</a></h3>
                                        <small class="text-white" syles>04-07-2023</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/626/771/4b9/6267714b967ec493108512.jpg" class="card-img-top" style="height: 240px">
                                <div class="card-img-overlay">
                                    <div class="mask">
                                        <h3><a href="">Berita 2</a></h3>
                                        <small class="text-white" syles>04-07-2023</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/62b/282/a90/62b282a9080e2781941930.jpg" class="card-img-top" style="height: 240px; border-bottom-right-radius: 15px;">
                                <div class="card-img-overlay">
                                    <div class="mask" style="border-bottom-right-radius: 15px;">
                                        <h3><a href="">Berita 3</a></h3>
                                        <small class="text-white" syles>04-07-2023</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container my-4">
                    <div class="col">
                        <h4 class="heading-block mx-2 mt-2 py-4 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <path d="M256 48C141.1 48 48 141.1 48 256v40c0 13.3-10.7 24-24 24s-24-10.7-24-24V256C0 114.6 114.6 0 256 0S512 114.6 512 256V400.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24H240c-26.5 0-48-21.5-48-48s21.5-48 48-48h32c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40V256c0-114.9-93.1-208-208-208zM144 208h16c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H144c-35.3 0-64-28.7-64-64V272c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64v48c0 35.3-28.7 64-64 64H352c-17.7 0-32-14.3-32-32V240c0-17.7 14.3-32 32-32h16z"/>
                            </svg>
                            <b>Layanan</b>
                        </h4>
                    </div>
                    <div class="row mx-2 mb-2" style="background : #ffffff;">
                        <div class="col-2 d-flex justify-content-center">
                            <a href="https://tilang.kejaksaan.go.id/"><img class="img-thumbnail d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/625/3d8/5c5/6253d85c59627779646657.png" style="height: 100px;"></a>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <a href="https://bukutamu.kejaksaan.go.id/kejaksaan-negeri-kabupaten-tangerang"><img class="img-thumbnail d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/625/3d8/72b/6253d872b82e7783434442.png" style="height: 100px;"></a>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <a href="https://www.lapor.go.id/instansi/kejaksaan-agung-republik-indonesia"><img class="img-thumbnail d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/625/3d8/881/6253d8881751c713736058.png" style="height: 100px;"></a>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <a href="https://ptsp.kejaksaan.go.id/layanan/kejaksaan-agung-republik-indonesia"><img class="img-thumbnail d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/625/3d8/cbb/6253d8cbb43c7649829230.png" style="height: 100px;"></a>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <a href="https://cms-publik.kejaksaan.go.id/"><img class="img-thumbnail d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/625/3d8/9f5/6253d89f58ed2358689378.png" style="height: 100px;"></a>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <a href="https://halojpn.id/home/kn-kabupaten-tangerang"><img class="img-thumbnail d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/62b/28a/acc/62b28aacc9d65353458403.png" style="height: 100px;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3" style="display: flex;">
                <div class="container my-4">
                    <div class="col">
                        <h4 class="heading-block mx-2 mt-2 py-4 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <style>svg{fill:#000000}</style>
                                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                            </svg>
                            <b>Informasi</b>
                        </h4>
                    </div>
                    <div class="col mx-2 mb-2">
                        <div id="slideshow2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slideshow2" data-bs-slide-to="0" class="active" aria-current="true"></button>
                                <button type="button" data-bs-target="#slideshow2" data-bs-slide-to="1" class=""></button>
                                <button type="button" data-bs-target="#slideshow2" data-bs-slide-to="2" class=""></button>
                                <button type="button" data-bs-target="#slideshow2" data-bs-slide-to="3" class=""></button>
                                <button type="button" data-bs-target="#slideshow2" data-bs-slide-to="4" class=""></button>
                            </div>
                            <div class="carousel-inner rounded-bottom">    				
                                <div class="carousel-item active">
                                    <img class="d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/625/e20/a12/625e20a12c4ba361854262.jpg" height="460px;" style="width: 100%;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/625/e21/a59/625e21a59add2301283531.jpg" height="460px;" style="width: 100%;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/625/e21/b7a/625e21b7a45cd839776901.jpg" height="460px;" style="width: 100%;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/625/e21/c89/625e21c89f0ae211109335.jpg" height="460px;" style="width: 100%;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/62b/285/8fd/62b2858fdbe12686050432.png" height="460px;" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="container my-4">
                    <div class="col">
                        <h4 class="heading-block mx-2 mt-2 py-4 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                <style>svg{fill:#000000}</style>
                                <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/>
                            </svg>
                            <b>Video</b>
                        </h4>
                    </div>
                    <div class="col">
                        <div class="card-group mx-2 mb-2">
                            <div class="card">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hObAWQ-7Ttc" style="width: 100%; height: 460px; border-bottom-left-radius: 15px;"></iframe>
                            </div>
                            <div class="card">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kOfxDz1VkDc" style="width: 100%; height: 460px; border-bottom-right-radius: 15px;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="container my-4">
                    <div class="col">
                        <h4 class="heading-block mx-2 mt-2 py-4 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <style>svg{fill:#000000}</style>
                                <path d="M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z"/>
                            </svg>
                            <b>Pejabat Struktural</b>
                        </h4>
                    </div>
                    <div class="col mx-2 mb-2">
                        <div id="slideshow3" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slideshow3" data-bs-slide-to="0" class="active" aria-current="true"></button>
                                <button type="button" data-bs-target="#slideshow3" data-bs-slide-to="1" class=""></button>
                                <button type="button" data-bs-target="#slideshow3" data-bs-slide-to="2" class=""></button>
                                <button type="button" data-bs-target="#slideshow3" data-bs-slide-to="3" class=""></button>
                                <button type="button" data-bs-target="#slideshow3" data-bs-slide-to="4" class=""></button>
                                <button type="button" data-bs-target="#slideshow3" data-bs-slide-to="5" class=""></button>
                                <button type="button" data-bs-target="#slideshow3" data-bs-slide-to="6" class=""></button>
                            </div>
                            <div class="carousel-inner rounded-bottom">    				
                                <div class="carousel-item active">
                                    <img class="d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/625/4f1/e07/6254f1e077d18307218792.png" height="460px;" style="width: 100%;">
                                    <div class="carousel-caption">
                                        <p style="text-align: center;">KASUBAGBIN</p>  
                                    </div>                                
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/625/4f1/fdb/6254f1fdb9788803824782.png" height="460px;" style="width: 100%;">
                                    <div class="carousel-caption">
                                        <p style="text-align: center;">KASI INTEL</p>  
                                    </div>            
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/62f/df7/36e/62fdf736e3f4d252930335.png" height="460px;" style="width: 100%;">
                                    <div class="carousel-caption">
                                        <p style="text-align: center;">KASI PIDUM</p>  
                                    </div>      
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/625/4f2/2c8/6254f22c847c3912758046.png" height="460px;" style="width: 100%;">
                                    <div class="carousel-caption">
                                        <p style="text-align: center;">KASI PIDSUS</p>  
                                    </div>      
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/625/4f2/408/6254f24085f73593178667.png" height="460px;" style="width: 100%;">
                                    <div class="carousel-caption">
                                        <p style="text-align: center;">KASI DATUN</p>  
                                    </div>   
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/625/4f2/52c/6254f252c41ee491202889.png" height="460px;" style="width: 100%;">
                                    <div class="carousel-caption">
                                        <p style="text-align: center;">KASI PENGELOLA BB DAN BARAM</p>  
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="https://kejari-kabupatentangerang.kejaksaan.go.id/storage/app/uploads/public/640/544/eae/640544eae9ce2864359991.png" height="460px;" style="width: 100%;">
                                    <div class="carousel-caption">
                                        <p style="text-align: center;">KEPALA KEJAKSAAN NEGERI KABUPATEN TANGERANG</p>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="container my-4">
                    <div class="col">
                        <h4 class="heading-block mx-2 mt-2 py-4 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <style>svg{fill:#000000}</style>
                                <path d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"/>
                            </svg>
                            <b>Galeri</b>
                        </h4>
                    </div>
                    <div class="col">
                        <p>perlu lightwidget instagram</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="container my-4">
                    <div class="col">
                        <h4 class="heading-block mx-2 mt-2 py-4 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                            <style>svg{fill:#000000}</style>
                            <path d="M280 64h40c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128C0 92.7 28.7 64 64 64h40 9.6C121 27.5 153.3 0 192 0s71 27.5 78.4 64H280zM64 112c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H320c8.8 0 16-7.2 16-16V128c0-8.8-7.2-16-16-16H304v24c0 13.3-10.7 24-24 24H192 104c-13.3 0-24-10.7-24-24V112H64zm128-8a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/>
                        </svg>
                            <b>Survei Kepuasan</b>
                        </h4>
                    </div>
                    <div class="col mx-3 mb-2" align="left">
                        <p>Bagaimana pendapat Anda tentang Layanan yang kami berikan?</p>
                        <form data-request="onPoll" data-request-data="id: 1" data-request-update="'vote::result': '.confirm-container-1'" data-request-success="$('.form-1').hide(1000)" novalidate="true">
                            <div class="form-1">
                                <div class="checkbox">
                                    <label for="1"><input id="1" type="radio" name="vote_answer" value="1"> Sangat Memuaskan</label>
                                </div>
                                <div class="checkbox">
                                    <label for="2"><input id="2" type="radio" name="vote_answer" value="2"> Memuaskan</label>
                                </div>
                                <div class="checkbox">
                                    <label for="3"><input id="3" type="radio" name="vote_answer" value="3"> Cukup Memuaskan</label>
                                </div>
                                <div class="checkbox">
                                    <label for="4"><input id="4" type="radio" name="vote_answer" value="4"> Kurang Memuaskan</label>
                                </div>
                                <button type="submit" class="btn btn-warning mt-3">Vote</button>
                            </div>
                            <div class="confirm-container-1">
                                <!--This will contain the poll result -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--BODY-->
    <!--FOOTER-->
    @include('footer')
    <!--FOOTER-->
</body>
</html>