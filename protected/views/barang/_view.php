<?php
/* @var $this BarangController */
/* @var $data Barang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_barang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_barang), array('view', 'id'=>$data->id_barang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_barang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_barang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stok')); ?>:</b>
	<?php echo CHtml::encode($data->stok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_pokok')); ?>:</b>
	<?php echo CHtml::encode($data->harga_pokok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_jual')); ?>:</b>
	<?php echo CHtml::encode($data->harga_jual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diskon')); ?>:</b>
	<?php echo CHtml::encode($data->diskon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>