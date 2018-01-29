{"version":3,"file":"script.min.js","sources":["script.js"],"names":["window","repo","fileObj","d","uri","BX","type","isNotEmptyString","this","id","url","name","substr","lastIndexOf","indexOf","ext","toLowerCase","ii","hasOwnProperty","prototype","getErrorText","text","message","diskController","manager","params","location","protocol","host","urlUpload","values","propertyName","catchUF","delegate","parseUF","prepareToSaveUF","prefixHTMLNode","userTypeId","uploadBase64","options","FileUploadOptions","ft","FileTransfer","good","proxy","response","parseJSON","bad","uploadBase64Response","uploadBase64Failure","fileKey","fileName","sessid","bitrix_sessid","mimeType","chunkedMode","upload","app","BasicAuth","success","auth_data","sessid_md5","failure","onCustomEvent","status","isArray","length","data","iconUrl","util","in_array","extension","previewImageUrl","fileId","xmlID","fieldName","fieldValue","UF","files","extraData","getId","tempId","Math","random","node","getAttribute","undefined","push","file","parseInt","replace","attachments","queue","f","add","pop","f0","fileD","removeCustomEvent","f1","addCustomEvent","uploadQueue","controller","__queueId","__onUploadOk","start","__onUploadError","error","files1","clear","q","res","hasSmthToUpload","simpleForm","handler","getRandomString","placeholder","onEvent","handleAppCallback","onSend","handleAppData","repeat","isPlainObject","attachedFiles","comment","stopCheckWriting","handleAppFile","__this","BXMobileApp","UI","Page","TextPanel","getText","txt","e","writingParams","lastEvent","startCheckWriting","init","MobileUI","TextField","show","isString","setText","focus","BXMPage","lastFired","frequency","~text","time","Date","showWait","showLoading","closeWait","extendedForm","formSettings","attachButton","items","initFiles","attachFileSettings","resize","sendLocalFileMethod","saveToPhotoAlbum","mentionButton","dataSource","return_full_mode","outsection","okname","cancelname","multiple","alphabet_index","smileButton","okButton","callback","applyExtendedForm","cancelButton","cancelExtendedForm","controllers","cid","buttons","button","searchField","showtitle","modal","exec","MPF","enableInVersion","errors","destroy","form","hide","document","body","appendChild","elements","create","props","value","block","className","currentForm","initEvents","initControllers","error00","error01","submitExtended","writing","bound","remove","setForm","extended","edit","submitBase64","base64","result","filesToPost","submit","cancel","jj","callBack","getForm","ajax","prepareForm","createInstance","getInstance"],"mappings":"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"}