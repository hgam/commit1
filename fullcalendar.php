<html>
<head>
	<link rel="stylesheet" type="text/css" href="jquery.fullcalendar.css">
		<link rel="stylesheet" type="text/css" href="jquery.fullcalendar.print.css">
		<link rel="stylesheet" type="text/css" href="jquery.fullcalendar.custom.css">
		<link rel="stylesheet" type="text/css" href="jquery.ui.min.css">
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
		<script src="jquery.fullcalendar.min.js"></script>
		
	
</head>
<body>
	<div id="calendar" width="200px" height="300px"></div>
<script>
		$(function() {
			/* Twitter Bootstrap Tooltip
			 *
			 * Link Tooltips
			/*====================================================================*/
			$('[rel="tooltip"]').tooltip({
				placement : 'top'
			});
			
			/* Full Calendar
			 *
			 * Calendar Initialization
			/*====================================================================*/
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();
			
			$('#calendar').fullCalendar({
				theme: true,
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				editable: true,
				events: [
					{
						title: 'Long Event',
						start: new Date(y, m, d-5),
						end: new Date(y, m, d-3)
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: new Date(y, m, d-3, 16, 0),
						allDay: false
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: new Date(y, m, d+4, 16, 0),
						allDay: false
					},
					{
						title: 'Meeting',
						start: new Date(y, m, d, 10, 30),
						allDay: false
					},
					{
						title: 'Lunch',
						start: new Date(y, m, d, 12, 0),
						end: new Date(y, m, d, 14, 0),
						allDay: false
					},
					{
						title: 'Birthday Party',
						start: new Date(y, m, d+1, 19, 0),
						end: new Date(y, m, d+1, 22, 30),
						allDay: false
					},
					{
						title: 'Click for Google',
						start: new Date(y, m, 28),
						end: new Date(y, m, 29),
						url: 'http://google.com/'
					}
				]
			});
		});
	</script>
</body>
</html>