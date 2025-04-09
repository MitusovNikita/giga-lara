<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 *  @OA\Info(
 *     title="Simple API",
 *     version="1.0",
 *     description="Первый API для сваггера",
 *     @OA\Contact(
 *      email="mitusov333@gmail.com"
 *     ),
 *     @OA\License(
 *      name="MIT",
 *      url="https://opensource.org/licenses/MIT"
 *     )
 * )
 */
class SwaggerController extends Controller
{
    /**
     * @OA\Get(
     *     path="/swagger/show",
     *     summary="Simple Hello World endpoint",
     *     @OA\Response(
     *         response="200",
     *         response="200",
     *         description="A simple hello world message",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Hello, World!")
     *         )
     *     )
     * )
     */
    public function show() : string
    {
        return response()->json(['message' => 'Hello, World!']);
    }

    /**
     * @OA\Get(
     *     path="/swagger/advanced/{num}",
     *     summary="Умножение числа на 2",
     *     description="Этот метод умножает переданное число на 2 и возвращает результат в формате JSON.",
     *
     *     @OA\Parameter(
     *         name="num",
     *         in="path",
     *         required=true,
     *         description="Целое число, которое будет умножено на 2",
     *         @OA\Schema(
     *             type="integer",
     *             format="int32"
     *         )
     *     ),
     *      @OA\Tag(
     *          name="item",
     *          description="Все операции с предметами"
     *      ),
     *     @OA\Response(
     *         response="200",
     *         description="Успешный ответ с умноженным числом",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="number", type="integer", description="Умноженное число")
     *         )
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Неверный запрос (например, неправильный формат числа)"
     *     )
     * )
     */
    public function advanced(int $num) : string
    {
        return response()->json(['number' => $num*2]);
    }
}
