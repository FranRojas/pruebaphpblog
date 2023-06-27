<div class="card dark-bg dark-gray-bg">
    <div class="card-body">
        <h1 class="card-title">
            {$asunto}
        </h1>
        <div class="col-md-6">
            {include file="../partials/_messages.tpl"}
            {include file="../units/_form.tpl"}
        </div>
    </div>
</div>

<style>
body {
  background-color: rgb(0, 0, 0);
}

.dark-gray-bg {
  background-color: #333333;
  color: #ffffff;
}