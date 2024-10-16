# tests
# create test file
php artisan make:test ExampleTest --unit
# run all tests
php artisan test
# run single test
php artisan test --filter FirstTest::test_example

# migrations
# send changes to db
php artisan migrate
# create migration file
php artisan make:migration create_test_second_table

# docker
# docker restart
docker-compose up --build -d

# artisan
# clear app cache
php artisan cache:clear    
