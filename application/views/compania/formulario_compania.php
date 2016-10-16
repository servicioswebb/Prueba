

<?=form_open("/CompaniaController_/recibirdatos")?>
<?
$nombre = array(
    'name' = 'nomCompa'
    'placeholder' = 'Ingrese compañia',

);

$actividad = array(
    'name' = 'actividadCompa'
    'placeholder' = 'Ingrese la actividad de la compañia',

);
?>

<label>
Nombre Compañia:
<?=form_input($nombre)?>
</label>
<label>
Actividad Compañia:
<?=form_input($actividad)?>
</label>
<?=form_close()?>
</body>
</html>
