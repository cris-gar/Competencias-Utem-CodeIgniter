<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style>
    #formulario_imagenes{
        width: 500px;
        padding: 20px 0px 20px 120px;
        margin: 100px 0px 0px 350px;
        background-color: teal;
        color: #fff;
    }
    label{
        display: block;
    }
    input[type=text],input[type=file]{
        padding: 10px;
        width: 300px;
        background-color: #444;
        color: #fff;
        font-weight: bold;
    }
    input[type=submit]{
        padding: 10px;
        width: 150px;
        background-color: #111;
        color: #fff;
        font-weight: bold; 
    }
</style>
</head>

<body>
    <!--$ERROR MUESTRA LOS ERRORES QUE PUEDAN HABER AL SUBIR LA IMAGEN-->
    <?=@$error?>
<div id="formulario_imagenes">
    <span><?php echo validation_errors(); ?></span>
<?=form_open_multipart(null)?>
    <label>Título:</label><input type="text" name="titulo" />
    <label>Imagen 1:</label><input type="file" name="userfile" /><br /><br />
    <input type="hidden" name="id" value="<?php echo $id?>" />
    <input type="submit" value="Subir imágenes" />
<?=form_close()?>
</div>
</body>
</html>