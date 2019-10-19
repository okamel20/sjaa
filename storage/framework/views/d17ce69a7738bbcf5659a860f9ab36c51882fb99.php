<?php $subject = \App\Contacts_subject::find($contact_subject_id) ;?>
<?php if($subject): ?>
<?php echo e($subject['title_ar']); ?>

<?php else: ?>
تم الحذف
<?php endif; ?>