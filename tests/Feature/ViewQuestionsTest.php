<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewQuestionsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function user_can_view_questions()
    {   // 0.拋出異常
        $this->withoutExceptionHandling();

        // 1.假設 /questions 路由存在
        // 2. 訪問鏈接 /questions
        $test = $this->get('/questions');

        // 3. 正常返回 200
        $test->assertStatus(200);
    }
}
