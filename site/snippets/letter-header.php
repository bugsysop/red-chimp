<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">

    <title><?= $page->parent()->letter_name()->h() ?></title>

    <style type="text/css">
    /* ------------ Reset */
    body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;}
    table{border-collapse:collapse;}
    img, a img{border:0; outline:none; text-decoration:none;}
    h1, h2, h3, h4, h5, h6{margin:0; padding:0;}
    p{margin: 1em 0;}
    /* ------------ General */
    body, #bodyTable{background-color:<?= $page->parent()->letter_bgcolor() ?>;}
    #bodyCell{padding-top:40px; padding-bottom:40px;}
    #emailBody{background-color:#ffffff;}
    h1, h2, h3, h4, h5, h6{color:#202020; font-family:<?= $page->parent()->letter_hfont() ?>; font-size:18px; line-height:110%; text-align:Left;}
    .imageContent, .imageContentLast{padding-bottom:20px;}
    .textContent, .textContentLast{font-family:<?= $page->parent()->letter_tfont() ?>; font-size:16px; line-height:125%; text-align:Left;}
    .textContent a, .textContentLast a{color:<?= $page->parent()->letter_lcolor() ?>; text-decoration:underline;}
    .flexibleContainerCell{padding-top:20px; padding-Right:20px; padding-Left:20px;}
    .flexibleImage{height:auto;}
    .buttonContent{color:#ffffff; font-family:Helvetica,sans-serif; font-size:18px; font-weight:bold; line-height:100%; padding:15px; text-align:center;}
    .buttonContent a{color:#ffffff; display:block; text-decoration:none;}
    /* ------------ Client Specific */
    .ReadMsgBody{width:100%;} .ExternalClass{width:100%;}
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */
    table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;}
    #outlook a{padding:0;}
    img{-ms-interpolation-mode: bicubic;}
    body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;}
    /* ------------ Media Queries */
    @media only screen and (max-width: 480px){
        body{width:100% !important; min-width:100% !important;}
        table[id="emailBody"], table[class="flexibleContainer"]{width:100% !important;}
        img[class="flexibleImage"]{height:auto !important; width:100% !important;}
        table[class="emailButton"]{width:100% !important;}
				td[class="buttonContent"]{padding:0 !important;}
				td[class="buttonContent"] a{padding:15px !important;}
        td[id="bodyCell"]{padding-top:10px !important; padding-Right:10px !important; padding-Left:10px !important;}
    }
    </style>
    <!-- Outlook Conditional CSS -->
    <!--[if mso 12]>
    <style type="text/css">
    .flexibleContainer{display:block !important; width:100% !important;}
    </style>
    <![endif]-->
    <!--[if mso 14]>
    <style type="text/css">
    .flexibleContainer{display:block !important; width:100% !important;}
    </style>
    <![endif]-->
</head>

<body style="background-color: <?= $page->parent()->letter_bgcolor() ?>;height: 100% !important;width: 100% !important;margin: 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <center>
    <!-- Email Body : BEGIN -->
    <table id="bodyTable" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="margin: 0;padding: 0;background-color: <?= $page->parent()->letter_bgcolor() ?>;height: 100% !important;width: 100% !important;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tr><td id="bodyCell" align="center" valign="top" style="margin: 0;padding: 0;padding-top: 40px;padding-bottom: 40px;height: 100% !important;width: 100% !important;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <!-- === -->
    <!-- === -->
        <table  id="emailBody" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 680px; background-color: #ffffff; border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
        <tr><td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

<?php snippet('builder/inc-letter-logo') ?>

        </td></tr>
        <tr><td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
        <!-- === -->
