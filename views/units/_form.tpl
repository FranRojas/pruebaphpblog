<form action="{$_layoutParams.root}{$process}" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" value="{$unit.name|default:""}" class="form-control" id="name" placeholder="Nombre del unidad">
        <label for="unit_type" class="form-label">Tipo</label>
        <input type="text" name="unit_type" value="{$unit.unit_type|default:""}" class="form-control" id="unit_type" placeholder="Tipo de unidad">
      
    </div>
    <div class="mb-3">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="send" value="{$send}">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>