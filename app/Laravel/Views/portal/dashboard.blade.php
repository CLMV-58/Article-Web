@extends('portal._layouts.main')

@section('content')
<main class="p-3 p-md-4">

  <div class="mb-4">
    <h1 class="h4 fw-bold mb-1">Dashboard</h1>
    <p class="text-body-secondary mb-0">
        Welcome to the Folio admin portal.
    </p>
</div>

  <!-- Summary cards: 1 per row on phones, 2 on tablets, 4 on desktop -->
  <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-3 mb-3">
    <div class="col">
      <div class="card h-100"><div class="card-body">
        <div class="text-body-secondary small">Total Visitors</div>
        <div class="fs-2 fw-bold">48,215</div>
        <div class="text-success small">▲ 12% vs last month</div>
      </div></div>
    </div>
    <div class="col">
      <div class="card h-100"><div class="card-body">
        <div class="text-body-secondary small">Total Articles</div>
        <div class="fs-2 fw-bold">134</div>
        <div class="text-success small">▲ 6 new this month</div>
      </div></div>
    </div>
    <div class="col">
      <div class="card h-100"><div class="card-body">
        <div class="text-body-secondary small">Comments</div>
        <div class="fs-2 fw-bold">1,092</div>
        <div class="text-danger small">▼ 3% vs last month</div>
      </div></div>
    </div>
    <div class="col">
      <div class="card h-100"><div class="card-body">
        <div class="text-body-secondary small">Subscribers</div>
        <div class="fs-2 fw-bold">2,860</div>
        <div class="text-success small">▲ 8% vs last month</div>
      </div></div>
    </div>
  </div>

  <div class="row g-3 mb-3">
    <!-- Monthly visitors: change height:__% on each bar -->
    <div class="col-lg-8">
      <div class="card h-100"><div class="card-body">
        <h2 class="h6 mb-3">Monthly Visitors (Last 12 Months)</h2>
        <div class="chart d-flex align-items-end gap-1">
          <div class="flex-fill d-flex flex-column align-items-center justify-content-end h-100" title="Dec: 28,400"><div class="bar bg-secondary" style="height:42%"></div><small class="text-body-secondary">Dec</small></div>
          <div class="flex-fill d-flex flex-column align-items-center justify-content-end h-100" title="Jan: 31,200"><div class="bar bg-secondary" style="height:47%"></div><small class="text-body-secondary">Jan</small></div>
          <div class="flex-fill d-flex flex-column align-items-center justify-content-end h-100" title="Feb: 29,800"><div class="bar bg-secondary" style="height:45%"></div><small class="text-body-secondary">Feb</small></div>
          <div class="flex-fill d-flex flex-column align-items-center justify-content-end h-100" title="Mar: 34,500"><div class="bar bg-secondary" style="height:52%"></div><small class="text-body-secondary">Mar</small></div>
          <div class="flex-fill d-flex flex-column align-items-center justify-content-end h-100" title="Apr: 36,100"><div class="bar bg-secondary" style="height:55%"></div><small class="text-body-secondary">Apr</small></div>
          <div class="flex-fill d-flex flex-column align-items-center justify-content-end h-100" title="May: 39,000"><div class="bar bg-secondary" style="height:60%"></div><small class="text-body-secondary">May</small></div>
          <div class="flex-fill d-flex flex-column align-items-center justify-content-end h-100" title="Jun: 41,300"><div class="bar bg-secondary" style="height:64%"></div><small class="text-body-secondary">Jun</small></div>
          <div class="flex-fill d-flex flex-column align-items-center justify-content-end h-100" title="Jul: 40,200"><div class="bar bg-secondary" style="height:62%"></div><small class="text-body-secondary">Jul</small></div>
          <div class="flex-fill d-flex flex-column align-items-center justify-content-end h-100" title="Aug: 44,800"><div class="bar bg-secondary" style="height:70%"></div><small class="text-body-secondary">Aug</small></div>
          <div class="flex-fill d-flex flex-column align-items-center justify-content-end h-100" title="Sep: 46,900"><div class="bar bg-secondary" style="height:74%"></div><small class="text-body-secondary">Sep</small></div>
          <div class="flex-fill d-flex flex-column align-items-center justify-content-end h-100" title="Oct: 43,000"><div class="bar bg-secondary" style="height:67%"></div><small class="text-body-secondary">Oct</small></div>
          <div class="flex-fill d-flex flex-column align-items-center justify-content-end h-100" title="Nov: 48,215"><div class="bar bg-primary" style="height:100%"></div><small class="text-body-secondary">Nov</small></div>
        </div>
      </div></div>
    </div>

    <!-- Top articles -->
    <div class="col-lg-4">
      <div class="card h-100"><div class="card-body">
        <h2 class="h6 mb-3">Top Articles</h2>

        <div class="mb-3">
          <div class="fw-semibold small">10 Tips for Better Writing</div>
          <div class="text-body-secondary small">12,480 views</div>
          <div class="progress" style="height:6px"><div class="progress-bar bg-primary" style="width:100%"></div></div>
        </div>
        <div class="mb-3">
          <div class="fw-semibold small">Getting Started with Photography</div>
          <div class="text-body-secondary small">9,320 views</div>
          <div class="progress" style="height:6px"><div class="progress-bar bg-primary" style="width:75%"></div></div>
        </div>
        <div class="mb-3">
          <div class="fw-semibold small">A Beginner’s Guide to Budgeting</div>
          <div class="text-body-secondary small">7,905 views</div>
          <div class="progress" style="height:6px"><div class="progress-bar bg-primary" style="width:63%"></div></div>
        </div>
        <div class="mb-3">
          <div class="fw-semibold small">Best Travel Spots in 2026</div>
          <div class="text-body-secondary small">6,210 views</div>
          <div class="progress" style="height:6px"><div class="progress-bar bg-primary" style="width:50%"></div></div>
        </div>
        <div>
          <div class="fw-semibold small">Simple Home Cooking Ideas</div>
          <div class="text-body-secondary small">4,870 views</div>
          <div class="progress" style="height:6px"><div class="progress-bar bg-primary" style="width:39%"></div></div>
        </div>
      </div></div>
    </div>
  </div>

  <!-- Recent articles -->
  <div class="card"><div class="card-body">
    <h2 class="h6 mb-3">Recent Articles</h2>
    <div class="table-responsive">
      <table class="table align-middle mb-0">
        <thead>
          <tr><th>Title</th><th>Author</th><th>Date</th><th>Status</th></tr>
        </thead>
        <tbody>
          <tr><td>Holiday Gift Guide</td><td>Maria</td><td>Nov 17, 2026</td><td><span class="badge text-bg-success">Published</span></td></tr>
          <tr><td>Morning Routine Ideas</td><td>John</td><td>Nov 15, 2026</td><td><span class="badge text-bg-warning">Pending</span></td></tr>
          <tr><td>Street Food Around the City</td><td>Ana</td><td>Nov 13, 2026</td><td><span class="badge text-bg-success">Published</span></td></tr>
          <tr><td>Remote Work Setup</td><td>Carlo</td><td>Nov 10, 2026</td><td><span class="badge text-bg-secondary">Draft</span></td></tr>
          <tr><td>Weekend Hiking Trails</td><td>Maria</td><td>Nov 8, 2026</td><td><span class="badge text-bg-warning">Pending</span></td></tr>
          <tr><td>Saving for the New Year</td><td>John</td><td>Nov 5, 2026</td><td><span class="badge text-bg-secondary">Draft</span></td></tr>
        </tbody>
      </table>
    </div>
  </div></div>
@endsection

@section('page-styles')
<style>
    :root {
        box-sizing: border-box;
        padding-top: env(safe-area-inset-top, 0px);
        padding-bottom: env(safe-area-inset-bottom, 0px);
    }
</style>
@endsection