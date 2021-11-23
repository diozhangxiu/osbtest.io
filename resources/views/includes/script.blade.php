        <!--  -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/animate.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/videobg.js"></script>

        <script src="js/slide-hover.js"></script>
        <script>
            $('#demo-3').fsBanner({'trigger':'mouse'});
        </script>
        <script>
        $("#seeAnotherFieldGroup").change(function() {
			if ($(this).val() == "Promo Membership Only 202K") {
				$('#otherFieldGroupDiv').show();
                $('#otherFieldGroupDiv2').hide();
                $('#otherFieldGroupDiv3').hide();
			} else if ($(this).val() == "Promo Recomendation StayFit 2021") {
                $('#otherFieldGroupDiv').hide();
                $('#otherFieldGroupDiv3').hide();
                $('#otherFieldGroupDiv2').show();
            } else if ($(this).val() == "Promo #VaccineAction Get Free Up to 3 Months Membership") {
                $('#otherFieldGroupDiv').hide();
                 $('#otherFieldGroupDiv2').hide();
                $('#otherFieldGroupDiv3').show();
            }
            else {
				$('#otherFieldGroupDiv').hide();
                $('#otherFieldGroupDiv2').hide();
                $('#otherFieldGroupDiv3').hide();
			}
		});
		$("#seeAnotherFieldGroup").trigger("change");
        </script>
        <script>
            $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
            });
        </script>