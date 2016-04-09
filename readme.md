
## Payment Microservice

### Requirements:

1. Composer https://getcomposer.org/
2. PHP and MySQL in your machine
3. Lumen 5 System Requirements https://lumen.laravel.com/docs/5.2#server-requirements

### Instruction

1. Run "composer install" in the root directory
2. Copy .env.example as .env
3. Add appropriate values for Spreedly Service
ex. SPREEDLY_API_URL=ABC123

### API

void - expects JSON data with transaction_token then calls Spreedly API to void transaction

refund/full - expects JSON data with transaction_token then calls Spreedly API to refund transaction

refund/partial - expects JSON data with transaction_token and amount then calls Spreedly API to partial refund transaction

### Notes

Install application in an instance inside VPC in AWS OR refactor to include API Key for security

Look for //TODO and add your own logging, exception or events

Add more API methods depending on business requirements

### Documentation

API documentation is generated using annotation from Swagger PHP. See public/swagger/swagger.json for sample.
