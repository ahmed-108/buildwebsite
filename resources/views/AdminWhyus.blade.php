@extends('layouts.master')
 @section("content")
     <!--About-->
     <div class='container' style="text-align: center; margin-bottom: 20px;text-align-last: center;"id='whyus'>
         <div class="row">
             <form autocomplete="off" method="post" action="{{route('category.updateus')}}">
                 @csrf
                 <h1 class='text-center 'style="color: #ff5a00;margin-bottom: 60px;">Edit Why Us Field</h1>
                 @if(session()->has('message'))
                     <div class="alert alert-success">{{Session::get('message')}}</div>
                 @endif
                 @foreach($AllData as $data)
                 <div class='col-xl-2 col-lg-2 col-md-6 col-sm-12' style="float: right;"><br>
                     <i class="{{$data->icon1}}" style="color: #ff5a00;font-size: 3pc;"></i><br>
                     <label for="icon1" class="text-light">icon</label>
                     <input type="text"class="form-control"id="icon1" name="icon1"value="{{$data->icon1}}">
                     <label for="caption1" class="text-light">Caption</label>
                     <input type="text"class="form-control"id="caption1" name="caption1"value="{{$data->caption1}}">
                 </div>
                 <div class='col-xl-2 col-lg-2 col-md-6 col-sm-12'><br>
                     <i class="{{$data->icon2}}" style="color: #ff5a00;font-size: 3pc;"></i><br>
                     <label for="icon2" class="text-light">icon</label>
                     <input type="text"class="form-control"id="icon2" name="icon2"value="{{$data->icon2}}">
                     <label for="caption2" class="text-light">Caption</label>
                     <input type="text"class="form-control"id="caption2" name="caption2"value="{{$data->caption2}}">
                 </div>
                 <div class='col-xl-2 col-lg-2 col-md-6 col-sm-12' style="float: right;"><br>
                     <i class="{{$data->icon3}}" style="color: #ff5a00;font-size: 3pc;"></i><br>
                     <label for="icon3" class="text-light">icon</label>
                     <input type="text"class="form-control"id="icon3" name="icon3"value="{{$data->icon3}}">
                     <label for="caption3" class="text-light">Caption</label>
                     <input type="text"class="form-control"id="caption3" name="caption3"value="{{$data->caption3}}">
                 </div>
                 <div class='col-xl-2 col-lg-2 col-md-6 col-sm-12'><br>
                     <i class="{{$data->icon4}}" style="color: #ff5a00;font-size: 3pc;"></i><br>
                     <label for="icon4" class="text-light">icon</label>
                     <input type="text"class="form-control"id="icon4" name="icon4"value="{{$data->icon4}}">
                     <label for="caption4" class="text-light">Caption</label>
                     <input type="text"class="form-control"id="caption4" name="caption4"value="{{$data->caption4}}">
                 </div>
                 <div class='col-xl-2 col-lg-2 col-md-6 col-sm-12' style="float: right;"><br>
                     <i class="{{$data->icon5}}" style="color: #ff5a00;font-size: 3pc;"></i><br>
                     <label for="icon5" class="text-light">icon</label>
                     <input type="text"class="form-control"id="icon5" name="icon5"value="{{$data->icon5}}">
                     <label for="caption5" class="text-light">Caption</label>
                     <input type="text"class="form-control"id="caption5" name="caption5"value="{{$data->caption5}}">
                 </div>
                 <div class='col-xl-2 col-lg-2 col-md-6 col-sm-12'id='why' ><br>
                     <i class="{{$data->icon6}}" style="color: #ff5a00;font-size: 3pc;"></i><br>
                     <label for="icon6" class="text-light">icon</label>
                     <input type="text"class="form-control"id="icon6" name="icon6"value="{{$data->icon6}}">
                     <label for="caption6" class="text-light">Caption</label>
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
     <!--About-->

  @stop
