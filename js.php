<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>My First Web Page</h2>
<p>My first paragraph.</p>
<p id="js"></p>
<div id="demo"></div>
<input type="button" value="down" onclick="down()">
<input type="text" name="number" id="number" value="1" min="1">
<input type="button" value="up" onclick="up()">
<div class="quantity">
								<button class="quantity-down quantity-btn" onclick="downQuantity(this)">-</button>
								<input type="number" min="1" step="1" value="1">
                                <button class="quantity-up quantity-btn" onclick="upQuantity(this)">+</button>
                                
<button onclick="decrease">-</button>
<input type="text" value="0">
<button onclick="increase">+</button>

<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.getHours();
</script>
    <script>
        var d = new Date();
        document.getElementById("js").innerHTML = d.getFullYear();
    </script>
    <script>
    function upQuantity(n) {
    var input = $(n).parent().find('input'),
            step = parseFloat(input.attr('step')) || 1,
            oldVal = parseFloat(input.val()) || 0,
            newVal;
    newVal = oldVal + step;
    input.val(newVal);
    input.trigger("change");
}

function downQuantity(n) {
    var input = $(n).parent().find('input'),
            min = input.attr('min') || 500,
            step = input.attr('step') || 1,
            oldVal = parseFloat(input.val()) || 0,
            newVal;
    if (oldVal <= min) {
        newVal = oldVal;
    } else if ((oldVal - step) < min) {
        newVal = min;
    } else {
        newVal = oldVal - step;
    }
    input.val(newVal);
    input.trigger("change");
}

    </script>
<script>
    const inputWrapperList = document.getElementsByClassName('input-number-wrapper');

for(let wrapper of inputWrapperList) {
	const input = wrapper.querySelector('input');
	const incrementation = +input.step || 1;

	wrapper.querySelector('.increase').addEventListener('click', function() {
		incInputNumber(input, incrementation);
	});
	
	wrapper.querySelector('.decrease').addEventListener('click', function() {
		incInputNumber(input, "-" + incrementation);
	});
}

function incInputNumber(input, step) {
	if(!input.disabled) {
		let val = +input.value;

		if (isNaN(val)) val = 0
		val += +step;

		if(input.max && val > input.max) {
			val = input.max;
		} else if (input.min && val < input.min) {
			val = input.min;
		} else if (val < 0) {
			val = 0;
		}

		input.value = val;
		input.setAttribute("value", val);
	}
}
</script>
</body>
</html>