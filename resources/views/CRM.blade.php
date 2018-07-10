
@extends('layouts.layout')       
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Client Relation Management Form
        <small>Codesastra</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- <div class="row"> -->
        <!-- left column -->
       <!--  <div class="col-md-12"> -->
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Personal</b> Details</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
        <div class="row">
            <form role="form" action="{{url('crmdb')}}" method="post">

              {{csrf_field()}}
            <div class="box-body">
         <div class="col-md-6">
                <div class="form-group">
                  <div class="row">
                   <div class="col-md-3">
                      <label for="Name"> <b>Name</b> </label>
                   </div>
                   <div class="col-md-8">
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                     @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                   </div>
                   <!-- @if ($errors->has('name'))
                   <div class="error"> {{$errors->first('name')}}</div>
                   @endif -->
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="address">Address</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                       @if($errors->has('address'))
                        <span class="text-danger">{{$errors->first('address')}}</span>
                        @endif
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="position">Position</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" class="form-control" id="position" placeholder="Position" name="position">
                      @if ($errors->has('position'))
                        <span class="text-danger">{{ $errors->first('position') }}</span>
                      @endif
                    </div>
                    </div>
                  </div>
                <div class="form-group"> 
                  <div class="row">
                    <div class="col-md-3">
                      <label for="gender"> Gender </label>
                    </div>
                        <span style="padding-left: 10px;"> 
                          <label style="font-style: all; font-weight: 10;" for="Gender">Male
                            <input type="radio" class="form-control" id="male" name="gender" value="male">
                          </label>
                      </span>
                        <span style="padding-left: 30px;">
                          <label style="font-style: all; font-weight: 10;"for="Gender">Female 
                            <input type="radio"class="form-control"id="female" name="gender" value="female">
                          </label>
                        </span>
                        <span style="padding-left:20px;"> 
                          <label style="font-style: all; font-weight: 10;"for="Gender">Other
                            <input type="radio" class="form-control" id="Other" name="gender" value="other">
                          </label>
                        </span>
                    </div>
                      @if ($errors->has('gender'))
                          <span class="text-danger" style="padding-left:100px;"> {{ $errors->first('gender')}}</span>
                      @endif
                  </div>
                  <div class="form-group"> 
                  <div class="row">
                    <div class="col-md-3">
                      <label for="Married"> Married </label>
                    </div>
                      <span style="padding-left: 10px;"> 
                         <label style="font-style: all; font-weight: 10;" for="Married" >Yes
                          <input type="radio" class="form-control" id="yes" name="married" value="yes">
                         </label> 
                       </span>
                      <span style="padding-left:40px;"> 
                        <label style="font-style: all; font-weight: 10;"for="Married">No  
                          <input type="radio" class="form-control" id="no" name="married" value="no">
                        </label>
                      </span>
                    </div>
                     @if($errors->has('married'))
                        <span class="text-danger" style="padding-left: 100px;"> {{ $errors->first('married')}}</span>
                      @endif
                  </div>
                  </div>
               
            <div class="col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="Moblie">Mobile</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" class="form-control" id="mobile" placeholder="Mobile Number" name="mobile">
                      @if($errors->has('mobile'))
                        <span class="text-danger"> {{ $errors->first('mobile')}}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="Email">Email</label>
                    </div>
                    <div class="col-md-8">
                      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                      @if($errors->has('email'))
                        <span class="text-danger"> {{ $errors->first('email')}}</span>
                      @endif                    
                    </div>

                  </div>  
                </div>
                 <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="DOB">DOB</label>
                    </div>
                    <div class="col-md-8">
                      <input type="date" class="form-control" id="DOB" placeholder="DOB" name="dob">
                      @if($errors->has('dob'))
                        <span class="text-danger"> {{ $errors->first('dob')}}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="Anniversary">Anniversary</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" class="form-control" id="anniversary" placeholder="Anniversary Date if married" name="anniversary">
                      @if( $errors->has('anniversary'))
                        <span class="text-danger"> {{  $errors->first('anniversary')}} </span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="submit" id="submit" class="btn btn-primary"name="Submit">
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </section>
    </div>
@endsection()
          <!-- /.box -->
