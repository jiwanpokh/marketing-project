<!------ Include the above in your HEAD tag ---------->

<?php $__env->startSection('content'); ?>

<div class="col-md-8 col-sm-12 col-xs-12">
  <div class="panel-group">
    <div class="title">
      <h2>Marketing Day Book</h2>
    </div>

    <form action="<?php echo e(route('form')); ?>" method="POST" enctype="multipart/form-data" >
      <?php echo e(csrf_field()); ?>

      <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
      <?php endif; ?>

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
              </div>

            </div>
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>  Country/Region <small>( देश )</small> :   <span>*</span>  </label><br>
                  <select class="btn btn-primary dropdown-toggle"  name=" "           id="country" class="form-group">
                    <option value="" selected="selected"  >:: Select One ::</option>
                    <option value="Nepal" id="nepal" >Nepal</option>  


                    <option value="China" id="nepal"  >China</option>  


                    <option value="India" >india</option>  


                    <option value="America" >America</option>  


                    <option value="Australia" >Australia</option>  


                    <option value="other">other</option>  
                  </select>
                </div> 
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
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
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>City<small> ( गाउँ / शहर   )</small> :   <span>*</span>  </label>
              <input class="form-control" type="text" name="adminCity" id="adminCity">
            </div>
          </div> 
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group text-light bg-dark p-3 mb-2 ">
              <label>Address <small>( ठेगाना  )</small> :    <span>*</span>  </label>
              <input class="form-control" type="text" name="adminAddress" id="adminAddress">
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Email :  <span>*</span>  </label>
              <input class="form-control" type="text" name="adminEmail" id="adminEmail">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Industry :  </label>
              <input class="form-control" type="text" name="adminindustry" id="adminTelephone">
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Representative :  </label>
              <input class="form-control" type="text" name="representative" id="adminTelephone">
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Follow-up :  </label>
              <input class="form-control" type="date" name="followup" id="adminTelephone">
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Note :  </label>
              <input class="form-control" type="text" name="note" id="adminTelephone">
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Response:  </label>
              <input class="form-control" type="text" name="Response" id="adminTelephone">
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Value: </label>
              <input class="form-control" type="number" name="valuee" id="adminTelephone">
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Contact No. </label>
              <input class="form-control" type="number" name="contactno" id="adminTelephone">
            </div>
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
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group" id="dutiesfield">
            </div>
          </div>
          <div class="reg-block">
            <h1 style="color:blue;padding:143px;margin-left:400px;margin-top:115px; ">
              <button type="submit" class="btn btn-lg btn-primary" >Save & Continue </button>
            </h1>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>