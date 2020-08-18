<?php

namespace codicastudio\NovaScheduledJobs\Tests;

use Illuminate\Support\Facades\Bus;
use codicastudio\NovaScheduledJobs\Tests\Fixtures\Jobs\UpdateOrders;
use codicastudio\NovaScheduledJobs\Tests\Fixtures\Jobs\UpdateOrdersWithDependencies;

class DispatchJobTest extends TestCase
{
    /** @test */
    public function canDispatchJob()
    {
        Bus::fake();

        $this->postJson('nova-vendor/codicastudio/scheduled-jobs/dispatch-job', [
                'command' => UpdateOrders::class,
            ])->assertStatus(200);

        Bus::assertDispatched(UpdateOrders::class);
    }

    /** @test */
    public function canDispatchJobWithDependencies()
    {
        Bus::fake();

        $this->postJson('nova-vendor/codicastudio/scheduled-jobs/dispatch-job', [
                'command' => UpdateOrdersWithDependencies::class,
            ])->assertStatus(200);

        Bus::assertDispatched(UpdateOrdersWithDependencies::class);
    }
}
