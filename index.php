<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <title>HantsFire Firewatch SMS Availability</title>
        
        <meta name="viewport" content="width=device-width, user-scalable=no" />
		
		<!-- CSS -->
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
        <link rel="stylesheet" href="http://cdn.jtsage.com/datebox/latest/jqm-datebox.min.css">

		<style>
			
			/* Forms */
			
			label {
				display: block;
				color: #666
			}
			
			input[type="text"] {
				padding: 15px 10px;
			}
			
			/* Layout */
			
			header {
				background: #333;
				text-align: center;
				width: 100%;
				padding: 20px 0;
				color: #fff
			}
			
			#container {
				padding:  40px 5%;
				width: 90%;
			}
			
			.about-link {
				display: block;
				text-decoration: none;
				margin-top: 40px;
				text-align: center;
			}
			
			#about.ui-content {
				padding: 20px;
				text-align: center
			}
			
			/* Typography */
			
			h4 {
				margin: 0;
				text-shadow: none
			}
			
			p {
				margin:0 0 40px;
			}
		</style>
    </head>
    
    <body>
	    
	    <header>
	    	<h4>Firewatch Text Availability</h4>
	    </header>
	    
	    <div id="container">
			
			<!-- Form -->
	        <form>
		        <fieldset>
					<label for="id">Service Number</label>
					<input id="id" type="text" name="id" placeholder="01234" />
					
					<label for="type">Activity Type</label>
					<select name="type" id="type" data-native-menu="false">
						<option value="off">UNAVAILABLE</option>
						<option value="on">AVAILABLE</option>
					</select>
		        </fieldset>
		        
				<fieldset>
					<label for="startdate">Start Date</label>
					<input type="text" name="startdate" id="startdate" data-role="datebox" data-options='{"mode":"datebox", "overrideDateFormat": "%d-%m-%y", "overrideDateFieldOrder": "dmy", "popupPosition": "window"}'/>
				
					<label for="starttime">Start Time</label>
					<input type="text" name="starttime" id="starttime" data-role="datebox" data-options='{"mode":"timebox", "popupPosition": "window"}' />
				</fieldset>
				
				<fieldset>
					<label for="enddate">End Date</label>
					<input type="text" name="enddate" id="enddate" data-role="datebox" data-options='{"mode":"datebox", "overrideDateFormat": "%d-%m-%y", "overrideDateFieldOrder": "dmy", "popupPosition": "window"}' required />
				
					<label for="endtime">End Time</label>
					<input type="text" name="endtime" id="endtime" data-role="datebox" data-options='{"mode":"timebox", "popupPosition": "window"}' />
				</fieldset>
			</form>
			<a href="" id="link" class="ui-btn ui-shadow ui-corner-all ui-btn-b">SUBMIT</a>
			
			<!-- About Popup -->
			<a href="#about" data-rel="popup" class="about-link" data-transition="pop" data-position-to="window">ABOUT</a>
			<div data-role="popup" id="about" class="ui-content" data-overlay-theme="a" data-theme="b">
				<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-left">Close</a>
				<p>I'm a retained Firefighter at Romsey for Hampshire Fire &amp; Rescue Service, as a day job I run a <a href="http://giantpea.com" target="_blank">digital design &amp; development studio</a>.</p>
				
				<p>I built this simple web app to simplify the Firewatch text availability service.</p>
					
				<p><strong>TOOLS</strong><br />
				<a href="http://jquerymobile.com" target="_blank">JQuery Mobile</a> &amp; <a href="https://en.wikipedia.org/wiki/Uniform_Resource_Identifier" target="_blank">sms: Uri Scheme</a></p>
				
				<p>Michael Grinstead</p>
			</div>
			
		</div>
        
		<!-- JS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
        <script src="http://cdn.jtsage.com/datebox/latest/jqm-datebox.core.min.js"></script>
        <script src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.datebox.min.js"></script>
        
        <script type="text/javascript">
		   jQuery(function() {
			   $("#link").on('click', function(e) {
			      	e.preventDefault();
			      
			      	var ua = navigator.userAgent.toLowerCase();
				  	var body = encodeURIComponent($('#id').val() + " " + $('#type').val() + " " + $('#startdate').val().replace(/-/g, "") + " " + $('#starttime').val().replace(':', '') + " " + $('#enddate').val().replace(/-/g, "") + " " + $('#endtime').val().replace(':', ''));
			          
	    			if (ua.indexOf("iphone") > -1 || ua.indexOf("ipad") > -1)
				      	location.href = $(this).attr('href') + 'sms:07860023004&body=' + body
				    else
				    	location.href = $(this).attr('href') + 'sms:07860023004?body=' + body
			   });
			});
		</script>
    </body>
</html>