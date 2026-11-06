<?php

namespace App\Filament\Widgets;

use App\Models\CvVisit;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class CvVisitsChart extends ChartWidget
{
    protected static ?string $heading = 'CV visits';

    protected int|string|array $columnSpan = 'full';

    public ?string $filter = '30';

    protected function getFilters(): ?array
    {
        return [
            '7' => 'Last 7 days',
            '30' => 'Last 30 days',
            '90' => 'Last 90 days',
        ];
    }

    protected function getData(): array
    {
        $days = (int) $this->filter;
        $start = Carbon::today()->subDays($days - 1);

        $perDay = CvVisit::query()
            ->where('created_at', '>=', $start)
            ->get(['created_at'])
            ->countBy(fn (CvVisit $visit) => $visit->created_at->toDateString());

        // Running total of all visits up to the start of the window.
        $total = CvVisit::query()->where('created_at', '<', $start)->count();

        $labels = [];
        $daily = [];
        $cumulative = [];

        for ($i = 0; $i < $days; $i++) {
            $day = $start->copy()->addDays($i);
            $count = $perDay[$day->toDateString()] ?? 0;
            $total += $count;

            $labels[] = $day->format('d M');
            $daily[] = $count;
            $cumulative[] = $total;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Visits per day',
                    'data' => $daily,
                    'borderColor' => '#f59e0b',
                    'backgroundColor' => 'rgba(245, 158, 11, 0.2)',
                ],
                [
                    'label' => 'Total visits',
                    'data' => $cumulative,
                    'borderColor' => '#3b82f6',
                    'backgroundColor' => 'rgba(59, 130, 246, 0.2)',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
