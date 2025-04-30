<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Services\GreetingsService;

class MockTest extends TestCase
{
    // stub simple test
    public function testStub() : void
    {
        // создание стаба
        $stub = $this->createMock(GreetingsService::class);
        $stub->method('sayHello')->willReturn('Hello');

        // теперь обращайся к сервису со стабом
        $this->app->instance(GreetingsService::class, $stub);

        // вызов фейкового пути
        $response = $this->get('greet');

        $response->assertStatus(200)->assertJson(['message' => 'Hello']);
    }

    // mock simple example
    public function testMock() : void
    {
        // создание mock
        $mock = $this->createMock(GreetingsService::class);

        // описывание поведения mock (прописываем жестко потому что контроллер)
        $mock->method('sayHello')->with('Bob')->willReturn('Hello Bob');

        // при вызове сервиса - обращайся к mock
        $this->app->instance(GreetingsService::class, $mock);

        // симулирование вызова эндпоинта
        $response = $this->get('greet');

        // проверка ответа
        $response->assertStatus(200)->assertJson(['message' => 'Hello Bob']);
    }
}
