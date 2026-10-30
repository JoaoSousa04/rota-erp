# Rota ERP

Plataforma demonstrativa para planejar e acompanhar implantações de sistemas em múltiplas unidades. O projeto transforma em produto de portfólio experiências comuns em operações de implantação: etapas, responsáveis, pendências, registros e indicadores de andamento.

> Projeto independente para fins de estudo e portfólio. Usa somente organizações, unidades e dados fictícios; não representa nem divulga sistemas, clientes, processos ou informações confidenciais de qualquer empresa.

## Objetivo do MVP

Permitir que uma pessoa gestora acompanhe uma implantação, veja o progresso de cada unidade e identifique tarefas atrasadas ou impedimentos. Integrantes das unidades atualizam suas próprias tarefas e registram impedimentos.

## Stack planejada

- PHP 8.3+ e Laravel 13
- Blade, HTML e CSS na interface inicial; JavaScript simples quando trouxer benefício claro
- PostgreSQL
- Git e GitHub para histórico, issues e pull requests
- GitHub Actions para integração contínua
- Docker e Render para empacotamento e publicação, numa etapa posterior

## Situação

O ambiente local está preparado e o esqueleto Laravel 13 com Blade foi criado na pasta `app/`. O projeto será desenvolvido como uma trilha guiada: primeiro PHP/Laravel, HTML e SQL; Git/GitHub em passos pequenos; testes, automação, Docker e hospedagem entram depois. A pasta `Microsoft/Windows/PowerShell/ModuleAnalysisCache` já existia no workspace e é um arquivo local do ambiente; não faz parte do produto.

## Configuração local

O modelo [`.env.example`](.env.example) contém valores de demonstração e nenhuma senha real. Para criar a configuração local da aplicação, copie o modelo para a pasta Laravel e gere a chave da aplicação:

```powershell
Copy-Item .env.example app/.env
Set-Location app
php artisan key:generate
```

Preencha `DB_PASSWORD` apenas no arquivo `app/.env`, com a senha local do PostgreSQL. Nunca versione `app/.env` nem compartilhe a senha.

## Próximos passos

1. Configurar a conexão PostgreSQL no arquivo local `app/.env`.
2. Iniciar a aplicação e conhecer a rota e a view inicial do Blade.
3. Versionar a aplicação e publicar a primeira versão no GitHub.
4. Desenvolver o MVP em pequenas entregas documentadas no próprio repositório.

## Privacidade

O currículo em PDF e qualquer dado real de clientes ou empregadores não devem ser versionados nem usados como dados de demonstração. O `.gitignore` exclui o PDF do currículo por padrão.
