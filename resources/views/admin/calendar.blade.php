@extends('layouts.admin')

{{-- judul halaman calendar.html --}}
@section('title', 'Kalender Agenda | Studio Admin')
@section('app-class', 'app-content-full-height')

{{-- konten utama view admin calendar.blade.php --}}
@section('content')
<div id="content" class="app-content p-0">
			<!-- BEGIN calendar -->
			<div class="calendar">
				<!-- BEGIN calendar-body -->
				<div class="calendar-body">
					<div id="calendar"></div>
				</div>
				<!-- ENG calendar-body -->
				<!-- BEGIN calendar-sidebar -->
				<div class="calendar-sidebar">
					<div class="desktop-sticky-top flex-fill">
						<div class="calendar-sidebar-title">Draggable Events:</div>
						<div class="fc-event-list" id="external-events">
							<div class="fc-event-item"><div class="fc-event-link" data-color="#ff2d55"><i class="fa fa-circle fs-8px me-2 text-pink"></i> Zumba Party (Pagi)</div></div>
							<div class="fc-event-item"><div class="fc-event-link" data-color="#ff3b30"><i class="fa fa-circle fs-8px me-2 text-danger"></i> CrossFit Workout (Sore)</div></div>
							<div class="fc-event-item"><div class="fc-event-link" data-color="#FF9500"><i class="fa fa-circle fs-8px me-2 text-warning"></i> Sesi Personal Trainer</div></div>
							<div class="fc-event-item"><div class="fc-event-link" data-color="#FFCC00"><i class="fa fa-circle fs-8px me-2 text-yellow"></i> Kelas Yoga Pemula</div></div>
							<div class="fc-event-item"><div class="fc-event-link" data-color="#1ABD36"><i class="fa fa-circle fs-8px me-2 text-success"></i> Maintenance Alat Fitness</div></div>
							<div class="fc-event-item"><div class="fc-event-link" data-color="#0cd096"><i class="fa fa-circle fs-8px me-2 text-teal"></i> Sesi Konsultasi Nutrisi</div></div>
							<div class="fc-event-item"><div class="fc-event-link" data-color="#30beff"><i class="fa fa-circle fs-8px me-2 text-info"></i> Spinning & Cardio Rush</div></div>
							<div class="fc-event-item"><div class="fc-event-link" data-color="#1f6bff"><i class="fa fa-circle fs-8px me-2 text-blue"></i> Powerlifting Session</div></div>
							<div class="fc-event-item"><div class="fc-event-link" data-color="#640DF3"><i class="fa fa-circle fs-8px me-2 text-indigo"></i> Boxing & HIIT Workout</div></div>
							<div class="fc-event-item"><div class="fc-event-link" data-color="#5b2e91"><i class="fa fa-circle fs-8px me-2 text-purple"></i> Sarapan Protein Shake</div></div>
							<div class="fc-event-item"><div class="fc-event-link" data-color="#869ac0"><i class="fa fa-circle fs-8px me-2 text-muted"></i> Jadwal Makan Siang Diet</div></div>
							<div class="fc-event-item"><div class="fc-event-link" data-color="#869ac0"><i class="fa fa-circle fs-8px me-2 text-muted"></i> Evaluasi Fisik Member</div></div>
						</div>
					</div>
				</div>
				<!-- ENG calendar-sidebar -->
			</div>
			<!-- end calendar -->
		</div>
		<!-- END #content -->
@endsection
@section('scripts')
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
	<script src="{{ asset('assets/plugins/@fullcalendar/core/index.global.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/@fullcalendar/daygrid/index.global.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/@fullcalendar/timegrid/index.global.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/@fullcalendar/list/index.global.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/@fullcalendar/bootstrap/index.global.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/@fullcalendar/interaction/index.global.min.js') }}"></script>
	<script src="{{ asset('assets/js/demo/calendar.demo.js') }}"></script>
@endsection
