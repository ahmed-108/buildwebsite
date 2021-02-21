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
             <form class="col-xl-6 col-lg-6" style="width: 30%;margin-left: 35%;margin-top: 15%;" autocomplete="off" method="POST" action="{{route('category.updatepage')}}"  enctype="multipart/form-data">
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
                     <input accept="image/*" type="file" class="form-control" id="filevideo"  name="background">
                 </div>
                 <div class="col-auto"style="text-align: center;" >
                     <button type="submit" class="btn btn-outline-warning">Save changes</button>
                 </div>
                 @endforeach
          </form>
        </div>
     </div>
  @stop
