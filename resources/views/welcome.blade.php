<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css.css" rel="stylesheet">
    <style>
        @foreach($AllData as $data)
        body{
            background-image:url("public/{{$data->background}}"),url("https://wallpaperaccess.com/full/1924548.jpg");
        }
        @endforeach
    </style>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>SoundCloud</title>
</head>
<body>
<div class="container-fluid" style="margin: 0px;padding: 0px;">

    <!--navbar-->
    @foreach($AllData as $data)
      @if($data->logocont!=null)
            <nav class="navbar navbar-expand-lg navbar navbar-dark "style="padding: 0;background-color: {{$data->backgroundnav}};">
                <div class="container-fluid"style="padding: 0;">
                    @foreach($AllData as $data)
                    <a class="navbar-brand" href="/"><img class="imglogo" src="imagesAndVideos\Picture\{{$data->logocont}}"></a>
                    @endforeach
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            @foreach($AllData as $data)
                                @if($data->sliderpic1!=null and$data->sliderpic2!=null and$data->sliderpic3!=null and$data->sliderpic4!=null )
                                    <li class="nav-item">
                                        <a class="nav-link" href="#gallery">Gallery</a>
                                    </li>
                                @endif
                            @endforeach
                            @foreach($AllData as $data)
                                @if($data->namebrand!=null and $data->about!=null)
                            <li class="nav-item">
                                <a class="nav-link" href="#aboutus">About Us</a>
                            </li>
                                @endif
                            @endforeach
                            @foreach($AllData as $data)
                                @if($data->icon1 and$data->icon2 and$data->icon3 and$data->icon4 and$data->icon5 and$data->icon6 and$data->caption1 and$data->caption2 and$data->caption3 and$data->caption4 and$data->caption5 and$data->caption5 )
                                    <li class="nav-item">
                                        <a class="nav-link" href="#whyus">Why Us</a>
                                    </li>
                                @endif
                            @endforeach
                            <li class="nav-item">
                                <a class="nav-link" href="#contactus">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
     @endif
    @endforeach
    <!--navbar-->

    <!--content-->
    <div class="container-fluid" style="    margin-bottom: 24pc;">
        @foreach($AllData as $data)
            <h1 class="text-center text-light"style="padding:9pc 0px 20px 1px;">{{$data->namewebsite}}</h1>
            <p class="text-center text-light" id="p1">{{$data->description}}</p>
           @if($data->namebrand!=null and $data->about!=null)
            <div class="row-cols-6 "style="text-align:center">
                <a href="#aboutus" >   <button type="button" class="btn btn-outline-warning"id='learnmore'>Learn More</button></a>
            </div>
            @elseif($data->icon1 and$data->icon2 and$data->icon3 and$data->icon4 and$data->icon5 and$data->icon6 and$data->caption1 and$data->caption2 and$data->caption3 and$data->caption4 and $data->caption5 and$data->caption6 )
                    <div class="row-cols-6 "style="text-align:center">
                        <a href="#whyus" >   <button type="button" class="btn btn-outline-warning"id='learnmore'>Learn More</button></a>
                    </div>
            @elseif($data->sliderpic1!=null and$data->sliderpic2!=null and$data->sliderpic3!=null and$data->sliderpic4!=null )
                    <div class="row-cols-6 "style="text-align:center">
                        <a href="#gallery" >   <button type="button" class="btn btn-outline-warning"id='learnmore'>Learn More</button></a>
                    </div>
             @else
               <br>
            @endif
        @endforeach
    </div>
    <!--content-->

    <!--About us-->
    <div class="container-fluid" style="border-bottom: 1px solid #524e4e; margin-bottom: 20px;text-align-last: center;"id="aboutus">
        <div class="row"style="place-content: center;">
            @foreach($AllData as $data)
                @if($data->namebrand!=null and $data->about!=null)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <h1 class="text-center"style="color:#ff5a00;overflow-wrap: break-word;" >About {{$data->namebrand}}?</h1>
                            <p class="text-center text-light" style="margin:10px;word-break: break-all;">{{$data->about}}</p>
                    </div>

                        @if($data->video!=null)
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <video class="col-sm-12 col-12" src="imagesAndVideos\Video\{{$data->video}}" controls autoplay >
                                    </video>
                            </div>
                        @endif
                @endif
            @endforeach
        </div>
    </div>

    <!--About us-->

    <!--Why souncloud-->
    @foreach($AllData as $data)
        @if($data->icon1 and$data->icon2 and$data->icon3 and$data->icon4 and$data->icon5 and$data->icon6 and$data->caption1 and$data->caption2 and$data->caption3 and$data->caption4 and$data->caption5 and$data->caption6 )
            <div class='container' style="text-align: center; margin-bottom: 20px;text-align-last: center;"id='whyus'>
                <div class="row">
                        <h1 class='text-center 'style="color: #ff5a00;">Why SoundCloud?</h1>
                        <div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'id='why'>
                            <i class="{{$data->icon1}}" style="color: #ff5a00;font-size: 3pc;"></i>
                            <p>{{$data->caption1}}</p>
                        </div>
                        <div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'id='why'>
                            <i class="{{$data->icon2}}"style="color: #ff5a00;font-size: 3pc;"></i>
                            <p>{{$data->caption2}}</p>

                        </div>
                        <div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'id='why'>
                            <i class="{{$data->icon3}}"style="color: #ff5a00;font-size: 3pc;"></i>
                            <p>{{$data->caption3}}</p>

                        </div>
                        <div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'id='why'>
                            <i class="{{$data->icon4}}"style="color: #ff5a00;font-size: 3pc;"></i>
                            <p>{{$data->caption4}}</p>

                        </div>
                        <div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'id='why'>
                            <i class="{{$data->icon5}}"style="color: #ff5a00;font-size: 3pc;"></i>
                            <p>{{$data->caption5}}</p>

                        </div>
                        <div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'id='why'>
                            <i class="{{$data->icon6}}"style="color: #ff5a00;font-size: 3pc;"></i>
                            <p>{{$data->caption6}}</p>
                        </div>
                </div>
            </div>
        @endif
    @endforeach
    <!--Why souncloud-->
    <!--Gallery-->
    @foreach($AllData as $data)
        @if($data->sliderpic1!=null and$data->sliderpic2!=null and$data->sliderpic3!=null and$data->sliderpic4!=null )
            <div class='container' style="border-bottom: 1px solid #524e4e; margin-bottom: 20px;border-top: 1px solid #524e4e;"id='gallery'>
              <div class="row">
                <div id="carouselExampleControls" class="carousel slide col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="imagesAndVideos\Picture\{{$data->sliderpic1}}" class="d-block w-100" alt="picture 1">
                            </div>
                            <div class="carousel-item" style="height: 500px;">
                                <img src="imagesAndVideos\Picture\{{$data->sliderpic2}}" class="d-block w-100" alt="picture 2">
                            </div>
                            <div class="carousel-item"style="height: 500px;">
                                <img src="imagesAndVideos\Picture\{{$data->sliderpic3}}" class="d-block w-100" alt="picture 3">
                            </div>
                            <div class="carousel-item"style="height: 500px;">
                                <img src="imagesAndVideos\Picture\{{$data->sliderpic4}}" class="d-block w-100" alt="picture 4">
                            </div>
                        </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
              </div>
            </div>
        @endif
    @endforeach
    <!--Gallery-->
   <!--Footer-->
    <hr style="color: white;height: 2px;">
    @foreach($AllData as $data)
        <footer clas="footer" id="contactus" style="background-color: {{$data->background_color}}">
            <div class="container">
                <div class="row"style="text-align-last: center;">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            @if($data->contact!=null)
                                <h1 id="h1">Contact Us</h1>
                                <form autocomplete="off">
                                    @if($data->contact_name!=null)
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Your name">
                                        <label for="floatingInput">Your name</label>

                                    </div>
                                    @endif
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="Your email">
                                        <label for="floatingInput">Your email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Email subject">
                                        <label for="floatingInput">Email subject</label>
                                    </div>
                                    <div class="form-group purple-border">
                                        <textarea class="form-control" id="exampleFormControlTextarea4"  placeholder="Your message.."></textarea>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-outline-warning">Send message</button>
                                    </div>
                                </form>
                            @endif
                    </div>
                    @if($data->contact_section!=null)
                        @if($data->contact!=null)
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <img class="imgfooter" src="imagesAndVideos\Picture\{{$data->logocont}}">
                                    <h5 class="text-light">Email: {{$data->emailcompany}}</h5>
                                    <h5 class="text-light">Tel:{{$data->tel}}</h5>
                                    <h5 class="text-light">fax:{{$data->fax}}</h5>
                            </div>
                        @else
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <h1 id="h1">Contact Us</h1>
                                    <img class="imgfooter" src="imagesAndVideos\Picture\{{$data->logocont}}">
                                    <h5 class="text-light">Email: {{$data->emailcompany}}</h5>
                                    <h5 class="text-light">Tel:{{$data->tel}}</h5>
                                    <h5 class="text-light">fax:{{$data->fax}}</h5>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </footer>
    @endforeach
     <!--Footer-->
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
