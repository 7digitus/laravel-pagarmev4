# Laravel PagarMe - 2021 (Funcionando 100%)
Integração da API PHP PagarMe com o Laravel

O Laravel PagarMe - 2021 consome a API PHP fornecida pela equipe do Pagar.me de forma mais simples e rápida.

**Configuração**

Para começar, instale via composer no seu terminal

`composer require 7digitus/laravel-pagarme`

Após a instalação, publique o arquivo de configuração executando o comando a seguir

`php artisan vendor:publish --provider=digitus\LaravelPagarMeV4\Providers\PagarMeServiceProvider`

Assim você pode adicionar em seu `.env` as seguintes linhas ou configurar diretamente no arquivo `config/pagarme.php`

    PAGARME_API_KEY=
    PAGARME_ENCRYPTION_KEY=

Você pode pegar a API KEY e ENCRYPTION KEY aqui https://dashboard.pagar.me/#/myaccount/apikeys


**Exemplo de uso**

O uso da API segue a documentação oficial do Pagar.me, que pode ser consultada aqui https://github.com/pagarme/pagarme-php/wiki


    use digitus\LaravelPagarMeV4\Facades\PagarMeFacade as PagarMe;

    $createCard = PagarMe::cards()->create([
        'holder_name' => 'name',
        'number' => 'number',
        'expiration_date' => 'ex_date',
        'cvv' => '123'
    ]);
    
    
 
    Requisição de todos os planos cadastrados
    $plans = PagarMe::plans()->getList();
