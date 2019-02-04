# Gulp Wordpress Assets Builder
Compilação de assets sass e js com Gulp

## Getting Started

### Pré-requisitos

- [NodeJS](https://nodejs.org/en/)
- [GulpJS](http://gulpjs.com/)
- [Bower](https://bower.io/) (padrão, é possível usar outros recursos)

### Instalando
Execute o seguinte comando para instalar os componentes:

    npm install

### Configuração

Agora que todos os componentes estão instalados você precisa configurar o arquivo `gulpconfig.json`.

Lá você vai dizer quais pacotes ele vai importar, quais arquivos ele vai observar, e onde serão os destinos dos arquivos compilados.

Por padrão, ele vai observar a pasta `src/js` para arquivos JS e `src/scss` para arquivos SASS e colocar os arquivos compilados em `public/assets`.

O comando `@import` do SASS vai importar dentro da pasta `bower_components`, e no diretório do arquivo que usou esse comando. Isso pode ser configurado no caminho `paths.input.scss.import` do `gulpconfig.json`.

## Variáveis de ambiente

Você pode configurar variáveis de ambiente no arquivo `environment-variables.json`.

Você pode usar essas variáveis dentro dos arquivos JS e SASS. O Gulp vai cuidar de colocar o valor delas dentro dos arquivos.

### Exemplos

Por exemplo, irei utilizar esse arquivo `environment-variables.json`:

	{
	  "unique": { "ThemeColor": "#ffffff" }
	}

#### Usando em arquivos SASS

Para usar dentro de arquivos SASS, você precisa usar a função `map-get` para obter as propriedades do objeto `$env`, como no exemplo:

	// ./src/scss/common/_body.scss
	body {
	  background-color: map-get($env, 'ThemeColor');
	}

	// Output
	body {
	  background-color: #ffffff;
	}

#### Usando em arquivos JS

Para usar as variáveis em arquivos JS, basta acessar o objeto `Env` e todas elas estarão lá:

	// ./src/js/common/body.js
	console.log(Env.ThemeColor);

	// Console
	#ffffff

## Executando o compilador

Agora que tudo está configurado, basta rodar o comando `npm start` para que o compilador execute um servidor local e comece a observar os arquivos por mudanças.

Se quiser apenas compilar os arquivos, execute o comando `gulp`.

### Compilando a versão final

Para compilar a versão final dos arquivos, execute o comando `npm run build`. Ele vai limpar a pasta e recompilar os arquivos de forma minificada para otimizar performance.
