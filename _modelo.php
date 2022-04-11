<?php
// Define o Título desta pagina
/**
 * Arquivo que faz a configuraçao inicial da pagina . 
 * por exemplo ,conecta-se ao banco de dados
  
 */

require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');



/**
 * Variável que define o título desta página
 *     Referências:
 *     → https://www.w3schools.com/php/php_variables.asp
 *     → https://www.php.net/manual/pt_BR/language.variables.basics.php
 */
$title = "Quem tem fome tem pressa...";
// Inclui cabeçalho php
require($_SERVER['DOCUMENT_ROOT'].'/_header.php')
/**
 * Inclui o cabeçalho da página 
 *     Referências:
 *     → https://www.w3schools.com/php/php_includes.asp
 *     → https://www.php.net/manual/pt_BR/function.include.php
 */
?>
            <section>

                <h2>Título da pagina</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nulla reiciendis, repellat iusto id quaerat veniam accusantium ratione quas aperiam fugit nihil. Cum doloribus debitis quasi repellat pariatur odit deleniti.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, doloremque. Necessitatibus eveniet obcaecati minus, nobis aliquid ab tempora eligendi, esse impedit amet aspernatur? Sunt atque itaque, officia voluptates commodi quaerat.</p>
           
            </section>

            <aside>
                <h3>lateral</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, aperiam corporis culpa consequatur
                    iusto.</p>

            </aside>

        </main>
        <?php require($_SERVER['DOCUMENT_ROOT'].'/_footer.php')
        
        ?>
