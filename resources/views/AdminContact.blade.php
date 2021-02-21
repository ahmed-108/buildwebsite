@extends('layouts.master')
 @section("content")
     <!--About-->
             @if(session()->has('message'))
                 <div class="alert alert-success">{{Session::get('message')}}</div>
             @endif
           <form autocomplete="off" method="POST" action="{{route('category.updatecontact')}}" style="width: 30%;margin-top: 15%;float: left;" enctype="multipart/form-data">
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
               <div class="col-auto" >
                   <button type="submit" class="btn btn-outline-warning">Save changes</button>
               </div>
           </form>

     <form autocomplete="off" method="POST" action="{{route('category.logo')}}" style="margin-top: 15%;float: left;width: 30%;margin-left: 10%;" enctype="multipart/form-data">
         @csrf

         @if(session()->has('messageerror'))
             <div class="alert alert-danger">{{Session::get('messageerror')}}</div>
         @endif
         @foreach($AllData as $data)
         <div class='col-xl-6 col-lg-6 col-md-6 col-sm-12' >
             <img src="imagesAndVideos\Picture\{{$data->logocont}}" class="d-block w-100" alt="logo">
             <div class="text-light">Your Logo</div> <input type="file" class="form-control" id="floatingInput" name="logocont" accept="image/*">
         </div>
         <div class="col-auto" >
             <button type="submit" class="btn btn-outline-warning">Upload Logo</button>
         </div>
         @endforeach
     </form>


     <div class="container-fluid">
         <div class="row" style="margin-top: 20%;">
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                 <a href="{{route('category.delform')}}" >
                     <button type="button" class="btn btn-outline-warning" >delete Contact form </button>
                 </a>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                 <a href="{{route('category.addform')}}" >
                     <button type="button" class="btn btn-outline-warning" >add contact form </button>
                 </a>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                 <a href="{{route('category.delname')}}" >
                     <button type="button" class="btn btn-outline-warning" >delete name field from contact form</button>
                 </a>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                 <a href="{{route('category.addname')}}" >
                     <button type="button" class="btn btn-outline-warning" >add name field from contact form</button>
                 </a>
             </div>
         </div>
     </div>
     <form autocomplete="off" method="POST" action="{{route('category.backgroundcolor')}}" style="margin-top: 6%;width: 30%;" enctype="multipart/form-data">
         @csrf
         <label for="floatingInput1" class="text-light">Background color of footer</label>

         <input type="text" class="form-control" id="floatingInput1"  name="background_color" value="{{$data->background_color}}">
         <div class="col-auto" >
             <button type="submit" class="btn btn-outline-warning">edit background</button>
         </div>
     </form>
     <!--About-->

  @stop
