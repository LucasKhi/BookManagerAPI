# BookManagerAPI

![GitHub](https://img.shields.io/github/license/LucasKhi/BookManagerAPI)
![GitHub last commit](https://img.shields.io/github/last-commit/LucasKhi/BookManagerAPI)
![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/LucasKhi/BookManagerAPI)

Este repositório contém um projeto que implementa um CRUD básico para o gerenciamento de livros, utilizando serviços de APIs públicas e customizadas para enriquecer as informações dos livros cadastrados.

## Recursos

- Integração com a API do Google Books para obter detalhes como capa e descrição dos livros.
- Integração com a API ViaCEP para preencher automaticamente informações de endereço do autor.
- Utilização da API de upload da AWS para armazenar as imagens de capa dos livros.
- Desenvolvido em Laravel 10.x com Docker Compose para ambiente de desenvolvimento simplificado.

## Pré-requisitos

- Docker
- Conta na AWS (para utilização da API de upload)
- Chave de API do Google Books (para integração com a API do Google Books)
- Chave de API do ViaCEP (para integração com a API ViaCEP)

## Instalação

1. Clone este repositório em sua máquina local.
2. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente necessárias (banco de dados, AWS, Google Books, ViaCEP).
3. Execute o Docker Compose para iniciar o ambiente de desenvolvimento: `docker-compose up -d`

4. Acesse a aplicação em http://localhost:8000.

## Contribuição

Sinta-se à vontade para contribuir com melhorias, correções de bugs ou novos recursos. Para contribuir, siga as etapas abaixo:

1. Faça um fork deste repositório.
2. Crie uma branch com a sua contribuição: `git checkout -b minha-contribuicao`.
3. Faça suas alterações e commits: `git commit -m "Minha contribuição"`.
4. Envie suas alterações para o repositório: `git push origin minha-contribuicao`.
5. Abra uma Pull Request para que suas alterações sejam revisadas.

## Licença

Este projeto está sob a Licença MIT - consulte o arquivo [LICENSE](LICENSE) para mais detalhes.

   
