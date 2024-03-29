<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h3 class="mb-0"><?php echo e(__('Update account information')); ?></h3>
                    </div>
                    <div class="card-body">
                            <form action="<?php echo e(url('admin/profile-update')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Username')); ?>:</label>
                                <div class="col-lg-10">
                                    <input type=""hidden value="<?php echo e($client->id); ?>" name="id">
                                    <input type="text" name="username" class="form-control" value="<?php echo e($client->username); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Full Name')); ?></label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-6">
                                        <input type="text" name="first_name" class="form-control" placeholder="<?php echo e(__('First Name')); ?>" value="<?php echo e($client->first_name); ?>">
                                        </div>      
                                        <div class="col-6">
                                        <input type="text" name="last_name" class="form-control" placeholder="<?php echo e(__('Last Name')); ?>" value="<?php echo e($client->last_name); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Email')); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="email" name="email" class="form-control" readonly value="<?php echo e($client->email); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Mobile')); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="mobile" class="form-control" value="<?php echo e($client->phone); ?>">
                                </div>
                            </div>                                              
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Address')); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="address" class="form-control" value="<?php echo e($client->address); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Balance:')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text"><?php echo e($currency->symbol); ?></span>
                                        </span>
                                        <input type="number" name="balance"step="any" max-length="10" value="<?php echo e(convertFloat($client->balance)); ?>" class="form-control">
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Profit:')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text"><?php echo e($currency->symbol); ?></span>
                                        </span>
                                        <input type="number" name="total_profit" step="any" max-length="10" value="<?php echo e(convertFloat($client->total_profit)); ?>" class="form-control">
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Status')); ?><span class="text-danger">*</span></label>
                                <div class="col-lg-10">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <?php if($client->email_verify==1): ?>
                                            <input type="checkbox" name="email_verify" id=" customCheckLogin5" class="custom-control-input" value="1" checked>
                                        <?php else: ?>
                                            <input type="checkbox" name="email_verify"id=" customCheckLogin5"  class="custom-control-input" value="1">
                                        <?php endif; ?>
                                        <label class="custom-control-label" for=" customCheckLogin5">
                                        <span class="text-muted"><?php echo e(__('Email verification')); ?></span>     
                                        </label>
                                    </div>                                     
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <?php if($client->fa_status==1): ?>
                                            <input type="checkbox" name="fa_status" id=" customCheckLogin6" class="custom-control-input" value="1" checked>
                                        <?php else: ?>
                                            <input type="checkbox" name="fa_status" id=" customCheckLogin6"  class="custom-control-input" value="1">
                                        <?php endif; ?>
                                        <label class="custom-control-label" for=" customCheckLogin6">
                                        <span class="text-muted"><?php echo e(__('2fa security')); ?></span>     
                                        </label>
                                    </div>    
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <?php if($client->kyc_status==1): ?>
                                            <input type="checkbox" name="kyc_status" id=" customCheckLogin7" class="custom-control-input" value="1" checked>
                                        <?php else: ?>
                                            <input type="checkbox" name="kyc_status" id=" customCheckLogin7"  class="custom-control-input" value="1">
                                        <?php endif; ?>
                                        <label class="custom-control-label" for=" customCheckLogin7">
                                        <span class="text-muted"><?php echo e(__('Kyc')); ?></span>     
                                        </label>
                                    </div>                                                           
                                </div>
                            </div>                
                            <div class="text-right">
                                <button type="submit" class="btn btn-success btn-sm"><?php echo e(__('Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php if($set->kyc==1): ?>
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h3 class="mb-0 h4 text-dark font-weight-bolder"><?php echo e(__('Kyc verification')); ?></h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('Type')); ?></th>
                                    <th><?php echo e(__('Uploaded')); ?></th>
                                    <th><?php echo e(__('Link')); ?></th>
                                    <th><?php echo e(__('Action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Identity - <?php echo e($client->kyc_type); ?></td>
                                    <td class="text-center"><?php if($client->kyc_link==null): ?><?php echo e(__('No')); ?><?php else: ?><?php echo e(__('Yes')); ?><?php endif; ?></td>
                                    <td>
                                        <?php if($client->kyc_link!=null): ?>
                                            <a href="<?php echo e(url('/')); ?>/asset/profile/<?php echo e($client->kyc_link); ?>"><?php echo e(__('View')); ?></a>
                                        <?php else: ?>
                                        <?php echo e(__('No file')); ?>

                                        <?php endif; ?>
                                    </td>      
                                    <td>
                                    <?php if($client->kyc_link!=null): ?>
                                    <a data-toggle="modal" data-target="#decline-kyc" href=""><i class="fal fa-ban"></i> <?php echo e(__('Decline')); ?></a>
                                    <?php else: ?>
                                    <?php echo e(__('No action')); ?>

                                    <?php endif; ?>
                                    </td>    
                                </tr>                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php endif; ?>
                <div class="modal fade" id="decline-kyc" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="mb-0"><?php echo e(__('Decline')); ?></h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo e(route('declinekyc', ['id'=>$client->id])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                <textarea type="text" name="reason" class="form-control" rows="5" placeholder="<?php echo e(__('Provide Reason')); ?>" required></textarea>
                                </div>
                            </div>             
                            <div class="text-right">
                                <button type="submit" class="btn btn-neutral btn-block"><?php echo e(__('Submit')); ?></button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="img-fluid rounded-circle" src="<?php echo e(url('/')); ?>/asset/profile/<?php echo e($client->image); ?>" width="120" height="120" alt="">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                            <div>
                                <ul class="list list-unstyled mb-0">
                                    <li><span class="text-sm"><?php echo e(__('Joined')); ?>: <?php echo e(date("Y/m/d h:i:A", strtotime($client->created_at))); ?></span></li>
                                    <li><span class="text-sm"><?php echo e(__('Last Login')); ?>: <?php echo e(date("Y/m/d h:i:A", strtotime($client->last_login))); ?></span></li>
                                    <li><span class="text-sm"><?php echo e(__('Last Updated')); ?>: <?php echo e(date("Y/m/d h:i:A", strtotime($client->updated_at))); ?></span></li>
                                    <li><span class="text-sm"><?php echo e(__('IP Address')); ?>: <?php echo e($client->ip_address); ?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Downloads/paviliumglobal/resources/views/admin/user/edit.blade.php ENDPATH**/ ?>