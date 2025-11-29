# Curso de PHP - Curso em Vídeo

Este repositório contém os exercícios e desafios do **Curso de PHP** ministrado pelo professor **Gustavo Guanabara** no canal **Curso em Vídeo**.

## 📚 Sobre o Curso

Este curso aborda os fundamentos da linguagem PHP, desde conceitos básicos até a criação de formulários interativos e manipulação de dados. O curso é estruturado em aulas práticas e desafios que consolidam o aprendizado.

## 📁 Estrutura do Repositório

O repositório está organizado em duas pastas principais:

- **`Aulas/`** - Contém os exercícios práticos das aulas
- **`Desafios/`** - Contém os desafios propostos pelo professor
- **`Desafios/Respostas/`** - Contém as soluções dos desafios

## 🎯 Conteúdo Aprendido

### Aulas

#### **Aula 000 - Primeiro Programa**
- Introdução ao PHP
- Sintaxe básica
- Comando `echo`
- Primeiro programa "Olá, mundo!"

#### **Aula 001 - Informações do Servidor**
- Função `phpinfo()`
- Visualização de configurações do PHP

#### **Aula 002 - Funções de Data e Hora**
- Função `date()`
- Configuração de timezone com `date_default_timezone_set()`
- Formatação de datas e horas

#### **Aula 003 - Tipos Primitivos**
- Tipos de dados em PHP
- Coerção de tipos
- Arrays
- Introdução a Classes e Objetos
- Função `var_dump()`

#### **Aula 004 - Formulários com GET**
- Criação de formulários HTML
- Método GET
- Superglobal `$_GET`
- Operador de coalescência nula (`??`)
- Processamento de dados de formulários

#### **Aula 005 - Operadores Aritméticos**
- Operadores: `+`, `-`, `*`, `/`, `%`, `**`
- Soma, subtração, multiplicação, divisão, módulo e exponenciação

#### **Aula 005_2 - Superglobais**
- Superglobal `$_GET`
- Superglobal `$_POST`
- Superglobal `$_REQUEST`
- Superglobal `$_COOKIE`
- Superglobal `$_SESSION`
- Superglobal `$_ENV`
- Superglobal `$_SERVER`
- Superglobal `$GLOBALS`
- Função `setcookie()`
- Função `session_start()`

#### **Aula 006 - Formulários Retroalimentados**
- Formulários que mantêm valores após submissão
- Uso de `$_SERVER['PHP_SELF']`
- Sintaxe curta de echo (`<?= ?>`)

### Desafios

#### **Desafio 000 - Antecessor e Sucessor**
- Recebe um número e exibe seu antecessor e sucessor
- Operações aritméticas básicas

#### **Desafio 001 - Números Aleatórios**
- Geração de números aleatórios com `rand()`
- Atualização de página com JavaScript

#### **Desafio 002 - Conversor de Moedas v1.0**
- Conversão de Real (R$) para Dólar (US$)
- Cotação fixa no código
- Função `round()`

#### **Desafio 003 - Conversor de Moedas v2.0**
- Conversão de moedas com cotação em tempo real
- Integração com API do Banco Central do Brasil
- Uso de cURL para requisições HTTP
- Manipulação de JSON

#### **Desafio 004 - Parte Inteira e Fracionária**
- Separação da parte inteira e fracionária de um número
- Função `round()`

#### **Desafio 005 - Divisão com Estrutura**
- Estrutura visual de divisão
- Operador módulo (`%`)
- Função `floor()`
- Formulários retroalimentados

#### **Desafio 006 - Salários Mínimos**
- Cálculo de quantos salários mínimos um valor representa
- Formatação de moeda com `NumberFormatter`
- Função `numfmt_create()` e `numfmt_format_currency()`

#### **Desafio 007 - Raiz Quadrada e Cúbica**
- Cálculo de raiz quadrada com `sqrt()`
- Cálculo de raiz cúbica com exponenciação
- Função `number_format()`

#### **Desafio 008 - Médias Aritméticas**
- Média aritmética simples
- Média aritmética ponderada
- Múltiplos campos em formulários

#### **Desafio 009 - Calculadora de Idade**
- Cálculo de idade baseado em ano de nascimento
- Função `date()` para obter ano atual
- Formulários com múltiplos campos

#### **Desafio 010 - Reajustador de Preços**
- Cálculo de reajuste percentual
- Input tipo `range` com JavaScript
- Formatação de moeda

#### **Desafio 011 - Calculadora de Tempo**
- Conversão de segundos para semanas, dias, horas e minutos
- Operações de divisão encadeadas

#### **Desafio 012 - Caixa Eletrônico**
- Simulação de saque em caixa eletrônico
- Cálculo de notas (R$100, R$50, R$10, R$5)
- Função `intdiv()` para divisão inteira
- Exibição de imagens das notas

## 🛠️ Tecnologias Utilizadas

- **PHP** - Linguagem de programação
- **HTML5** - Estruturação de páginas
- **CSS3** - Estilização
- **JavaScript** - Interatividade (em alguns desafios)
- **cURL** - Requisições HTTP (Desafio 003)
- **API do Banco Central do Brasil** - Cotação de moedas (Desafio 003)

## 📝 Conceitos Abordados

- Sintaxe básica do PHP
- Variáveis e tipos de dados
- Operadores aritméticos
- Funções nativas do PHP
- Formulários HTML
- Métodos GET e POST
- Superglobais do PHP
- Cookies e Sessões
- Integração com APIs
- Manipulação de JSON
- Formatação de números e moedas
- Classes e Objetos (introdução)
- Formulários retroalimentados

## 🚀 Como Usar

1. Certifique-se de ter um servidor web com PHP instalado (XAMPP, WAMP, ou similar)
2. Clone ou baixe este repositório
3. Coloque os arquivos na pasta `htdocs` (XAMPP) ou `www` (WAMP)
4. Acesse os arquivos através do navegador:
   ```
   http://localhost/CursoPHP/Aulas/ex000/index.php
   ```

## 📖 Recursos

- [Curso em Vídeo - PHP](https://www.cursoemvideo.com/)
- [Documentação Oficial do PHP](https://www.php.net/docs.php)
- [API do Banco Central do Brasil](https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos)

## 👨‍🏫 Professor

**Gustavo Guanabara** - Criador do canal Curso em Vídeo

## 📄 Licença

Este projeto está sob a licença especificada no arquivo `LICENSE`.

---

# PHP Course - Curso em Vídeo

This repository contains exercises and challenges from the **PHP Course** taught by professor **Gustavo Guanabara** on the **Curso em Vídeo** channel.

## 📚 About the Course

This course covers PHP fundamentals, from basic concepts to creating interactive forms and data manipulation. The course is structured with practical lessons and challenges that consolidate learning.

## 📁 Repository Structure

The repository is organized into two main folders:

- **`Aulas/`** - Contains practical exercises from the lessons
- **`Desafios/`** - Contains challenges proposed by the professor
- **`Desafios/Respostas/`** - Contains solutions to the challenges

## 🎯 Content Learned

### Lessons

#### **Lesson 000 - First Program**
- Introduction to PHP
- Basic syntax
- `echo` command
- First "Hello, world!" program

#### **Lesson 001 - Server Information**
- `phpinfo()` function
- Viewing PHP configurations

#### **Lesson 002 - Date and Time Functions**
- `date()` function
- Timezone configuration with `date_default_timezone_set()`
- Date and time formatting

#### **Lesson 003 - Primitive Types**
- Data types in PHP
- Type coercion
- Arrays
- Introduction to Classes and Objects
- `var_dump()` function

#### **Lesson 004 - Forms with GET**
- Creating HTML forms
- GET method
- `$_GET` superglobal
- Null coalescing operator (`??`)
- Form data processing

#### **Lesson 005 - Arithmetic Operators**
- Operators: `+`, `-`, `*`, `/`, `%`, `**`
- Addition, subtraction, multiplication, division, modulo, and exponentiation

#### **Lesson 005_2 - Superglobals**
- `$_GET` superglobal
- `$_POST` superglobal
- `$_REQUEST` superglobal
- `$_COOKIE` superglobal
- `$_SESSION` superglobal
- `$_ENV` superglobal
- `$_SERVER` superglobal
- `$GLOBALS` superglobal
- `setcookie()` function
- `session_start()` function

#### **Lesson 006 - Self-Feeding Forms**
- Forms that maintain values after submission
- Using `$_SERVER['PHP_SELF']`
- Short echo syntax (`<?= ?>`)

### Challenges

#### **Challenge 000 - Predecessor and Successor**
- Receives a number and displays its predecessor and successor
- Basic arithmetic operations

#### **Challenge 001 - Random Numbers**
- Generating random numbers with `rand()`
- Page refresh with JavaScript

#### **Challenge 002 - Currency Converter v1.0**
- Conversion from Brazilian Real (R$) to US Dollar (US$)
- Fixed exchange rate in code
- `round()` function

#### **Challenge 003 - Currency Converter v2.0**
- Currency conversion with real-time exchange rate
- Integration with Central Bank of Brazil API
- Using cURL for HTTP requests
- JSON manipulation

#### **Challenge 004 - Integer and Fractional Parts**
- Separating integer and fractional parts of a number
- `round()` function

#### **Challenge 005 - Division Structure**
- Visual division structure
- Modulo operator (`%`)
- `floor()` function
- Self-feeding forms

#### **Challenge 006 - Minimum Wages**
- Calculating how many minimum wages a value represents
- Currency formatting with `NumberFormatter`
- `numfmt_create()` and `numfmt_format_currency()` functions

#### **Challenge 007 - Square and Cubic Root**
- Square root calculation with `sqrt()`
- Cubic root calculation with exponentiation
- `number_format()` function

#### **Challenge 008 - Arithmetic Means**
- Simple arithmetic mean
- Weighted arithmetic mean
- Multiple fields in forms

#### **Challenge 009 - Age Calculator**
- Age calculation based on birth year
- `date()` function to get current year
- Forms with multiple fields

#### **Challenge 010 - Price Adjuster**
- Percentage adjustment calculation
- `range` input type with JavaScript
- Currency formatting

#### **Challenge 011 - Time Calculator**
- Conversion from seconds to weeks, days, hours, and minutes
- Chained division operations

#### **Challenge 012 - ATM**
- ATM withdrawal simulation
- Note calculation (R$100, R$50, R$10, R$5)
- `intdiv()` function for integer division
- Display of note images

## 🛠️ Technologies Used

- **PHP** - Programming language
- **HTML5** - Page structure
- **CSS3** - Styling
- **JavaScript** - Interactivity (in some challenges)
- **cURL** - HTTP requests (Challenge 003)
- **Central Bank of Brazil API** - Currency exchange rates (Challenge 003)

## 📝 Concepts Covered

- PHP basic syntax
- Variables and data types
- Arithmetic operators
- PHP native functions
- HTML forms
- GET and POST methods
- PHP superglobals
- Cookies and Sessions
- API integration
- JSON manipulation
- Number and currency formatting
- Classes and Objects (introduction)
- Self-feeding forms

## 🚀 How to Use

1. Make sure you have a web server with PHP installed (XAMPP, WAMP, or similar)
2. Clone or download this repository
3. Place the files in the `htdocs` folder (XAMPP) or `www` folder (WAMP)
4. Access the files through your browser:
   ```
   http://localhost/CursoPHP/Aulas/ex000/index.php
   ```

## 📖 Resources

- [Curso em Vídeo - PHP](https://www.cursoemvideo.com/)
- [Official PHP Documentation](https://www.php.net/docs.php)
- [Central Bank of Brazil API](https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos)

## 👨‍🏫 Professor

**Gustavo Guanabara** - Creator of Curso em Vídeo channel

## 📄 License

This project is under the license specified in the `LICENSE` file.

