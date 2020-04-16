# Get Started
Holla Task for handling billing data

## Follow all the steps below
- Clone the project repository
- Run composer install
- Create database called holla
- Run php artisan migrate
- Run php artisan db seed to generate mock up data.
- Run php artisan serve.
- Open browser to visit application on http://localhost:8000
- Locate app/ClientBill.php class and uncomment the sendBillToApi function body
- Replace enpoint variable to active endpoint
- Click on the process billing button.


## Summary
This update should also handle records up to 100,000 using the queue method solution is best for handling large dataset
