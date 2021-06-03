<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



## Projetinho em Laravel Livewire - pequeno clone do Twitter - Especializa TI

Uma ótima alternativa ao jQuery, pretendo fazer novos projetos e postar aqui utilizando Jetstream, Tailwind e Livewire.
O projetinho consiste em um pequeno clone do Twitter com Tweets, like e deslike, para conhecer a ferramenta que foi amor a primeira codada.

## Configurações Laravel

Na raiz do projeto.

```
$ composer install/update
$ composer dumpautoload
$ cp .env.example .env
```

No .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= O_BD_QUE_VC_VAI_USAR
DB_USERNAME=root
DB_PASSWORD=
```

Rode os comandos no terminal
```
$ php artisan key:generate
$ php artisan migrate #antes de rodar este comando verifique sua configuracao com banco em .env
```
## Algumas anotações que fiz 

<p align="center">Passo a passo para configuração do Livewire.</p>

- @livewireStyles - <livewire:styles /> no cabeçalho para os estilos;
- @livewireScripts - <livewire:scripts /> no fim do body para os scripts;
- {{ $slot }} vai ser onde o livewire vai renderizar o template;
- php artisan livewire:publish --config para linkar os arquivos de configuração do livewire na nossa pasta config;
- "@php artisan vendor:publish --force --tag=livewire:assets --ansi" deve ser adicionado no scripts em composer.json para auto-load
- php artisan livewire:make cria novos componentes 
- declarar as variaveis como public na function render
- no two way bind, utilizamos como exemplo um input:text <input type="text" name="message" id="message" wire:model="messages"> observe o wire:model="messages", "messages" foi declarado no controller do como está acima. É mágico
- resumindo isso tudo, Livewire nos faz requisições Ajax.




