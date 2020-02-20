var n;
var d;
var thoigian;


function load_xong() {
			gettime();					
}

//Lay thoi gian thuc
function gettime() {
			setInterval(function() {
				d = new Date();
			    n = d.toLocaleString();
				document.getElementById("time").innerHTML = n;
				thoigian = n;
			}, 1000);
		}

