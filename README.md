API CAKES

Desenvolvido em Laravel 9.

Para rodar esse projeto, basta seguir os seguintes passos:

- Ter o docker instalado na máquina
- Clonar o repositório
- Entrar na pasta do projeto via terminal e rodar o comando docker-compose up -d --build
- Rodar o comando docker exec -it api-cakes-laravel.test-1 bash para acessar o container
- Rodar o comando composer install
- Rodar o comando cp .env.example .env
- Para o próximo passo, recomendo ter uma IDE de banco de dados. Para prosseguir, será necessário criar um banco de dados chamado api-cakes ou com o nome que desejar, porém tendo que ser alterado no arquivo .env posteriormente
- Após criar a base de dados, rodar o comando php artisan migrate dentro do container para criar as tabelas
- Rodar o comando php artisan queue:work --queue=high,default para deixar ativo o processador de filas

Documentação para consumo dos endpoints

https://documenter.getpostman.com/view/1369613/VV4wScU5


