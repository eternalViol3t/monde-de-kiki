

function set_counters(n) {
	var c0, c10, c100, c1k, c10k, c100k, c1m, c10m, c100m = 0;
	var display_div = document.getElementById("display_div_id");
	
	if (n < 9) {
		c0 = n;	
	}
  if (n < 99) {
		c10 = Math.trunc(n/10);
    c0 = n - c10 * 10;
	}
  if (n < 999) {
		c100 = Math.trunc(n/100);
    c10 = Math.trunc((n - c100 * 100)/10);
    c0 = n - c100 * 100 - c10 * 10;
	}
  if (n < 9999) {
  	c1k = Math.trunc(n/1000);
		c100 = Math.trunc((n - c1k * 1000)/100);
    c10 = Math.trunc((n - c1k * 1000 - c100 * 100)/10);
    c0 = n - c1k * 1000 - c100 * 100 - c10 * 10;
	}
  if (n < 99999) {
  	c10k = Math.trunc(n/10000);
  	c1k = Math.trunc((n - c10k * 10000)/1000);
		c100 = Math.trunc((n - c10k * 10000 - c1k * 1000)/100);
    c10 = Math.trunc((n - c10k * 10000 - c1k * 1000 - c100 * 100)/10);
    c0 = n - c10k * 10000 - c1k * 1000 - c100 * 100 - c10 * 10;
	}
  if (n < 999999) {
  	c100k = Math.trunc(n/100000);
    c10k = Math.trunc((n - c100k * 100000)/10000);
  	c1k = Math.trunc((n - c100k * 100000 - c10k * 10000)/1000);
		c100 = Math.trunc((n - c100k * 100000 - c10k * 10000 - c1k * 1000)/100);
    c10 = Math.trunc((n - c100k * 100000 - c10k * 10000 - c1k * 1000 - c100 * 100)/10);
    c0 = n - c100k * 100000 - c10k * 10000 - c1k * 1000 - c100 * 100 - c10 * 10;
	}
  if (n < 9999999) {
  	c1m = Math.trunc(n/1000000);
  	c100k = Math.trunc((n - c1m * 1000000)/100000);
    c10k = Math.trunc((n - c1m * 1000000 - c100k * 100000)/10000);
  	c1k = Math.trunc((n - c1m * 1000000 - c100k * 100000 - c10k * 10000)/1000);
		c100 = Math.trunc((n - c1m * 1000000 - c100k * 100000 - c10k * 10000 - c1k * 1000)/100);
    c10 = Math.trunc((n - c1m * 1000000 - c100k * 100000 - c10k * 10000 - c1k * 1000 - c100 * 100)/10);
    c0 = n - c1m * 1000000 - c100k * 100000 - c10k * 10000 - c1k * 1000 - c100 * 100 - c10 * 10;
	}
  if (n < 99999999) {
  	c10m = Math.trunc(n/10000000);
    c1m = Math.trunc((n - c10m * 10000000)/1000000);
  	c100k = Math.trunc((n - c10m * 10000000 - c1m * 1000000)/100000);
    c10k = Math.trunc((n - c10m * 10000000 - c1m * 1000000 - c100k * 100000)/10000);
  	c1k = Math.trunc((n - c10m * 10000000 - c1m * 1000000 - c100k * 100000 - c10k * 10000)/1000);
		c100 = Math.trunc((n - c10m * 10000000 - c1m * 1000000 - c100k * 100000 - c10k * 10000 - c1k * 1000)/100);
    c10 = Math.trunc((n - c10m * 10000000 - c1m * 1000000 - c100k * 100000 - c10k * 10000 - c1k * 1000 - c100 * 100)/10);
    c0 = n - c10m * 10000000 - c1m * 1000000 - c100k * 100000 - c10k * 10000 - c1k * 1000 - c100 * 100 - c10 * 10;
	}
  if (n < 999999999) {
  	c100m = Math.trunc(n/100000000);
  	c10m = Math.trunc((n - c100m * 100000000)/10000000);
    c1m = Math.trunc((n - c100m * 100000000 - c10m * 10000000)/1000000);
  	c100k = Math.trunc((n - c100m * 100000000 - c10m * 10000000 - c1m * 1000000)/100000);
    c10k = Math.trunc((n - c100m * 100000000 - c10m * 10000000 - c1m * 1000000 - c100k * 100000)/10000);
  	c1k = Math.trunc((n - c100m * 100000000 - c10m * 10000000 - c1m * 1000000 - c100k * 100000 - c10k * 10000)/1000);
		c100 = Math.trunc((n - c100m * 100000000 - c10m * 10000000 - c1m * 1000000 - c100k * 100000 - c10k * 10000 - c1k * 1000)/100);
    c10 = Math.trunc((n - c100m * 100000000 - c10m * 10000000 - c1m * 1000000 - c100k * 100000 - c10k * 10000 - c1k * 1000 - c100 * 100)/10);
    c0 = n - c100m * 100000000 - c10m * 10000000 - c1m * 1000000 - c100k * 100000 - c10k * 10000 - c1k * 1000 - c100 * 100 - c10 * 10;
	}
	
	var display_str = c100m.toString() + c10m.toString() + c1m.toString() + c100k.toString() + c10k.toString() + c1k.toString() + 
						c100.toString() + c10.toString() + c0.toString();
	for (var i = 0; i < display_str.length; i++) {
		var new_span = document.createElement('span');
		new_span.className = 'num_tiles';
		new_span.innerText = display_str[i];
		display_div.appendChild(new_span);
	}
}