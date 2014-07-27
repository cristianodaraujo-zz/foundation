<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo str_replace("/", "", $_SERVER['REQUEST_URI']); ?></title>
    <!--  META TAGS  -->
    <meta http-equiv="Content-Type" content="text/html, charset=utf-8" />
    <!--  CSS  -->
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
</head>
<body>
<!-- Begin Header -->
<div id="header" class="container">
    <a class="col-12 col-sm-8 colo-lg-4" href="home">
        <h1 class="text-left">Titulo do site</h1>
    </a>
</div>
<div class="col-md-12 col-md-offset-5">
    <form class="form-inline" name="search" method="get" action="busca">
        <fieldset>
            <input type="text" name="consulta" maxlength="255" />
            <input type="submit" value="BUSCAR" name="submit" />
        </fieldset>
    </form>
</div>

