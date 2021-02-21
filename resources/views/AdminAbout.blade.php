@extends('layouts.master')
@section("content")
    <div class="accordion accordion-flush" id="accordionFlushExample" style="margin-top: 3pc;">
        @if(session()->has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
        @if(session()->has('messageerror'))
            <div class="alert alert-danger">{{Session::get('messageerror')}}</div>
        @endif
        <!--Navbar-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Navbar Section
                    </button>
                </h2>
                <div id="flush-collapseOne"class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body ">
                        <form autocomplete="off" method="POST" action="{{route('category.logo')}}" style="margin-top: 1%;float: left;width: 45%;margin-left: 40%;" enctype="multipart/form-data">
                            @csrf
                            @foreach($AllData as $data)
                                <div class='col-xl-6 col-lg-6 col-md-6 col-sm-12' >
                                    <img src="imagesAndVideos\Picture\{{$data->logocont}}" class="d-block w-100" alt="logo">
                                    <div class="text-dark">Your Logo</div> <input type="file" class="form-control" id="floatingInput" name="logocont" accept="image/png">
                                </div>
                                <div class='col-xl-6 col-lg-6 col-md-6 col-sm-12' >
                                    <div class="text-dark">Background Navbar</div>
                                    <input type="color" class="form-control" id="color" onchange="fetchcolor();" value="{{$data->backgroundnav}}">
                                    <input type="hidden" name="backgroundnav" id="txtcolor">
                                </div>
                                <div class="col-auto" style="float: left;">
                                    <button type="submit" class="btn btn-outline-warning">Save Changes</button>
                                </div>
                                <a href="{{route('category.deleteNavbar')}}" >
                                    <button type="button" class="btn btn-outline-warning" style="margin-right: 15pc;float: right;">delete Navbar section </button>
                                </a>
                            @endforeach
                        </form>
                        <script>
                            function fetchcolor(){
                                var get=document.getElementById('color').value;
                                document.getElementById('txtcolor').value=get;
                            }
                        </script>
                    </div>
                </div>
            <!--Navbar-->

            <!--Content-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Content Your Website
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="col-xl-6 col-lg-6" style="margin-top: 3%;float: left;width: 35%;margin-left: 35%;" autocomplete="off" method="POST" action="{{route('category.updatepage')}}"  enctype="multipart/form-data">
                            @csrf
                            @foreach($AllData as $data)
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="namewebsite" value="{{$data->namewebsite}}">
                                    <label for="floatingInput">Name The Website</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                    <label for="floatingInput">Description of The Website</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="text-dark">Background Image</div>
                                    <input accept="image/*" type="file" class="form-control" id="filevideo"  name="background">
                                </div>
                                <div class="col-auto"style="float: left;" >
                                    <button type="submit" class="btn btn-outline-warning">Save changes</button>
                                </div>
                                <a href="{{route('category.delcontent')}}" >
                                    <button type="button" class="btn btn-outline-warning" style="float: right">Delete Content Section </button>
                                </a>
                                <script>
                                    function fetchcolor2(){
                                        var get2=document.getElementById('color2').value;
                                        document.getElementById('txtcolor2').value=get2;
                                    }
                                </script>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        <!--Content-->

        <!--About us-->
            <div class="accordion-item">
                <h2 class="accordion-header " id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        About Us Section
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="col-xl-6 col-lg-6" style="margin-top: 3%;float: left;width: 40%;margin-left: 32%;" autocomplete="off" method="POST" action="{{route('category.update')}}"  enctype="multipart/form-data">
                            @csrf
                            @foreach($AllData as $data)
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="namebrand" value="{{$data->namebrand}}">
                                    <label for="floatingInput">Name The Website</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="about" value="{{$data->about}}">
                                    <label for="floatingInput">About Field</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="text-dark">Video for about us</div>
                                    <input accept="video/*" type="file" class="form-control" id="filevideo"  name="video">
                                </div>
                                <div class="col-auto"style="float: left;" >
                                    <button type="submit" class="btn btn-outline-warning">Save changes</button>
                                </div>
                                <a href="{{route('category.delete')}}" >
                                    <button type="button" class="btn btn-outline-warning" style="float: right;">delete About section </button>
                                </a>
                                <a href="{{route('category.deletevideo')}}" >
                                    <button type="button" class="btn btn-outline-warning" style="float: left;margin-left: 2pc;">delete video </button>
                                </a>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        <!--About us-->

        <!--Why us-->
            <div class="accordion-item">
                <h2 class="accordion-header " id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Why Us Section
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class='container' style="text-align: center; margin-bottom: 20px;text-align-last: center;"id='whyus'>
                            <div class="row">
                                <form autocomplete="off" method="post" action="{{route('category.updateus')}}">
                                    @csrf
                                    <h1 class='text-center text-dark'style="margin-bottom: 60px;">Edit Why Us Field</h1>
                                    @foreach($AllData as $data)
                                        <div class='col-xl-2 col-lg-2 col-md-6 col-sm-12' style="float: right;"><br>
                                            <i class="{{$data->icon1}}" style="color: #ff5a00;font-size: 3pc;"></i><br>
                                            <label for="icon1" class="text-dark">icon</label>
                                            <input type="text"class="form-control"id="icon1" name="icon1"value="{{$data->icon1}}">
                                            <label for="caption1" class="text-dark">Caption</label>
                                            <input type="text"class="form-control"id="caption1" name="caption1"value="{{$data->caption1}}">
                                        </div>
                                        <div class='col-xl-2 col-lg-2 col-md-6 col-sm-12'><br>
                                            <i class="{{$data->icon2}}" style="color: #ff5a00;font-size: 3pc;"></i><br>
                                            <label for="icon2" class="text-dark">icon</label>
                                            <input type="text"class="form-control"id="icon2" name="icon2"value="{{$data->icon2}}">
                                            <label for="caption2" class="text-dark">Caption</label>
                                            <input type="text"class="form-control"id="caption2" name="caption2"value="{{$data->caption2}}">
                                        </div>
                                        <div class='col-xl-2 col-lg-2 col-md-6 col-sm-12' style="float: right;"><br>
                                            <i class="{{$data->icon3}}" style="color: #ff5a00;font-size: 3pc;"></i><br>
                                            <label for="icon3" class="text-dark">icon</label>
                                            <input type="text"class="form-control"id="icon3" name="icon3"value="{{$data->icon3}}">
                                            <label for="caption3" class="text-dark">Caption</label>
                                            <input type="text"class="form-control"id="caption3" name="caption3"value="{{$data->caption3}}">
                                        </div>
                                        <div class='col-xl-2 col-lg-2 col-md-6 col-sm-12'><br>
                                            <i class="{{$data->icon4}}" style="color: #ff5a00;font-size: 3pc;"></i><br>
                                            <label for="icon4" class="text-dark">icon</label>
                                            <input type="text"class="form-control"id="icon4" name="icon4"value="{{$data->icon4}}">
                                            <label for="caption4" class="text-dark">Caption</label>
                                            <input type="text"class="form-control"id="caption4" name="caption4"value="{{$data->caption4}}">
                                        </div>
                                        <div class='col-xl-2 col-lg-2 col-md-6 col-sm-12' style="float: right;"><br>
                                            <i class="{{$data->icon5}}" style="color: #ff5a00;font-size: 3pc;"></i><br>
                                            <label for="icon5" class="text-dark">icon</label>
                                            <input type="text"class="form-control"id="icon5" name="icon5"value="{{$data->icon5}}">
                                            <label for="caption5" class="text-dark">Caption</label>
                                            <input type="text"class="form-control"id="caption5" name="caption5"value="{{$data->caption5}}">
                                        </div>
                                        <div class='col-xl-2 col-lg-2 col-md-6 col-sm-12'id='why' ><br>
                                            <i class="{{$data->icon6}}" style="color: #ff5a00;font-size: 3pc;"></i><br>
                                            <label for="icon6" class="text-dark">icon</label>
                                            <input type="text"class="form-control"id="icon6" name="icon6"value="{{$data->icon6}}">
                                            <label for="caption6" class="text-dark">Caption</label>
                                            <input type="text"class="form-control"id="caption6" name="caption6"value="{{$data->caption6}}">
                                        </div>
                                        <div class="col-auto"style="float: left;">
                                            <button type="submit" class="btn btn-outline-warning">Save changes</button>
                                        </div>
                                        <a href="{{route('category.deletewhyus')}}" >
                                            <button type="button" class="btn btn-outline-warning" style="float: right;">delete Why us section </button>
                                        </a>
                                    @endforeach
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--Why us-->

        <!--Gallery-->
            <div class="accordion-item">
                <h2 class="accordion-header " id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Gallery Section
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="container-fluid">
                            <div class="row">
                                @foreach($AllData as $data)
                                    <a href="{{route('category.deleteslider')}}" >
                                        <button type="button" class="btn btn-outline-warning" style="float: right;">delete Gallery section </button>
                                    </a>
                                    <form class="col-xl-6 col-lg-6" autocomplete="off" method="POST" action="{{route('category.updatepic1')}}" style="float: right;" enctype="multipart/form-data">
                                        @csrf
                                        <div class='col-xl-6 col-lg-6 col-md-6 col-sm-12' >
                                            <img src="imagesAndVideos\Picture\{{$data->sliderpic1}}" class="d-block w-100" alt="picture 1"style="height: 250px;">
                                            <input type="file" class="form-control" id="floatingInput" name="sliderpic1" accept="image/*">
                                        </div>
                                        <a href="{{route('category.deletepic1')}}"><button type="button" class="btn btn-outline-warning">delete picture 1</button></a>
                                        <div class="col-auto" style="float: left;">
                                            <button type="submit" class="btn btn-outline-warning">Upload picture 1</button>
                                        </div>
                                    </form>
                                    <form class="col-xl-6 col-lg-6" style="float: right;" autocomplete="off" method="POST" action="{{route('category.updatepic2')}}"  enctype="multipart/form-data">
                                        @csrf
                                        <div class='col-xl-6 col-lg-6 col-md-6 col-sm-12' >
                                            <img src="imagesAndVideos\Picture\{{$data->sliderpic2}}" class="d-block w-100" alt="picture 2"style="height: 250px;">
                                            <input type="file" class="form-control" id="floatingInput" name="sliderpic2" accept="image/*">
                                        </div>
                                        <a href="{{route('category.deletepic2')}}"><button type="button" class="btn btn-outline-warning">delete picture 2</button></a>
                                        <div class="col-auto"style="float: left;">
                                            <button type="submit" class="btn btn-outline-warning">Upload picture 2</button>
                                        </div>
                                    </form>
                                    <form class="col-xl-6 col-lg-6" style="float: left;"autocomplete="off" method="POST" action="{{route('category.updatepic3')}}"  enctype="multipart/form-data">
                                        @csrf
                                        <div class='col-xl-6 col-lg-6 col-md-6 col-sm-12' >
                                            <img src="imagesAndVideos\Picture\{{$data->sliderpic3}}" class="d-block w-100" alt="picture 3"style="height: 250px;">
                                            <input type="file" class="form-control" id="floatingInput" name="sliderpic3" accept="image/*">
                                        </div>
                                        <a href="{{route('category.deletepic3')}}"><button type="button" class="btn btn-outline-warning">delete picture 3</button></a>
                                        <div class="col-auto"style="float: left;">
                                            <button type="submit" class="btn btn-outline-warning">Upload picture 3</button>
                                        </div>
                                    </form>
                                    <form class="col-xl-6 col-lg-6" style="float: right;" autocomplete="off" method="POST" action="{{route('category.updatepic4')}}"  enctype="multipart/form-data">
                                        @csrf
                                        <div class='col-xl-6 col-lg-6 col-md-6 col-sm-12' >
                                            <img src="imagesAndVideos\Picture\{{$data->sliderpic4}}" class="d-block w-100" alt="picture 4"style="height: 250px;">
                                            <input type="file" class="form-control" id="floatingInput" name="sliderpic4" accept="image/*">
                                        </div>
                                        <a href="{{route('category.deletepic4')}}"><button type="button" class="btn btn-outline-warning">delete picture 4</button></a>
                                        <div class="col-auto" style="float: left;">
                                            <button type="submit" class="btn btn-outline-warning">Upload picture 4</button>
                                        </div>
                                    </form>
                                    @endforeach
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--Gallery-->

        <!--Contact us-->
            <div class="accordion-item">
                <h2 class="accordion-header " id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        Contact Section
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form autocomplete="off" method="POST" action="{{route('category.updatecontact')}}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                @foreach($AllData as $data)
                                    <input type="email"class="form-control" id="floatingInput"  name="emailcompany" value="{{$data->emailcompany}}">
                                    <label for="floatingInput">Email</label>
                                @endforeach
                            </div>
                            <div class="form-floating mb-3">
                                @foreach($AllData as $data)
                                    <input type="text" pattern="\d*" title="that's must contain numbers only" class="form-control" id="floatingInput"  name="tel" value="{{$data->tel}}">
                                    <label for="floatingInput">Tel</label>
                                @endforeach
                            </div>
                            <div class="form-floating mb-3">
                                @foreach($AllData as $data)
                                    <input type="text" pattern="\d*" title="that's must contain numbers only" class="form-control" id="floatingInput"  name="fax" value="{{$data->fax}}">
                                    <label for="floatingInput">fax</label>
                                @endforeach
                            </div>
                            <div class='form-floating mb-3' >
                                <div class="text-dark">Background Footer</div>
                                <input type="color" class="form-control" id="color1" onchange="fetchcolor1();" value="{{$data->background_color}}">
                                <input type="hidden" name="background_color" id="txtcolor1">
                            </div>

                            <div class="col-auto" style="float: left;">
                                <button type="submit" class="btn btn-outline-warning">Save changes</button>
                            </div>
                            <a href="{{route('category.delform')}}" >
                                <button type="button" class="btn btn-outline-warning" style="float: right;">delete Contact us Form </button>
                            </a>
                            <a href="{{route('category.addform')}}" >
                                <button type="button" class="btn btn-outline-warning" style="float: right;">Add Contact us Form </button>
                            </a>
                            <a href="{{route('category.delname')}}" >
                                <button type="button" class="btn btn-outline-warning" style="float: right;">Delete name field </button>
                            </a>
                            <a href="{{route('category.addname')}}" >
                                <button type="button" class="btn btn-outline-warning" style="float: right;">Add name field </button>
                            </a>
                            <a href="{{route('category.delcontactsec')}}" >
                                <button type="button" class="btn btn-outline-warning" style="float: right;">delete contact us section </button>
                            </a>
                            <a href="{{route('category.showcontact')}}" >
                                <button type="button" class="btn btn-outline-warning" style="float: right;">add contact us section</button>
                            </a>
                            <script>
                                function fetchcolor1(){
                                    var get1=document.getElementById('color1').value;
                                    document.getElementById('txtcolor1').value=get1;
                                }
                            </script><br><br>
                        </form>

                    </div>
                </div>
            </div>
        <!--Contact us-->
        </div>

@stop
