<button id="<?php echo e($id); ?>" data-token="<?php echo e(csrf_token()); ?>" data-route="<?php echo e(adminUrl('authors/'.$id)); ?>"  type="button" class="destroy btn btn-danger btn-xl" title="حذف"><i class="icon-trash"></i>

