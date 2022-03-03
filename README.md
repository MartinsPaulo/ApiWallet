## Algumas informações importantes
<p>Para executar a api siga os passos:</p>
    <p>- Clone o repositório:</p>
    <p><i>git clone https://github.com/MartinsPaulo/ApiWallet.git</i></p>
   <p> - Na pasta do projeto:</p>
    <p>- Instale as dependências:</p>
   <p> <i>composer install</i></p>
    <p>- Gere uma chave (se der erro que não contem o .env, basta copiar o .env.example e renomear para .env):</p>
  <p>  <i>php artisan key:generate</i></p>
    <p>- Dentro do .env, configure seu banco de dados. Vamos usar as migrações do laravel, por este motivo pode ultilizar qualquer banco de dados a sua escolha, basta definir as informações no .env:</p>
    <p><i>DB_CONNECTION=mysql</p>
    <p>DB_HOST=127.0.0.1</p>
    <p>DB_DATABASE=exemplo</p>
   <p> DB_USERNAME="exemplo"</p>
    <p>DB_PASSWORD="exemplo"</i></p>
    <p>- Crie as tabelas com o comando</p>
   <p>  <i>php artisan migrate</i></p>
   <p> - Popule as tabelas com o comando:</p>
   <p>  <i>php artisan db:seed</i></p>
   <p> - Agora basta executar:</p>
   <p>  <i>php artisan serve</i></p>
    
    
   <p><b>Pronto sua aplicação esta em funcionamento, para testar basta ultilizar o caminho : http://127.0.0.1:8000/api/seller/1/wallet</b></p>
