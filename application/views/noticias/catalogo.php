<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			catalago noticias <small>lo mas relevante</small>
			</h3>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!--AQUI VA EL CODIGO-->
					 <!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Noticias!!!
							</div>
							<div class="tools">
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<a id="boton_agregar_noticia" class="btn green circle" data-toggle="modal" href="#modal_nueva_noticia">
											Agregar noticia <i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<table class="table table-striped table-bordered table-hover" id="tabla_noticia">
							<thead>
							<tr>
								<th>
									 Id
								</th>
								<th>
									 Titulo
								</th>
								<th>
									 Descripcion
								</th>
								<th>
									 Fecha
								</th>
							</tr>
							</thead>
							<tbody>
								<?php foreach ($noticias as $noticia):?>
								<tr class="odd gradeX">
								<td><?php echo $noticia["id"] ?></td>
								<td><a href="<?php echo site_url("/noticias/ver/")."/".$noticia["id"] ?>"><?php echo $noticia["titulo"] ?></a></td>
								<td><?php echo $noticia["contenido"] ?></td>
								<td><?php echo $noticia["fecha"] ?></td>
							</tr>
							<?php endforeach ?>
							
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->

	<!-- BEGIN VENTANA MODAL -->
	<div class="modal fade" id="modal_nueva_noticia" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Nueva noticia</h4>
				</div>
				<form action="<?php echo site_url("/noticias/crear/insertar") ?>" class="form-horizontal" id="formulario_nueva_noticia" accept-charset="utf-8">
						<div class="form-body">
							<label class="control-label col-md-4">titulo</label>
							<div class="col-md-6">
								<div class="input-icon right">
									<input type="text" class="form-control"name="titulo" placeholder="aqui va el titulo"/>
								</div>
							</div>
							<label class="control-label col-md-4">noticia</label>
							<div class="col-md-6">
								<div class="input-icon right">
									<input type="text" class="form-control" name="contenido" placeholder="describe el suceso"/>
								</div>
							</div>
							<label class="control-label col-md-4">fecha</label>
							<div class="col-md-6">
								<div class="input-icon right">
									<input type="text" class="form-control" name="fecha" placeholder="fecha en que sucedio"/>
								</div>
							</div>
						</div>
					<div class = "clearfix"></div>
					<div class="modal-footer">
						<button type="button" class="btn default" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn blue">guardar noticia</button>
					</div>
				</form>
							<!-- END FORM-->
			</div>
									<!-- /.modal-content -->
		</div>
								<!-- /.modal-dialog -->
	</div>
	<!-- END VENTANA MODAL -->