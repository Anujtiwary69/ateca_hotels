monetate.c.cr({"data": "function mtGC(cname) {\n    var name = cname + \"=\";\n    var decodedCookie = decodeURIComponent(document.cookie);\n    var ca = decodedCookie.split(';');\n    for (var i = 0; i < ca.length; i++) {\n        var c = ca[i];\n        while (c.charAt(0) == ' ') {\n            c = c.substring(1);\n        }\n        if (c.indexOf(name) == 0) {\n            return c.substring(name.length, c.length);\n        }\n    }\n    return \"\";\n}\nfunction mtGCV(cname) {\n    var x = mtGC(cname).split(\"|\");\n    var i;\n    for (i = 0; i < x.length; i++) {\n        if (x[i] === \"MCMID\") {\n            return x[i + 1];\n        }\n    }\n    return \"\";\n}\nfunction mtCCcontentUpdate(){\n  var mtCCaltID = dataLayer.mr_id_alternate || \"\";\n  var mtCCmcvID = mtGCV('AMCV_664516D751E565010A490D4C@AdobeOrg') || \"\";\n  var mtCCeVar48 = \"CCOFFER-UAE-MC-hp4Pack-MVPA-mvp75k\";\n  var mtCCcallToAction = \"LEARN MORE\";\n  var mtCCcallToActionURL = \"https://www.emiratesnbd.com/en/cards/credit-cards/marriott-bonvoy-credit-card/?utm_source=Partnership&utm_medium=Referral&utm_term=Marriott_homepage-4-pack-20.11.19&utm_content=Marriott_Bonvoy_CreditCard&utm_campaign=Partnership\" + \"&alt_cust_id=\" + mtCCaltID + \"&cookie_id=\" + mtCCmcvID + \"&mcd=\" + mtCCeVar48;\n  var mtCCcopyBlock1 = \"Earn up to 150,000 points\";\n  var mtCCcopyBlock2 = \"\";\n  var mtCCcopyBlock3 = \"\";\n  var mtCCimageAltTag = \"ATECA Hotels\u2122 World Mastercard\u00ae from Emirates NBD\";\n  var mtCCimageURL = \"//cache.marriott.com/marriottassets/credit-card/MBV-Mastercard-ENBD-660x372.jpg\";\n  document.querySelectorAll('a.mtCC-img-wrapper')[0].href = mtCCcallToActionURL;\n  document.querySelectorAll('a.mtCC-img-wrapper picture source[media*=\"48.1rem\"]')[0].srcset = \"https:\" + mtCCimageURL + \"?interpolation=progressive-bilinear&downsize=590:*\";\n  document.querySelectorAll('a.mtCC-img-wrapper picture source[media*=\"37.56rem\"]')[0].srcset = \"https:\" + mtCCimageURL + \"?interpolation=progressive-bilinear&downsize=660:*\";\n  document.querySelectorAll('a.mtCC-img-wrapper picture img')[0].src = mtCCimageURL + \"?interpolation=progressive-bilinear&downsize=375:*\";\n  document.querySelectorAll('a.mtCC-img-wrapper picture img')[0].alt = mtCCimageAltTag;\n  document.querySelectorAll('div.mtCC-title-desc p')[0].textContent = mtCCcopyBlock1;\n  document.querySelectorAll('div.mtCC-cta a')[0].href = mtCCcallToActionURL;\n  document.querySelectorAll('div.mtCC-cta a .mtCC-cta-span')[0].textContent = mtCCcallToAction;\n  // Cobrand Impression Tracking\n  impressionTrack(\"event168|event270|evar48=\" + mtCCeVar48);\n  // Cobrand Click Tracking\n  var mtLink1 = document.querySelectorAll('a.mtCC-img-wrapper')[0];\n  var mtLink2 = document.querySelectorAll('a[custom_click_track_value*=\"xxxxxxm rpcCode offerCode mmyy Text Link\"]')[0];\n  mtLink1.setAttribute(\"custom_click_track_value\",\"4PackTile1|\" + mtCCeVar48.split(\"-\")[4] + mtCCeVar48.split(\"-\")[5] + \"|external\" + \"|event167,event271,evar48=\" + mtCCeVar48);\n  mtLink2.setAttribute(\"custom_click_track_value\",\"4PackTile1|\" + mtCCeVar48.split(\"-\")[4] + mtCCeVar48.split(\"-\")[5] + \"|external\" + \"|event167,event271,evar48=\" + mtCCeVar48);\n}\nmtCCcontentUpdate();", "ref": "611/2573399.js"});
