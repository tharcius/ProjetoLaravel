# Laravel 5.1 com AngularJS da Code.Education
### Módulo de Laravel

[![Modulos do laravel](http://sites.code.education/wp-content/uploads/2015/06/prog-laravel1.png)](sites.code.education/laravel-com-angularjs/)

## Terceira fase do Projeto


Project

Nessa fase do projeto, deverá ser criada uma nova entidade chamada ProjectTask e as migrations, seeds, repositories, services para a mesma.

Crie a entidade ProjectMembers e criar o relacionamento com a entidade Project e User para que facilmente possamos ter acesso aos membros de um projeto.

No ProjectService, criar os seguintes métodos:

- addMember: para adicionar um novo member em um projeto
- removeMember: para remover um membro de um projeto
- isMember: para verificar se um usuário é membro de um determinado projeto

Criar um endpoint (rota): /project/{id}/members para ter acesso a todos os membros de um projeto.



## Segunda fase do Projeto


Project

Nessa fase do projeto, deverá ser criada uma nova entidade chamada Project.

Deverá ser criado o Repository e Service referente a entidade Project, bem como as validações.

Na listagem dos dados, deverá trazer informações sobre o owner_id e client_id.



#### Corrreções da segunda fase
Corrigido a validação da classe cliente

Corrigido as informações do Client e Owner para o index de Project

Alterado o método update para que retorne os dados atualizados e utilize o verbo http PUT, ao invés do POST.


## 

## Primeira fase do Projeto


Clients

Nessa fase do projeto, você deverá apresentar um CRUD completo de nosso model Client.

Sempre lembrando que toda a informação resultante deverá ser exibida para o usuário final como um json.

Não se esqueça de utilizar corretamente os verbos HTTP.


# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)
