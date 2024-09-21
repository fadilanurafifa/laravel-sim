<div class="activity-details-container">
    <h3>Detail Aktivitas Pengguna</h3>

    @if($activities->isEmpty())
        <p>Tidak ada aktivitas yang tercatat.</p>
    @else
        @foreach($activities as $activity)
            <div class="activity-item">
                <h4>{{ $activity->activity_name }}</h4>
                <small>Waktu: {{ \Carbon\Carbon::parse($activity->activity_time)->format('d-m-Y H:i') }}</small>
                <p>Detail: {{ $activity->activity_details }}</p>
            </div>
        @endforeach
    @endif
</div>