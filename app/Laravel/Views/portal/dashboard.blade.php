@extends('portal._layouts.main')

@section('content')
<main class="px-3 px-md-4 pt-0 pb-4">

    <div class="mb-4">
        <h1 class="h4 fw-bold mb-1">Dashboard</h1>
        <p class="text-body-secondary mb-0">
            Welcome to the Folio user portal.
        </p>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-3 mb-3">
        <div class="col">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="text-body-secondary small">Total Visitors</div>
                    <div class="fs-2 fw-bold">0</div>
                    <div class="text-success small">▼ 0% vs last month</div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="text-body-secondary small">Total Articles</div>
                    <div class="fs-2 fw-bold">3</div>
                    <div class="text-success small">▲ 3 new this month</div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="text-body-secondary small">Comments</div>
                    <div class="fs-2 fw-bold">0</div>
                    <div class="text-muted small">▼ 0% vs last month</div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="text-body-secondary small">Subscribers</div>
                    <div class="fs-2 fw-bold">0</div>
                    <div class="text-muted small">▼ 0% vs last month</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-3">
        
        <div class="col-12 col-lg-8">
            <div class="card shadow-sm h-100 chart-card">
                <div class="card-body">
                    <h2 class="h6 mb-3">Monthly Visitors (Last 12 Months)</h2>
                    <div class="chart">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h2 class="h6 mb-3">Top Articles</h2>
                    <div class="mb-3">
                        <div class="fw-semibold small">Article 1</div>
                        <div class="text-body-secondary small">12,480 views</div>
                        <div class="progress" style="height:6px">
                            <div class="progress-bar bg-primary" style="width:100%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="fw-semibold small">Article 3</div>
                        <div class="text-body-secondary small">9,320 views</div>
                        <div class="progress" style="height:6px">
                            <div class="progress-bar bg-primary" style="width:75%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="fw-semibold small">Article 2</div>
                        <div class="text-body-secondary small">7,905 views</div>
                        <div class="progress" style="height:6px">
                            <div class="progress-bar bg-primary" style="width:63%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="h6 mb-3">Recent Articles</h2>
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Article 3</td>
                            <td>Author</td>
                            <td>Nov 13, 2026</td>
                            <td><span class="badge text-bg-success">Published</span></td>
                        </tr>
                        <tr>
                            <td>Article 2</td>
                            <td>Author</td>
                            <td>Nov 13, 2026</td>
                            <td><span class="badge text-bg-success">Published</span></td>
                        </tr>
                        <tr>
                            <td>Article 1</td>
                            <td>Author</td>
                            <td>Nov 13, 2026</td>
                            <td><span class="badge text-bg-success">Published</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

@section('page-styles')
<style>
    :root {
        box-sizing: border-box;
        padding-top: env(safe-area-inset-top, 0px);
        padding-bottom: env(safe-area-inset-bottom, 0px);
    }
    .chart-wrapper,
    .chart-card {
        min-width: 0;
        max-width: 100%;
    }
    .chart {
        display: grid;
        grid-template-columns: repeat(12, minmax(0, 1fr));
        align-items: end;
        gap: 4px;
        width: 100%;
        min-width: 0;
        height: 220px;
    }
    .chart-column {
        display: grid;
        grid-template-rows: minmax(0, 1fr) auto;
        min-width: 0;
        height: 100%;
        text-align: center;
    }
    .bar {
        width: 100%;
        max-width: 36px;
        border-radius: 5px 5px 0 0;
    }
    .chart-column small {
        font-size: 10px;
        white-space: nowrap;
    }
    @media (max-width: 767px) {
        .chart {
            gap: 2px;
            height: 190px;
        }

        .chart-column small {
            font-size: 9px;
        }
    }
    @media (max-width: 360px) {
        .chart {
            gap: 1px;
            height: 170px;
        }

        .chart-column small {
            font-size: 8px;
        }
    }

</style>
@endsection