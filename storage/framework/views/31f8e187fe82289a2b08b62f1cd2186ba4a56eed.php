<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e(__('Create a Plan')); ?></h3>
                    </div>
                    <div class="card-body bg-dark text-light">
                        <p class="text-danger"></p>
                        <form action="<?php echo e(route('admin.plan.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Name')); ?></label>
                                <div class="col-lg-10">
                                    <input type="text" name="name" class="form-control" required value="<?php echo e(old('name')); ?>">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Category')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="category" data-fouc required>   
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <option value="<?php echo e($val->id); ?>"><?php echo e($val->name); ?></option>    
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                          
                                    </select>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Daily percent')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="percent" id="percent" class="form-control" value="<?php echo e(old('percent')); ?>">
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
                                        <input type="number" name="duration" pattern="[0-9]+(\.[0-9]{0,2})?%?" id="duration" class="form-control" placeholder="1" required value="<?php echo e(old('duration')); ?>">
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
                                        <span class="input-group-prepend">
                                            <span class="input-group-text"><?php echo e($currency->symbol); ?></span>
                                        </span>
                                        <input type="number" step="any" name="min_amount" id="min_amount" class="form-control" value="<?php echo e(old('min_amount')); ?>">
                                    </div>
                                </div>
                            </div>                             
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Maximum amount')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text"><?php echo e($currency->symbol); ?></span>
                                        </span>
                                        <input type="number" step="any" name="max_amount" class="form-control" value="<?php echo e(old('max_amount')); ?>">
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Compound Interest')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input id="compound" type="number" step="any" name="compound" class="form-control" value="<?php echo e(old('compound')); ?>">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                    <small class="text-warning">This is calculated with the minimum amount</small>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Interest')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input id="interest" type="number" step="any" name="interest" class="form-control" value="<?php echo e(old('interest')); ?>">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                            
                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Referral percent')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" name="ref_percent" maxlength="10" placeholder="2.5" class="form-control" value="<?php echo e(old('ref_percent')); ?>">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Investment Bonus')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" name="bonus" maxlength="10" placeholder="6" value="<?php echo e(old('bonus')); ?>" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Claim profit anytime')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="claim">
                                        <option value="1"><?php echo e(__('Yes')); ?>

                                        </option>
                                        <option value="0"><?php echo e(__('No')); ?>

                                        </option>
                                    </select>
                                    <span class="form-text text-xs">If enabled, client will be able to claim only profit before investment duration ends</span>
                                </div>
                            </div>   
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Popular Plan')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="popular">
                                        <option value="1"><?php echo e(__('Yes')); ?>

                                        </option>
                                        <option value="0"><?php echo e(__('No')); ?>

                                        </option>
                                    </select>
                                </div>
                            </div>                              
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Recurring Capital')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="recurring">
                                        <option value="1"><?php echo e(__('Yes')); ?>

                                        </option>
                                        <option value="0"><?php echo e(__('No')); ?>

                                        </option>
                                    </select>
                                    <span class="form-text text-xs">If enabled, client capital will be reinvested after duration ends</span>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Status')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="status">
                                        <option value="1"><?php echo e(__('Active')); ?>

                                        </option>
                                        <option value="0"><?php echo e(__('Disable')); ?>

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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Downloads/paviliumglobal/core/resources/views/admin/investment/create.blade.php ENDPATH**/ ?>