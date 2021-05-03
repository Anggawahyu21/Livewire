<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('siswa')->html();
} elseif ($_instance->childHasBeenRendered('qMDk4b4')) {
    $componentId = $_instance->getRenderedChildComponentId('qMDk4b4');
    $componentTag = $_instance->getRenderedChildComponentTagName('qMDk4b4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qMDk4b4');
} else {
    $response = \Livewire\Livewire::mount('siswa');
    $html = $response->html();
    $_instance->logRenderedChild('qMDk4b4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    
</body>
<?php echo \Livewire\Livewire::scripts(); ?>

</html><?php /**PATH C:\xampp\htdocs\project-laravel\resources\views/v_siswa.blade.php ENDPATH**/ ?>