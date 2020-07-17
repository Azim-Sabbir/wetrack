<table class="table dataTable table-striped table-bordered zero-configuration" >
    <thead>
        <tr>
            <th class="text-center" style="width: 1%;">Sl</th>
            <th class="text-center" style="width:6%">Profile</th>
            <th class="text-center">Name</th>
            <th class="text-center">Category</th>
            <th class="text-center">Branch</th>
            <th class="text-center">Phone</th>
            <th class="text-center">Status</th>
            <th style="width: 15%;" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; ?> 
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $emp_img=collect($images)->where('emp_id',$employee->emp_id)->first(); ?>
      <tr>
        <td><?php echo e($i++); ?></td>
        <?php if($emp_img): ?>
        <td><img style='width:60px' class="users-avatar-shadow rounded-circle" src="<?php echo e('/images/employee/'.$emp_img->emp_img); ?>" alt="Employee Image"></td>
        <?php else: ?>
        <td><img style='height:10%; width: 80%;' class="users-avatar-shadow rounded-circle" src="<?php echo e(asset('app-assets/images/avatar.png')); ?>" alt="Employee Image"></td>
        <?php endif; ?>
        <td><?php echo e($employee->emp_full_name); ?></td>
        <td><?php $category = collect($categorys)->where('emp_cat_id',$employee->emp_cat_id)->first() ?>
        <?php echo e($category->emp_cat_name); ?>

        </td> 
        <td><?php $branch = collect($branchs)->where('branch_id',$employee->emp_branch_id)->first() ?>
        <?php echo e($branch->branch_name); ?>

        </td>

        <td><?php echo e($employee->emp_phone); ?></td>

        <td><?php $emp_status=collect($status)->where('emp_id',$employee->emp_id)->first();?>
        <?php if($emp_status->emp_status=='active'): ?>
        <button type="button" class="btn mr-1 mb-1 btn-success btn-sm" id="status_btn" data-id="<?php echo e($employee->emp_id); ?>" data-set="active"><i class="fa fa-check"></i>Active</button>
        <?php elseif($emp_status->emp_status=='inactive'): ?>
        <button type="button" class="btn mr-1 mb-1 btn-danger btn-sm" id="status_btn" data-id="<?php echo e($employee->emp_id); ?>" data-set="inactive"><i class="fa fa-times"></i>Inactive</button>
        <?php else: ?>
        <button type="button" class="btn mr-1 mb-1 btn-warning btn-sm" id="status_btn" data-id="<?php echo e($employee->emp_id); ?>" data-set="unknown"><i class="fa fa-warning"></i>Not Set</button>
        <?php endif; ?>
        </td>

        <td>
          <div class="btn-group mx-2" role="group" aria-label="Second Group">
              <button type="button" get_id="<?php echo e($employee->emp_id); ?>" data-toggle="modal" data-target="#viewModal" class="btn btn-icon btn-outline-info view"><i class="fa fa-eye"></i></button>
              <button type="button" get_id="<?php echo e($employee->emp_id); ?>" data-toggle="modal" data-target="#editModal" class="btn btn-icon btn-outline-secondary edit"><i class="fa fa-pencil"></i></button>
              <button type="button" get_id="<?php echo e($employee->emp_id); ?>" id="delete" class="btn btn-icon btn-outline-warning"><i class="fa fa-trash"></i></button>
          </div>
        </td>
      </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

   </table>
<?php /**PATH /home/tanvir/LARAVEL/weTrack/resources/views/admin/employee/employeeList/dataRows.blade.php ENDPATH**/ ?>