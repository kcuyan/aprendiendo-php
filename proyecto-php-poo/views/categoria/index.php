<h1>Gestionar categorias</h1>

<a href="<?=base_url?>categoria/crear" class="button button-small">
    crear categoria
</a>

<table>
    <tr>
        <th>id</th>
        <th>nombre</th>
    <tr>
<?php while($cat = $categorias->fetch_object()) :?>
    <tr>
        <td><?= $cat->id; ?></td>
        <td><?= $cat->nombre; ?></td>
    <tr>

<?php endwhile; ?>

</table>
