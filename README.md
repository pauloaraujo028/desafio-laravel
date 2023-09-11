<a name="readme-top"></a>
<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/pauloaraujo028/desafio-laravel">
    <h1 align="center">Aplicação Web com Laravel - Integração com API de CEP e Autenticação</h1>
  </a>

  <h4 align="center">  
    <br />
    <a href="https://github.com/pauloaraujo028/desafio-laravel/issues/new" target="_blank">Relatar Bug</a>
    ·
    <a href="https://github.com/pauloaraujo028/desafio-laravel/issues/new" target="_blank">Recurso de Issues</a>
  </h4>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Índice</summary>
  <ol>
    <li>
      <a href="#about-the-project">Sobre o Projeto</a>
      <ul>
        <li><a href="#function">Funcionalidades principais</a></li>
        <li><a href="#built-with">Construído com</a></li>
      </ul> 
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#installation">Instalação</a></li>
      </ul>
    </li>
    <li><a href="#contributing">Contribuindo</a></li>
    <li><a href="#license">Licença</a></li>
    <li><a href="#contact">Contato</a></li>
    <!-- <li><a href="#acknowledgments">Agradecimentos</a></li> -->
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
<a name="about-the-project"></a>
## Sobre o Projeto

Teste Prático: Desenvolvimento de Aplicação Web com Laravel - Integração com API de CEP e Autenticação

<img width="1493" alt="Página de Perfil" src="https://github.com/pauloaraujo028/desafio-laravel/assets/105018299/275fedb2-d317-41c8-b065-bb3228a15a10">
<img width="1493" alt="Login e Register Page" src="https://github.com/pauloaraujo028/desafio-laravel/assets/105018299/77086a94-da2b-4c07-9210-76a2474f4ceb">

<a name="function"></a>
**Funcionalidades principais:**

* Página de Cadastro e Login.
* Sistema de Autenticação.
* Painel do Usuário.
* Upload de Foto de Perfil.
* Armazenamento no Banco de Dados.
* Utilização de uma API de CEP do Brasil.

**Resumo:**

O projeto é um sistema web que oferece funcionalidades de autenticação, permitindo que os usuários se registrem e acessem suas contas. Após o registro, os usuários podem fazer login e acessar um dashboard personalizado.

Registro de Usuário:

* Os usuários podem se registrar fornecendo seu nome, e-mail e senha.
Após o registro bem-sucedido, são direcionados para a página de login.

Autenticação de Usuário:

* Os usuários podem fazer login utilizando suas credenciais previamente registradas.

Dashboard Personalizado:

* Após o login, os usuários são redirecionados para um dashboard exclusivo.
O dashboard contém uma barra de navegação com opções para atualizar o perfil e fazer logout.

Atualização do Perfil:

* No dashboard, os usuários têm a opção de completar o cadastro fornecendo informações adicionais, como CEP, endereço, entre outros detalhes.
As informações do endereço são automaticamente preenchidas a partir da API de CEP do Brasil.
Os usuários também podem fazer o upload de uma foto para o perfil.

Logout:

* No dashboard, os usuários podem fazer logout da sua conta, encerrando a sessão.

Este projeto visa demonstrar habilidades em desenvolvimento web, autenticação de usuários, integração com APIs e gestão de dados em um banco de dados. Ao seguir as melhores práticas de desenvolvimento, o objetivo é criar uma aplicação funcional, intuitiva e segura para os usuários.

**Próximas atualizações:**

* Adicionar páginas novas.
* Melhorar sistema de login e registro.
* Melhorar design visual de todo o projeto.
* Refatorar o Projeto para melhorar manutenção.


<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>

<a name="built-with"></a>
## Construído com

**Principais tecnologias:**

* ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
* ![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
* ![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
* ![Vite](https://img.shields.io/badge/vite-%23646CFF.svg?style=for-the-badge&logo=vite&logoColor=white)

<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>


<!-- GETTING STARTED -->
<a name="getting-started"></a>
## Getting Started

<a name="installation"></a>
### Instalação

1. Baixe/Instale o XAMPP ou WAMPP.

2. Abra o painel de controle do XAMPP e inicie [apache] e [mysql].

3. Baixe o projeto do Github (https://github.com/pauloaraujo028/desafio-laravel) ou siga os comandos do Gitbash

        >cd C:\xampp\htdocs\

        >git clone https://github.com/pauloaraujo028/crud-app.git

4. Extraia os arquivos em C:\xampp\htdocs.

5. Abra o link localhost/phpmyadmin.

6. Clique em novo na barra lateral.

7. Dê um nome de banco de dados como (laravel) e clique no botão criar.
* Obs: Se optar por outro nome de banco de dados precisa alterar o arquivo .env na raiz do projeto (DB_DATABASE=nomedoseubanco)

9. Após criar o nome do banco de dados, clique em importar.

10. Procure o arquivo no diretório [desafio-laravel\laravel.sql].

11. Após importar com sucesso.

12. Abra um terminal de digite

        >php artisan serve

13. Em um novo terminal digite

        >npm i
        >npm run dev

15. Abra qualquer navegador e digite http://localhost:8000/.

<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>

<!-- CONTRIBUTING -->
<a name="contributing"></a>
## Contribuição

As contribuições são o que tornam a comunidade de código aberto um lugar incrível para aprender, inspirar e criar. Quaisquer contribuições que você fizer são **muito apreciadas**.

Se você tiver uma sugestão para melhorar o projeto, faça um fork do repositório e crie uma solicitação pull. Você também pode simplesmente abrir um issue com a tag "melhoria".
Não se esqueça de dar uma estrela ao projeto! Obrigado novamente!

1. Faça o Fork do Projeto
2. Crie seu Branch (`git checkout -b feature/RecursoIncrivel`)
3. Commit suas alterações (`git commit -m 'Adicione algum recurso incrivel'`)
4. Push para o Branch (`git push origin feature/RecursoIncrivel`)
5. Abra um Pull Request

<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>

<!-- LICENSE -->
<a name="license"></a>
## Licença

Distribuído sob a licença MIT.

<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>

<!-- CONTACT -->
<a name="contact"></a>
## Contato
### Paulo Araújo

[![Portfolio](https://img.shields.io/badge/Portfolio-%23000000.svg?style=for-the-badge&logo=firefox&logoColor=#FF7139)](https://pauloaraujo-portfolio.netlify.app/)
[![LinkedIn](https://img.shields.io/badge/linkedin-%230077B5.svg?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/pauloaraujo028/)
[![GitHub](https://img.shields.io/badge/github-%23121011.svg?style=for-the-badge&logo=github&logoColor=white)](https://github.com/pauloaraujo028) 
[![Gmail](https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:pauloaraujo.phz@gmail.com)

<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>


<!-- ACKNOWLEDGMENTS 
<a name="acknowledgments"></a>
## Agradecimentos

* 
* 
* 
* 
<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>-->
