# PHP Site Skeleton

Uma estrutura base para sites em PHP com foco em simplicidade, organização e boas práticas.

## 🚀 Características

- Estrutura organizada e modular
- SEO otimizado com meta tags dinâmicas
- Formulário de contato com validação
- Responsivo com Bootstrap 5
- Animações suaves
- Proteção contra XSS
- URLs amigáveis
- Cache e compressão configurados
- Pronto para Google Analytics
- Suporte a múltiplos idiomas (estrutura preparada)

## 📁 Estrutura de Diretórios

```
/
├── actions/
│   └── process_form.php    # Processamento do formulário
├── assets/
│   ├── css/
│   │   └── main.css       # Estilos personalizados
│   ├── js/
│   │   └── main.js        # Scripts JavaScript
│   └── img/               # Imagens do site
├── components/
│   ├── header.php         # Cabeçalho do site
│   └── footer.php         # Rodapé do site
├── config/
│   └── config.php         # Configurações globais
├── pages/
│   ├── home.php           # Página inicial
│   ├── sobre.php          # Página sobre
│   └── contato.php        # Página de contato
├── routes/
│   └── web.php            # Rotas do site
├── utils/
│   └── utils.php          # Funções utilitárias
├── vendor/                # Dependências (via Composer)
├── .htaccess              # Configurações do Apache
├── index.php              # Arquivo principal
├── server.php             # Servidor de desenvolvimento
└── 404.php               # Página de erro 404
```

## 🛠 Requisitos

- PHP 7.4 ou superior
- Servidor Apache com mod_rewrite habilitado
- Extensão PHP mail() configurada (para formulário de contato)
- Composer para gerenciamento de dependências

## ⚙️ Instalação

1. Clone o repositório:

```bash
git clone https://github.com/aeusteixeira/php-site-skeleton.git
cd php-site-skeleton
```

2. Instale as dependências via Composer:

```bash
composer install
```

3. Configure o arquivo `config/config.php` com suas informações:

   - `email_destino`: E-mail para receber mensagens do formulário
   - `nome_site`: Nome do seu site
   - `url_site`: URL completa do seu site
   - Outras configurações conforme necessário

4. Configure seu servidor web (Apache) para apontar para o diretório do projeto.

## 🚀 Desenvolvimento

Para desenvolvimento local, use o servidor PHP embutido:

```bash
php server.php
```

O site estará disponível em http://localhost:8080

## 📝 Personalização

### Cores e Estilos

- Edite as variáveis CSS em `assets/css/main.css`
- Personalize os componentes do Bootstrap conforme necessário

### Conteúdo

- Edite os arquivos PHP na pasta `pages/`
- Atualize as imagens em `assets/img/`
- Modifique os textos e seções conforme necessário

### Rotas

- Adicione novas rotas no arquivo `routes/web.php`
- Crie novos arquivos de página na pasta `pages/`

### SEO

- Atualize as meta tags em cada página
- Configure o Google Analytics no header.php (descomente o script)

## 🔒 Segurança

- Todas as entradas de formulário são sanitizadas
- Proteção contra XSS implementada
- Arquivos sensíveis protegidos via .htaccess
- Validação de e-mail no cliente e servidor

## 📱 Responsividade

- Layout responsivo com Bootstrap 5
- Breakpoints personalizados em main.css
- Imagens otimizadas para diferentes dispositivos

## 🚀 Performance

- Compressão GZIP habilitada
- Cache do navegador configurado
- Scripts e estilos otimizados
- Carregamento assíncrono de recursos

## 📦 Extensibilidade

A estrutura está preparada para:

- Adicionar novas páginas
- Implementar sistema de blog
- Adicionar área administrativa
- Implementar sistema multilíngue
- Integrar com APIs externas

## 🤝 Contribuindo

Contribuições são bem-vindas! Por favor, leia o arquivo CONTRIBUTING.md para detalhes sobre nosso código de conduta e o processo para enviar pull requests.

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.

## 👤 Autor

- **Matheus Teixeira** - [aeusteixeira](https://github.com/aeusteixeira)
