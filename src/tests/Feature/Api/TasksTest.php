<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\Project;
use App\Models\Report;

class TaskTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndexTasksSuccess()
    {
        $response = $this->json('GET', '/api/tasks');

        $response->assertStatus(200);
    }
}
