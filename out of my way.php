	<!-- Wrap this inside a php statement that is only included when a bool modifyContent = true -->
	<form class="dataForm" id="DF1" method="post" action="/?requestproxy=paragraph" style="border:1px solid blue;display: inline-block;">
		Enter Text:
		<input type="text" name="updatePara" placeholder="Text..." autocomplete="off">
		<input type="hidden" name="paraID" value="7">
		<!-- <div style="display: none" class="targetElement">#para1</div> --> <!-- ..if not there dont' update content..console.log() -->
		<input type="hidden" name="targetElement" value="#para1" disabled>
		<!-- optional submit button -->
	</form>
	<script>
		$(".dataForm").each(function()
		{
			var formID = $(this).attr("id"); //alert there must be an id set, must be either get or post!, 
			var formName = "#"+formID;
			var formMethod = $(formName).attr("method");
			var formAction = $(formName).attr("action");
			var formTarget = $(formName+"> input[name='targetElement']").val();
			$(formName).on("submit", function(event)
			{
				var formData = $(formName).serialize();
				document.getElementById(formID).reset(); //clear the form so people can't spam it

				event.preventDefault();
				$.ajax(
				{
					url: formAction,
					type: formMethod,
					data: formData,
					dataType: 'text',
					success: function(response)
					{
						//TODO get back a json_array that says "not logged in, data doesn't exist...etc" and have filename somethingAjaxRquest.php
						if(response != "")
						{
							if($(formTarget).prop("tagName").toLowerCase() != "input")
								$(formTarget).html(response);
							else
								$(formTarget).val(response);
						}
					}
				});
			});
		});
	</script>