
<!------ Include the above in your HEAD tag ---------->
@extends('layouts.layout')
@section('content')
<div class="col-md-8 col-sm-12 col-xs-12">
  <div class="panel-group">
    <div class="title">
      <h2>Marketing Day Book</h2>
    </div>

    <form action="{{route('form')}}" method="POST" enctype="multipart/form-data" >
      {{  csrf_field() }}
      <div class="reg-block">
        <fieldset>
          <legend>#Staffname</legend>
        </fieldset>
      </div>
      <div class="reg-block">
        <fieldset>
          <div class="row"></div>
        </fieldset>
      </div>
      <div class="reg-block">
        <fieldset>
          <legend><div class="class="panel-heading">Clients Details</div></legend>
          <!--<p class="info-help-block">Domain owner's detail</p>-->
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Organization name <small>( संस्थाको नाम )</small> :    </label>
                <input class="form-control" type="text" name="adminOrganization" id="adminOrganization">
                @if ($errors->has('adminOrganization'))
                <span class="text-danger">{{ $errors->first('adminOrganization') }}</span>
                @endif
              </div>

            </div>
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>  Country/Region <small>( देश )</small> :   <span>*</span>  </label><br>
                  <select class="btn btn-primary dropdown-toggle"  name="adminCountry" id="country" class="form-group">
                    <option value="" selected="selected"  >:: Select One ::</option>
                    <option value="Nepal" id="nepal" >Nepal</option>  
                    <option value="China" id="nepal">China</option>  
                    <option value="India" >india</option>  
                    <option value="America" >America</option>  
                    <option value="Australia" >Australia</option>  
                    <option value="other">other</option>  
                  </select> 
                  <!--   @if($errors->has('adminothercountry'))
                        <span class="text-danger">{{ $errors->first('adminothercountry') }}</span>
                        @endif -->
                      </div> 
                      @if ($errors->has('adminCountry'))
                      <span class="text-danger">{{ $errors->first('adminCountry') }}</span>
                      @endif
                      @if ($errors->has('adminothercountry'))
                      <span class="text-danger">{{ $errors->first('adminothercountry') }}</span>
                      @endif
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <input type="hidden" name="adminothercountry" value="NULL">
                      <div class="form-group" id="othercountryfield">

                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Province/State <small>( प्रदेश )</small> :       <span>*</span>  </label>
                      <select class="btn btn-primary dropdown-toggle"  name="adminState"  id="adminState">
                        <option value="" selected="selected"  >:: Select One ::</option>
                        <option value="Province 1">Province 1 <small>( प्रदेश नं. १  )</small></option>
                        <option value="Province 2">Province 2 <small>( प्रदेश नं. २ )</small></option>
                        <option value="Province 3">Province 3 <small>( प्रदेश नं. ३ )</small></option>
                        <option value="Province 4">Province 4 <small>( प्रदेश नं. ४ )</small></option>
                        <option value="Province 5">Province 5 <small>( प्रदेश नं. ५  )</small></option>
                        <option value="Province 6">Province 6 <small>( प्रदेश नं. ६  )</small></option>
                        <option value="Province 7">Province 7 <small>( प्रदेश नं. ७  )</small></option>
                      </select>
                    </div> 
                    @if($errors->has('adminState'))
                    <span class="text-danger">{{ $errors->first('adminState') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>City<small> ( गाउँ / शहर   )</small> :   <span>*</span>  </label>
                      <input class="form-control" type="text" name="admincity" id="adminCity">
                    </div>
                    @if($errors->has('admincity'))
                    <span class="text-danger">{{ $errors->first('admincity') }}</span>
                    @endif
                  </div> 
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group text-light bg-dark p-3 mb-2 ">
                      <label>Address <small>( ठेगाना  )</small> :    <span>*</span>  </label>
                      <input class="form-control" type="text" name="adminAddress" id="adminAddress">
                    </div>
                    @if($errors->has('adminAddress'))
                    <span class="text-danger">{{ $errors->first('adminAddress') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Email :  <span>*</span>  </label>
                      <input class="form-control" type="text" name="adminEmail" id="adminEmail">
                    </div>
                    @if($errors->has('adminEmail'))
                    <span class="text-danger">{{ $errors->first('adminEmail') }}</span>
                    @endif
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Industry :  </label>
                      <input class="form-control" type="text" name="adminindustry" id="adminTelephone">
                    </div>
                    @if($errors->has('adminindustry'))
                    <span class="text-danger">{{ $errors->first('adminindustry') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Representative : </label>
                      <input class="form-control" type="text" name="representative" id="adminTelephone">
                    </div>
                    @if($errors->has('representative'))
                    <span class="text-danger">{{ $errors->first('representative') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Follow-up :  </label>
                      <input class="form-control" type="date" name="followup" id="adminTelephone">
                    </div>
                    @if($errors->has('followup'))
                    <span class="text-danger">{{ $errors->first('followup') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Note :  </label>
                      <input class="form-control" type="text" name="note" id="adminTelephone">
                    </div>
                    @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Response:  </label>
                      <input class="form-control" type="text" name="Response" id="adminTelephone">
                    </div>
                    @if($errors->has('Response'))
                    <span class="text-danger">{{ $errors->first('Response') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Value: </label>
                      <input class="form-control" type="number" name="value" id="adminTelephone">
                    </div>
                    @if($errors->has('value'))
                    <span class="text-danger">{{ $errors->first('value') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Contact No. </label>
                      <input class="form-control" type="number" name="contactno" id="adminTelephone">
                    </div>
                    @if($errors->has('contactno'))
                    <span class="text-danger">{{ $errors->first('contactno') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Duties:<span>*</span>  </label>
                      <select class="btn btn-primary dropdown-toggle" multiple name="duties"  id="duties">
                        <option value="" selected="selected"  >:: Select ::</option>
                        <option value="Web Design">Web Design</option>
                        <option value="Web App">Web App</option>
                        <option value="Mobile App">Mobile App</option>
                        <option value="Designing">Designing</option>
                        <option value="Printing">Printing</option>
                        <option value="other2">other</option>
                      </select>
                    </div> 
                    @if($errors->has('duties'))
                    <span class="text-danger">{{ $errors->first('duties') }}</span>
                    @endif
                    @if($errors->has('dutiesotherfield'))
                    <span class="text-danger">{{ $errors->first('dutiesotherfield') }}</span>
                    @endif
                  </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Clients Type:<span style="color: red">*</span>  </label>
                      <select class="btn btn-primary dropdown-toggle"  name="clienttype"  id="adminState">
                        <option value="" selected="selected"  >:: Select One ::</option>
                        <option value="Client">Client</option>
                        <option value="Potentialclients">Potential Client</option>
                      </select>
                    </div> 
                    @if($errors->has('clienttype'))
                    <span class="text-danger">{{ $errors->first('clienttype') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                     <input type="hidden" name="dutiesotherfield" value="NULL">
                    <div class="form-group" id="dutiesfield">
                    </div>
                  </div>
                  <div class="reg-block">
                    <h1 style="color:blue;padding:143px;margin-left:400px;margin-top:-10px; ">
                      <button type="submit" class="btn btn-lg btn-primary" >Save & Continue </button>
                    </h1>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
        @endsection()