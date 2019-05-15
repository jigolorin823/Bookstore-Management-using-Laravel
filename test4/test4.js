function solve() {
    equation = document.getElementById('userInput').value;
    xu = document.getElementById('xu').value;
    xl = document.getElementById('xl').value;
    table = document.getElementById('table');
    s = '<tr><td align="center">Iteration</td><td align="center">Xr</td><td align="center">Ea (%)</td><td align="center">Et (%)</td></tr>';

    var i = 1;
    var Et = 1;
    var temp_xr;
    var old_xr;
    var Et;

    Fraction = algebra.Fraction;
    Expression = algebra.Expression;
    Equation = algebra.Equation;

    n1 = algebra.parse(equation);
    quad = new Equation(n1, 0);
    xvals = quad.solveFor("x");

    while(Et >= 0.05 && i <= 500) {
      let scope = { x: xu }
      let scope1 = { x: xl }
      fxu = math.eval(equation, scope).toFixed(3);
      fxl = math.eval(equation, scope1).toFixed(3);
      xr = math.eval(xu - (fxu * (xl - xu) / (fxl - fxu))).toFixed(3);
      let scopexr = { x: xr }
      fxr = math.eval(equation, scopexr).toFixed(3);

      res = equation.substr(equation.length - 2, equation.length - 1);
      xval = Math.pow(10, Math.log10(res)/get_exp());
      Et = (((xval - xr)/xval) * 100).toFixed(5);

      if(i <= 1){
        old_xr = xr;
        s += '<tr><td align="center">' + i + '</td><td align="center">' + xr + '</td><td align="center">' + '-' + '</td><td align="center">' + '-' + '</td></tr>';
      }

			else {
				old_xr = temp_xr;
				Ea = math.eval(Math.abs(((xr - old_xr)/xr) * 100)).toFixed(3);
        s += '<tr><td align="center">' + i + '</td><td align="center">' + xr + '</td><td align="center">' + Ea + '%</td><td align="center">' + Et + '%</td></tr>';
			}

      if((fxu*fxr) > 0) xu = xr;
			else xl = xr;

			temp_xr = xr;
      i++;
    }

    table.innerHTML = s;
}

function get_exp() {
  return equation.match(/(?![\+\-\*\/\(\)\^\s])([a-zA-Z0-9]+)\^([a-zA-Z0-9]+)/gm)[0].substr(2, 2);
}
