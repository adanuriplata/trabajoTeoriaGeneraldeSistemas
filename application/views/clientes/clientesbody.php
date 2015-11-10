  <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
<section id="main-content">
          <section class="wrapper">
          	 <!--main content start-->
            <h3><i class="fa fa-angle-right"></i> Nuevo cliente</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Datos Particulares</h4>
                      <form action="<?=base_url()?>index.php/clientesC/crear" class="form-horizontal style-form" method="POST">
                          <div class="form-group">
                              <label class="col-md-4 col-sm-2 col-sm-2 control-label">Nombre</label>
                              <div class="col-md-12 col-sm-10">
                                  <input type="text" class="form-control" name="nombre">
                              </div>
                              <label class="col-md-4 col-sm-2 col-sm-2 control-label">Apellido paterno</label>
                              <div class="col-md-12 col-sm-10">
                                  <input type="text" class="form-control" name="paterno">
                              </div>
                              <label class="col-md-4 col-sm-2 col-sm-2 control-label">Apellido Materno</label>
                              <div class="col-md-12 col-sm-10">
                                  <input type="text" class="form-control" name="materno">
                              </div>
                          </div>
                          <h4 class="mb"><i class="fa fa-angle-right"></i> Domicilio</h4>
                          <div class="form-group">
                           <label class="col-md-4 col-sm-2 col-sm-2 control-label">Calle</label>
                              <div class="col-md-12 col-sm-10">
                                  <input type="text" class="form-control" name="calle">
                              </div>
                               <label class="col-md-4 col-sm-2 col-sm-2 control-label">Numero</label>
                              <div class="col-md-12 col-sm-10">
                                  <input type="text" class="input-medium form-control" name="numero">
                              </div>
                               <label class="col-md-4 col-sm-2 col-sm-2 control-label">Colonia</label>
                              <div class="col-md-12 col-sm-10">
                                  <input type="text" class="form-control" name="colonia">
                              </div>
                              
                          </div>
                          <div class="form-group">
                          <div class="col-md-12">
                              <button class="btn btn-success" type="submit">Registrar</button>
                              </div>
                          </div>

                          </div>
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
		</section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->