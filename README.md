## Algumas informações importantes
<p>Para executar a api siga os passos:
    - Clone o repositório:
    <i>git clone https://github.com/MartinsPaulo/ApiWallet.git</i>
    - Na pasta do projeto:
    - Instale as dependências:
    <i>composer install</i>
    - Gere uma chave (se der erro que não contem o .env, basta copiar o .env.example e renomear para .env):
    <i>php artisan key:generate</i>
    - Dentro do .env, configure seu banco de dados. Vamos usar as migrações do laravel, por este motivo pode ultilizar qualquer banco de dados a sua escolha, basta definir as informações no .env:
    <i>DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_DATABASE=exemplo
    DB_USERNAME="exemplo"
    DB_PASSWORD="exemplo"</i>
    - Crie as tabelas com o comando
     <i>php artisan migrate</i>
    - Popule as tabelas com o comando:
     <i>php artisan db:seed</i>
    - Agora basta executar:
     <i>php artisan serve</i>
    
    
    <h3>Pronto sua aplicação esta em funcionamento, para testar basta ultilizar o caminho : http://127.0.0.1:8000/api/seller/1/wallet</h3>
</p>
