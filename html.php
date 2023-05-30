<?php

$nome = 'cam " /> <script>alert("teste");</scipt>';
?>

<input type = "text" name = "<?php echo htmlspecialchars($nome); ?>">  <!--função de segurança para não deixar o usuario inserir coisas no meu código, ele converte < e > e & em codigozinhos HTML-->
