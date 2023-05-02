<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card"> 
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e(__('Edit Plan')); ?></h3>
                    </div>
                    <div class="card-body">
                        <p class="text-danger"></p>
                        <form action="<?php echo e(route('admin.plan.update')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Name')); ?></label>
                                <div class="col-lg-10">
                                    <input type="text" name="name" class="form-control" value="<?php echo e($plan->name); ?>" reqiured>
                                    <input type="hidden" name="id" value="<?php echo e($plan->id); ?>">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Category')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="category" data-fouc required>   
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <option value="<?php echo e($val->id); ?>" <?php if($plan->cat_id==$val->id): ?> <?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e($val->name); ?></option>    
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                          
                                    </select>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Daily percent')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="percent" value="<?php echo e($plan->percent); ?>" id="percent" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Duration')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" name="duration" pattern="[0-9]+(\.[0-9]{0,2})?%?" value="<?php echo e($plan->duration); ?>" id="duration" class="form-control" placeholder="1" required>
                                        <span class="input-group-append">
                                            <span class="input-group-text">Days</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Minimum amount')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="min_amount" value="<?php echo e($plan->min_deposit); ?>" class="form-control" id="min_amount">
                                        <span class="input-group-append">
                                            <span class="input-group-text"><?php echo e($currency->name); ?></span>
                                        </span>
                                    </div>
                                </div>
                            </div>                             
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Maximum amount')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="max_amount" value="<?php echo e($plan->amount); ?>" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text"><?php echo e($currency->name); ?></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Compound Interest')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" step="any" name="compound" readonly id="compound" value="<?php echo e($plan->compound); ?>" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">$</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Interest')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" step="any" name="interest" readonly id="interest" value="<?php echo e($plan->interest); ?>" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">$</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                             
                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Referral percent')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="ref_percent" maxlength="10" placeholder="2.5" value="<?php echo e($plan->ref_percent); ?>" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                             
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Trading Bonus')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="bonus" maxlength="10" placeholder="2.5" value="<?php echo e($plan->bonus); ?>" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Status')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="status">
                                        <option value="1" 
                                            <?php if($plan->status==1): ?>
                                            <?php echo e(__('selected')); ?>

                                            <?php endif; ?>
                                            ><?php echo e(__('Active')); ?>

                                        </option>
                                        <option value="0"  
                                            <?php if($plan->status==0): ?>
                                            <?php echo e(__('selected')); ?>

                                            <?php endif; ?>
                                            ><?php echo e(__('Deactive')); ?>

                                        </option>
                                    </select>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Claim profit anytime')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="claim">
                                        <option value="1" 
                                            <?php if($plan->claim==1): ?>
                                            <?php echo e(__('selected')); ?>

                                            <?php endif; ?>
                                            ><?php echo e(__('Yes')); ?>

                                        </option>
                                        <option value="0"  
                                            <?php if($plan->claim==0): ?>
                                            <?php echo e(__('selected')); ?>

                                            <?php endif; ?>
                                            ><?php echo e(__('No')); ?>

                                        </option>
                                    </select>
                                </div>
                            </div>                             
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Recurring Capital')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="recurring">
                                        <option value="1" 
                                            <?php if($plan->recurring==1): ?>
                                            <?php echo e(__('selected')); ?>

                                            <?php endif; ?>
                                            ><?php echo e(__('Yes')); ?>

                                        </option>
                                        <option value="0"  
                                            <?php if($plan->recurring==0): ?>
                                            <?php echo e(__('selected')); ?>

                                            <?php endif; ?>
                                            ><?php echo e(__('No')); ?>

                                        </option>
                                    </select>
                                </div>
                            </div>  
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="en">
                                    <label class="custom-file-label" for="customFileLang"><?php echo e(__('Choose Media')); ?> *optional</label>
                                </div>
                            </div>       
                            <div class="text-right">
                                <button type="submit" class="btn btn-success btn-sm"><?php echo e(__('Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Downloads/paviliumglobal/core/resources/views/admin/investment/edit.blade.php ENDPATH**/ ?>