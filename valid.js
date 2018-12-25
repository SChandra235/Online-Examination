function validate() {
	var full = document.forms["myForm"]["ufn"].value;
	var sex = document.forms["myForm"]["sex"].value;
	var em = document.forms["myForm"]["em"].value;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var ac = document.forms["myForm"]["ac"].value;
	var fn = document.forms["myForm"]["fn"].value;
	var mn = document.forms["myForm"]["mn"].value;
	var na = document.forms["myForm"]["na"].value;
	var a1 = document.forms["myForm"]["a1"].value;
	var a2 = document.forms["myForm"]["a2"].value;
	var a3 = document.forms["myForm"]["a3"].value;
	var a4 = document.forms["myForm"]["a4"].value;
	var cy = document.forms["myForm"]["cy"].value;
	var pc = document.forms["myForm"]["pc"].value;
	var st = document.forms["myForm"]["st"].value;
	var lln = document.forms["myForm"]["lln"].value;
	var mo = document.forms["myForm"]["mo"].value;
	var li = document.forms["myForm"]["li"].value;
	var sb = document.forms["myForm"]["sb"].value;
	var yp = document.forms["myForm"]["yp"].value;
	var cs = document.forms["myForm"]["cs"].value;
	var sb10 = document.forms["myForm"]["sb10"].value;
	var yp10 = document.forms["myForm"]["yp10"].value;
	var op = document.forms["myForm"]["op"].value;
	var mm = document.forms["myForm"]["mm"].value;
	var pm = document.forms["myForm"]["pm"].value;
	var cm = document.forms["myForm"]["cm"].value;
	var tc1 = document.forms["myForm"]["tc1"].value;
	var tc2 = document.forms["myForm"]["tc2"].value;
	var tc3 = document.forms["myForm"]["tc3"].value;
	var ti = document.forms["myForm"]["ti"].value;
	var pas = document.forms["myForm"]["pas"].value;
	var cpas = document.forms["myForm"]["cpas"].value;
    if (full == "" || full == null || full.length>50) {
        alert("Name must be filled out and should be less than 50 characters");
		full.focus;
        return false;
    }
	/*if (sex == "Select") {
        alert("Select a Valid Gender");
		sex.focus;
        return false;
    }
	if (!filter.test(em.value)) {
		alert('Please provide a valid email address');
		email.focus;
		return false;
	}
	if (isNaN(ac) || full.length>12) {
        alert("Fill Your Valid Aadhar Card Number");
		ac.focus;
        return false;
    }
	if (fn == "" || fn == null ||fn.length>50) {
        alert("Name must be filled out and should be less than 50 characters");
		fn.focus;
        return false;
    }
	if (mn == "" || mn == null || mn.length>50) {
        alert("Name must be filled out and should be less than 50 characters");
		mn.focus;
        return false;
    }
	if (na == "" || na == null || na.length>50) {
        alert("Name must be filled out and should be less than 50 characters");
		na.focus;
        return false;
    }
	if (a1 == "" || a1 == null || a1.length>200) {
        alert("Address must be filled out and should be less than 200 characters in one line. Use other lines in case.");
		a1.focus;
        return false;
    }
	if (a2.length>200) {
        alert("Address must be less than 200 characters in one line. Use other lines in case.");
		a2.focus;
        return false;
    }
	if (a3.length>200) {
        alert("Address must be less than 200 characters in one line. Use other lines in case.");
		a3.focus;
        return false;
    }
	if (a4.length>200) {
        alert("Address must be less than 200 characters in one line. Use other lines in case. And If all lines are filled, concises the Address");
		a4.focus;
        return false;
    }
	if (cy == "" || cy == null || cy.length>50) {
        alert("Name must be filled out and should be less than 50 characters");
		cy.focus;
        return false;
    }
	if (isNaN(pc) || pc.length>6 || pc<110000 || pc<=1000000) {
        alert("Fill Your Pin/Zip Code");
		pc.focus;
        return false;
    }
	if (st == "" || st == NULL || st.length>50) {
        alert("Name must be filled out and should be less than 50 characters");
		st.focus;
        return false;
    }
	if (isNan(lln)|| lln.length>6) {
        alert("Enter your Valid Land Line Number of Leave it...");
		lln.focus;
        return false;
    }
	if (isNan(mo) || mo.length>10 || mo<6000000000 || mo>=10000000000) {
        alert("Name must be filled out and should be less than 50 characters");
		full.focus;
        return false;
    }
	if (li == "" || li == NULL || li.length>50) {
        alert("Name must be filled out and should be less than 50 characters");
		li.focus;
        return false;
    }
	if (sb == "Select") {
        alert("Select a Valid Board");
		sb.focus;
        return false;
    }
	if (sb10 == "Select") {
        alert("Select a Valid Board");
		sb10.focus;
        return false;
    }
	if (yp == "Select") {
		alert("Selct a Valid Year");
		yp.focus;
		return false;
	}
	if (yp10 == "Select") {
		alert("Selct a Valid Year");
		yp10.focus;
		return false;
	}
	if (cs == "" || cs == NULL || cs.length>50) {
        alert("Fill out the name of your 5th Subject in 12th and should be less than 50 characters");
		cs.focus;
        return false;
    }
	if ((isNan(op) || op.length>2 || op>100 || op<0) {
        alert("Name must be filled out and should be less than 50 characters");
		op.focus;
        return false;
    }
	if (isNan(mm) || mm.length>2 || mm>100 || mm<0) {
        alert("Valid Marks must be filled out and should be a Number");
		mm.focus;
        return false;
    }
	if (isNan(pm) || pm.length>2 || pm>100 || pm<0) {
        alert("Valid Marks must be filled out and should be a Number");
		pm.focus;
        return false;
    }
	if (isNan(cm) || cm.length>2 || cm>100 || cm<0) {
        alert("Valid Marks must be filled out and should be a Number");
		cm.focus;
        return false;
    }
	if (tc1 == "Select") {
		alert("Valid Test Centre Must be Selected");
		tc1.focus;
		return false;
	}
	if (tc2 == "Select") {
		alert("Valid Test Centre Must be Selected");
		tc2.focus;
		return false;
	}
	if (tc3 == "Select") {
		alert("Valid Test Centre Must be Selected");
		tc3.focus;
		return false;
	}
	if (tc1 == tc2 || tc2 == tc3 || tc1 == tc3 ||) {
		alert("All 3 Test Centres Must be Different. No 2 Test Centres can be same.");
		tc1.focus;
		tc2.focus;
		tc3.focus;
		return false;
	}
	if (ti == "Select") {
		alert("Select a Valid Attempting Time");
		ti.focus;
		return false;
	}
	if (pas == "" || pas == null || pas.length>50) {
		alert("Password Should Not Be Empty and Neither should be Greater than 50 Characters");
		pas.focus;
		return false;
	}
	if (cpas == "" || cpas == null || cpas.length>50) {
		alert("Confim Password Should Not Be Empty and Neither should be Greater than 50 Characters");
		cpas.focus;
		return false;
	}
	if (pas != cpas) {
		alert("Password and Confim Password Must be Same");
		pas.focus;
		cpas.focus;
		return false;
	}*/