<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
      <div class="col-lg-10">
        <h6 class="h2 d-inline-block text-light mb-0"><?php echo e(__('Disputes')); ?></h6>
      </div>
      <div class="col-lg-2 text-right">
        <a data-toggle="modal" data-target="#modal-formx" href="" class="btn btn-sm btn-neutral"><i class="fal fa-flag"></i> <?php echo e(__('Raise a Dispute')); ?></a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="mb-0 h3"><?php echo e(__('Open Ticket')); ?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo e(route('submit-ticket')); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <div class="form-group row">
                    <div class="col-lg-12">
                      <div class="input-group input-group-merge">
                        <input type="text" name="subject" class="form-control" placeholder="<?php echo e(__('Subject')); ?>" required>
                      </div>
                    </div>
                  </div> 
                  <div class="form-group row">
                    <div class="col-lg-12">
                      <select class="form-control select" name="category" required>
                        <option value=""><?php echo e(__('Priority')); ?></option>
                        <option value="Low"><?php echo e(__('Low')); ?></option>
                        <option value="Medium"><?php echo e(__('Medium')); ?></option> 
                        <option value="High"><?php echo e(__('High')); ?></option>  
                      </select>
                    </div>
                  </div> 
                  <div class="form-group row">
                    <div class="col-lg-12">
                      <textarea name="details" class="form-control" rows="4" required placeholder="Details"></textarea>
                    </div>
                  </div>                
                  <div class="text-right">
                    <button type="submit" class="btn btn-success btn-block"><?php echo e(__('Submit')); ?></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>  
    <div class="row">
      <?php if(count($ticket)>0): ?>
        <?php $__currentLoopData = $ticket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-6">
            <div class="card">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-7">
                      <!-- Title -->
                      <h5 class="h4 mb-0">#<?php echo e($val->ticket_id); ?></h5>
                    </div>
                    <div class="col-5 text-right">
                      <a href="<?php echo e(url('/')); ?>/user/reply-ticket/<?php echo e($val->ticket_id); ?>" class="btn btn-sm btn-neutral"><?php echo e(__('Reply')); ?></a>
                      <a href="<?php echo e(url('/')); ?>/user/ticket/delete/<?php echo e($val->id); ?>" class="btn btn-sm btn-danger"><?php echo e(__('Delete')); ?></a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <p class="text-sm text-dark mb-0"><?php echo e(__('Subject')); ?>: <?php echo e($val->subject); ?></p>
                      <p class="text-sm text-dark mb-0"><?php echo e(__('Priority')); ?>: <?php echo e($val->priority); ?></p>
                      <p class="text-sm text-dark mb-0"><?php echo e(__('Status')); ?>: <?php if($val->status==0): ?><?php echo e(__('Open')); ?> <?php elseif($val->status==1): ?><?php echo e(__('Closed')); ?> <?php elseif($val->status==2): ?><?php echo e(__('Resolved')); ?> <?php endif; ?></p>
                      <p class="text-sm text-dark mb-0"><?php echo e(__('Created')); ?>: <?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></p>
                      <p class="text-sm text-dark mb-0"><?php echo e(__('Updated')); ?>: <?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php else: ?>
      <div class="col-md-12 mb-5">
        <div class="text-center mt-8">
          <div class="btn-wrapper text-center">
            <a href="javascript:void;" class="btn btn-neutral btn-icon mb-3">
                <span class="btn-inner--icon"><i class="fal fa-user-headset fa-4x"></i></span>
            </a>
          </div>
          <h3 class="text-dark"><?php echo e(__('No Disputes')); ?></h3>
          <p class="text-dark text-sm card-text text-light"><?php echo e(__('We couldn\'t find any dispute to this account')); ?></p>
          <div class="row align-items-center py-4">
            <div class="col-12">
              <a data-toggle="modal" data-target="#modal-formx" href="" class="btn btn-sm btn-neutral"><i class="fal fa-plus"></i> <?php echo e(__('Raise a dispute')); ?></a>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
    <div class="row">
      <div class="col-md-12">
      <?php echo e($ticket->links('pagination::bootstrap-4')); ?>

      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Downloads/paviliumglobal/core/resources/views/user/support/index.blade.php ENDPATH**/ ?>