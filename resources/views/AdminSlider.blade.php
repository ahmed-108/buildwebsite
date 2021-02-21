@extends('layouts.master')
 @section("content")
     <div class="container-fluid">
        <div class="row">
            @if(session()->has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif
            @if(session()->has('messageerror'))
                <div class="alert alert-danger">{{Session::get('messageerror')}}</div>
            @endif
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
  @stop
