<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



## Projetinho em Laravel Livewire

Uma ótima alternativa ao jquery, pretendo fazer novos projetos e postar aqui utilizando Jetstream, Tailwind e Livewire.


## Algumas anotações que fiz, 

<p align="center">Passo a passo para configuração.</p>

- @livewireStyles - <livewire:styles /> no cabeçalho para os estilos;
- @livewireScripts - <livewire:scripts /> no fim do body para os scripts;
- {{ $slot }} vai ser onde o livewire vai renderizar o template;
- php artisan livewire:publish --config para linkar os arquivos de configuração do livewire na nossa pasta config;
- "@php artisan vendor:publish --force --tag=livewire:assets --ansi" deve ser adicionado no scripts em composer.json para auto-load
- php artisan livewire:make cria novos componentes 
- declarar as variaveis como public na function render
- no two way bind, utilizamos como exemplo um input:text <input type="text" name="message" id="message" wire:model="messages"> observe o wire:model="messages", "messages" foi declarado no controller do como está acima. É mágico
- resumindo isso tudo, Livewire nos faz requisições Ajax.




