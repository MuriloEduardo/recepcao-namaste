# Recepcao Namaste
Instruções para começar a codar:

Clonar o repositório para dentro do web server local
    (XAMPP, MAPP, Apache)

Banco de dados
    Criar uma versão local ou usar a versão de produção mesmo

Setar as variaveis de ambiente no arquivo /.env na raiz do projeto
    Este arquivo .env é ignorado pelo git, entao no repo sempre vai junto um .env.example para editarmos e salvar com o nome certo. Encontramos os dados do banco de produção no painel do app na heroku, na aba settings.

Com o composer e npm instalados: rodar composer install e depois npm install

Rodar npm run watch para webpack escutar alterações de todos assets

Roda php artisan serve para o artisan iniciar a plicação em http://localhost:8000