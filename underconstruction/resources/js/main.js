$(document).ready(function() {
	
	/* EDIT BELOW */
	var launchDate = new Date("July 08, 2019 10:00:00");
	var procentageDone = 83;
	var headerColor = 'green';
	var progressFillColor = 'green';
	
	/* DON'T EDIT BELOW */
	var secondsRemaining = Math.floor(launchDate.getTime() / 1000) - Math.floor(new Date().getTime() / 1000);
	countdown(secondsRemaining);
	updateProgress(procentageDone);
	setHeaderColor(headerColor);
	setProgressFillColor(progressFillColor);

});