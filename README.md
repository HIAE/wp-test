# HIAE - Desenvolvedor WordPress

Projeto criado para o processo seletivo do [Hospital Israelita Albert Einstein](https://www.einstein.br/Pages/Home.aspx)

## Instalação

Para instalar o projeto siga os passos abaixo:

1.  Clone o projeto

        git clone https://github.com/edersilva/wp-test && cd wp-test


2.  Com o projeto clonado, execute o comando abaixo na raíz do repositório e aguarde a instalação automática.

        docker-compose up -d

3.  Entre no diretorio do tema executando:

        cd wordpress/wp-content/themes/edersilva

4.  Execute o comando:

        npm i

5.  Em seguida, entre com a url abaixo no seu browser:

        http://localhost


## Habilitando o tema e plugins

Siga os passos abaixo para habilitar as configurações no sistema administrativo:

1.  Vá até o menu Aparência > Temas e habilite o tema "edersilva"


2.  Em seguida, vá no menu Plugins, e habilite os plugins: "Portfólio", "Página Sobre" e "Redes Sociais"

3.  Para finalizar, basta inserir as informações dinâmicas nas três novas áreas no admin.

3.  E záz! Está pronto! :D


## Para automação de tarefas do tema

Para automação de tarefas do JS e CSS como minificar, otimizar e compilar arquivos, entre no diretório do tema e execute:


        gulp

## Sobre o autor
Meu nome é Eder Silva, designer web formado e desenvolvedor. Tenho mais de 15 anos de experiência com desenvolvimento web.
  
Meu portfolio completo pode ser acessado aqui [https://edersilva.com/portfolio/site-em-wordpress/](https://edersilva.com/portfolio/site-em-wordpress/)

## Licença
[MIT](https://choosealicense.com/licenses/mit/)