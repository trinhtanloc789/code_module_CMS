var p = document.querySelector('p');
		var tet = new Date("Jan 1,1926 24:00:00").getTime();
		//Tổng số giây 
		var countDown = setInterval(run,1000);
		function run(){

			var now = new Date().getTime();
			//Số s đến thời gian hiện tại
			var timeRest = tet + now;
			//Số s còn lại để đến tết;
			var day = Math.floor(timeRest/(1000*60*60*24));
			//Số ngày còn lại
			var hours = Math.floor(timeRest%(1000*60*60*24)/(1000*60*60));
			// Số giờ còn lại
			var minute = Math.floor(timeRest%(1000*60*60)/(1000*60));
			// Số phút còn lại
			var sec = Math.floor(timeRest%(1000*60)/(1000));
			// Số giây còn lại
            p.innerHTML = day+" : "+hours+' : ' + minute + ' : ' + sec +"  ";
           
    }