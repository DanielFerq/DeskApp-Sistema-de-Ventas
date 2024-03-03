<div class="modal fade" id="modalformPresentacion" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-0">
      <div class="modal-header">
        <h5 id="ModalTitulo" class="modal-title">Registro de presentación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formPresentacion" name="formPresentacion" autocomplete="off">
          <input type="hidden" id="txtidpresentacion" name="txtidpresentacion" value="">
          <p class="text-primary">Todos los campos son obligatorio (*).</p>

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="form-group">
                <label for="txtnom">*Nombre:</label>
                <input type="text" class="form-control valid validText" id="txtnom" name="txtnom" placeholder="Escriba nombre de la presentación" required="">
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                 <label for="txtdesc">*Descripción:</label>
                <input type="text" class="form-control valid validText" id="txtdesc" name="txtdesc" placeholder="Escriba su descripción corta" required="">
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="form-group">
                  <label for="cboestado">*Estado:</label>
                  <select id="cboestado" name="cboestado" class="form-control" required="">
                    <option value="1">Activo</option>
                    <option value="0">Desactivado</option>
                  </select>
                </div>
              </div>
          </div>

            <div class="modal-footer justify-content-between">
              <button id="btnCerrar" type="button" class="btn btn-secondary" data-dismiss="modal">
                <i class="fa fa-fw fa-lg fa-times-circle"></i> Cancelar
              </button>
              <button type="submit" class="btn btn-primary" id="btnActionForm">
                <i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText"> Guardar</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
