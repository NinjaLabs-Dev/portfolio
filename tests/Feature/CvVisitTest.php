<?php

namespace Tests\Feature;

use App\Models\Cv;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Tests\TestCase;

class CvVisitTest extends TestCase
{
    use RefreshDatabase;

    private string $originalStoragePath;

    private string $testStoragePath;

    protected function setUp(): void
    {
        parent::setUp();

        $this->originalStoragePath = storage_path();
        $this->testStoragePath = sys_get_temp_dir().'/cv-test-'.Str::random(20);
        File::ensureDirectoryExists($this->testStoragePath.'/app');
        $this->app->useStoragePath($this->testStoragePath);
    }

    protected function tearDown(): void
    {
        $this->app->useStoragePath($this->originalStoragePath);
        File::deleteDirectory($this->testStoragePath);

        parent::tearDown();
    }

    public function test_each_cv_get_records_a_timestamped_visit(): void
    {
        File::put(storage_path('app/CV.pdf'), '%PDF-1.4 test');
        $cv = Cv::create([]);

        $this->travelTo(now()->startOfSecond());
        $this->get(route('cv', $cv->approval_code))->assertOk();
        $this->travel(1)->minute();
        $this->get(route('cv', $cv->approval_code))->assertOk();

        $this->assertDatabaseCount('cv_visits', 2);
        $this->assertDatabaseHas('cv_visits', [
            'cv_id' => $cv->id,
            'created_at' => now()->subMinute()->toDateTimeString(),
        ]);
        $this->assertDatabaseHas('cv_visits', [
            'cv_id' => $cv->id,
            'created_at' => now()->toDateTimeString(),
        ]);
    }

    public function test_invalid_links_missing_files_and_head_requests_are_not_counted(): void
    {
        $cv = Cv::create([]);

        $this->get('/cv/invalid')->assertNotFound();
        $this->get(route('cv', $cv->approval_code))->assertNotFound();
        File::put(storage_path('app/CV.pdf'), '%PDF-1.4 test');
        $this->head(route('cv', $cv->approval_code))->assertOk();

        $this->assertDatabaseCount('cv_visits', 0);
    }
}
