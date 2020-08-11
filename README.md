## WP Test
#### Instalando tudo

- Clone o projeto: **git clone https://github.com/angelorocha/wp-test.git**
- Navegue até a pasta **wp-test**: cd wp-test
- Inicialize o container: docker-compose up -d
- Navegue ate a pasta **export**, extraia o conteúdo do arquivo "uploads.zip", copie o conteudo para wp-test/wordpress/wp-content/
- Extraia o arquivo angelo.sql de dentro de db.zip
- Identifique o ID do volume do MySQL: docker ps -a
- Execute o comando: docker exec -i ID_DO_CONTAINER_MYSQL mysql -u wordpress -pwordpress --database=wordpress < angelo.sql

Está feito =)
