# Teste-Desenvolvimento-MolaCorban

---
## Subindo o Docker para rodar o app
1. **sudo docker-compose build app**
2. **sudo docker-compose up -d**
3. ![Título da imagem](public/img/rodar-docker.png)

---
## Instalar as dependências do composer
4. **sudo docker-compose exec app composer install**
4.1 ![Título da imagem](public/img/composer_install.png)
4.2 **sudo docker-compose exec app composer update**
---

## crie uma chave para o artisan
5. **sudo docker-compose exec app php artisan key:generate**
5.1 ![Título da imagem](public/img/key.png)
---

## Verifique o host do mysql que o Docker gerou

Comando no terminal:

6.0. **sudo docker ps**

![Título da imagem](public/img/docker_ps.png)


6.1. **docker inspect _id do mysql_**

![Título da imagem](docker_inspect.png)

6.3. Copie o numero do IPAddress 
* Ex:  _172.29.0.3_
---

## Edit o host do mysql
7. **Abra o arquivo database.php linha 49 e coloque o host que o docker gerou**

![Título da imagem](public/img/database.png)

---

8. Rode o Migrate **sudo docker-compose exec app php artisan migrate**
![Título da imagem](public/img/migrate.png)
---

9. Acesse o **_http://localhost:8000/_**

---

10. Crie seu usuario e realize o login 
![Título da imagem](public/img/login.png)

---

11. Na home verá os seguinte módulo:
![Título da imagem](public/img/tela_principal.png)

---

12. Para realizar a inserção eu usei o Postman
![Título da imagem](public/img/insert_json.png)
![Título da imagem](public/img/insert_xml.png)

---

13. A consulta tbem pelo Postman
![Título da imagem](public/img/consulta_api.png)