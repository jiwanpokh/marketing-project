<!------ Include the above in your HEAD tag ---------->

<?php $__env->startSection('content'); ?>
<div class="col-md-8 col-sm-12 col-xs-12">
  <div class="panel-group">
    <div class="title">
      <h2>Marketing Day Book</h2>
    </div>

    <form action="<?php echo e(route('form')); ?>" method="POST" enctype="multipart/form-data" >
      <?php echo e(csrf_field()); ?>

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
                <?php if($errors->has('adminOrganization')): ?>
                <span class="text-danger"><?php echo e($errors->first('adminOrganization')); ?></span>
                <?php endif; ?>
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
                  <!--   <?php if($errors->has('adminothercountry')): ?>
                        <span class="text-danger"><?php echo e($errors->first('adminothercountry')); ?></span>
                        <?php endif; ?> -->
                      </div> 
                      <?php if($errors->has('adminCountry')): ?>
                      <span class="text-danger"><?php echo e($errors->first('adminCountry')); ?></span>
                      <?php endif; ?>
                      <?php if($errors->has('adminothercountry')): ?>
                      <span class="text-danger"><?php echo e($errors->first('adminothercountry')); ?></span>
                      <?php endif; ?>
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
                    <?php if($errors->has('adminState')): ?>
                    <span class="text-danger"><?php echo e($errors->first('adminState')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>City<small> ( गाउँ / शहर   )</small> :   <span>*</span>  </label>
                      <input class="form-control" type="text" name="admincity" id="adminCity">
                    </div>
                    <?php if($errors->has('admincity')): ?>
                    <span class="text-danger"><?php echo e($errors->first('admincity')); ?></span>
                    <?php endif; ?>
                  </div> 
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group text-light bg-dark p-3 mb-2 ">
                      <label>Address <small>( ठेगाना  )</small> :    <span>*</span>  </label>
                      <input class="form-control" type="text" name="adminAddress" id="adminAddress">
                    </div>
                    <?php if($errors->has('adminAddress')): ?>
                    <span class="text-danger"><?php echo e($errors->first('adminAddress')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Email :  <span>*</span>  </label>
                      <input class="form-control" type="text" name="adminEmail" id="adminEmail">
                    </div>
                    <?php if($errors->has('adminEmail')): ?>
                    <span class="text-danger"><?php echo e($errors->first('adminEmail')); ?></span>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Industry :  </label>
                      <input class="form-control" type="text" name="adminindustry" id="adminTelephone">
                    </div>
                    <?php if($errors->has('adminindustry')): ?>
                    <span class="text-danger"><?php echo e($errors->first('adminindustry')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Representative : </label>
                      <input class="form-control" type="text" name="representative" id="adminTelephone">
                    </div>
                    <?php if($errors->has('representative')): ?>
                    <span class="text-danger"><?php echo e($errors->first('representative')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Follow-up :  </label>
                      <input class="form-control" type="date" name="followup" id="adminTelephone">
                    </div>
                    <?php if($errors->has('followup')): ?>
                    <span class="text-danger"><?php echo e($errors->first('followup')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Note :  </label>
                      <input class="form-control" type="text" name="note" id="adminTelephone">
                    </div>
                    <?php if($errors->has('note')): ?>
                    <span class="text-danger"><?php echo e($errors->first('note')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Response:  </label>
                      <input class="form-control" type="text" name="Response" id="adminTelephone">
                    </div>
                    <?php if($errors->has('Response')): ?>
                    <span class="text-danger"><?php echo e($errors->first('Response')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Value: </label>
                      <input class="form-control" type="number" name="value" id="adminTelephone">
                    </div>
                    <?php if($errors->has('value')): ?>
                    <span class="text-danger"><?php echo e($errors->first('value')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>Contact No. </label>
                      <input class="form-control" type="number" name="contactno" id="adminTelephone">
                    </div>
                    <?php if($errors->has('contactno')): ?>
                    <span class="text-danger"><?php echo e($errors->first('contactno')); ?></span>
                    <?php endif; ?>
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
                    <?php if($errors->has('duties')): ?>
                    <span class="text-danger"><?php echo e($errors->first('duties')); ?></span>
                    <?php endif; ?>
                    <?php if($errors->has('dutiesotherfield')): ?>
                    <span class="text-danger"><?php echo e($errors->first('dutiesotherfield')); ?></span>
                    <?php endif; ?>
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
                    <?php if($errors->has('clienttype')): ?>
                    <span class="text-danger"><?php echo e($errors->first('clienttype')); ?></span>
                    <?php endif; ?>
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
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>