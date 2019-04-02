# magento2-vault-webapi

The module adds rest api endpoints to allow management of magento vault payment tokens.  

- [Installation](#installation)
- [Api Documentation](#api-documentation)

## Installation
(these may change depending on your deployment process)
1. ```bash composer require zero1/vault-web-api ```
2. ```bash php bin/magento module:enable Zero1_VaultWebApi```
3. ```bash php bin/magento deploy:mode:set production```

## Api Documentation
After installing and enabling the module the /swagger endpoint will contain the documentation
on the endpoints available. Make sure you apply an API key.

