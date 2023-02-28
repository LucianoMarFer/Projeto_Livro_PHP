<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once './Pessoa.php';
        require_once './Livro.php';
        require_once './Publicacao.php';
        
       
        
        
        $p[0] = new Pessoa("Luciano", 42, "M");
        $p[1] = new Pessoa("Maria", 31, "F");
        
        $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
        $l[1] = new Livro("POO com PHP", "Chica da Selva", 500, $p[0]);
        $l[2] = new Livro("PHP Avançado", "Cláudio Cavalcante", 800, $p[1]);
        
        $l[1]->abrir();
        $l[1]->folhear(501);
        $l[1]->avancarPag();
        $l[1]->avancarPag();
        $l[1]->avancarPag();        
        
        $l[1]->detalhes();
        
        $l[1]->voltarPag();
        $l[1]->detalhes();
        
        
        
  
        ?>
        </pre>
    </body>
</html>
