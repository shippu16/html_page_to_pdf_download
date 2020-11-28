<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> Order confirmation </title>
	<meta name="robots" content="noindex,nofollow" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0;" />
	    <script src="pdf.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
	<!-- <script src="pdf.js"></script> -->
	<style type="text/css">
	    #download{
	    	background-color: #4EB776; 
	    	border-radius: 12px; 
	    	border: none;
		    color: white;  padding: 20px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin-top: 10px;
		    cursor: pointer;
		    margin-left: 780px;
	    }

	    .received_from{
	    	font-size: 12px;
	    	color: #5b5b5b; 
	    	font-family: 'Open Sans', sans-serif; 
	    	line-height: 18px; 
	    	vertical-align: top; 
	    	text-align: left;
	    }

	    .pay_receipt{
	    	font-size: 21px; 
	    	color: #080707; 
	    	letter-spacing: -1px; 
	    	font-family: 'Open Sans', sans-serif; 
	    	line-height: 1; 
	    	vertical-align: top; 
	    	text-align: right;
	    }

	    .receipt_no{
	    	font-size: 12px; 
	    	color: #5b5b5b; 
	    	font-family: 'Open Sans', sans-serif; 
	    	line-height: 18px; 
	    	vertical-align: top; 
	    	text-align: right;
	    }

	    .address{
	    	font-size: 12px; 
	    	color: #5b5b5b; 
	    	font-family: 'Open Sans', sans-serif; 
	    	line-height: 18px; 
	    	vertical-align: top; 
	    	text-align: right;
	    }

	    #info td, th {
  		border: 1px solid black;
  	}

	#info {
	  width: 100%;
	  border-collapse: collapse;
	}
	    }
	  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
	  body { margin: 0; padding: 0; background: #e1e1e1; }
	  div, p, a, li, td { -webkit-text-size-adjust: none; }
	  .ReadMsgBody { width: 100%; background-color: #ffffff; }
	  .ExternalClass { width: 100%; background-color: #ffffff; }
	  body { width: 100%; height: 100%; background-color: #e1e1e1; margin: 0; padding: 0; -webkit-font-smoothing: antialiased; }
	  html { width: 100%; }
	  p { padding: 0 !important; margin-top: 0 !important; margin-right: 0 !important; margin-bottom: 0 !important; margin-left: 0 !important; }
	  .visibleMobile { display: none; }
	  .hiddenMobile { display: block; }

	  @media only screen and (max-width: 600px) {
	  body { width: auto !important; }
	  table[class=fullTable] { width: 96% !important; clear: both; }
	  table[class=fullPadding] { width: 85% !important; clear: both; }
	  table[class=col] { width: 45% !important; }
	  .erase { display: none; }
	  }

	  @media only screen and (max-width: 420px) {
	  table[class=fullTable] { width: 100% !important; clear: both; }
	  table[class=fullPadding] { width: 85% !important; clear: both; }
	  table[class=col] { width: 100% !important; clear: both; }
	  table[class=col] td { text-align: left !important; }
	  .erase { display: none; font-size: 0; max-height: 0; line-height: 0; padding: 0; }
	  .visibleMobile { display: block !important; }
	  .hiddenMobile { display: none !important; }
	  }
	</style>
	</head>
<body>

<button type="button" id="download" onclick="download()">Download the Receipt</button>
<form id="receipt">
	<!-- <button type="submit" id="download">Download the Receipt</button> -->
	
		<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
		  <tr>
		    <td height="20"></td>
		  </tr>
		  <tr>
		    <td>
		      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
		        <tr class="hiddenMobile">
		          <td height="40"></td>
		        </tr>
		        <tr class="visibleMobile">
		          <td height="30"></td>
		        </tr>

		        <tr>
		          <td>
		            <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
		              <tbody>
		                <tr>
		                  <td>
		                    <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
		                      <tbody>
		                        <tr>
		                          <td align="left"> <img src="logo_gray.png" width="150" height="50" alt="logo" border="0" /></td>
		                        </tr>
		                        <tr class="hiddenMobile">
		                          <td height="40"></td>
		                        </tr>
		                        <tr class="visibleMobile">
		                          <td height="20"></td>
		                        </tr>
		                        <tr>
		                          <td class="received_from">
		                          	<br><br><br>
		                           <h3>Date: 27-11-2020</h3>
		                           Received From:  Dehemel.
		                          </td>
		                        </tr>

		                      </tbody>

		                    </table>
		                    <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
		                      <tbody>
		                        <tr class="visibleMobile">
		                          <td height="20"></td>
		                        </tr>
		                        <tr>
		                          <td height="5"></td>
		                        </tr>
		                        <tr>
		                          <td class="address" style="">
		                           PAN No. #800000025<br />
		                            GSTIN: 24AAQFD0349B1ZT, State: 07-Delhi
		                            Phone no. 9898442989; <br>
		                            Email: services.dehemel@gmail.com
		                            Office Address: D-34,Sumel6, Nr Hanumanpura Brts,  Ahemdabad. <br>Pincode- 38004, Gujrat. <br>
		                          </td>

		                        </tr>
		                        <tr>
		                        <tr class="hiddenMobile">
		                          <td height="50"></td>
		                        </tr>
		                        <tr class="visibleMobile">
		                          <td height="20"></td>
		                        </tr>
		                        <tr>
		                          <td class="receipt_no" style="">
		                            <small>RECEIPT NO.</small> #800000025<br />
		                            <small>MARCH 4TH 2020</small>
		                          </td>
		                        </tr>

		                      </tbody>

		                    </table>

		                  </td>

		                </tr>

		              </tbody>
		            </table>
		          </td>

		        </tr>
		      </table>
		    </td>
		  </tr>

		</table>
		<!-- /Header -->
		<!-- Order Details -->

		<!-- /Information -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">

		  <tr>
		    <td>
		      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 0 0 10px 10px;">
		        <tr>
		          <td>
		          	<br>
		          	<div class="" style="width: 80%; color: #5b5b5b;  margin: 0 auto;">
		          		<table id="info">
						  <tr>
						    <th>Sr No</th>
						    <th>Trans Id</th>
						    <th>Item</th>
						    <th>MRP</th>
						    <th>Commission</th>
						  </tr>
						  <tr>
						    <td>1</td><td></td><td></td><td></td><td></td>
						  </tr>
						  <tr>
						   <td>2</td><td></td><td></td><td></td><td></td>
						  </tr>
						  <tr>
						   <td colspan="4">Total-</td><td>Rs ./</td>
						  </tr>
						</table>
						<h6> Authorized Sign.</h6><hr>
		          	</div>
		          </td>
		        </tr>
		        <tr class="spacer">
		          <td height="50"></td>
		        </tr>

		      </table>
		    </td>
		  </tr>
		  <tr>
		    <td height="20"></td>
		  </tr>
		</table>
</form>
</body>
</html>

<!-- Header -->

<script type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<script type="text/javascript">
  function download() {

  var doc = new jsPDF()
  var h1 = document.querySelector('#receipt')
  console.log(h1)
  //doc.fromHTML(h1,15,15)
  var opt = {
                margin: 1,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };

            html2pdf().from(receipt).set(opt).save();
}

</script>