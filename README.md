## Descrição do Projeto

Este projeto é um sistema de formulário web desenvolvido em HTML, CSS e PHP. Ele permite que usuários preencham um formulário na página principal e salvem os dados em um banco de dados MySQL. 
Após o envio, o usuário é redirecionado para uma página de agradecimento. O projeto também inclui um painel administrativo para visualizar os dados enviados.

## Estrutura de Pastas e Arquivos

- `index.html`: Página principal com o formulário.
- `obrigado.html`: Página exibida após o envio do formulário.
- `salvar.php`: Script PHP responsável por salvar os dados do formulário no banco de dados.
- `admin.php`: Painel administrativo para visualizar os dados salvos.
- `criar_tabela.sql`: Script SQL para criar a tabela no banco de dados.
- `css/`: Pasta contendo os arquivos de estilo CSS (`style.css` e `responsivo.css`).
-  `Narrativa.doc`: Contendo toda narrativa explicando o contexto do problema e a solução proposta.
- `diagrama de casos de uso.png` : Diagrama contendo o casos de uso do portal.

## Pré-requisitos

- PHP instalado (versão 7.0 ou superior)
- Servidor web (ex: Apache, Nginx ou o embutido do PHP)
- MySQL ou MariaDB

## Passo a Passo para Rodar o Projeto Localmente

1. **Clone ou copie os arquivos do projeto para uma pasta local.**

2. **Configure o banco de dados:**
   - Crie um banco de dados no MySQL (exemplo: `formulario_db`).
   - Importe o arquivo `criar_tabela.sql` para criar a tabela necessária:
     ```sh
     mysql -u seu_usuario -p formulario_db < criar_tabela.sql
     ```

3. **Configure as credenciais do banco de dados:**
   - Abra o arquivo `salvar.php` e, se necessário, ajuste as variáveis de conexão (`host`, `usuario`, `senha`, `banco`) para corresponder ao seu ambiente local.
   - Faça o mesmo no arquivo `admin.php`.

4. **Inicie o servidor web:**
   - Se estiver usando o PHP embutido, execute o comando na pasta do projeto:
     ```sh
     php -S localhost:8000
     ```
   - Ou coloque os arquivos em uma pasta do seu servidor Apache/Nginx.

5. **Acesse o sistema:**
   - Abra o navegador e acesse `http://localhost:8000/index.html` para visualizar o formulário.
   - Após o envio, você será redirecionado para `obrigado.html`.
   - Para acessar o painel administrativo, vá para `http://localhost:8000/admin.php`.

## Observações

- Certifique-se de que o PHP tenha permissão para acessar o banco de dados.
- O projeto pode ser customizado conforme a necessidade, alterando os campos do formulário e o layout nos arquivos HTML e CSS.


