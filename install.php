<?
global $PLUGINS_PATH, $MODULES_PATH;


//Cadastro Módulo...
$post = new nbrTablePost();
$post->table  = 'sysModules';

$post->AddFieldString('Name',             'Gerenciador de ArquivosX');
$post->AddFieldString('Description',      'Gerenciador de ArquivosX');
$post->AddFieldString('Path',             'fileManager');
$post->AddFieldString('Icon',             'pastas.png');
$post->AddFieldBoolean('Actived',         true);

$post->Execute();

$moduloID = $post->id;

//Cadastra Pasta...
$post = new nbrTablePost();
$post->table = 'sysModuleFolders';

$post->AddFieldInteger('Module',          $moduloID);
$post->AddFieldBoolean('Name',            'elfinder 2.0');
$post->AddFieldInteger('Order',           10);
$post->AddFieldString('File',             'elfinder.php');
$post->AddFieldString('Grouper',          'Geral');
$post->AddFieldBoolean('Actived',         true);
$post->AddFieldBoolean('MultiLanguages',  false);

$post->Execute();


//move diretório de modulo...
CopiaDir($PLUGINS_PATH . 'fileManager/module', $MODULES_PATH . 'fileManager');


?>