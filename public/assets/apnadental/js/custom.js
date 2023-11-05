function bookNow(bookID, companyName, secondaryCategory, workTimings) {
    $('.error-message').text("");
    $('#bookModal').appendTo("body").modal('show');

    localStorage.setItem("doctorID", bookID);
    localStorage.setItem("company_name", companyName);
    localStorage.setItem("secondary_category", secondaryCategory);
    localStorage.setItem("work_timings", workTimings);

    if(localStorage.getItem("logged") != null){
        if(localStorage.getItem("logged")!=false){
            $('.login_card').hide();
            $("#modalHeading").text("Booking Time Slot");
            $('#Timeslot').fadeIn(1000);
        }
    }
}

$(document).ready(function () {
    // Check if user login
    if(localStorage.getItem("logged") != null){
        if(localStorage.getItem("logged")!=false){
            $('.userLogincard').hide();
            $('.userPopupcard').show();
            $('.register-card-cls').hide();
            $('#logged_name').text(localStorage.getItem("user_name"));
            $('#logged_email').text(localStorage.getItem("user_email"));
            $('#logged_phone').text(localStorage.getItem("user_phone_no"));
        }else{
            $('.userLogincard').show();
            $('.userPopupcard').hide();
        }
    }

    // Select Time Slot 
    $(".book-appointment-cls").click(function () {
        var datepickerValue = $("#datepicker").val();
        var startTimeValue = $("#start_time").val();
        var endTimeValue = $("#end_time").val();

        if (!datepickerValue || !startTimeValue || !endTimeValue) {
            Swal.fire({
                icon: 'error',
                text: "Please fill out all the fields.",
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            
            return;
        }

        var timeFormat = /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/;
        if (!timeFormat.test(startTimeValue) || !timeFormat.test(endTimeValue)) {
            Swal.fire({
                icon: 'error',
                text: "Please enter valid time in HH:MM format.",
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            return;
        }

        // Extract doctor's working hours
        var doctorWorkingHours = localStorage.getItem("work_timings");
        var doctorWorkingHoursParts = doctorWorkingHours.split(" - ");
        var doctorWorkStartTime = new Date("2000-01-01T" + doctorWorkingHoursParts[0] + ":00");
        var doctorWorkEndTime = new Date("2000-01-01T" + doctorWorkingHoursParts[1] + ":00");

        var startTime = new Date("2000-01-01T" + startTimeValue + ":00");
        var endTime = new Date("2000-01-01T" + endTimeValue + ":00");

        if (startTime >= endTime) {
            Swal.fire({
                icon: 'error',
                text: "End time must be later than start time.",
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            return;
        }

        if (
            startTime < doctorWorkStartTime ||
            endTime > doctorWorkEndTime ||
            startTime < new Date("2000-01-01T08:00:00") || // Adjust to the actual start time
            endTime > new Date("2000-01-01T20:00:00") // Adjust to the actual end time
        ) {
            Swal.fire({
                icon: 'error',
                text: `Selected time must be within doctor's working hours ${doctorWorkingHours}.`,
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            return;
        }

        var timeDiff = (endTime - startTime) / (1000 * 60); // Calculate time difference in minutes
        if (timeDiff < 30) {
            Swal.fire({
                icon: 'error',
                text: `Minimum time slot duration is 30 minutes.`,
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            return;
        }

        // If all validations pass, proceed with the action
        $(".time-slot-cls").hide();
        $(".booking-date-cls").text($("#datepicker").val());
        $(".booking-start-time-cls").text($("#start_time").val());
        $(".booking-end-time-cls").text($("#end_time").val());
        $("#patientForm").show();
        $("#fname").val(localStorage.getItem("user_name"));
        $("#email").val(localStorage.getItem("user_email"));
        $("#phone").val(localStorage.getItem("user_phone_no"));
        $("#CompanyName").text(localStorage.getItem("company_name"));
        $(".whats-app-cls").text(localStorage.getItem("user_phone_no"));
    });

    $(".backTimeSlot").click(function(){
        $("#patientForm").hide();
        $(".time-slot-cls").show();
    });

    // Radio button change event handler
    $('input[type=radio][name=bookingStatus]').change(function() {
        if (this.value == 'somelse') {
            $('#configform')[0].reset();
            $("#flexCheckChecked").prop('checked', false); // Uncheck the checkbox for "Someone Else"
        } else if (this.value == 'myself') {
            alert("kaskskdlkdsal");
            $("#fname").val(localStorage.getItem("user_name"));
            $("#email").val(localStorage.getItem("user_email"));
            $("#phone").val(localStorage.getItem("user_phone_no"));
            $("#flexCheckChecked").prop('checked', true); // Check the checkbox for "Myself"
        }
    });
});