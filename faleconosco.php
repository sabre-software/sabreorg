<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="fale conosco">
        <title>Fale Conosco</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">

    </head>
    <body id ="outmargin" class="body-fale-conosco">

        <h1>Fale Conosco</h1>
        <form action="/pagina-processa-dados-do-form" method="post">
            
         <p>Preencha com os seus dados:</p>   
            <ul>
                <div><li>
                <label for="nome">Nome completo:</label>
                <input type="text" id="nome" size="50px"/></li>
                </div>

                <div><li>
                <label for="email">E-mail:</label>
                <input type="email" id="email" /></li>
                </div>

                <div><li>
                <label for="dn">Data de nascimento:</label>
                <input type="date" id="dn" ></input></li>
                </div>

                <div><li>
                <label for="telefone">Telefone:</label>
                <input type="text" size="30px" id="telefone"  />  </li>  
                </div>

                <div><li>
                <label>Gênero:</label>
                <select id="genero">
                    <option selected disabled value="">Selecione</option>
                    <option>Masculino</option>
                    <option>Femiinino</option>
                    <option>Não desejo informar</option>
                </select></li>
                </div>
            </ul>    
        <br>

            <p>Assunto:</p>
            <div>
                <label for="Dúvida"><input id="Dúvida" type="radio" name="Dúvida-Sugestão_Reclamação" checked> Dúvida</label><br>
                <label for="Sugestão"><input id="Sugestão" type="radio" name="Dúvida-Sugestão_Reclamação" checked> Sugestão</label><br>
                <label for="Reclamação"><input id="Reclamação" type="radio" name="Dúvida-Sugestão_Reclamação" checked> Reclamação</label><br>
            </div>

            <br>

            <div>
                <textarea id="Fale Conosco" rows="20" style= width:960px>Escreva aqui a sua dúvida, sugestão ou reclamação. </textarea>
            </div>

            <br>

            <div>
                Selecione os seus interesses:<br>
                <label for="tecnologia em geral"><input id="tecnologia em geral" type="checkbox" name="interesses"> Tecnologia em Geral </label><br>
                <label for="metodologia agil"><input id="metodologia gil" type="checkbox" name="interesses"> Metodologia Ágil </label><br>
                <label for="desenvolvimento"><input id="desenvolvimento" type="checkbox" name="interesses"> Desenvolvimento </label><br>
                <label for="outros"><input id="outros" type="checkbox" name="interesses"> Outros:  <input type="text" size="30px" id="telefone"></label>
               <br>
            </div>

            <br> <br>
            <div>
                <button class="botao-fale-conosco" type="submit">ENVIAR</button>
            </div>

            
        </form>
    </body>
</html>
