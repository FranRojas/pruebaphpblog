<style>
body {
  background-color: rgb(0, 0, 0);
}

.dark-gray-bg {
  background-color: #333333;
  color: #ffffff;
}


</style>

<main class="container-fluid dark-gray-bg ">
    <div class="page-error tile  row m-4 ">
        <h1><i class="fa fa-exclamation-circle"></i> Error 404: Página no encontrada</h1>
        <p>{$message}</p>
        <p><a class="btn btn-primary" href="javascript:window.history.back();">Volver</a></p>
    </div>
</main>