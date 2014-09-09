<script type="text/javascript">

	if(typeof jQuery == 'undefined')	{
		document.write("<script src=\"\/wp-content\/plugins\/mortCalc\/js\/jquery-1.3.2.min.js\" type=\"text\/javascript\"><\/script>");
	}

</script>

<script src="/wp-content/plugins/mortCalc/js/calc.js" type="text/javascript"></script>
<link rel="stylesheet" href="/wp-content/plugins/mortCalc/pages/calc-style.css" media="screen" />



<!--[if IE]>
<style>

div#mcContainer #mcFooter	{
	left: 2px;
}

</style>

<![endif]-->



<div id="mcContainer">


<!--The following formula is used to calculate the fixed monthly payment (P) required to fully amortize a loan of L dollars over a term of n months at a monthly interest rate of c. [If the quoted rate is 6%, for example, c is .06/12 or .005].   P = L[c(1 + c)^n]/[(1 + c)^n - 1]-->
<h3>Mortgage Calculator</h3>
<div id="mcFormWrap">
<form id="mCalculator" name="mCalculator">
	
	<div class="mcValue">
		<label for="mcPrice">Sale price ($)</label>
		<input id="mcPrice" class="mortgageField" name="mcPrice" type="text"size="12" />
	</div>
	<div class="mcValue">
		<label for="mcDown">Down Payment ($)</label>
		<input id="mcDown" class="mortgageField" name="mcDown" type="text" size="12" />
	</div>
	<div class="mcValue">
		<label for="mcRate">Interest Rate (%)</label>
		<input id="mcRate" class="mortgageField" name="mcRate" type="text" size="12" />
	</div>
	<div class="mcValue">
		<label for="mcTerm">Term (years)</label>
		<input id="mcTerm" class="mortgageField" name="mcTerm" type="text" size="12" />
	</div>
	
	<div id="mcSubmit">
		<input id="mortgageCalc" class="mcButton" name="mortgageCalc" type="submit" onclick="return false" value="Calculate!"/>
		<input id="mcPayment" class="mortgageAnswer" name="mcPayment" type="text" size="18" /> 
	</div>

</form>
</div><!-- END FORMWRAP -->

<div id="mcFooter">
<p><a id="mcWidget" href="instructions.html">Embed this widget!</a></p>
<!--<p><span class="mcMini">This mortgage calculator is brought to you by CB-HB.com.</span></p>-->
<p><span class="mcMini">CB-HB. Your source for  <a id="mcWidget" href="http://www.cb-hb.com">Lansing Real Estate</a></span></p>
</div>

</div> <!-- END CONTAINER -->

<!-- Widget created by Jason Bibbings of JBibbs Designs -->
