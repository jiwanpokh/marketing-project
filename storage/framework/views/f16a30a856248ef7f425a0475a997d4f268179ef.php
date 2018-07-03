       
<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
        <div class="col-lg-6">

            <div class="control-group" id="fields">
                <label class="control-label" for="field1">Running Projects</label>
                <div class="controls"> 
                    <form role="form" autocomplete="off">
                        <div class="entry input-group col-xs-3">
                            <input class="form-control" name="fields[]" type="text" placeholder="Project Name" />
                        	<span class="input-group-btn">             
                                <button class="btn btn-success btn-add" type="button">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                <br>
                <small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field    </small><br>
                <button type="button" class="btn btn-secondary">Add</button>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
              <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="concept" name="name">
                        </div>
                    </div>
             <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Follow-up Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date" name="flwdate">
                        </div>
                    </div>
            </div>
        </div>
       <!--  <div class="col-md-9">
            
        </div> -->
        </div>
	</div>
</div>
<script type="text/javascript">
    $(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls form:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
        $(this).parents('.entry:first').remove();

        e.preventDefault();
        return false;
    });
});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>