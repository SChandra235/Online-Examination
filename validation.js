function formValidation()
{
var uid = document.myForm.userid;
var sex = document.myForm.sex;
var dob = document.myForm.dob;
var email = document.myForm.Email;
var ac = document.myForm.ac;
var fn = document.myForm.fn;
var mn = document.myForm.mn;
var country = document.myForm.country;
var address = document.myForm.address;
var cy = document.myForm.cy;
var zip = document.myForm.zip;
var st = document.myForm.st;
var mob = document.myForm.mob;
var il = document.myForm.il;
var sb = document.myForm.sb;
var yp = document.myForm.yp;
var es = document.myForm.es;
var sb10 = document.myForm.sb10;
var yp10 = document.myForm.yp10;
var op = document.myForm.op;
var mm = document.myForm.mm;
var pm = document.myForm.pm;
var cm = document.myForm.cm;
var tc1 = document.myForm.tc1;
var tc2 = document.myForm.tc2;
var tc3 = document.myForm.tc3;
var ti = document.myForm.ti;
var pas = document.myForm.pas;
var cpas = document.myForm.cpas;
var f = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(uid.value=="" || uid.value.length>50)
{
	alert("Full Name must be Filled and must have less than 50 Char");
	uid.focus();
	return false;
}
if(sex.value=="Default" )
{
	alert("Select your Gender");
	sex.focus();
	return false;
}
if(dob.value=="" )
{
	alert("Enter your Dob");
	dob.focus();
	return false;
}
if(!f.test(document.myForm.Email.value))
    {
      alert("Invalid E-Mail ID.");
      email.focus();
      return false;
    }
if(isNaN(ac.value) || ac.value=="" || ac.value.length!=12)
{
	alert("Enter your Valid Adhar Card Number");
	ac.focus();
	return false;
}

if(fn.value=="" || fn.value.length>50)
{
	alert("Father's Name must be Filled and must have less than 50 Char");
	fn.focus();
	return false;
}
if(mn.value=="" || mn.value.length>50)
{
	alert("Mother's Name must be Filled and must have less than 50 Char");
	mn.focus();
	return false;
}
if(country.value=="" || country.value.length>50)
{
	alert("Nationality must be Filled and must have less than 50 Char");
	country.focus();
	return false;
}
if(address.value=="" || address.value.length>500)
{
	alert("Father's Name must be Filled and must have less than 500 Char");
	address.focus();
	return false;
}
if(cy.value=="" || cy.value.length>50)
{
	alert("City/District Name must be Filled and must have less than 50 Char");
	cy.focus();
	return false;
}
if(isNaN(zip.value) || zip.value=="" || zip.value.length!=6)
{
	alert("Valid Pin/Zip Code must be Filled.");
	zip.focus();
	return false;
}
if(st.value=="" || st.value.length>50)
{
	alert("State's Name must be Filled and must have less than 50 Char");
	st.focus();
	return false;
}
if(isNaN(mob.value) || mob.value=="" || mob.value.length!=10)
{
	alert("Valid Phone Number must be Filled");
	mob.focus();
	return false;
}
if(il.value=="" || il.value.length>50)
{
	alert("Institution Last Attended Name must be Filled and must have less than 50 Char");
	il.focus();
	return false;
}
if(sb.value=="Default" )
{
	alert("Select your 12th Board");
	sb.focus();
	return false;
}
if(yp.value=="Default" )
{
	alert("Select your 12th Year Passing/Appering");
	yp.focus();
	return false;
}
if(es.value=="" || es.value.length>50)
{
	alert("Enter your 5th Subject in 12th");
	es.focus();
	return false;
}
if(sb10.value=="Default" )
{
	alert("Select your 10th Board");
	sb10.focus();
	return false;
}
if(yp10.value=="Default" )
{
	alert("Select your 10th Year of Passing");
	yp10.focus();
	return false;
}
if(isNaN(op.value) || op.value=="" || op.value>100 || op.value<0)
{
	alert("Valid Overall Percentage must be Filled.");
	op.focus();
	return false;
}
if(isNaN(mm.value) || mm.value=="" || mm.value>100 || mm.value<0)
{
	alert("Valid Overall Percentage must be Filled.");
	mm.focus();
	return false;
}
if(isNaN(pm.value) || pm.value=="" || pm.value>100 || pm.value<0)
{
	alert("Valid Overall Percentage must be Filled.");
	pm.focus();
	return false;
}
if(isNaN(cm.value) || cm.value=="" || cm.value>100 || cm.value<0)
{
	alert("Valid Overall Percentage must be Filled.");
	cm.focus();
	return false;
}
if(tc1.value=="Default" )
{
	alert("A Test Centre Must be Selected");
	tc1.focus();
	return false;
}
if(tc2.value=="Default" )
{
	alert("A Test Centre Must be Selected");
	tc2.focus();
	return false;
}
if(tc3.value=="Default" )
{
	alert("A Test Centre Must be Selected");
	tc3.focus();
	return false;
}
if(tc1.value==tc2.value )
{
	alert("2 Test Centres can't be Same");
	tc1.focus();
	tc2.focus();
	return false;
}
if(tc3.value==tc2.value )
{
	alert("2 Test Centres can't be Same");
	tc2.focus();
	tc3.focus();
	return false;
}
if(tc1.value==tc3.value )
{
	alert("2 Test Centres can't be Same");
	tc1.focus();
	tc3.focus();
	return false;
}
if(ti.value=="Default" )
{
	alert("Select Day or Night as your Exam Attempting Time");
	ti.focus();
	return false;
}
if(pas.value=="" || pas.value.length<6)
{
	alert("Fill the Password and Should be Greater than 5");
	pas.focus();
	return false;
}
if(cpas.value=="" || cpas.value.length<6)
{
	alert("Fill the Confim Password and Should be Greater than 5");
	cpas.focus();
	return false;
}
if(cpas.value!=pas.value)
{
	alert("Password and Confim Password are not same...Check!!!");
	pas.focus();
	cpas.focus();
	return false;
}
}