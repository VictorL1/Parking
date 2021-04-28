<link rel="stylesheet" href="css/accueiladmmin.css">
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
@if (!isset($liste))
    <form action="/ListeAttente" name="form" method="post">
        @csrf
        <input type="hidden" name='id' value={{$id}}>
    </form>
@else
    <form action="/ListeUtilisateur" name="form" method="post">
        @csrf
        <input type="hidden" name='id' value={{$id}}>
    </form>
@endif

<script type="text/javascript">
    document.forms["form"].submit();

</script>
