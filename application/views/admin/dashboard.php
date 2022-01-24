<?php include_once('admin_header.php'); ?>


<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-6">
		<a href="<?php echo base_url('admin/add_item') ?>" class="btn btn-lg btn-primary pull-right">Add Item</a>
	</div>
</div>

		<?php if( $feedback = $this->session->flashdata('feedback')): 
				  $flag = $this->session->flashdata('flag');
		 ?>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="alert alert-dimissible <?php echo $flag; ?>">
				<?= $feedback ?>
				</div> 
			</div>
		</div>
	<?php endif; ?>

	<table class="table">
		<thead>
			<th>SR.no</th>
			<th>Item name</th>
			<th>Item qty</th>
			<th>Item rate</th>
			<th>Inserted at</th>
			<th>Actions</th>
		</thead>
		<tbody>
			<?php if( count($array) ):
				$count = $this->uri->segment(3);
					 foreach($array as $data):?>
		<tr>
			<td><?= ++$count ?></td>
			<td> <?= $data->item_name ?></td>
			<td> <?= $data->quantity ?></td>
			<td> <?= $data->rate ?></td>
			<td>
				<?= date('d M Y H:i:s', strtotime($data->inserted_at)) ;?>
			</td>
			<td>

				<div class="row">
					<div class="col">
					<?= 
					form_open('admin/edit_item'),
					form_hidden('item_id', $data->item_id),
					form_submit('submit', 'Edit',['class'=>'btn btn-primary']),
					form_close();?>
				</div>
				<div class="col">
					<?=
					form_open('admin/delete_item'),
					form_hidden('item_id', $data->item_id),
					form_submit('submit', 'Delete',['class'=>'btn btn-danger']),
					form_close();
				 ?>
				</div>
				</div>
			</td>
			
		</tr>
			<?php endforeach; ?>
	<?php else:?>
		<tr>
			<td colspan="4">
				No Records found.
			</td>
		</tr>
	<?php endif;?>

		</tbody>
	</table>
	<?= $this->pagination->create_links(); ?>
</div>
	


<?php include_once('admin_footer.php'); ?>
