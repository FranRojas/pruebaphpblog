<style>
body {
  background-color: rgb(0, 0, 0);
}

.dark-gray-bg {
  background-color: #333333;
  color: #ffffff;
}


</style>

<div class="card  dark-bg dark-gray-bg">
    <div class="card-body   m-4 ">
        <h1 class="card-title">
            {$asunto}
            
            <a href="{$_layoutParams.root}units/create" class="btn btn-outline-secondary">Nueva Unidad
            </a>
        </h1>
        {if isset($eldar_units) && count($eldar_units)}
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$eldar_units item=model}
                        <tr>
                            <td>{$model.id}</td>
                            <td>{$model.name}</td>
                            <td>{$model.unit_type}</td>
                            <td>
                                <a href="{$_layoutParams.root}units/show/{$model.id}" class="btn btn-success btn-sm">Ver</a>
                                <a href="{$_layoutParams.root}units/edit/{$model.id}" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        {else}
            <p class="text-info">{$notice}</p>
        {/if}
    </div>
</div>
