<?php
$jobs  = PostData::getAllActive();
?>

<div class="container section-t8">
<div class="row">
<div class="col-md-12">
<h1>Todas las noticias</h1>

<div class="panel panel-default">
<div class="panel-body">

<?php if(count($jobs)>0):?>

<table class="table">
<?php foreach($jobs as $jb):?>
	<tr>
	<td style="width: 200px; ">
		<?php if($jb->image!=""):?>
			<img src="admin/uploads/<?php echo $jb->image; ?>" class="img-responsive" style="width: 280px; ">
		<?php endif; ?>
	</td>
		<td>
			<h4><?php echo $jb->title; ?></h4>
			<p><?php echo $jb->brief; ?></p>
			<!--<p><?php echo $jb->content; ?></p> -->
			<a href="./?view=post&id=<?php echo $jb->id; ?>" class="btn btn-primary">Leer</a>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay articulos publicados por el momento!</p>
<?php endif; ?>

</div>
</div>

</div>
</div>
</div>
<br><br><br><br>